<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hector Ichaso | Fullstack Software Developer</title>
    @vite(['resources/css/home.css', 'resources/js/home.js'])
</head>
<body>
    <nav id="navbar">
        <div class="logo">Hector.dev</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#contact" class="btn-connect">Let's Connect!</a></li>
        </ul>
    </nav>

    <main>
        <!-- ── Hero ── -->
        <section id="home" class="hero">

            <h1>Hi, I'm <span class="highlight">Hector Ichaso</span></h1>
            <h2>Fullstack Software Developer based in Santa Cruz, Bolivia</h2>

            <div class="hero-badges">
                <span class="badge"><span class="badge-dot"></span> Open to work</span>
                <span class="badge">3+ years experience</span>
                <span class="badge">EN · ES · PT</span>
            </div>

            <div class="social-links">
                <a href="https://www.linkedin.com/in/hector-ichaso-barrientos-48158a238/" target="_blank" class="btn">LinkedIn</a>
                <a href="https://github.com/hectorib2001" target="_blank" class="btn">GitHub</a>
            </div>

            <div class="scroll-hint">
                <div class="scroll-line"></div>
                <span>Scroll</span>
            </div>
        </section>

        <!-- ── Experience ── -->
        <section id="experience">
            <span class="section-label">Career</span>
            <h2>Experience</h2>
            <div class="timeline">
                <div class="job">
                    <p class="date">Sep 2025 – Present</p>
                    <h3>Fullstack Software Developer · Assuresoft</h3>
                    <p>Engineered responsive web pages and modernized legacy components on a Drupal-based corporate website. Optimized site performance and SEO, and created custom Drupal hooks to automate image optimization and enhance scalability.</p>
                    <div class="tags">
                        <span>Drupal</span><span>Twig</span><span>SCSS</span><span>JavaScript</span><span>GTM</span><span>PHP</span>
                    </div>
                </div>
                <div class="job">
                    <p class="date">Feb 2025 – Aug 2025</p>
                    <h3>Fullstack Software Developer · Fastxo</h3>
                    <p>Developed a tailored HIPAA-compliant app managing 3000+ active clients. Built applications leveraging AI technologies to enhance operational efficiency and automated multiple business workflows using n8n.</p>
                    <div class="tags">
                        <span>n8n</span><span>AI APIs</span><span>App Development</span><span>React</span><span>Laravel</span><span>PHP</span>
                    </div>
                </div>
                <div class="job">
                    <p class="date">Jan 2024 – Jan 2025</p>
                    <h3>Product Manager & Software Developer · CiberIT</h3>
                    <p>Implemented robust and scalable web applications using C# and the .NET 8 framework. Designed process automation solutions using Power Apps and Power Automate, and optimized SQL Server and MongoDB databases.</p>
                    <div class="tags">
                        <span>C#</span><span>.NET 8</span><span>Power Apps</span><span>SQL Server</span><span>MongoDB</span>
                    </div>
                </div>
                <div class="job">
                    <p class="date">Jan 2023 – Oct 2023</p>
                    <h3>Software Developer · TESABIZ</h3>
                    <p>Implemented automated software testing, reducing client-reported bug tickets by over 50%. Developed dynamic applications using Java within the Angular framework.</p>
                    <div class="tags">
                        <span>Java</span><span>Angular</span><span>TypeScript</span><span>HTML</span><span>CSS</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Projects ── -->
        <section id="projects">
            <span class="section-label">Work</span>
            <h2>Projects</h2>
            <div class="project-grid">
                <div class="project-card">
                    <div class="project-card-body">
                        <h3>Scholartech</h3>
                        <p>Developed an all-in-one digitalized payment ecosystem to streamline transactions in educational institutions. Features include QR code payments, administrative dashboards, and inventory management tools.</p>
                        <div class="tags"><span>PHP</span><span>Laravel</span><span>JavaScript</span><span>MySQL</span></div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-body">
                        <h3>Calendar APP</h3>
                        <p>Built a coaching management platform supporting administrators, mentors, and students. Enabled mentors to schedule sessions and track progress through interactive dashboards.</p>
                        <div class="tags"><span>PHP</span><span>Laravel</span><span>JavaScript</span><span>MySQL</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Skills ── -->
        <section id="skills">
            <span class="section-label">Toolbox</span>
            <h2>My Skills</h2>
            <p>Strong foundation in full-stack development — PHP, C#, Java, Python, SQL, JavaScript, and HTML/CSS. Experienced with .NET 8, Laravel, Angular, and Drupal. Fluent in Spanish, English, and Portuguese, and a dedicated leverager of AI tooling to move faster and build better.</p>
            <div class="skill-icons">
                <span class="icon">PHP</span>
                <span class="icon">C#</span>
                <span class="icon">Java</span>
                <span class="icon">Python</span>
                <span class="icon">SQL</span>
                <span class="icon">JavaScript</span>
                <span class="icon">React</span>
                <span class="icon">.NET 8</span>
                <span class="icon">Laravel</span>
                <span class="icon">Angular</span>
                <span class="icon">Drupal</span>
                <span class="icon">Docker</span>
                <span class="icon">AWS</span>
                <span class="icon">n8n</span>
                <span class="icon">Git</span>
            </div>
        </section>

        <!-- ── About ── -->
        <section id="about">
            <div class="about-text"> 
                <span class="section-label">Background</span>
                <h2>About me</h2>
                <p>I am a Fullstack Software Developer with a degree in Computational Systems Engineering from Universidad Privada Boliviana. I also hold a SCRUM Fundamental Certification, which reinforces my agile approach to building software.</p>
                <p>I'm a quick learner who adapts easily to new challenges and thrives in collaborative team environments. I genuinely enjoy solving complex problems and extensively leverage AI technologies to boost operational efficiency and deliver high-quality, scalable solutions.</p>
                <p>Whether modernizing legacy systems or automating business workflows, I am driven by a dedication to building software that makes a tangible impact.</p>
            </div>
            <img src="{{ asset('images/about.jpg') }}" alt="Image of a developer" class="about-image-placeholder" />
        </section>
    </main>

    <footer id="contact">
        <h2>Let's Connect!</h2>
        <p class="tagline">Open to new opportunities. Let's build something great together.</p>
        <div class="social-links">
            <a href="mailto:hectorichasobarrientos@gmail.com" class="btn">Email</a>
            <a href="https://www.linkedin.com/in/hector-ichaso-barrientos-48158a238/" target="_blank" class="btn">LinkedIn</a>
            <a href="https://github.com/hectorib2001" target="_blank" class="btn">GitHub</a>
        </div>
        <p>&copy; 2026 Hector Ichaso</p>
    </footer>
</body>
</html>