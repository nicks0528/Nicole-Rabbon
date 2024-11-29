const testimonials = document.querySelectorAll('.testimonial');
const container = document.querySelector('.testimonial-container');
const prevButton = document.querySelector('.carousel-button.prev');
const nextButton = document.querySelector('.carousel-button.next');

let currentIndex = 0;

// Function to update the carousel position
function updateCarousel() {
  container.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Auto-slide function
function autoSlide() {
  currentIndex = (currentIndex + 1) % testimonials.length;
  updateCarousel();
}

// Next button event
nextButton.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % testimonials.length;
  updateCarousel();
});

// Prev button event
prevButton.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
  updateCarousel();
});

// Set interval for automatic slide
setInterval(autoSlide, 5000); // Adjust the time as needed (5 seconds here)
