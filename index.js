document.addEventListener('DOMContentLoaded', () => {
    const features = document.querySelectorAll('.feature');
    let currentIndex = 0;
  
    function showFeature(index) {
      features.forEach((feature, i) => {
        feature.classList.toggle('active', i === index);
      });
    }
  
    document.querySelector('.next').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % features.length;
      showFeature(currentIndex);
    });
  
    document.querySelector('.prev').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + features.length) % features.length;
      showFeature(currentIndex);
    });
  
    showFeature(currentIndex); // Initial display
  });
  