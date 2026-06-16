
<?php
$page = "";
session_start();
require_once("settings.php");

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $conn = mysqli_connect($host,$user,$pwd,$sql_db);

    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = ?";

    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password,$row["password"]))
        {
            session_regenerate_id(true);

            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["username"] = $row["username"];

            header("Location: manage.php");
            exit();
        }
    }

    $error = "Invalid username or password.";
}
?>

<?php


include("header.inc");
include("nav.inc");
?>
<main>

<section class="login">
    

    <h1>HR Manager Login</h1>
    <?php echo "<p style='color: red;'>$error</p>";?>

    <form action="login.php" method="post">

        <div class="login-group">
            <label for="username">Username</label>
            <input type="text"
                   id="username"
                   name="username">
        </div>

        <div class="login-group">
            <label for="password">Password</label>
            <input type="password"
                   id="password"
                   name="password">
        </div>

        <button type="submit">Login</button>

    </form>

</section>

</main>

<?php include("footer.inc"); ?>