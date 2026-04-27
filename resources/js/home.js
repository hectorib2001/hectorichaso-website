document.addEventListener("DOMContentLoaded", () => {
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('.nav-links a');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Prevent default jump
            e.preventDefault();

            // Get target ID
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                // Scroll smoothly to section
                window.scrollTo({
                    top: targetSection.offsetTop - 70, // Offset for fixed navbar
                    behavior: 'smooth'
                });
            }
        });
    });

    // Simple console greeting (optional, nice touch for developer portfolios)
    console.log("%cHello! Thanks for checking out the source code.", "color: #3b82f6; font-size: 16px; font-weight: bold;");
});