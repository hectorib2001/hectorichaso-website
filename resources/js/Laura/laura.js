// Mobile menu toggle
const menuToggle = document.getElementById('menuToggle');
const navLinks   = document.getElementById('navLinks');

menuToggle.addEventListener('click', () => navLinks.classList.toggle('open'));
navLinks.querySelectorAll('a').forEach(link =>
    link.addEventListener('click', () => navLinks.classList.remove('open'))
);

// Scroll-reveal via IntersectionObserver
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: .14 });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
