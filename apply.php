<?php 
session_start();
$page = 'apply';
include 'settings.php';
include 'header.inc';
include 'nav.inc'; 
$conn = mysqli_connect($host,$user,$pwd,$sql_db);
$prefillRef = '';

if (isset($_GET['job_id']) && ctype_digit($_GET['job_id'])) {
    $jobId = (int) $_GET['job_id'];
    $stmt = mysqli_prepare($conn, "SELECT reference_number FROM jobs WHERE id = ?");
    mysqli_stmt_bind_param($stmt, 'i', $jobId);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($res)) {
        $prefillRef = $row['reference_number'];
    }
    mysqli_stmt_close($stmt);
}
?> 
     
    <main class="apply_page">
        <h1>Apply to join our family today</h1>
        
        <form action="process_eoi.php" method="post">
            <h2>Job Application  Form</h2>
            <p>
                <label for="ref">Job Reference Number</label>
                <input type="text" name="ref" id="ref" placeholder="Eg.CS202"
                       value="<?php echo htmlspecialchars($prefillRef, ENT_QUOTES, 'UTF-8'); ?>">
            </p>

            <fieldset class="personal_info">
                <legend>Personal Information</legend>
                <p>   
                    <label for="fname" >First Name</label>
                    <input type="text" id="fname" name="fname" maxlength="20"  placeholder="Eg.Henry">
                </p>
                <p>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" maxlength="20" placeholder="Eg.Htoo">
                </p>
         
                <p>
                    <label for="bday">Date of Birth</label>
                    <input type="text" id="bday" name="bday" placeholder="dd/mm/yyyy">
                </p>
                <p class="radio">
                    <span>Gender</span>
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                    <label><input type="radio" name="gender" value="other"> Other</label>
                </p>
            </fieldset>

            <fieldset class="address">
                <legend>Address</legend>
                <p>
                    <label for="street">Street Address</label>
                    <input type="text" name="street" id="street" maxlength="40">
                </p>
                <p>
                    <label for="town">Suburb/Town</label>
                    <input type="text" name="town" id="town" maxlength="40">
                </p>
                <p class="selection">
                    <label for="state">State:</label>
                    <select id="state" name="state">
                    <option value="">Select</option>
                    <option value="VIC">VIC</option>
                    <option value="NSW">NSW</option>
                    <option value="QLD">QLD</option>
                    <option value="NT">NT</option>
                    <option value="WA">WA</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="ACT">ACT</option>
                    </select>
                </p>
                <p>
                    <label for="post">Postal Code</label>
                    <input type="text" name="post" id="post"> 
                </p>
            </fieldset>

            <fieldset class="contact">
                <legend>Contact Details</legend>
                <p>
                    <label for="email">Email Aderess:  </label>
                    <input type="text" name="email" id="email" placeholder="WaiPhyo@gmail.com">
                </p>
                <p>
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" id="phone" placeholder="01xxxxxxxxxx"> 
                </p>
            </fieldset>
            
            <fieldset class="skills">
                <legend>Technical Skills</legend>
                <p>Select Your Relevant Skills</p>
                <p>
                    <label><input type="checkbox" name="skills[]" value="networking" >Networking</label>
                    <label><input type="checkbox" name="skills[]" value="cybersecurity">Cybersecurity</label>
                    <label><input type="checkbox" name="skills[]" value="python">Python</label>
                    <label><input type="checkbox" name="skills[]" value="pen_testing">Penetration Testing</label>
                    <label><input type="checkbox" name="skills[]" value="devops">DevOps</label>
                    <label><input type="checkbox" name="skills[]" value="linux">Linux</label>
                    <label><input type="checkbox" name="skills[]" value="cloud">Cloud</label>
                    <label for="others"><input type="checkbox" id="others" name="skills[]" value="others">Other Skills..</label>
                </p>
                
                <p class="textarea">
                    <label for="otherskills">Please Specify</label>
                    <textarea name="otherskills" id="otherskills" rows="4" placeholder="Pleas enter additional skills"></textarea>
                </p>
                
            </fieldset>
            <p>
                <button type="submit" class="btn">Submit Application</button>
            </p>
        </form>
    </main>

<?php include 'footer.inc'; ?>