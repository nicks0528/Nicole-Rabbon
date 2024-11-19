// JavaScript to toggle mobile menu
document.getElementById('menu-icon').addEventListener('click', function() {
    const menuContent = document.querySelector('.menu-content');
    
    menuContent.classList.toggle('active'); // Toggle visibility of menu content
  });
  