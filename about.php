<?php 
session_start();
$page = 'about';
include 'header.inc';
include 'nav.inc'; 
?>
 
    <!--main contain main contents of the web page-->
    <main id="main-content" class="about-page">
      <!--                  WEB TEAM SECTION                         -->
      <section id="web-team" class="member-info" aria-labelledby="team-section-heading">
        <h1 id="team-section-heading">Meet the Web Development Team</h1>
        <p id="team-section-text">
          The website you are reading was designed and built by students from the web-development team
          as part of a group project. Here is a little about the people behind it.
        </p>

        <!-- ── GROUP INFO (nested list) ── -->
        <section id="group-info" aria-labelledby="group-info-heading">
          <h2 id="group-info-heading">Group Details</h2>
          <ul id="group-info-content">

              <!--whole week time table-->
              <li id="time-table">
                <strong>Group Name:</strong> Three Aung One Wai
                <ul>
                  <li><strong>Monday</strong>
                    <ul>
                      <li>Cos 10004: 2:00 PM – 4:00 PM</li>
                      <li>Cos 10009: 4:00 PM – 6:00 PM</li>
                    </ul>
                  </li>

                  <li><strong>Tuesday</strong>
                    <ul>
                      <li>MAT  2208: 8:00 AM  – 10:00 AM</li>
                      <li>Cos 10009: 12:00 PM – 2:00 PM</li>
                      <li>Cos 10026:  2:00 PM – 4:00 PM</li>
                    </ul>
                  </li>

                  <li><strong>Wednesday</strong>
                    <ul>
                      <li>Cos 10026:  8:00 AM – 10:00 AM</li>
                      <li>Cos 10004: 10:00 AM – 12:00 PM</li>
                    </ul>
                  </li>

                  <li><strong>Thursday</strong>
                    <ul>
                      <li>TNE 10006: 3:00 PM – 6:00 PM</li>
                    </ul>
                  </li>

                  <li><strong>Friday</strong>
                    <ul>
                      <li>MAT  2208:  8:00 AM – 10:00 AM</li>
                      <li>TNE 10006: 11:00 AM – 1:00 PM</li>
                    </ul>
                  </li>
                </ul>
              </li>

              <!--in person meating schedule-->
              <li>
                <strong>In-Person Meetings:</strong>
                <ul>
                  <li>Tuesday — 4:30 PM – 5:30 PM</li>
                  <li>Wednesday — 1:00 PM – 2:00 PM</li>
                </ul>
              </li>

              <!--communication channel-->
              <li>
                <strong>Communication Channels:</strong>
                <ul>
                  <li>WhatsApp Group — Daily or as needed</li>
                  <li>Zoom Online Discussion — Saturdays 8:00 PM – 9:15 PM</li>
                  <li>In-Person — During and after class lectures</li>
                </ul>
              </li>

              <!--communication response expectation-->
              <li>
                <strong>Response Expectations:</strong>
                <ul>
                  <li>Messages replied within 12 hours</li>
                  <li>Members attend online discussions before 8:30 PM</li>
                  <li>Inform team in advance if unavailable</li>
                </ul>
              </li>

              <!--project timeline-->
              <li>
                <strong>Project Timeline:</strong>
                <ul>
                  <li>Week 4 — Discussion, task division, Jira planning, start Home page</li>
                  <li>Week 5 — Finish Home page; start remaining pages and CSS</li>
                  <li>Week 6 — Finalise pages, testing, documentation</li>
                </ul>
              </li>
          </ul>
        </section>

        <!-- ── GROUP PHOTO ── -->
        <section id="group-photo-section" aria-labelledby="group-photo-heading">

          <!--image and caption-->
          <figure>
            <img
              src="resources/images/GP.jpeg"
              alt="Group photo of Three Aung One Wai web development team"
            />
            <figcaption>
              <strong>Three Aung One Wai</strong> &mdash; The web development team behind the 3A1W website project. 
            </figcaption>
          </figure>

          <!--text and brief about the team-->
          <div id="group-photo-text">
            <h2 id="group-photo-heading">About Our Team</h2>
            <p>
              We are a group of four computing students united by curiosity, coffee, and a shared
              commitment to delivering quality work. Despite each of us taking on individual
              specialisations, every page of this site reflects our collective effort and vision.
            </p>
            <p>
              Our name &mdash; <strong>Three Aung One Wai</strong> &mdash; is both a playful nod
              to our names and a reminder that different perspectives, when aligned toward one
              goal, produce something greater than the sum of their parts.
            </p>
          </div>
        </section>

        <!-- ── MEMBER PROFILES (definition list with quotes &amp; languages) ── -->
        <section id="member-profiles" aria-labelledby="profiles-heading">
          <h2 id="profiles-heading">Member Contributions & Quotes</h2>

          <!-- Member 1 -->
          <article id="member-nyan" aria-labelledby="nyan-heading">
            <div class="img">
              <img
                src="resources/images/NPA.jpeg"
                alt="Portrait photo of Nyan Phyo Aung"
                
              />
            </div>
            <div class="text">
              <h3 id="nyan-heading">1. Nyan Phyo Aung</h3>
              <dl>
                <dt>Individual Task</dt>
                <dd>CSS &mdash; Responsible for all stylesheet design, visual layout, typography, colour themes, and responsive behaviour across the entire website.</dd>

                <dt>Shared Task</dt>
                <dd>Home Page &mdash; Co-developed the landing page structure, hero section, and introductory content with Wai Phyo Htet.</dd>

                <dt>Personal Quote</dt>
                <dd>
                  <blockquote>
                    "Good CSS is invisible — you only notice it when it's missing."
                  </blockquote>
                  <p>
                    <strong>Favourite Language:</strong>Chinese --- <em>Name in Chinese: "CSS爱好者"</em>
                  </p>
                </dd>

                <dt>First Programming Language Learned</dt>
                <dd>HTML &mdash; <em>"HTML是我学的第一门编程语言"</em> Translation: HTML was the first language I ever learned.</dd>
              </dl>
            </div>
          </article>

          <!-- Member 2 -->
          <article id="member-wai" aria-labelledby="wai-heading">
            <div class="img">
              <img
                src="resources/images/WPH.jpeg"
                alt="Portrait photo of Wai Phyo Htet"
                
              />
            </div>
            <div class="text">
              <h3 id="wai-heading">2. Wai Phyo Htet</h3>
              <dl>
                <dt>Individual Task</dt>
                <dd>Job Description Page &mdash; Designed and built the page listing all available roles at CyberNex Technologies, including role summaries, requirements, and application links.</dd>

                <dt>Shared Task</dt>
                <dd>Home Page &mdash; Co-developed the landing page navigation, company overview section, and call-to-action elements with Nyan Phyo Aung.</dd>

                <dt>Personal Quote</dt>
                <dd>
                  <blockquote>
                    "A clear job description is the first line of code in building a great team."
                  </blockquote>
                  <p>
                    <strong>Favourite Language:</strong> Burmese (မြန်မာဘာသာ) --- <em>Name in Burmese: "ပိုင်သွန်ချစ်သူ"</em>
                  </p>
                </dd>

                <dt>First Programming Language Learned</dt>
                <dd>Python &mdash; <em>"Python သည် ကျွန်တော် ပထမဆုံး ကုဒ်ရေးသားခဲ့သော ဘာသာစကားဖြစ်သည်။"</em> Translation: Python was the first language I coded in.</dd>
              </dl>
            </div>
          </article>

          <!-- Member 3 -->
          <article id="member-aung-khant" aria-labelledby="khant-heading">
            <div class="img">
              <img
                src="resources/images/AKZ.jpeg"
                alt="Portrait photo of Aung Khant Zaw"
                
              
              />
            </div>
            <div class="text">
              <h3 id="khant-heading">3. Aung Khant Zaw</h3>
              <dl>
                <dt>Individual Task</dt>
                <dd>Job Application Page &mdash; Built the interactive application form allowing candidates to submit their details, upload CVs, and apply for positions at CyberNex Technologies.</dd>

                <dt>Shared Task</dt>
                <dd>Jira Management &mdash; handles implementation and documentation: linking the Jira project in the index.html footer, ensuring tutor access, and reviewing that all requirements and submissions are complete.</dd>

                <dt>Personal Quote</dt>
                <dd>
                  <blockquote>
                    "Organised tasks lead to organised code — Jira keeps us honest."
                  </blockquote>
                  <p>
                    <strong>Favourite Language:</strong> Burmese (မြန်မာဘာသာ) --- <em>Name in Burmese: "ကြေကွဲလူငယ်"</em>
                  </p>
                </dd>

                <dt>First Programming Language Learned</dt>
                <dd>JavaScript &mdash; <em> JavaScript က ဝက်ဘ်ဖွံ့ဖြိုးရေးကို ချစ်လာစေတဲ့ ဘာသာစကားပါ။</em> Translation: JavaScript is the language that made me fall in love with web development.</dd>
              </dl>
            </div>
          </article>

          <!-- Member 4 -->
          <article id="member-htoo" aria-labelledby="htoo-heading">
            <div class="img">
              <img
                src="resources/images/HA.jpeg"
                alt="Portrait photo of Htoo Aung"
                
              />
            </div>
            <div class="text">
              <h3 id="htoo-heading">4. Htoo Aung</h3>
              <dl>
                <dt>Individual Task</dt>
                <dd>About Page &mdash; Authored and structured the complete About page (this page!) including team profiles, fun facts, company narrative, and all required semantic HTML elements.</dd>

                <dt>Shared Task</dt>
                <dd>Jira Management &mdash; focuses on creating the Jira project: defining epics, writing detailed user stories with priorities, assigning tasks, and organizing at least two sprints.</dd>

                <dt>Personal Quote</dt>
                <dd>
                  <blockquote>
                    "A great About page tells a story — not just a list of names."
                  </blockquote>
                  <p>
                    <strong>Favourite Language:</strong> Japanese --- <em>Name in Japanese: "五条"</em>
                  </p>
                </dd>

                <dt>First Programming Language Learned</dt>
                <dd>C++ &mdash; <em>C++は、プログラミングのしっかりとした基礎を教えてくれた言語です。</em> Translation: C++ is the language that taught me the solid fundamentals of programming.</dd>
              </dl>
            </div>
          </article>
        </section>

        <!-- ── FUN FACTS TABLE ── -->
        <section id="fun-facts" aria-labelledby="fun-facts-heading">
          <h2 id="fun-facts-heading">Team Fun Facts</h2>
          <div id="fun-facts-text">
            <table>
              <caption>
                Fun facts about the Three Aung One Wai team members — including dream jobs,
                favourite coding snacks, hometowns, spirit animals, and hidden talents.
              </caption>
              <thead>
                <tr>
                  <th scope="col"> </th>
                  <th scope="col">Nyan Phyo Aung</th>
                  <th scope="col">Wai Phyo Htet</th>
                  <th scope="col">Aung Khant Zaw</th>
                  <th scope="col">Htoo Aung</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Dream Job</th>
                  <td>UX/UI Designer at a top tech firm</td>
                  <td>HR Tech Lead at a global company</td>
                  <td>Product Manager at a startup</td>
                  <td>Cybersecurity Analyst</td>
                </tr>
                <tr>
                  <th scope="row">Coding Snack</th>
                  <td>Prawn crackers &amp; green tea</td>
                  <td>Instant noodles (at midnight)</td>
                  <td>Banana chips &amp; iced coffee</td>
                  <td>Dark chocolate &amp; milk tea</td>
                </tr>
                <tr>
                  <th scope="row">Hometown</th>
                  <td>Khayan, Myanmar</td>
                  <td>Mandalay, Myanmar</td>
                  <td>Hinthada, Myanmar</td>
                  <td>Yangon, Myanmar</td>
                </tr>
                <tr>
                  <th scope="row">Spirit Animal</th>
                  <td>Owl (detail-oriented, night owl)</td>
                  <td>Bee (organised, hard-working)</td>
                  <td>Ant (team player, planner)</td>
                  <td>Fox (curious, resourceful)</td>
                </tr>
                <tr>
                  <th scope="row">Hidden Talent</th>
                  <td>Sketching character illustrations</td>
                  <td>Playing acoustic guitar</td>
                  <td>Speed-solving Rubik's cubes</td>
                  <td>Writing short mystery stories</td>
                </tr>
                <tr>
                  <th scope="row">Hours of Sleep (on deadline night)</th>
                  <td>5 hours (5 energy drinks)</td>
                  <td>6 hours (2 energy drinks)</td>
                  <td>4 hours (3 coffee)</td>
                  <td>2 hours (optional)</td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </section>

      </section>
      <!-- end #web-team -->

      <!-- ========== JOIN US CTA ========== -->
      <section id="join-us" aria-labelledby="join-heading">
        <div id="join-img">
          <img
            src="resources/images/Meeting.jpeg"
            alt="Our Group in a high-tech office"
          />
        </div>
        <div id="join-text">
          <h2 id="join-heading">Join the 3A1W Team</h2>
          <p>
            Are you passionate about cybersecurity, software development, or technology
            leadership? Three Aung One Wai's company is actively expanding its technology division
            and we want to hear from you.
          </p>
          <p>
            We offer competitive salaries, flexible working arrangements, ongoing professional
            development, and the chance to work on problems that genuinely matter.
          </p>
          <p>
            <a class="btn" href="jobs.html">Browse Open Roles</a>
            <a class="btn" href="apply.html">Submit an Application</a>
          </p>
        </div>
      </section>

    </main>
   
<?php include 'footer.inc'; ?>

 



