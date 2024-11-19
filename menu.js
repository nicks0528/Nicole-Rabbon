// JavaScript to toggle mobile menu
document.getElementById('menu-icon').addEventListener('click', function() {
    const navbar = document.querySelector('.navbar');
    const actions = document.querySelector('.actions');
    
    navbar.classList.toggle('active'); // Toggle visibility of navbar
    actions.classList.toggle('active'); // Toggle visibility of action buttons
  });
  