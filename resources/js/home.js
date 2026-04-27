document.addEventListener("DOMContentLoaded", () => {

    /* ── Smooth scrolling ── */
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const id = link.getAttribute('href').substring(1);
            const target = document.getElementById(id);
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 70,
                    behavior: 'smooth'
                });
            }
        });
    });

    /* ── Navbar scroll effect ── */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });

    /* ── Scroll-reveal with IntersectionObserver ── */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                // Staggered reveal for skill icons
                if (entry.target.classList.contains('skill-icons')) {
                    entry.target.querySelectorAll('.icon').forEach((icon, i) => {
                        setTimeout(() => icon.classList.add('in-view'), i * 60);
                    });
                }
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    // Observe sections and their headings
    document.querySelectorAll('section:not(#home), .section-label, section h2').forEach(el => {
        revealObserver.observe(el);
    });

    // Observe jobs with stagger
    document.querySelectorAll('.job').forEach((job, i) => {
        job.style.transitionDelay = `${i * 0.1}s`;
        revealObserver.observe(job);
    });

    // Observe project cards with stagger
    document.querySelectorAll('.project-card').forEach((card, i) => {
        card.style.transitionDelay = `${i * 0.12}s`;
        revealObserver.observe(card);
    });

    // Observe about text and image
    const aboutText = document.querySelector('.about-text');
    const aboutImg  = document.querySelector('.about-image-placeholder');
    if (aboutText) revealObserver.observe(aboutText);
    if (aboutImg)  revealObserver.observe(aboutImg);

    // Observe skill icons container
    const skillIcons = document.querySelector('.skill-icons');
    if (skillIcons) revealObserver.observe(skillIcons);

    /* ── Typing effect for hero subtitle ── */
    const heroSub = document.querySelector('.hero h2');
    if (heroSub) {
        const original = heroSub.textContent;
        heroSub.textContent = '';
        let i = 0;
        const type = () => {
            if (i < original.length) {
                heroSub.textContent += original[i++];
                setTimeout(type, 28);
            }
        };
        setTimeout(type, 700);
    }

    /* ── Active nav link highlight on scroll ── */
    const sections = document.querySelectorAll('section[id], footer[id]');
    const navAnchors = document.querySelectorAll('.nav-links a');

    const activeSectionObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navAnchors.forEach(a => {
                    a.style.color = a.getAttribute('href') === '#' + entry.target.id
                        ? 'var(--heading-color)'
                        : '';
                });
            }
        });
    }, { threshold: 0.4 });

    sections.forEach(s => activeSectionObserver.observe(s));

    /* ── Console greeting ── */
    console.log(
        "%c👋 Hey developer! Nice to meet you.\n%cBuilt with care by Hector Ichaso.",
        "color: #3b82f6; font-size: 18px; font-weight: bold;",
        "color: #94a3b8; font-size: 13px;"
    );
});