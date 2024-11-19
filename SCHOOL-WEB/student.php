<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - School Website</title>
  <link rel="stylesheet" href="student.css">
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

<main>
    <!-- Hero Section -->
    <section class="hero">
        <h2><i class="fas fa-users"></i> Experience Student Life</h2>
        <p>Join us in exploring a vibrant community filled with activities, organizations, and lifelong friendships.</p>
    </section>

    <!-- Clubs and Organizations Section -->
    <section id="clubs">
        <h2><i class="fas fa-user-friends"></i> Clubs and Organizations</h2>
        <div class="club-list">
            <div class="club-item">
                <img src="images/art.jpg" alt="Art Club" />
                <h3><i class="fas fa-palette"></i> Art Club</h3>
                <p>Unleash your creativity and explore various art forms with like-minded individuals.</p>
            </div>
            <div class="club-item">
                <img src="images/science.jpg" alt="Science Club" />
                <h3><i class="fas fa-atom"></i> Science Club</h3>
                <p>Engage in exciting experiments and learn about the wonders of science.</p>
            </div>
            <div class="club-item">
                <img src="images/debate.jpg" alt="Debate Team" />
                <h3><i class="fas fa-comments"></i> Debate Team</h3>
                <p>Hone your public speaking skills and engage in thoughtful discussions.</p>
            </div>
            <div class="club-item">
                <img src="images/drama.jpg" alt="Drama Club" />
                <h3><i class="fas fa-theater-masks"></i> Drama Club</h3>
                <p>Explore your passion for performing arts in a supportive environment.</p>
            </div>
            <div class="club-item">
                <img src="images/robotics.jpg" alt="Robotics Club" />
                <h3><i class="fas fa-robot"></i> Robotics Club</h3>
                <p>Design and build robots while competing in various challenges.</p>
            </div>
        </div>
    </section>

    <!-- Events and Activities Section -->
    <section id="events">
        <h2><i class="fas fa-calendar-alt"></i> Events and Activities</h2>
        <p>Join us for our exciting events that foster community spirit:</p>
        <div class="club-list">
            <div class="club-item">
                <img src="images/annual.jpg" alt="Annual Spring Fair" />
                <h3><i class="fas fa-sun"></i> Annual Spring Fair</h3>
                <p>Join us for a day of fun, games, and community engagement!</p>
            </div>
            <div class="club-item">
                <img src="https://media.istockphoto.com/id/1060900448/photo/careless-carefree-dream-dreamy-person-dance-on-corporate-feast-festive-raise-hands-up-close.webp?a=1&b=1&s=612x612&w=0&k=20&c=9FXBOk5YYpcqfefLdM3P_bRIqfyfSgoFu4vW-wQblws=" alt="Homecoming Dance" />
                <h3><i class="fas fa-music"></i> Homecoming Dance</h3>
                <p>A night to remember with music, dancing, and friends.</p>
            </div>
            <div class="club-item">
                <img src="https://images.unsplash.com/photo-1586420085482-0b68a7a227d8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHRhbGVudCUyMHNob3d8ZW58MHx8MHx8fDA%3D" alt="Talent Show" />
                <h3><i class="fas fa-star"></i> Talent Show</h3>
                <p>Showcase your talents and enjoy performances from your peers!</p>
            </div>
        </div>
    </section>
</main>


<script src="learn.js"></script>
</body>
</html>           