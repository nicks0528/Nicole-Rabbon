<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Website</title>
  <link rel="stylesheet" href="learn.css">
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
        <a href="index.html">Home</a>
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
<!-- About Section -->
<section class="about">
    <h1><i class="fas fa-info-circle"></i> About Us</h1>

    <div class="section section-left" id="who-we-are">
        <div class="text">
            <h2><i class="fas fa-users"></i> Who We Are</h2>
            <p>Our school is a community of learners made up of students, parents, and faculty who are committed to creating a challenging academic environment. We believe in making learning meaningful and accessible to all students.</p>
        </div>
        <div class="image">
            <img src="images/school.jpg" alt="School Building">
        </div>
    </div>

    <div class="section section-right" id="our-mission">
        <div class="text">
            <h2><i class="fas fa-bullseye"></i> Our Mission</h2>
            <p>We aim to create well-rounded students who are models of health, resilience, and character development. We strive to build compassionate, unique individuals ready to contribute positively to society.</p>
        </div>
        <div class="image">
            <img src="images/room.jpg" alt="Classroom">
        </div>
    </div>

    <div class="section section-left" id="our-values">
        <div class="text">
            <h2><i class="fas fa-heart"></i> Our Values</h2>
            <p>We are guided by a set of core values that shape our approach to education:</p>
            <ul>
                <li><i class="fas fa-check"></i> Integrity</li>
                <li><i class="fas fa-check"></i> Inclusivity</li>
                <li><i class="fas fa-check"></i> Excellence</li>
            </ul>
            <p>We strive to embody these values in our community, fostering an environment where every student can excel and feel valued.</p>
        </div>
        <div class="image">
            <img src="images/lib.jpg" alt="Library">
        </div>
    </div>
</section>

  <script src="learn.js"></script>
</body>
</html>
