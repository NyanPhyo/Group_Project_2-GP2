<?php 
$page = 'apply';
include 'header.inc';
include 'nav.inc'; 
?> 
     
    <!--main contain main contents of the web page-->
    <main class="apply_page">
        <h1>Apply to join our family today</h1>
        
        <form action="https://mercury.swin.edu.au/it000000/formtest.php" method="post">
            <h2>Job Application  Form</h2>
            <p>
                <label for="ref">Job Reference Number</label>
                <input type="text" name="ref" id="ref" required pattern="[A-Za-z0-9]{5}" placeholder="Eg.A1B2C">
            </p>

            <!--personal info contain name and birthday-->
            <fieldset class="personal_info">
                <legend>Personal Information</legend>
                <p>   
                    <label for="fname" >First Name</label>
                    <input type="text" id="fname" name="fname" required pattern="[A-Za-z]{1,20}" maxlength="20"  placeholder="Eg.Henry">
                </p>
                <p>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" required pattern="[A-Za-z]{1,20}" maxlength="20" placeholder="Eg.Htoo">
                </p>
         
               
                <p>
                    <label for="bday">Date of Birth</label>
                    <input type="text" id="bday" name="bday" required placeholder="dd/mm/yyyy" pattern="(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/\d{4}">
                </p>
                <p class="radio">
                    <span>Gender</span>
                    <label><input type="radio" name="gender" value="male" required> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                    <label><input type="radio" name="gender" value="other"> Other</label>
                </p>
            </fieldset>

            <!--address contain street, town, state,and postalcode-->
            <fieldset class="address">
                <legend>Address</legend>
                <p>
                    <label for="street">Street Address</label>
                    <input type="text" name="street" id="street" maxlength="40" required>
                </p>
                <p>
                    <label for="town">Suburb/Town</label>
                    <input type="text" name="town" id="town" maxlength="40" required>
                </p>
                <p class="selection">
                    <label for="state">State:</label>
                    <select id="state" name="state" required>
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
                    <input type="text" name="post" id="post" required pattern="[0-9]{4}"> 
                </p>
                
                
            </fieldset>

            <!--contact details contain email and phone number-->
            <fieldset class="contact">
                <legend>Contact Details</legend>
                <p>
                    <label for="email">Email Aderess:  </label>
                    <input type="email" name="email" id="email" placeholder="WaiPhyo@gmail.com" required>
                </p>
                <p>
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" id="phone" required pattern="[0-9]{8,12}" placeholder="01xxxxxxxxxx"> 
                </p>
            </fieldset>
            
            <!--skills contain programming skills set and a text area for other skills -->
            <fieldset class="skills">
                <legend>Technical Skills</legend>
                <p>Select Your Relevant Skills</p>
                <p>
                    <label><input type="checkbox" name="skills[]" value="networking" checked>Networking</label>
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
                    <textarea name="otherskills" id="otherskills" rows="4" minlength="10" placeholder="Pleas enter additional skills"></textarea>
                </p>
                
            </fieldset>
            <p>
                <button type="submit" class="btn">Submit Application</button>
            </p>
        </form>
    </main>

<?php include 'footer.inc'; ?>



