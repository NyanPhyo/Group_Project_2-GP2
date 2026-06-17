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

$query = "SELECT * FROM jobs ORDER BY id ASC";
$result = mysqli_query($conn, $query);

$jobs = [];

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $jobs[] = $row;
  }
}

function e($value) {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function renderListItems($text) {
  $items = explode("\n", trim($text));

  foreach ($items as $item) {
    $item = trim($item);

    if ($item !== '') {
      echo '<li>' . e($item) . '</li>';
    }
  }
}
?>

<main>
  <div class="jobs">

    <!-- inputs to pair with respective job details -->
    <input type="radio" name="job" id="null" checked>

    <?php foreach ($jobs as $index => $job): ?>
      <input type="radio" name="job" id="job<?php echo $index + 1; ?>">
    <?php endforeach; ?>

    <aside class="sidebar">
      <h2>Job Openings</h2>

      <!-- The data is based on Payscale and Jobstreet Malaysia -->
      <?php foreach ($jobs as $index => $job): ?>
        <label for="job<?php echo $index + 1; ?>" class="job-card">
          <h3><?php echo e($job['title']); ?></h3>
          <p class="company">
            <?php echo e($job['company']); ?> • <?php echo e($job['location']); ?>
          </p>
          <p class="salary"><?php echo e($job['salary']); ?></p>
          <p class="desc"><?php echo e($job['short_description']); ?></p>
        </label>
      <?php endforeach; ?>
    </aside>

    <div class="details">

      <article class="content dummy">
        <h2>Choose one of the jobs</h2>
        <p id="dummy-text">
          Please choose one of the jobs from the left side to check the details.
          It will show you job details including key responsibilities,
          essential requirements and preferable requirements.
        </p>
      </article>

      <?php foreach ($jobs as $index => $job): ?>
        <article class="content d<?php echo $index + 1; ?>">
          <label class="backarrow" for="null">
            <i class="fa-solid fa-arrow-left"></i>
          </label>

          <div class="inner">
            <header>
              <p class="ref">
                <strong>Reference Number:</strong>
                <?php echo e($job['reference_number']); ?>
              </p>

              <h1><?php echo e($job['title']); ?></h1>

              <p class="summary">
                <?php echo e($job['summary']); ?>
              </p>

              <p>
                <strong>Salary:</strong>
                <?php echo e($job['salary']); ?>
              </p>

              <p>
                <strong>Reporting Line:</strong>
                <?php echo e($job['reporting_line']); ?>
              </p>
            </header>

            <section>
              <h2>Key Responsibilities</h2>
              <ol>
                <?php renderListItems($job['responsibilities']); ?>
              </ol>
            </section>

            <section>
              <h2>Essential Requirements</h2>
              <ul>
                <?php renderListItems($job['essential_requirements']); ?>
              </ul>
            </section>

            <section>
              <h2>Preferable Requirements</h2>
              <ul>
                <?php renderListItems($job['preferable_requirements']); ?>
              </ul>
            </section>
          </div>

          <a href="./apply.php?job_id=<?php echo e($job['id']); ?>" class="btn">
            Apply Now
          </a>
        </article>
      <?php endforeach; ?>

    </div>
  </div>
</main>

<?php 
mysqli_close($conn);
include 'footer.inc'; 
?>
