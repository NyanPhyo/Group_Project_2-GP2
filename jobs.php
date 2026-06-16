<?php 
session_start();
$page = 'jobs';
include 'header.inc';
include 'nav.inc'; 
require_once 'settings.php';
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
  die("Database connection failed: " . mysqli_connect_error());
}
?>
    
  <!-- main contain contents of the page -->
  <main>
    <div class="jobs">

      <!--inputs to pair with respective job details-->
      <input type="radio" name="job" id="null" checked>
      <input type="radio" name="job" id="job1">
      <input type="radio" name="job" id="job2">
      <input type="radio" name="job" id="job3">

      <aside class="sidebar">
        <h2>Job Openings</h2>

        <!-- The data is based on Payscale and Jobstreet Malaysia -->
        <label for="job1" class="job-card">
          <h3>Cybersecurity Analyst</h3>
          <p class="company">3A1W • Subang Jaya</p>
          <p class="salary">RM4,000–RM8,500/month</p>
          <p class="desc">SOC monitoring, threat detection, incident response</p>
        </label>

        <label for="job2" class="job-card">
          <h3>Penetration Tester</h3>
          <p class="company">3A1W • Subang Jaya</p>
          <p class="salary">RM3,000–RM9,000/month</p>
          <p class="desc">Vulnerability testing, ethical hacking, security audits</p>
        </label>

        <label for="job3" class="job-card">
          <h3>Digital Forensic Analyst</h3>
          <p class="company">3A1W • Subang Jaya</p>
          <p class="salary">RM3,000–RM8,000/month</p>
          <p class="desc">Digital evidence analysis, incident investigation</p>
        </label>

      </aside>
      
      <!-- This shows viewers detailed information of each job -->
      <!-- I just made up those data but it is based on Payscale and Jobstreet Malaysia -->
      <div class="details">
        <!-- This is about job opening 1 -->
        <article class="content dummy">
          <h2>Choose one of the jobs</h2>
          <p id="dummy-text">Please Choose one of the jobs from left side to check the details. It wiil show you job details including key responsibilities, Essential requirements and preferable requirements.</p>
        </article>

        <article class="content d1">
          <label class="backarrow" for="null"><i class="fa-solid fa-arrow-left"></i></label>
          <header>
            <p class="ref"><strong>Reference Number:</strong> CS202</p>
            <h1>Cybersecurity Analyst</h1>
            <p class="summary">Monitor systems, detect threats, and respond to cybersecurity incidents across enterprise environments.</p>
            <p><strong>Salary:</strong> RM4,000–RM8,500/month</p>
            <p><strong>Reporting Line:</strong> SOC Manager</p>
          </header>

          <section>
            <h2>Key Responsibilities</h2>
            <ol>
              <li>Monitor security alerts using SIEM tools.</li>
              <li>Investigate incidents and respond to threats.</li>
              <li>Perform vulnerability assessments and reporting.</li>
            </ol>
          </section>

          <section>
            <h2>Essential Requirements</h2>
            <ul>
              <li>0–3 years experience in cybersecurity or IT support.</li>
              <li>Basic knowledge of networking, firewalls, and security concepts.</li>
              <li>Familiarity with tools like SIEM, IDS/IPS, or antivirus systems.</li>
            </ul>
          </section>

          <section>
            <h2>Preferable Requirements</h2>
            <ul>
              <li>Certifications (Security+, CEH, or similar).</li>
              <li>Experience with Linux and scripting basics.</li>
              <li>Understanding of common attack vectors (phishing, malware).</li>
            </ul>
          </section>
          
          <a href="./apply.php" class="btn">Apply Now</a>
        </article>

        <!-- This is about job opening 2 -->
        <article class="content d2"> 
          <label class="backarrow" for="null"><i class="fa-solid fa-arrow-left"></i></label>
          <div class="inner">
            <header>
              <p class="ref"><strong>Reference Number:</strong> PT206</p>
              <h1>Penetration Tester</h1>
              <p class="summary">Identify vulnerabilities through ethical hacking and simulate real-world cyber attacks.</p>
              <p><strong>Salary:</strong> RM3,000–RM9,000/month</p>
              <p><strong>Reporting Line:</strong> Security Lead</p>
            </header>

            <section>
              <h2>Key Responsibilities</h2>
              <ol>
                <li>Perform web, network, and application penetration testing.</li>
                <li>Identify vulnerabilities and provide remediation advice.</li>
                <li>Prepare detailed security assessment reports.</li>
              </ol>
            </section>

            <section>
              <h2>Essential Requirements</h2>
              <ul>
                <li>Knowledge of networking, OS, and security fundamentals.</li>
                <li>Experience with tools like Burp Suite, Metasploit, or Nmap.</li>
                <li>Understanding of OWASP Top 10 vulnerabilities.</li>
              </ul>
            </section>

            <section>
              <h2>Preferable Requirements</h2>
              <ul>
                <li>Certifications (CEH, OSCP, or eJPT).</li>
                <li>Experience with scripting (Python, Bash).</li>
                <li>Bug bounty or CTF participation.</li>
              </ul>
            </section>
          </div>
          
          <a href="./apply.php" class="btn">Apply Now</a>
        </article>

        <!-- This is about job opening 3 -->
        <article class="content d3">
          <label class="backarrow" for="null"><i class="fa-solid fa-arrow-left"></i></label> 
          <div class="inner">
            <header>
              <p class="ref"><strong>Reference Number:</strong> DF296</p>
              <h1>Digital Forensic Analyst</h1>
              <p class="summary">Investigate cyber incidents and recover digital evidence for legal and security purposes.</p>
              <p><strong>Salary:</strong> RM3,000–RM8,000/month</p>
              <p><strong>Reporting Line:</strong> Forensic Manager</p>
            </header>

            <section>
              <h2>Key Responsibilities</h2>
              <ol>
                <li>Analyze digital devices for forensic evidence.</li>
                <li>Recover deleted or hidden data from systems.</li>
                <li>Prepare reports for legal or internal investigations.</li>
              </ol>
            </section>

            <section>
              <h2>Essential Requirements</h2>
              <ul>
                <li>Knowledge of operating systems and file systems.</li>
                <li>Understanding of digital evidence handling procedures.</li>
                <li>Attention to detail and analytical thinking.</li>
              </ul>
            </section>

            <section>
              <h2>Preferable Requirements</h2>
              <ul>
                <li>Experience with forensic tools (EnCase, FTK).</li>
                <li>Certifications (CHFI, GCFA).</li>
                <li>Basic knowledge of cybersecurity and incident response.</li>
              </ul>
            </section>
          </div>
          
          <a href="./apply.php" class="btn">Apply Now</a>
        </article>

      </div>
    </div>
  </main>
  
<?php include 'footer.inc'; ?>


