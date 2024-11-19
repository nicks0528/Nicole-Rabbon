// Get modal elements
const videoModalOverlay = document.getElementById('video-modal-overlay');
const videoFrame = document.getElementById('video-frame');
const closeVideoModal = document.querySelector('.close-video-modal');

// Add click event listener to each video thumbnail
document.querySelectorAll('.video-thumbnail').forEach((thumbnail) => {
  thumbnail.addEventListener('click', (event) => {
    const videoUrl = thumbnail.getAttribute('data-video-url');
    videoFrame.src = `${videoUrl}?autoplay=1`; // Autoplay the video
    videoModalOverlay.style.display = 'flex';
  });
});

// Close the modal
closeVideoModal.addEventListener('click', () => {
  videoModalOverlay.style.display = 'none';
  videoFrame.src = ''; // Stop video playback
});

// Close the modal when clicking outside the modal content
videoModalOverlay.addEventListener('click', (event) => {
  if (event.target === videoModalOverlay) {
    videoModalOverlay.style.display = 'none';
    videoFrame.src = ''; // Stop video playback
  }
});
