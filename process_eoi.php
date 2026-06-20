<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ref'], $_POST['fname'], $_POST['lname'], $_POST['email'])) {
    header('Location: apply.php');
    exit();
}

include 'settings.php';



$createTable = "CREATE TABLE IF NOT EXISTS eoi (
    EOInumber INT AUTO_INCREMENT PRIMARY KEY,
    ref_number VARCHAR(5) NOT NULL,
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(20) NOT NULL,
    bday DATE NOT NULL,
    gender ENUM('male','female','other') NOT NULL,
    street VARCHAR(40) NOT NULL,
    town VARCHAR(40) NOT NULL,
    state ENUM('VIC','NSW','QLD','NT','WA','SA','TAS','ACT') NOT NULL,
    postcode CHAR(4) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(12) NOT NULL,
    skills VARCHAR(255),
    otherskills TEXT,
    status ENUM('New','Current','Final') NOT NULL DEFAULT 'New'
)";
mysqli_query($conn, $createTable);


function cleanInput($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}


$ref         = cleanInput($_POST['ref'] ?? '');
$fname       = cleanInput($_POST['fname'] ?? '');
$lname       = cleanInput($_POST['lname'] ?? '');
$bday_raw    = cleanInput($_POST['bday'] ?? '');
$gender      = cleanInput($_POST['gender'] ?? '');
$street      = cleanInput($_POST['street'] ?? '');
$town        = cleanInput($_POST['town'] ?? '');
$state       = cleanInput($_POST['state'] ?? '');
$post        = cleanInput($_POST['post'] ?? '');
$email       = cleanInput($_POST['email'] ?? '');
$phone       = cleanInput($_POST['phone'] ?? '');
$skillsArr   = $_POST['skills'] ?? [];
$skills      = implode(',', array_map('cleanInput', $skillsArr));
$otherskills = cleanInput($_POST['otherskills'] ?? '');


$errors = [];
$validRefs = ['CS202', 'PT206', 'DF296'];
if (!in_array($ref, $validRefs)) {
    $errors[] = 'Job Reference Number is not valid.';
}

if (!preg_match('/^[A-Za-z0-9]{5}$/', $ref)) {
    $errors[] = 'Job Reference Number must be exactly 5 letters/numbers.';
}
if (!preg_match('/^[A-Za-z]{1,20}$/', $fname)) {
    $errors[] = 'First name must contain only letters (max 20).';
}
if (!preg_match('/^[A-Za-z]{1,20}$/', $lname)) {
    $errors[] = 'Last name must contain only letters (max 20).';
}
if (!preg_match('/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/', $bday_raw)) {
    $errors[] = 'Date of birth must be in dd/mm/yyyy format.';
} else {
    $dob = DateTime::createFromFormat('d/m/Y', $bday_raw);
    $age = (new DateTime())->diff($dob)->y;
    if ($age < 18 || $age > 60) {
        $errors[] = 'Applicants must be between 18 and 60 years old to apply.';
    }
}

if (!in_array($gender, ['male', 'female', 'other'])) {
    $errors[] = 'Please select a valid gender.';
}
if ($street === '' || strlen($street) > 40) {
    $errors[] = 'Street address is required (max 40 characters).';
}
if ($town === '' || strlen($town) > 40) {
    $errors[] = 'Suburb/Town is required (max 40 characters).';
}
if (!in_array($state, ['VIC','NSW','QLD','NT','WA','SA','TAS','ACT'])) {
    $errors[] = 'Please select a valid state.';
}
if (!preg_match('/^[0-9]{4}$/', $post)) {
    $errors[] = 'Postcode must be exactly 4 digits.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}
if (!preg_match('/^[0-9]{8,12}$/', $phone)) {
    $errors[] = 'Phone number must be 8-12 digits.';
}
if ($otherskills !== '' && strlen($otherskills) < 10) {
    $errors[] = 'Other skills must be at least 10 characters if provided.';
}
if (empty($skillsArr)) {
    $errors[] = 'Please select at least one skill.';
}

if (!empty($errors)) {
    echo '<h2>There were problems with your submission:</h2><ul>';
    foreach ($errors as $error) {
        echo '<li>' . $error . '</li>';
    }
    echo '</ul><p><a href="apply.php">Go back and try again</a></p>';
    exit();
}


$dateParts = explode('/', $bday_raw);
$bday = $dateParts[2] . '-' . $dateParts[1] . '-' . $dateParts[0];

$sql = "INSERT INTO eoi (ref_number, fname, lname, bday, gender, street, town, state, postcode, email, phone, skills, otherskills)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'sssssssssssss', $ref, $fname, $lname, $bday, $gender, $street, $town, $state, $post, $email, $phone, $skills, $otherskills);

if (mysqli_stmt_execute($stmt)) {
    $eoiNumber = mysqli_insert_id($conn);
    echo '<h2>Thank you for your Expression of Interest!</h2>';
    echo '<p>Your application has been received. Your EOI number is: <strong>' . $eoiNumber . '</strong></p>';
} else {
    echo '<p>Something went wrong while saving your application: ' . mysqli_error($conn) . '</p>';
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>