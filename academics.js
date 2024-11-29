// Modal Functionality
function openModal(title, description) {
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalDescription').textContent = description;
    document.getElementById('programModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('programModal').style.display = 'none';
}

// Filter Functionality
function filterPrograms(category) {
    const programs = document.querySelectorAll('.program');
    programs.forEach(program => {
        if (category === 'all' || program.classList.contains(category)) {
            program.style.display = 'block';
        } else {
            program.style.display = 'none';
        }
    });

    // Update active filter button
    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`.filter-btn[onclick="filterPrograms('${category}')"]`).classList.add('active');
}

// Statistics Animation
document.addEventListener('DOMContentLoaded', () => {
    const statValues = document.querySelectorAll('.stat-value');
    statValues.forEach(stat => {
        const count = parseInt(stat.dataset.count, 10);
        let current = 0;
        const increment = Math.ceil(count / 100);

        const counter = setInterval(() => {
            current += increment;
            if (current > count) {
                current = count;
                clearInterval(counter);
            }
            stat.textContent = current;
        }, 30);
    });
});
