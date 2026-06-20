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
('Aung Khant Zaw', '$2y$10$gUixbP4lMtWuSuUXdt6XiOJSPuT3X61BolUN3I78BOprXe4Lygzli'),
('Wai Phyo Htet', '$2y$10$gUixbP4lMtWuSuUXdt6XiOJSPuT3X61BolUN3I78BOprXe4Lygzli');

-- member profile table here
CREATE TABLE member_profiles (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(255) NOT NULL,
    individual_task TEXT NOT NULL,
    shared_task TEXT NOT NULL,
    personal_quote TEXT NOT NULL,
    favourite_language VARCHAR(100) NOT NULL,
    nickname VARCHAR(100) NOT NULL,
    first_language VARCHAR(100) NOT NULL,
    first_language_desc TEXT NOT NULL
);

-- insert members
INSERT INTO member_profiles
(name, image, individual_task, shared_task, personal_quote,
 favourite_language, nickname, first_language, first_language_desc)
VALUES

(
'Nyan Phyo Aung',
'resources/images/NPA.jpeg',
'CSS — Responsible for all stylesheet design, visual layout, typography, colour themes, and responsive behaviour across the entire website.',
'Home Page — Co-developed the landing page structure, hero section, and introductory content with Wai Phyo Htet.',
'Good CSS is invisible — you only notice it when it''s missing.',
'Chinese',
'CSS爱好者',
'HTML',
'HTML was the first language I ever learned.'
),

(
'Wai Phyo Htet',
'resources/images/WPH.jpeg',
'Job Description Page — Designed and built the page listing all available roles.',
'Home Page — Co-developed the landing page navigation and company overview section.',
'A clear job description is the first line of code in building a great team.',
'Burmese',
'ပိုင်သွန်ချစ်သူ',
'Python',
'Python was the first language I coded in.'
),

(
'Aung Khant Zaw',
'resources/images/AKZ.jpeg',
'Job Application Page — Built the interactive application form.',
'Jira Management — Handles implementation and documentation.',
'Organised tasks lead to organised code — Jira keeps us honest.',
'Burmese',
'ကြေကွဲလူငယ်',
'JavaScript',
'JavaScript is the language that made me fall in love with web development.'
),

(
'Htoo Aung',
'resources/images/HA.jpeg',
'About Page — Authored and structured the complete About page.',
'Jira Management — Creating Jira project, epics and sprints.',
'A great About page tells a story — not just a list of names.',
'Japanese',
'五条',
'C++',
'C++ is the language that taught me the solid fundamentals of programming.'
);


-- team fun facts table
CREATE TABLE team_fun_facts (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    member_name VARCHAR(100) NOT NULL,
    dream_job VARCHAR(255),
    coding_snack VARCHAR(255),
    hometown VARCHAR(255),
    spirit_animal VARCHAR(255),
    hidden_talent VARCHAR(255),
    sleep_hours VARCHAR(100)
);

-- insert data to fun facts data
INSERT INTO team_fun_facts
(member_name, dream_job, coding_snack, hometown,
 spirit_animal, hidden_talent, sleep_hours)
VALUES

('Nyan Phyo Aung',
'UX/UI Designer at a top tech firm',
'Prawn crackers & green tea',
'Khayan, Myanmar',
'Owl (detail-oriented, night owl)',
'Sketching character illustrations',
'5 hours (5 energy drinks)'),

('Wai Phyo Htet',
'HR Tech Lead at a global company',
'Instant noodles (at midnight)',
'Mandalay, Myanmar',
'Bee (organised, hard-working)',
'Playing acoustic guitar',
'6 hours (2 energy drinks)'),

('Aung Khant Zaw',
'Product Manager at a startup',
'Banana chips & iced coffee',
'Hinthada, Myanmar',
'Ant (team player, planner)',
'Speed-solving Rubik''s cubes',
'4 hours (3 coffee)'),

('Htoo Aung',
'Cybersecurity Analyst',
'Dark chocolate & milk tea',
'Yangon, Myanmar',
'Fox (curious, resourceful)',
'Writing short mystery stories',
'2 hours (optional)');

-- group info table 
CREATE TABLE group_info (
    info_id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100) NOT NULL,
    description TEXT NOT NULL
);

-- insert data to group info table
INSERT INTO group_info (category, description)
VALUES

('In-Person Meetings',
'Tuesday — 4:30 PM – 5:30 PM'),

('In-Person Meetings',
'Wednesday — 1:00 PM – 2:00 PM'),

('Communication Channels',
'WhatsApp Group — Daily or as needed'),

('Communication Channels',
'Zoom Online Discussion — Saturdays 8:00 PM – 9:15 PM'),

('Communication Channels',
'In-Person — During and after class lectures'),

('Response Expectations',
'Messages replied within 12 hours'),

('Response Expectations',
'Members attend online discussions before 8:30 PM'),

('Response Expectations',
'Inform team in advance if unavailable'),

('Project Timeline',
'Week 4 — Discussion, task division, Jira planning, start Home page'),

('Project Timeline',
'Week 5 — Finish Home page; start remaining pages and CSS'),

('Project Timeline',
'Week 6 — Finalise pages, testing, documentation');

-- update member_profile
UPDATE member_profiles
SET individual_task = 'CSS design, responsive layout, user table and manage.php'
WHERE name = 'Nyan Phyo Aung';

UPDATE member_profiles
SET individual_task = 'Job Description Page, job table'
WHERE name = 'Wai Phyo Htet';

UPDATE member_profiles
SET individual_task = 'Job Application Page, eoi table, process_eoi.php'
WHERE name = 'Aung Khant Zaw';

UPDATE member_profiles
SET individual_task = 'About Page, member_profiles table, team_fun_facts table, group_info table'
WHERE name = 'Htoo Aung';



