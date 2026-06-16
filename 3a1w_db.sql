CREATE DATABASE IF NOT EXISTS 3a1w_db;
USE 3a1w_db;
-- Database name : '3a1w_db'

-- job table here
CREATE TABLE jobs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  reference_number VARCHAR(20) NOT NULL,
  title VARCHAR(100) NOT NULL,
  company VARCHAR(100) NOT NULL,
  location VARCHAR(100) NOT NULL,
  salary VARCHAR(100) NOT NULL,
  short_description VARCHAR(255) NOT NULL,
  summary TEXT NOT NULL,
  reporting_line VARCHAR(100) NOT NULL,
  responsibilities TEXT NOT NULL,
  essential_requirements TEXT NOT NULL,
  preferable_requirements TEXT NOT NULL
);

INSERT INTO jobs (
  reference_number,
  title,
  company,
  location,
  salary,
  short_description,
  summary,
  reporting_line,
  responsibilities,
  essential_requirements,
  preferable_requirements
) VALUES
(
  'CS202',
  'Cybersecurity Analyst',
  '3A1W',
  'Subang Jaya',
  'RM4,000–RM8,500/month',
  'SOC monitoring, threat detection, incident response',
  'Monitor systems, detect threats, and respond to cybersecurity incidents across enterprise environments.',
  'SOC Manager',
  'Monitor security alerts using SIEM tools.
Investigate incidents and respond to threats.
Perform vulnerability assessments and reporting.',
  '0–3 years experience in cybersecurity or IT support.
Basic knowledge of networking, firewalls, and security concepts.
Familiarity with tools like SIEM, IDS/IPS, or antivirus systems.',
  'Certifications (Security+, CEH, or similar).
Experience with Linux and scripting basics.
Understanding of common attack vectors (phishing, malware).'
),
(
  'PT206',
  'Penetration Tester',
  '3A1W',
  'Subang Jaya',
  'RM3,000–RM9,000/month',
  'Vulnerability testing, ethical hacking, security audits',
  'Identify vulnerabilities through ethical hacking and simulate real-world cyber attacks.',
  'Security Lead',
  'Perform web, network, and application penetration testing.
Identify vulnerabilities and provide remediation advice.
Prepare detailed security assessment reports.',
  'Knowledge of networking, OS, and security fundamentals.
Experience with tools like Burp Suite, Metasploit, or Nmap.
Understanding of OWASP Top 10 vulnerabilities.',
  'Certifications (CEH, OSCP, or eJPT).
Experience with scripting (Python, Bash).
Bug bounty or CTF participation.'
),
(
  'DF296',
  'Digital Forensic Analyst',
  '3A1W',
  'Subang Jaya',
  'RM3,000–RM8,000/month',
  'Digital evidence analysis, incident investigation',
  'Investigate cyber incidents and recover digital evidence for legal and security purposes.',
  'Forensic Manager',
  'Analyze digital devices for forensic evidence.
Recover deleted or hidden data from systems.
Prepare reports for legal or internal investigations.',
  'Knowledge of operating systems and file systems.
Understanding of digital evidence handling procedures.
Attention to detail and analytical thinking.',
  'Experience with forensic tools (EnCase, FTK).
Certifications (CHFI, GCFA).
Basic knowledge of cybersecurity and incident response.'
);





-- eoi table here
CREATE TABLE eoi (
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
);

INSERT INTO eoi (ref_number, fname, lname, bday, gender, street, town, state, postcode, email, phone, skills, otherskills)
VALUES 
('A1B2C', 'Henry', 'Htoo', '1998-05-21', 'male', '12 Wattle Street', 'Hawthorn', 'VIC', '3122', 'henry.htoo@gmail.com', '0412345678', 'networking,python,linux', 'Familiar with Cisco Packet Tracer'),
('X9Y8Z', 'Sarah', 'Tan', '2001-11-03', 'female', '45 Burwood Road', 'Camberwell', 'VIC', '3124', 'sarah.tan@gmail.com', '0498765432', 'cybersecurity,devops,cloud', 'Completed CompTIA Security+ certification');


-- member contribution table here



-- user table 
-- password is hashed "Admin"
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users(username,password)
VALUES
('Nyan Phyo Aung', '$2y$10$gUixbP4lMtWuSuUXdt6XiOJSPuT3X61BolUN3I78BOprXe4Lygzli'),
('Htoo Aung Than Htaik', '$2y$10$gUixbP4lMtWuSuUXdt6XiOJSPuT3X61BolUN3I78BOprXe4Lygzli'),
('Aung Khant Zaw', '$2y$10$gUixbP4lMtWuSuUXdt6XiOJSPuT3X61BolUN3I78BOprXe4Lygzli');