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
            <li><a href="#certifications">Certs</a></li>
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
                    <h3>Software Developer · AssureSoft</h3>
                    <p>Modernized responsive pages and components on the company's Drupal site, resolving SEO and performance bottlenecks that cut page load time by 7 seconds. Implemented GA4/GTM tracking and built UTM-tracked landing pages with webforms. Architected an MCP integration connecting Claude Code to production database schemas for AI-assisted development, and championed Spec-Driven Development, lifting sprint story-point completion by 50% over three sprints.</p>
                    <div class="tags">
                        <span>Drupal</span><span>Twig</span><span>SCSS</span><span>GA4</span><span>GTM</span><span>MCP</span><span>PHP</span>
                    </div>
                </div>
                <div class="job">
                    <p class="date">Feb 2025 – Aug 2025</p>
                    <h3>Automation & Integration Specialist · Fastxo</h3>
                    <p>Engineered a HIPAA-compliant health-tech application managing data for 3,000+ active clients and 100+ internal users, with JWT/OAuth-secured data handling. Built a full-stack workflow-management app (React frontend, Laravel REST API backend) and designed an AI-agent-driven n8n system that classified ticket urgency and triggered automated routing, eliminating manual bottlenecks via external REST API integrations.</p>
                    <div class="tags">
                        <span>React</span><span>Laravel</span><span>PHP</span><span>n8n</span><span>JWT/OAuth</span><span>REST APIs</span>
                    </div>
                </div>
                <div class="job">
                    <p class="date">Jan 2024 – Jan 2025</p>
                    <h3>Backend Developer & Product Manager · CIBERIT</h3>
                    <p>Built scalable backend web services and RESTful APIs in C#/.NET 8, writing and tuning SQL Server objects with execution plans and indexes. Managed relational (SQL Server) and non-relational (MongoDB) databases, designed automations in Power Apps/Power Automate, consulted on ODOO CRM implementations for third-party companies, and owned an Identity and Access Management project end-to-end.</p>
                    <div class="tags">
                        <span>C#</span><span>.NET 8</span><span>SQL Server</span><span>MongoDB</span><span>Power Automate</span><span>ODOO</span>
                    </div>
                </div>
                <div class="job">
                    <p class="date">Feb 2023 – Nov 2023</p>
                    <h3>Software Developer (Intern) · Tesabiz</h3>
                    <p>Contributed to banking software applications across frontend and backend. Developed responsive user interfaces using Angular, TypeScript, HTML, and CSS, and designed automated unit and integration testing that reduced post-release bug tickets by over 50%.</p>
                    <div class="tags">
                        <span>Angular</span><span>TypeScript</span><span>HTML</span><span>CSS</span><span>Testing</span>
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
                        <h3>Biocor Business Website</h3>
                        <p>Designed and built a responsive, custom-coded business website from concept to launch for a cardiovascular disease center — including domain, DNS, hosting, and SSL configuration.</p>
                        <div class="tags"><span>HTML</span><span>CSS</span><span>JavaScript</span></div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-body">
                        <h3>1:1 Meeting Intake & Follow-up Automation</h3>
                        <p>Built a two-workflow automation (55 nodes) that uses an LLM to extract action items, goals, risks, and sentiment from meeting transcripts into a Google Sheet, then sends Slack reminders, escalates risks, and flags sentiment trends.</p>
                        <div class="tags"><span>n8n</span><span>LLM API</span><span>Google Workspace</span><span>Slack</span></div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-body">
                        <h3>Scholartech</h3>
                        <p>Engineered a Laravel platform that digitized campus payment ecosystems with QR-based cashless payments, admin dashboards for real-time sales/inventory tracking, and a secure parent portal.</p>
                        <div class="tags"><span>PHP</span><span>Laravel</span><span>JavaScript</span><span>MySQL</span></div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-body">
                        <h3>Coaching Calendar App</h3>
                        <p>Engineered a multi-tiered coaching platform with role-specific dashboards for admins, mentors, and students to streamline scheduling, goal tracking, and user management.</p>
                        <div class="tags"><span>PHP</span><span>Laravel</span><span>MySQL</span><span>REST APIs</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Skills ── -->
        <section id="skills">
            <span class="section-label">Toolbox</span>
            <h2>My Skills</h2>
            <p>Fullstack developer with hands-on experience across PHP, JavaScript/TypeScript, C#/.NET, and SQL — building responsive web apps, automating business workflows with n8n and Power Automate, and integrating AI tooling (Claude Code, MCP) into production systems. Comfortable working across CMS platforms, analytics stacks, and international remote teams. Fluent in Spanish, English, and Portuguese.</p>
            <div class="skill-icons">
                <span class="icon">PHP</span>
                <span class="icon">C#</span>
                <span class="icon">TypeScript</span>
                <span class="icon">JavaScript</span>
                <span class="icon">Java</span>
                <span class="icon">Python</span>
                <span class="icon">SQL</span>
                <span class="icon">React</span>
                <span class="icon">Angular</span>
                <span class="icon">.NET 8</span>
                <span class="icon">Laravel</span>
                <span class="icon">Drupal</span>
                <span class="icon">n8n</span>
                <span class="icon">Claude Code</span>
                <span class="icon">MCP</span>
                <span class="icon">GA4 / GTM</span>
                <span class="icon">SQL Server</span>
                <span class="icon">MongoDB</span>
                <span class="icon">Docker</span>
                <span class="icon">AWS</span>
                <span class="icon">Git</span>
            </div>
        </section>

        <!-- ── Certifications ── -->
        <section id="certifications">
            <span class="section-label">Credentials</span>
            <h2>Certifications</h2>
            <div class="cert-grid">
                <div class="cert-card">
                    <div class="cert-issuer">Anthropic</div>
                    <h3>Introduction to Subagents</h3>
                    <p class="date">Jun 2026</p>
                    <p>Fundamentals of designing and orchestrating AI subagent systems within the Claude ecosystem.</p>
                    <div class="cert-id">ID · rznp548etfi5</div>
                </div>
                <div class="cert-card">
                    <div class="cert-issuer">Anthropic</div>
                    <h3>Model Context Protocol: Advanced Topics</h3>
                    <p class="date">Jun 2026</p>
                    <p>Deep dive into advanced MCP patterns, server architecture, and production integration strategies.</p>
                    <div class="cert-id">ID · uwe8zojezduj</div>
                </div>
                <div class="cert-card">
                    <div class="cert-issuer">Anthropic</div>
                    <h3>Introduction to Model Context Protocol</h3>
                    <p class="date">Jun 2026</p>
                    <p>Core concepts and implementation of MCP for connecting AI models to external tools and data sources.</p>
                    <div class="tags"><span>Model Context Protocol</span></div>
                    <div class="cert-id">ID · mh7ai4wqi7zv</div>
                </div>
                <div class="cert-card">
                    <div class="cert-issuer">Anthropic</div>
                    <h3>Claude Code 101</h3>
                    <p class="date">Jun 2026</p>
                    <p>Foundations of using Claude Code as an AI-powered development assistant for real-world engineering tasks.</p>
                    <div class="tags"><span>Anthropic Claude</span></div>
                    <div class="cert-id">ID · ffjesd5rwhdk</div>
                </div>
                <div class="cert-card">
                    <div class="cert-issuer">Anthropic</div>
                    <h3>Claude Code in Action</h3>
                    <p class="date">Jun 2026</p>
                    <p>Practical application of Claude Code in production workflows, refactoring, and agentic task automation.</p>
                    <div class="cert-id">ID · kk4d5tzc2nxa</div>
                </div>
                <div class="cert-card">
                    <div class="cert-issuer">Vabro.ai &amp; VMEdu.com</div>
                    <h3>Scrum Fundamental Certified</h3>
                    <p class="date">Oct 2022</p>
                    <p>Scrum/Kanban, AI, Business Analysis, OKRs, Six Sigma, and Sales &amp; Marketing methodologies.</p>
                    <div class="tags"><span>Scrum</span><span>Metodologías ágiles</span></div>
                </div>
                <div class="cert-card">
                    <div class="cert-issuer">Forescout</div>
                    <h3>Sales Accreditation</h3>
                    <p class="date">2024</p>
                    <p>Accreditation covering network security solution positioning and technical fundamentals for enterprise sales conversations.</p>
                    <div class="tags"><span>Cybersecurity</span></div>
                </div>
            </div>
        </section>

        <!-- ── About ── -->
        <section id="about">
            <div class="about-text"> 
                <span class="section-label">Background</span>
                <h2>About me</h2>
                <p>I am a Fullstack Software Developer with a degree in Computational Systems Engineering from Universidad Privada Boliviana. I also hold a SCRUM Fundamental Certification, which reinforces my agile approach to building software.</p>
                <p>Across roles at AssureSoft, Fastxo, CIBERIT, and Tesabiz, I've shipped everything from HIPAA-compliant health-tech platforms to banking UIs and CRM/ERP automations — often within international, fully remote teams. I ramp up quickly on unfamiliar tools and codebases, and lean on AI tooling like Claude Code, MCP, and n8n to move faster without cutting corners.</p>
                <p>Whether modernizing legacy systems, wiring up analytics, or automating business workflows, I am driven by a dedication to building software that makes a tangible impact.</p>
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