<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Website</title>
  <link rel="stylesheet" href="community.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
<!-- Press Releases Section -->
<div class="press-releases">
  <h2>Press Releases</h2>
  <p>Stay updated with our latest news and achievements. Here's what's happening at our university:</p>
  <div class="press-release-list">
    <div class="release-item" title="Details about the new course program">
      <a href="#">
        <span class="release-icon">📢</span>
        <span class="release-text">University Launches New Course Program</span>
        <span class="badge new">New</span>
      </a>
      <button class="read-more-btn" data-title="University Launches New Course Program" data-content="We are excited to announce a new course program starting this fall. The program focuses on innovative technologies and offers a comprehensive curriculum. Stay tuned for more details!">Read More</button>
    </div>
    <div class="release-item" title="Explore highlights from our Annual Science Fair">
      <a href="#">
        <span class="release-icon">🔬</span>
        <span class="release-text">Annual Science Fair Highlights</span>
      </a>
      <button class="read-more-btn" data-title="Annual Science Fair Highlights" data-content="Our Annual Science Fair brings together brilliant young minds from around the country. This year's fair highlighted some impressive scientific innovations!">Read More</button>
    </div>
    <div class="release-item" title="Celebrating student achievements this year">
      <a href="#">
        <span class="release-icon">🏆</span>
        <span class="release-text">Achievements of Our Students</span>
      </a>
      <button class="read-more-btn" data-title="Achievements of Our Students" data-content="Our students continue to excel in their academic pursuits. From national awards to groundbreaking research, our students are making a difference in the world!">Read More</button>
    </div>
    <div class="release-item" title="All you need to know about the upcoming graduation ceremony">
      <a href="#">
        <span class="release-icon">🎓</span>
        <span class="release-text">Upcoming Graduation Ceremony Details</span>
        <span class="badge upcoming">Upcoming</span>
      </a>
      <button class="read-more-btn" data-title="Upcoming Graduation Ceremony Details" data-content="Our graduation ceremony will take place on May 15th. Join us as we celebrate the accomplishments of our graduating class. More details coming soon!">Read More</button>
    </div>
    <div class="release-item" title="Recognizing the top-performing faculty members">
      <a href="academics.php">
        <span class="release-icon">🌟</span>
        <span class="release-text">Top Faculty Members Recognized for Excellence</span>
      </a>
      <button class="read-more-btn" data-title="Top Faculty Members Recognized for Excellence" data-content="We proudly recognize our outstanding faculty members who have contributed greatly to the academic and professional growth of our students.">Read More</button>
    </div>
  </div>
</div>

<!-- Modal for displaying more content -->
<div class="modal-overlay" id="modal-overlay">
  <div class="modal-content">
    <span class="close-modal">&times;</span>
    <h2 id="modal-title"></h2>
    <p id="modal-body"></p>
  </div>
</div>

<!-- Video Gallery Section -->
<div class="video-gallery">
  <h2>Video Gallery</h2>
  <p>Watch some of the highlights from our recent events and initiatives.</p>
  <div class="video-grid">
    <div class="video-item">
      <img src="https://media.istockphoto.com/id/2182037975/photo/portrait-of-charming-and-friendly-asian-female-college-students-waving-and-smiling-at-the.jpg?s=612x612&w=0&k=20&c=0b9jMo9LXI8uIdidMP_LDlRKCZMsTHNGFT8CqDNPqTg=" alt="Video 1" class="video-thumbnail" data-video-url="video/Video welcome in our school.mp4">
      <p>Welcome to Our Campus</p>
    </div>
    <div class="video-item">
      <img src="https://media.istockphoto.com/id/1429860360/photo/low-section-of-man-climbing-up-stairs-with-new-year-number-2023-2025-and-2026.jpg?s=612x612&w=0&k=20&c=yYXxyw5R-PCFTNYfSSKJpNtrVsTNGGRT-hViPO60XFY=" alt="Video 2" class="video-thumbnail" data-video-url="video/Sports Day at School.mp4">
      <p>Annual Sports Day</p>
    </div>
    <div class="video-item">
      <img src="https://media.istockphoto.com/id/480849669/photo/small-girl-playing-with-colors.jpg?s=612x612&w=0&k=20&c=KvpKm_ag-hm96rO-zS2OiN09-RlQ72WKNmUJURatD68=" alt="Video 3" class="video-thumbnail" data-video-url="video/Fun Fair & Cultural Festival at School .mp4">
      <p>Art and Culture Festival</p>
    </div>
    <div class="video-item">
      <img src="https://media.istockphoto.com/id/973292518/photo/teacher-and-kids-talking-about-a-science-exhibit.jpg?s=612x612&w=0&k=20&c=ETcRqT6Cz-GX-m1AKUHEQm_5G-RB4W0H2zC6o43OhD8=" alt="Video 4" class="video-thumbnail" data-video-url="video/Royal Society Summer Science Exhibition 2016 trailer.mp4">
      <p>Science Exhibition Highlights</p>
    </div>
  </div>
</div>

<!-- Modal for Videos -->
<div class="video-modal-overlay" id="video-modal-overlay">
  <div class="video-modal-content">
    <span class="close-video-modal">&times;</span>
    <iframe id="video-frame" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
</div>


<!-- Photo Gallery Section -->
<div class="photo-gallery">
  <h2>Photo Gallery</h2>
  <p>Explore moments from our recent events and activities.</p>
  <div class="gallery-grid">
    <img src="https://media.istockphoto.com/id/1132826049/photo/happy-millennial-friends-having-fun-at-garden-party-with-multicolored-smoke-bombs-outside.jpg?s=612x612&w=0&k=20&c=_wAIBijWnyuvWTcQ5EcbpHHa0SUKWHZEGMnX7ecYyb0=" alt="Event 1">
    <img src="https://media.istockphoto.com/id/1939499353/photo/creating-art-for-a-sustainable-future.jpg?s=612x612&w=0&k=20&c=8e3vgoSwb7absLp67LTEoi3HX5_iagmD7Xz5qFsr5I4=" alt="Event 2">
    <img src="https://media.istockphoto.com/id/597959356/photo/female-teacher-addressing-university-students-in-a-classroom.jpg?s=612x612&w=0&k=20&c=SCXcpy72KRZUj7n60xnzaRAPYBhwP3YCbRl2uiBWIrA=" alt="Event 3">
    <img src="https://media.istockphoto.com/id/1157908388/photo/group-of-students-drawing-their-paintings-on-a-class-at-art-studio.jpg?s=612x612&w=0&k=20&c=bYom7iwJQAH2-aDqzrcwa4R7uYyL28R4tWYmKsYmvRw=" alt="Event 4">
  </div>
</div>


  </section>
 <script src="admin.js"></script>
 <script src="vid.js"></script>
 <script src="learn.js"></script>
</body>
</html>