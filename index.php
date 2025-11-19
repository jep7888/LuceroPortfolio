<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jefferson Lucero - Personal Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --color-bg-light: #ffffff; 
            --color-card-bg: #f9fafb; 
            --color-text-dark: #1f2937; 
            --color-text-muted: #6b7280; 
            --color-accent-indigo: #4f46e5; 
            --color-border-light: #e5e7eb; 
            --transition-speed: 0.3s;
            --border-radius: 12px;
            --shadow-soft: 0 5px 25px rgba(0, 0, 0, 0.06); 
            --font-main: "Inter", system-ui, -apple-system, sans-serif;
            --container-max-width: 1200px;
            --padding-section: 100px; 
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-main);
            background-color: var(--color-bg-light);
            color: var(--color-text-muted);
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        .container {
            max-width: var(--container-max-width);
            margin: 0 auto;
            padding: 0 25px;
        }

        .clean-card {
            background-color: var(--color-card-bg);
            border: 1px solid var(--color-border-light);
            box-shadow: var(--shadow-soft);
            border-radius: var(--border-radius);
            transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        }
        
        .clean-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(79, 70, 229, 0.15); 
            border-color: var(--color-accent-indigo);
            cursor: pointer;
        }

        section {
            padding: var(--padding-section) 0;
        }

        .section-divider {
            height: 2px;
            width: 80px;
            background-color: var(--color-accent-indigo);
            margin: 0 auto 40px;
            border-radius: 2px;
        }
        
        header {
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            background-color: rgba(255, 255, 255, 0.95); 
            backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--color-border-light);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
        }

        .logo {
            font-size: 1.5em;
            font-weight: 800;
            color: var(--color-text-dark);
            text-decoration: none;
            letter-spacing: -0.05em;
        }

        .logo span {
            color: var(--color-accent-indigo);
        }

        .nav-links a {
            color: var(--color-text-muted);
            text-decoration: none;
            margin-left: 30px;
            padding: 6px 0;
            font-size: 0.95em;
            font-weight: 500;
            position: relative;
            transition: color var(--transition-speed);
        }
        
        .nav-links a:hover, .nav-links a.active {
            color: var(--color-accent-indigo);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: var(--color-accent-indigo);
            left: 0;
            bottom: 0; 
            transform: scaleX(0);
            transform-origin: left;
            transition: transform var(--transition-speed) ease-in-out;
        }

        .nav-links a:hover::after, .nav-links a.active::after {
            transform: scaleX(1);
        }

        #hero {
            padding: 140px 0 var(--padding-section);
            display: flex;
            align-items: center;
            background-color: var(--color-card-bg);
        }
        
        .hero-flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
        }

        .hero-content {
            flex: 1;
            max-width: 65%; 
        }

        .hero-content h1 {
            font-size: 4.2em;
            margin-bottom: 15px; 
            line-height: 1.1;
            color: var(--color-text-dark);
            font-weight: 900;
            letter-spacing: -0.05em;
        }

        .hero-content h1 span {
            color: var(--color-accent-indigo);
        }

        .hero-content p {
            font-size: 1.2em;
            color: var(--color-text-dark); 
            font-weight: 400;
            margin-bottom: 40px;
            max-width: 600px;
        }

        .cta-button {
            display: inline-block;
            background-color: var(--color-accent-indigo);
            color: var(--color-bg-light); 
            padding: 14px 30px; 
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 0.05em;
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.4);
            transition: all var(--transition-speed);
            border: none;
            font-size: 1.05em;
        }

        .cta-button:hover {
            background-color: #3730a3;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(79, 70, 229, 0.5);
        }
        
        .hero-visual {
            flex-shrink: 0;
            width: 280px; 
            height: 280px;
            border-radius: 50%;
            background-color: var(--color-bg-light);
            border: 6px solid var(--color-border-light); 
            box-shadow: var(--shadow-soft);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden; 
        }
        
        .hero-visual img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }
        .section-header h2 {
            font-size: 2.5em;
            font-weight: 800;
            color: var(--color-text-dark);
            text-transform: capitalize;
            letter-spacing: -0.03em;
            margin-bottom: 5px;
        }
        .section-header p {
            font-size: 1.05em;
            color: var(--color-text-muted);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .about-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        .about-content p {
            font-size: 1.1em; 
            line-height: 1.7;
            color: var(--color-text-dark); 
            margin-bottom: 25px;
        }
        .about-content p:last-child {
            margin-bottom: 0;
        }
        .about-content strong {
            color: var(--color-accent-indigo);
            font-weight: 700;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .edu-card, .exp-card, .service-card {
            padding: 30px;
        }
        .edu-card h3, .exp-card h3, .service-card h3 {
            color: var(--color-accent-indigo);
            margin-bottom: 5px;
            font-size: 1.4em;
            font-weight: 700;
        }
        .edu-card > p, .exp-card > p, .service-card > p {
            font-size: 1.05em;
            color: var(--color-text-muted);
            font-weight: 500;
            margin-bottom: 20px;
        }
        .edu-card ul, .exp-card ul {
            list-style: none;
            padding-left: 0;
            margin-top: 15px;
        }
        .edu-card li, .exp-card li {
            font-size: 0.95em;
            margin-top: 10px;
            color: var(--color-text-muted);
        }
        .edu-card li::before, .exp-card li::before {
            content: "•"; 
            color: var(--color-accent-indigo);
            font-weight: bold;
            margin-right: 10px;
        }

        .service-card {
            min-height: 180px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .service-card h3 {
            color: var(--color-text-dark);
            font-size: 1.5em;
        }
        .service-card p {
            font-size: 1em;
            margin-top: 10px;
            color: var(--color-text-muted);
            line-height: 1.5;
        }
        .service-card:hover h3 {
             color: var(--color-accent-indigo);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 40px 80px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .skill-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 1.1em;
            font-weight: 600;
            color: var(--color-text-dark);
        }
        
        .skill-bar-container {
            height: 8px;
            background-color: var(--color-border-light);
            border-radius: 4px;
            overflow: hidden;
        }

        .skill-bar {
            height: 100%;
            background-color: var(--color-accent-indigo);
            width: 0%; 
            transition: width 1.5s cubic-bezier(0.25, 1, 0.5, 1);
            border-radius: 4px;
            animation: fillBar 1.5s forwards;
            box-shadow: 0 0 10px rgba(79, 70, 229, 0.3);
        }

        @keyframes fillBar {
            from { width: 0%; }
        }
        
        .skill-bar-container[data-w="95"] .skill-bar { width: 95%; }
        .skill-bar-container[data-w="88"] .skill-bar { width: 88%; }
        .skill-bar-container[data-w="82"] .skill-bar { width: 82%; }
        .skill-bar-container[data-w="78"] .skill-bar { width: 78%; }


        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
            gap: 40px;
        }

        .project-card {
            padding: 0;
            overflow: hidden;
            background-color: var(--color-bg-light); 
            border: 1px solid var(--color-border-light);
        }

        .project-image-placeholder {
            width: 100%;
            height: 220px;
            background-color: var(--color-card-bg); 
            border-bottom: 1px solid var(--color-border-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-text-muted);
            font-weight: 500;
            font-size: 1em;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .project-card[data-project-id="1"] .project-image-placeholder { 
             background-color: #f0f4ff; 
             color: var(--color-accent-indigo);
        }
         .project-card[data-project-id="2"] .project-image-placeholder { 
             background-color: #fff0f0;
             color: #ef4444; 
        }
        .project-card[data-project-id="3"] .project-image-placeholder { 
             background-color: #f0fff0; 
             color: #10b981;
        }


        .project-details {
            padding: 30px; 
        }

        .project-details h3 {
            color: var(--color-text-dark);
            margin-bottom: 8px;
            font-size: 1.5em;
            font-weight: 700;
        }
        .project-details p {
            color: var(--color-text-muted);
            font-size: 0.95em;
            margin-bottom: 20px;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .project-tag {
            font-size: 0.8em;
            padding: 5px 12px;
            border-radius: 99px; 
            background-color: rgba(79, 70, 229, 0.1); 
            color: var(--color-accent-indigo);
            font-weight: 600;
        }

        .contact-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px; 
            margin: 30px auto 40px;
            max-width: 800px;
        }

        .contact-item {
            display: flex;
            align-items: center;
        }

        .contact-link {
            display: flex;
            align-items: center;
            color: var(--color-text-dark); 
            font-weight: 500;
            text-decoration: none;
            transition: color var(--transition-speed);
            font-size: 1.1em;
        }

        .contact-link:hover {
            color: var(--color-accent-indigo);
        }

        .contact-link svg {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            fill: currentColor;
        }

        .contact-link span {
            color: var(--color-accent-indigo);
            font-weight: 600;
            margin-left: 5px;
        }


        footer {
            padding: 60px 0;
            text-align: center;
            border-top: 1px solid var(--color-border-light);
            font-size: 1em;
            color: var(--color-text-muted);
            background-color: var(--color-card-bg); 
        }
        footer a {
            color: var(--color-accent-indigo);
            text-decoration: none;
            font-weight: 600;
            transition: color var(--transition-speed);
        }
        footer a:hover {
             color: #3730a3;
        }
        
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 200;
            display: none; 
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
        
        .modal-overlay.active {
            display: flex;
            opacity: 1;
        }

        .modal-content {
            background-color: var(--color-bg-light);
            border-radius: var(--border-radius);
            width: 95%;
            max-width: 1100px;
            max-height: 95vh;
            overflow-y: auto;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
            position: relative;
            padding: 40px;
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 2em;
            color: var(--color-text-dark);
            cursor: pointer;
            line-height: 1;
            transition: color 0.2s;
        }
        
        .modal-close:hover {
            color: var(--color-accent-indigo);
        }

        #modal-title {
            color: var(--color-text-dark);
            font-size: 2.2em;
            font-weight: 800;
            margin-bottom: 10px;
        }

        #modal-long-description {
            color: var(--color-text-muted);
            font-size: 1.05em;
            line-height: 1.7;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--color-border-light);
        }

        .screenshots-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .screenshot-item {
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .screenshot-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s;
        }
        
        .screenshot-item img:hover {
            transform: scale(1.03);
        }
        
        .modal-subtitle {
             color: var(--color-text-dark);
             font-size: 1.3em;
             font-weight: 600;
             margin-top: 20px;
             margin-bottom: 15px;
        }


        /* --- Responsiveness (Mobile Layout) --- */
        @media (max-width: 950px) {
            :root {
                --padding-section: 60px;
            }
            .hero-flex {
                flex-direction: column-reverse;
                text-align: center;
            }
            .hero-content {
                max-width: 100%;
            }
            .hero-content h1 {
                font-size: 2.8em;
            }
            .hero-content p {
                font-size: 1.1em;
            }
            .hero-visual {
                width: 200px;
                height: 200px;
                margin-bottom: 30px;
                border-width: 4px;
            }
            .section-header h2 {
                font-size: 2em;
            }
            .nav-links {
                display: none;
            }
            .skills-grid {
                grid-template-columns: 1fr;
            }
            .card-grid {
                 grid-template-columns: 1fr;
            }
            .service-card {
                 min-height: 150px;
            }
            .contact-links {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            .modal-content {
                padding: 20px;
            }
            #modal-title {
                font-size: 1.8em;
            }
            .screenshots-grid {
                grid-template-columns: 1fr; 
            }
        }

        .project-image-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: inherit;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Jefferson <span>Lucero</span></a>
                <div class="nav-links">
                    <a href="#hero" class="active">Home</a>
                    <a href="#about">About</a>
                    <a href="#experience">Experience</a>
                    <a href="#skills">Skills</a>
                    <a href="#freelance">Freelance</a> <a href="#projects">Projects</a>
                    <a href="#contact">Contact</a>
                </div>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="container">
            <div class="hero-flex">
                <div class="hero-content">
                   <h1>
                        Hello, I'm Jefferson Lucero,<br>
                        An <span>IT Specialist</span> & <span>Web Developer</span>.
                    </h1>
                    <p>
                        I build responsive, maintainable web experiences and provide practical IT solutions — from frontend interfaces, full‑stack, and prototypes to hands‑on hardware support and system troubleshooting. I combine web development best practices with real‑world technical support experience to deliver reliable, user‑focused results.
                    </p>
                    <a href="#projects" class="cta-button">View projects</a>
                </div>
                <div class="hero-visual">
                    <img src="formal.jpg" alt="Your professional data scientist portrait" onerror="this.onerror=null; this.src='https://placehold.co/280x280/e5e7eb/6b7280?text=Profile';" />
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="section-header">
                <h2>Professional Overview</h2>
                <div class="section-divider"></div>
                <p>
                    Technical capabilities rooted in practical IT support, hardware diagnostics, and modern front-end, back-end, and full-stack web development.
                </p>
            </div>

            <div class="about-content">
                <p>
                    I am an IT professional specializing in web development, system assembly and maintenance, and hands-on technical troubleshooting. 
                    I build responsive interfaces, dynamic web applications, and functional full-stack prototypes using HTML, CSS, JavaScript, PHP, and MySQL. 
                    Beyond software, I also perform hardware diagnostics, PC repair, and workstation assembly/disassembly to keep systems running smoothly.
                </p>

                <p>
                    I work across the full development workflow—from UI prototyping in Figma, to coding front-end layouts, to developing backend logic and database structures. 
                    Whether creating a clean user experience, building a working PHP–MySQL application, or restoring malfunctioning hardware, I apply clear documentation, reliable processes, and practical problem-solving.
                </p>

                <p style="color: var(--color-accent-indigo); font-weight: 600;">
                    I studied Bachelor of Science in Information Technology at Bulacan State University — Bustos Campus and am available for freelance and contract work in front-end development, full-stack prototyping, UI/UX planning, and hands-on IT support.
                </p>
            </div>
        </div>
    </section>

    <section id="experience" style="background-color: var(--color-card-bg);">
        <div class="container">
            <div class="section-header">
                <h2>Education & Experience</h2>
                <div class="section-divider"></div>
                <p>Academic foundation and practical hands-on work that shaped my technical capabilities.</p>
            </div>

            <div class="card-grid">

                <div class="edu-card clean-card">
                    <h3>Bulacan State University — Bustos Campus</h3>
                    <p>Bachelor of Science in Information Technology</p>
                    <ul>
                        <li>Core subjects included Web Development, Database Systems (MySQL), and Systems Analysis.</li>
                        <li>Developed functional web applications, designed relational databases, and completed technical support laboratory activities.</li>
                        <li>Gained experience in prototyping using Figma and implementing backend functionality with PHP.</li>
                    </ul>
                </div>

                <div class="exp-card clean-card">
                    <h3>IT Technician & Web Developer (Freelance)</h3>
                    <p>Independent projects & local client engagements</p>
                    <ul>
                        <li>Created responsive front-end interfaces and full-stack prototypes using HTML, CSS, JavaScript, PHP, and MySQL.</li>
                        <li>Performed hardware diagnostics, PC assembly/disassembly, operating system installation, and component upgrades.</li>
                        <li>Provided on-site troubleshooting and remote assistance for desktop systems.</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <div class="section-header">
                <h2>Technical Toolkit</h2>
                <div class="section-divider"></div>
                <p>A well-rounded mix of web development, database work, prototyping, and hands-on IT support.</p>
            </div>

            <div class="skills-grid">

                <!-- Frontend Development -->
                <div class="skill-item">
                    <div class="skill-meta"><span>Frontend Development (HTML, CSS, JS)</span><span>90%</span></div>
                    <div class="skill-bar-container" data-w="90"><div class="skill-bar"></div></div>
                </div>

                <!-- Backend & Full Stack -->
                <div class="skill-item">
                    <div class="skill-meta"><span>Backend & Full-Stack (PHP, MySQL)</span><span>85%</span></div>
                    <div class="skill-bar-container" data-w="85"><div class="skill-bar"></div></div>
                </div>

                <!-- Database Work -->
                <div class="skill-item">
                    <div class="skill-meta"><span>Database Design & Management (MySQL)</span><span>85%</span></div>
                    <div class="skill-bar-container" data-w="85"><div class="skill-bar"></div></div>
                </div>

                <!-- Prototyping -->
                <div class="skill-item">
                    <div class="skill-meta"><span>UI Prototyping & Wireframing (Figma)</span><span>80%</span></div>
                    <div class="skill-bar-container" data-w="80"><div class="skill-bar"></div></div>
                </div>

                <!-- IT Support -->
                <div class="skill-item">
                    <div class="skill-meta"><span>PC Hardware, Diagnostics & Troubleshooting</span><span>90%</span></div>
                    <div class="skill-bar-container" data-w="90"><div class="skill-bar"></div></div>
                </div>

                <!-- System Assembly -->
                <div class="skill-item">
                    <div class="skill-meta"><span>System Assembly, OS Installation & Maintenance</span><span>85%</span></div>
                    <div class="skill-bar-container" data-w="85"><div class="skill-bar"></div></div>
                </div>

            </div>
        </div>
    </section>

    <section id="freelance">
        <div class="container">
            <div class="section-header">
                <h2>Freelance Services</h2>
                <div class="section-divider"></div>
                <p>Hands-on services available for businesses and individuals.</p>
            </div>
            <div class="card-grid">
                <div class="service-card clean-card">
                    <h3>Frontend Development</h3>
                    <p>Pixel-accurate, responsive interfaces using modern HTML, CSS and JavaScript. Accessibility and performance focused.</p>
                </div>

                <div class="service-card clean-card">
                    <h3>Prototype & MVP Development</h3>
                    <p>Rapid prototypes and functional MVPs to validate ideas and accelerate product iterations.</p>
                </div>

                <div class="service-card clean-card">
                    <h3>Full‑Stack Web Development</h3>
                    <p>End-to-end web applications with server-side logic, databases, and integrations following maintainable patterns.</p>
                </div>

                <div class="service-card clean-card">
                    <h3>IT Support & Hardware Services</h3>
                    <p>PC assembly/disassembly, hardware diagnostics, OS installation, network setup, and on-site troubleshooting.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="projects" style="background-color: var(--color-card-bg);">
        <div class="container">
            <div class="section-header">
                <h2>Projects</h2>
                   <div class="section-divider"></div>
                <p>Academic and personal projects demonstrating applied programming and analytical skills. Click a card to view the full case study and visuals!</p>
            </div>
            <div class="projects-grid">
                
                <div class="project-card clean-card" data-project-id="1">
                   <div class="project-image-placeholder">
                        <img src="Sync1.png" alt="Syncrostaff Preview">
                    </div>

                    <div class="project-details">
                        <h3>Syncrostaff</h3>
                        <p>A unified web and mobile intelligence hub designed for smarter hotel operations. Streamline staff scheduling, automate real-time request dispatch, and ensure seamless coordination across teams—anytime, anywhere. With in-room QR codes, guests can instantly scan and submit service requests, ensuring fast, direct communication and a smoother overall experience.</p>
                        <div class="project-tags">
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">HTML</span>
                            <span class="project-tag">CSS</span>
                            <span class="project-tag">JavaScript</span>
                            <span class="project-tag">Firebase</span>
                            <span class="project-tag">Android Studio</span>
                            <span class="project-tag">Figma</span>
                        </div>
                    </div>
                </div>

                <div class="project-card clean-card" data-project-id="2">
                   <div class="project-image-placeholder">
                        <img src="Aet1.png" alt="Aeta Dumagat Preview">
                    </div>
                    <div class="project-details">
                        <h3>Aeta Duamagat Tribal Organization</h3>
                        <p>A centralized digital platform designed to support the Aeta and Dumagat communities through efficient, transparent, and organized data management. This system streamlines the collection and handling of community records, ensuring accurate tracking of households, membership information, and essential needs.
                            It also provides a structured process for monitoring resource distribution—such as relief goods, donations, and community projects—helping leaders ensure fairness, accountability, and timely support. With intuitive tools for organizing data, generating reports, and coordinating community initiatives, the system empowers the Aeta–Dumagat organization to enhance communication, strengthen operations, and deliver services more effectively.</p>
                        <div class="project-tags">
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">HTML</span>
                            <span class="project-tag">CSS</span>
                            <span class="project-tag">JavaScript</span>
                            <span class="project-tag">MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="project-card clean-card" data-project-id="3">
                   <div class="project-image-placeholder">
                        <img src="DMO1.png">
                    </div>
                    <div class="project-details">
                        <h3>BulsuniData</h3>
                        <p>BulsuniData is a secure and efficient data management platform designed for the Data Management Office (DMO) of Bulacan State University – Bustos Campus. Built to streamline campus operations, the system enables faster task distribution, organized workflow management, and more accurate handling of campus data.With an encrypted and centralized database, BulsuniData ensures that all information—student records, staff tasks, documents, and operational updates—is protected and accessible only to authorized personnel. Its modern interface makes it easy to assign, track, and manage tasks across departments, promoting smoother coordination and improved productivity.By integrating secure data handling with real-time task monitoring, BulsuniData enhances efficiency, transparency, and accountability within the campus, supporting BulSU Bustos in delivering a more responsive and technology-driven administrative experience.</p>
                        <div class="project-tags">
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">HTML</span>
                            <span class="project-tag">CSS</span>
                            <span class="project-tag">JavaScript</span>
                            <span class="project-tag">MySQL</span>
                            <span class="project-tag">Figma</span>
                        </div>
                    </div>
                </div>

                <div class="project-card clean-card" data-project-id="4">
                   <div class="project-image-placeholder">
                        <img src="POS1.png">
                    </div>

                    <div class="project-details">
                        <h3>TindaPOS</h3>
                        <p>A fast and easy Point-of-Sale system designed for small vendors in Philippine public markets. It helps you track sales, manage inventory, and record daily earnings without the hassle—built to be simple, reliable, and perfect for everyday market operations.</p>
                        <div class="project-tags">
                            <span class="project-tag">Java</span>
                            <span class="project-tag">MySQL</span>
                            <span class="project-tag">Jasper Reports</span>
                        </div>
                    </div>
                </div>
 
                 <div class="project-card clean-card" data-project-id="5">
                   <div class="project-image-placeholder">
                        <img src="MW1.png">
                    </div>

                    <div class="project-details">
                        <h3>Mental Wellness</h3>
                        <p>A mental wellness platform designed for BPO teams, helping agents check their emotional well-being, build awareness, and access support resources. It promotes a healthier, more resilient workforce by making mental check-ins simple, confidential, and part of everyday work life.</p>
                        <div class="project-tags">
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">HTML</span>
                            <span class="project-tag">CSS</span>
                             <span class="project-tag">Javascript</span>
                              <span class="project-tag">MySQL</span>
                        </div>
                    </div>
                </div>               

            </div>
        </div>
    </section>

    <div id="project-modal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" id="close-modal-btn">&times;</button>
            <h2 id="modal-title"></h2>
            <p id="modal-long-description"></p>
            
            <h3 class="modal-subtitle">Visuals & Screenshots</h3>
            <div class="screenshots-grid" id="modal-screenshots">
                </div>
        </div>
    </div>


    <footer id="contact">
        <div class="container">
            <p style="font-size: 1.3em; font-weight: 700; color: var(--color-text-dark); margin-bottom: 25px;">
                Ready to Quantify Success? Initiate the Next Data-Driven Conversation.
            </p>

            <div class="contact-links">
                <div class="contact-item">
                    <a href="mailto:jeffersontlucero1009@gmail.com" class="contact-link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M1.5 8.67l7.24 3.481V5.093c0-.495.27-.96.732-1.22l8.846-4.992a.75.75 0 011.05.679v14.072l6.265 2.871a.75.75 0 01.077 1.348l-23.73 11.231a.75.75 0 01-.84-1.127l7.07-5.326V8.67z" />
                        </svg>
                        Email: <span>jeffersontlucero1009@gmail.com</span>
                    </a>
                </div>
                
                <div class="contact-item">
                    <a href="https://www.linkedin.com/in/jefferson-lucero-b2b697378" target="_blank" class="contact-link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM4 9h4v12H4zM6 3.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5z" />
                        </svg>
                        LinkedIn: <span>linkedin.com/in/jefferson-lucero-b2b697378</span>
                    </a>
                </div>
                
                <div class="contact-item">
                    <a href="https://github.com/yourusername" target="_blank" class="contact-link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.417 2.865 8.169 6.83 9.497.5.092.682-.217.682-.482 0-.237-.008-.868-.013-1.703-2.782.605-3.371-1.343-3.371-1.343-.454-1.154-1.11-1.468-1.11-1.468-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.829.091-.643.354-1.088.649-1.346-2.22-.251-4.555-1.116-4.555-4.949 0-1.092.39-1.983 1.029-2.675-.103-.251-.446-1.266.098-2.636 0 0 .84-.27 2.75 1.025A9.22 9.22 0 0112 6.865c.85.004 1.701.127 2.5.378 1.908-1.296 2.748-1.025 2.748-1.025.546 1.37.202 2.385.1 2.636.64.692 1.028 1.583 1.028 2.675 0 3.84-2.334 4.691-4.566 4.938.359.309.678.92.678 1.854 0 1.346-.012 2.443-.012 2.787 0 .265.18.574.688.481C21.135 20.181 24 16.429 24 12.017 24 6.484 19.522 2 14 2h-2z" clip-rule="evenodd" />
                        </svg>
                        GitHub: <span></span>
                    </a>
                </div>
            </div>

            <p style="margin-top: 30px; font-size: 0.9em;">&copy; 2024 JeffersonLucero.</p>
        </div>
    </footer>

    <script>
        function getPlaceholderImage(id, text) {
            const width = 600;
            const height = 400;
            const bg = ['4f46e5', 'ef4444', '10b981', 'f97316'][id - 1] || 'd1d5db';
            const fg = 'ffffff';
            return `https://placehold.co/${width}x${height}/${bg}/${fg}?text=${encodeURIComponent(text)}`;
        }

        const projectData = [
            {
                id: 1,
                title: "Syncrostaff",
                description: "A unified web and mobile intelligence hub designed for smarter hotel operations. Streamline staff scheduling, automate real-time request dispatch, and ensure seamless coordination across teams—anytime, anywhere. With in-room QR codes, guests can instantly scan and submit service requests, ensuring fast, direct communication and a smoother overall experience.",
                tags: ["PHP", "HTML", "CSS", "JavaScript", "Firbase", "Android Studio", "Figma"],
                screenshots: [
                    "Sync1.png",
                    "Sync2.png",
                    "Sync3.png",
                    "Sync4.png",
                    "Sync5.png",
                    "Sync6.png",
                    "Sync7.png",
                    "Sync8.png",
                    "Sync9.png",
                    "Sync10.png",
                    "Sync11.png"
                ]
            },
            {
                id: 2,
                title: "Aeta Duamagat Tribal Organization",
                description: "A centralized digital platform designed to support the Aeta and Dumagat communities through efficient, transparent, and organized data management. This system streamlines the collection and handling of community records, ensuring accurate tracking of households, membership information, and essential needs.It also provides a structured process for monitoring resource distribution—such as relief goods, donations, and community projects—helping leaders ensure fairness, accountability, and timely support. With intuitive tools for organizing data, generating reports, and coordinating community initiatives, the system empowers the Aeta–Dumagat organization to enhance communication, strengthen operations, and deliver services more effectively.",
                tags: ["PHP", "HTML", "CSS", "JavaScript", "MySQL"],
                screenshots: [
                    "Aet1.png",
                    "Aet2.png",
                    "Aet3.png",
                    "Aet4.png",
                    "Aet5.png",
                    "Aet6.png",
                    "Aet7.png",
                    "Aet8.png",
                    "Aet9.png",
                    "Aet10.png",
                    "Aet11.png",
                    "Aet12.png",
                    "Aet13.png",
                    "Aet14.png",
                    "Aet15.png",
                    "Aet16.png",
                    "Aet17.png",
                    "Aet18.png",
                    "Aet19.png",
                    "Aet20.png",
                    "Aet21.png",
                    "Aet22.png",
                    "Aet23.png",
                    "Aet24.png",
                    "Aet25.png",
                    "Aet26.png"
                ]
            },
            {
                id: 3,
                title: "BulsuniData",
                description: "BulsuniData is a secure and efficient data management platform designed for the Data Management Office (DMO) of Bulacan State University – Bustos Campus. Built to streamline campus operations, the system enables faster task distribution, organized workflow management, and more accurate handling of campus data.With an encrypted and centralized database, BulsuniData ensures that all information—student records, staff tasks, documents, and operational updates—is protected and accessible only to authorized personnel. Its modern interface makes it easy to assign, track, and manage tasks across departments, promoting smoother coordination and improved productivity.By integrating secure data handling with real-time task monitoring, BulsuniData enhances efficiency, transparency, and accountability within the campus, supporting BulSU Bustos in delivering a more responsive and technology-driven administrative experience.",
                tags: ["PHP, HTML, CSS, JavaScript, MySQL, Figma"],
                screenshots: [
                    "DMO1.png",
                    "DMO2.png",
                    "DMO3.png",
                    "DMO4.png",
                    "DMO5.png",
                    "DMO6.png",
                    "DMO7.png",
                    "DMO8.png",
                    "DMO9.png",
                    "DMO10.png",
                    "DMO11.png",
                    "DMO12.png",
                    "DMO13.png",
                    "DMO14.png",
                    "DMO15.png"
                ]
            },
            {
                id: 4,
                title: "TindaPOS",
                description: "A fast and easy Point-of-Sale system designed for small vendors in Philippine public markets. It helps you track sales, manage inventory, and record daily earnings without the hassle—built to be simple, reliable, and perfect for everyday market operations.",
                tags: ["Java, MySQL, Jasper Reports"],
                screenshots: [
                    "POS1.png",
                    "POS2.png",
                    "POS3.png",
                    "POS4.png",
                    "POS5.png",
                    "POS6.png",
                    "POS7.png",
                    "POS8.png",
                    "POS9.png"
                ]
            },
            {
                id: 5,
                title: "Mental Wellness",
                description: "A mental wellness platform designed for BPO teams, helping agents check their emotional well-being, build awareness, and access support resources. It promotes a healthier, more resilient workforce by making mental check-ins simple, confidential, and part of everyday work life.",
                screenshots: [
                    "MW1.png",
                    "WM2.png",
                    "MW3.png",
                    "MW4.png",
                    "MW5.png",
                    "MW6.png",
                    "MW7.png",
                    "MW8.png",
                    "MW9.png",
                    "MW10.png",
                    "MW11.png",
                    "MW12.png"
                ]
            }
        ];
        
        const modalOverlay = document.getElementById('project-modal');
        const modalTitle = document.getElementById('modal-title');
        const modalDescription = document.getElementById('modal-long-description');
        const modalScreenshots = document.getElementById('modal-screenshots');
        const closeModalBtn = document.getElementById('close-modal-btn');
        
        function openModal(project) {
            modalTitle.textContent = project.title;
            modalDescription.textContent = project.description;

            modalScreenshots.innerHTML = ''; 
            
            project.screenshots.forEach(src => {
                const item = document.createElement('div');
                item.className = 'screenshot-item';
                const img = document.createElement('img');
                img.src = src;
                img.alt = `Screenshot for ${project.title}`;
                img.onerror = function() { this.src='https://placehold.co/600x400/d1d5db/6b7280?text=Image+Unavailable'; };

                item.appendChild(img);
                modalScreenshots.appendChild(item);
            });
            
            modalOverlay.classList.add('active');
            document.body.style.overflow = 'hidden'; 
            modalOverlay.focus();
        }

        function closeModal() {
            modalOverlay.classList.remove('active');
            document.body.style.overflow = ''; 
        }

        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('click', function () {
                const id = parseInt(this.getAttribute('data-project-id'));
                const project = projectData.find(p => p.id === id);
                
                if (project) {
                    openModal(project);
                }
            });
        });

        closeModalBtn.addEventListener('click', closeModal);
        modalOverlay.addEventListener('click', (e) => {
            if (e.target.id === 'project-modal') {
                closeModal();
            }
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
                closeModal();
            }
        });

        document.querySelectorAll('.nav-links a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        const skillBars = document.querySelectorAll('.skill-bar-container');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target.querySelector('.skill-bar');
                    const width = entry.target.getAttribute('data-w') + '%';
                    bar.style.width = width;
                    observer.unobserve(entry.target); 
                }
            }
            );
        }, {
            threshold: 0.5 
        });

        skillBars.forEach(bar => {
            observer.observe(bar);
        });

        window.addEventListener('scroll', () => {
            let current = '';
            
            document.querySelectorAll('section').forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 100) { 
                    current = section.getAttribute('id');
                }
            });

            const isAtBottom = (window.innerHeight + window.scrollY) >= document.body.offsetHeight - 100;
            if (isAtBottom) {
                current = 'contact'; 
            }

            document.querySelectorAll('.nav-links a').forEach(a => {
                a.classList.remove('active');
                if (a.getAttribute('href') === '#' + current) {
                    a.classList.add('active');
                }
            });
        });

    </script>
</body>
</html>