// Get modal element
var modal = document.getElementById('myModal');

// Get all gallery images
var images = document.querySelectorAll('.gallery-img');

// Get the modal title and description elements
var modalTitle = document.getElementById('modal-title');
var modalDescription = document.getElementById('modal-description');

// Get the <span> element to close the modal
var closeBtn = document.getElementsByClassName('close')[0];

// Add event listener to each image
images.forEach(function(image) {
  image.addEventListener('click', function() {
    // Set the modal title and description based on the clicked image's data attributes
    modalTitle.textContent = image.getAttribute('data-title');
    modalDescription.textContent = image.getAttribute('data-description');
    
    // Display the modal
    modal.style.display = "block";
  });
});

// Close the modal when clicking the close button
closeBtn.addEventListener('click', function() {
  modal.style.display = "none";
});

// Close the modal if user clicks outside the modal content
window.addEventListener('click', function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});
