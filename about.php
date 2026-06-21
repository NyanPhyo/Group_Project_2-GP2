<?php
session_start();
$page = 'about';

include 'settings.php';
include 'header.inc';
include 'nav.inc';
$conn = mysqli_connect($host,$user,$pwd,$sql_db);
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
        <?php

        $query = "SELECT * FROM group_info ORDER BY category";
        $result = mysqli_query($conn, $query);

        $groupData = [];

        while($row = mysqli_fetch_assoc($result))
        {
            $groupData[$row['category']][] = $row['description'];
        }

        ?>
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
                      <?php
                      foreach($groupData['In-Person Meetings'] as $item)
                      {
                          echo "<li>$item</li>";
                      }
                      ?>
                  </ul>
              </li>

              <!--communication channel-->
              <li>
                  <strong>Communication Channels:</strong>

                  <ul>
                      <?php
                      foreach($groupData['Communication Channels'] as $item)
                      {
                          echo "<li>$item</li>";
                      }
                      ?>
                  </ul>
              </li>

              <!--communication response expectation-->
              <li>
                  <strong>Response Expectations:</strong>

                  <ul>
                      <?php
                      foreach($groupData['Response Expectations'] as $item)
                      {
                          echo "<li>$item</li>";
                      }
                      ?>
                  </ul>
              </li>

              <!--project timeline-->
              <li>
                  <strong>Project Timeline:</strong>

                  <ul>
                      <?php
                      foreach($groupData['Project Timeline'] as $item)
                      {
                          echo "<li>$item</li>";
                      }
                      ?>
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

            <?php
            $query = "SELECT * FROM member_profiles";
            $result = mysqli_query($conn, $query);

            $count = 1;

            while($row = mysqli_fetch_assoc($result))
            {
            ?>
                <article id="member-<?php echo $row['member_id']; ?>">
                    <div class="img">
                        <img
                            src="<?php echo $row['image']; ?>"
                            alt="Portrait photo of <?php echo $row['name']; ?>"
                        />
                    </div>

                    <div class="text">
                        <h3><?php echo $count . ". " . $row['name']; ?></h3>

                        <dl>
                            <dt>Individual Task</dt>
                            <dd><?php echo $row['individual_task']; ?></dd>

                            <dt>Shared Task</dt>
                            <dd><?php echo $row['shared_task']; ?></dd>

                            <dt>Personal Quote</dt>
                            <dd>
                                <blockquote>
                                    "<?php echo $row['personal_quote']; ?>"
                                </blockquote>

                                <p>
                                    <strong>Favourite Language:</strong>
                                    <?php echo $row['favourite_language']; ?>
                                    —
                                    <em><?php echo $row['nickname']; ?></em>
                                </p>
                            </dd>

                            <dt>First Programming Language Learned</dt>
                            <dd>
                                <?php echo $row['first_language']; ?>
                                —
                                <?php echo $row['first_language_desc']; ?>
                            </dd>
                        </dl>
                    </div>
                </article>
            <?php
                $count++;
            }
            ?>
        </section>

        <!-- ── FUN FACTS TABLE ── -->
        <?php

        $query = "SELECT * FROM team_fun_facts";
        $result = mysqli_query($conn, $query);

        $members = array();

        while($row = mysqli_fetch_assoc($result))
        {
            $members[] = $row;
        }

        ?>
        <section id="fun-facts" aria-labelledby="fun-facts-heading">
          <h2 id="fun-facts-heading">Team Fun Facts</h2>
          <div id="fun-facts-text">
          <table>

              <caption>
                  Fun facts about the Three Aung One Wai team members
              </caption>

              <thead>
                  <tr>
                      <th></th>

                      <?php foreach($members as $member){ ?>
                          <th><?php echo $member['member_name']; ?></th>
                      <?php } ?>

                  </tr>
              </thead>

              <tbody>

                  <tr>
                      <th>Dream Job</th>

                      <?php foreach($members as $member){ ?>
                          <td><?php echo $member['dream_job']; ?></td>
                      <?php } ?>

                  </tr>

                  <tr>
                      <th>Coding Snack</th>

                      <?php foreach($members as $member){ ?>
                          <td><?php echo $member['coding_snack']; ?></td>
                      <?php } ?>

                  </tr>

                  <tr>
                      <th>Hometown</th>

                      <?php foreach($members as $member){ ?>
                          <td><?php echo $member['hometown']; ?></td>
                      <?php } ?>

                  </tr>

                  <tr>
                      <th>Spirit Animal</th>

                      <?php foreach($members as $member){ ?>
                          <td><?php echo $member['spirit_animal']; ?></td>
                      <?php } ?>

                  </tr>

                  <tr>
                      <th>Hidden Talent</th>

                      <?php foreach($members as $member){ ?>
                          <td><?php echo $member['hidden_talent']; ?></td>
                      <?php } ?>

                  </tr>

                  <tr>
                      <th>Hours of Sleep (on deadline night)</th>

                      <?php foreach($members as $member){ ?>
                          <td><?php echo $member['sleep_hours']; ?></td>
                      <?php } ?>

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
            <a class="btn" href="jobs.php">Browse Open Roles</a>
            <a class="btn" href="apply.php">Submit an Application</a>
          </p>
        </div>
      </section>

    </main>
   
<?php include 'footer.inc'; ?>
