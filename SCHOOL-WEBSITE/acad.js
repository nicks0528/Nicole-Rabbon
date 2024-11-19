// Filter Function for Programs
function filterPrograms(category) {
    const programs = document.querySelectorAll('.program');
    programs.forEach(program => {
        if (category === 'all' || program.classList.contains(category)) {
            program.style.display = 'block';
        } else {
            program.style.display = 'none';
        }
    });
    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');
}

// Modal Popup for Program Details
function openModal(programId) {
    document.getElementById('programModal').style.display = 'flex';
    // Dynamically load content based on the programId
    document.getElementById('modalTitle').textContent = "Program Title";
    document.getElementById('modalDescription').textContent = "Detailed description of the program goes here.";
}

function closeModal() {
    document.getElementById('programModal').style.display = 'none';
}

// Animated Counter for Statistics
const counters = document.querySelectorAll('.stat-value');
counters.forEach(counter => {
    counter.innerText = '0';
    const updateCounter = () => {
        const target = +counter.getAttribute('data-count');
        const count = +counter.innerText;
        const increment = target / 100;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCounter, 20);
        } else {
            counter.innerText = target;
        }
    };
    updateCounter();
});

