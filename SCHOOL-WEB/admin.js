// Get modal elements
const modalOverlay = document.getElementById('modal-overlay');
const modalTitle = document.getElementById('modal-title');
const modalBody = document.getElementById('modal-body');
const closeModal = document.querySelector('.close-modal');

// Get all Read More buttons
const readMoreButtons = document.querySelectorAll('.read-more-btn');

// Add event listener to each "Read More" button
readMoreButtons.forEach(button => {
  button.addEventListener('click', (event) => {
    // Prevent default action
    event.preventDefault();

    // Get the title and content from the button's data attributes
    const title = button.getAttribute('data-title');
    const content = button.getAttribute('data-content');

    // Set modal content
    modalTitle.textContent = title;
    modalBody.textContent = content;

    // Display the modal
    modalOverlay.style.display = 'flex';
  });
});

// Close the modal when clicking the close button
closeModal.addEventListener('click', () => {
  modalOverlay.style.display = 'none';
});

// Close the modal when clicking outside the modal content
modalOverlay.addEventListener('click', (event) => {
  if (event.target === modalOverlay) {
    modalOverlay.style.display = 'none';
  }
});
