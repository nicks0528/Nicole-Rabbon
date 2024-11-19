<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Website</title>
  <link rel="stylesheet" href="admission.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<!-- Header -->
<header class="header">
  <div class="container">
  <div class="logo">
  <i class="fas fa-school"></i> 
</div>
    <!-- Menu Icon for Mobile Toggle -->
    <div id="menu-icon" class="menu-icon">
      &#9776; <!-- Unicode for hamburger menu icon -->
    </div>

    <!-- Menu Content (Initially Hidden on Mobile) -->
    <div class="menu-content">
      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="admission.php">Admissions</a>
        <a href="academics.php">Academics</a>
        <a href="student.php">Student Life</a>
        <a href="community.php">Media</a>
      </nav>
      
      <div class="actions">
        <a href="learn.php" class="button">Learn More</a>
        <a href="application.php" class="button">Apply</a>
      </div>
    </div>
  </div>
</header>

<section class="admissions">
  <h1><i class="fas fa-door-open"></i> Admissions</h1>

  <!-- Admission Process Section -->
  <div class="section" id="admission-process">
    <div class="text">
      <h2><i class="fas fa-user-check"></i> Admission Process</h2>
      <p>Our admissions process is designed to ensure that we find students who are the right fit for our community. Follow these simple steps to apply:</p>
      <ul>
        <li><strong>Step 1:</strong> Complete the online application form.</li>
        <li><strong>Step 2:</strong> Submit required documents, including transcripts and recommendations.</li>
        <li><strong>Step 3:</strong> Schedule an interview with our admissions team.</li>
        <li><strong>Step 4:</strong> Await admission decision notification.</li>
      </ul>
    </div>
    <div class="image">
      <img src="images/admission.jpg" alt="Admission Process">
    </div>
  </div>

  <!-- Admission Requirements Section -->
  <div class="section" id="requirements">
    <div class="image">
      <img src="images/requirements.jpg" alt="Requirements">
    </div>
    <div class="text">
      <h2><i class="fas fa-file-alt"></i> Requirements</h2>
      <p>To apply for admission, students are required to provide the following:</p>
      <ul>
        <li><i class="fas fa-check-circle"></i> Completed application form</li>
        <li><i class="fas fa-check-circle"></i> Academic transcripts from the past two years</li>
        <li><i class="fas fa-check-circle"></i> Two letters of recommendation</li>
        <li><i class="fas fa-check-circle"></i> Personal statement or essay</li>
      </ul>
    </div>
  </div>

  <!-- Key Dates Section -->
  <div class="section" id="key-dates">
    <div class="text">
      <h2><i class="fas fa-calendar-alt"></i> Key Dates</h2>
      <p>Mark your calendar with these important dates for the upcoming admissions cycle:</p>
      <ul>
        <li><strong>Application Deadline:</strong> March 15</li>
        <li><strong>Interview Period:</strong> April 1 - April 30</li>
        <li><strong>Decision Notification:</strong> May 15</li>
        <li><strong>Enrollment Deadline:</strong> June 1</li>
      </ul>
    </div>
    <div class="image">
      <img src="https://media.istockphoto.com/id/655023350/photo/setting-an-important-date-on-a-calendar.webp?a=1&b=1&s=612x612&w=0&k=20&c=DPYQjCAMgT7Gw4e6Nb0y1Tq-AmZT1uOn3LUwFR7rpMs=" alt="Key Dates">
    </div>
  </div>
</section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2023 School Name. All rights reserved.</p>
  </footer>
<script src="learn.js"></script>
</body>
</html>