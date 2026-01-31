<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Agri-Service</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #2d3b2d;
            background-color: #f8faf8;
            line-height: 1.6;
        }

        /* Navigation Header */
        header {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            border-bottom: 1px solid rgba(45, 90, 61, 0.1);
        }

        .logo a {
            display: flex;
            text-decoration: none;
            cursor: pointer;
            gap: 5px;
        }

        .logo h2 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2d5a3d;
            letter-spacing: -0.5px;
            transition: all 0.3s ease;
        }

        .logo a:hover h2 {
            color: #4caf50;
        }

        .nav-links a {
            color: #3d5a3d;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1.5px solid #2d5a3d;
            background: white;
        }

        .nav-links a:hover {
            background: #2d5a3d;
            color: white;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 120px 20px 80px;
            background: linear-gradient(165deg, #f0f7f0 0%, #e8f5e9 50%, #dcedc8 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(124, 179, 66, 0.15) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(45, 90, 61, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-content {
            max-width: 800px;
            position: relative;
            z-index: 1;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(45, 90, 61, 0.1);
            color: #2d5a3d;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-bottom: 24px;
            letter-spacing: 0.5px;
        }

        .hero h1 {
            color: #1a3322;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .hero h1 span {
            background: linear-gradient(135deg, #4caf50 0%, #2d5a3d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            color: #4a5f4a;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 32px;
            font-weight: 400;
        }

        .hero-buttons {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 28px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .btn-main {
            background: linear-gradient(135deg, #4caf50 0%, #2d5a3d 100%);
            color: white;
            box-shadow: 0 4px 20px rgba(45, 90, 61, 0.25);
        }

        .btn-main:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(45, 90, 61, 0.35);
        }

        .btn-secondary {
            background: white;
            color: #2d5a3d;
            border: 2px solid rgba(45, 90, 61, 0.2);
        }

        .btn-secondary:hover {
            border-color: #2d5a3d;
            background: rgba(45, 90, 61, 0.05);
        }

        /* Purposes Section */
        .purposes {
            padding: 80px 5%;
            background: #ffffff;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            font-size: 2rem;
            color: #1a3322;
            font-weight: 700;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }

        .section-header p {
            color: #6b7c6b;
            font-size: 1rem;
            max-width: 500px;
            margin: 0 auto;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .card {
            background: linear-gradient(145deg, #ffffff 0%, #f8faf8 100%);
            border: 1px solid rgba(45, 90, 61, 0.08);
            border-radius: 16px;
            padding: 32px 28px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #4caf50, #7cb342);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(45, 90, 61, 0.12);
            border-color: rgba(45, 90, 61, 0.15);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, rgba(76, 175, 80, 0.15) 0%, rgba(45, 90, 61, 0.1) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .card-icon svg {
            width: 24px;
            height: 24px;
            color: #2d5a3d;
        }

        .card h3 {
            color: #1a3322;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .card p {
            color: #5a6b5a;
            font-size: 0.95rem;
            line-height: 1.7;
        }

        /* Footer */
        footer {
            background: linear-gradient(180deg, #1a3322 0%, #0f1f14 100%);
            color: #a8b8a8;
            padding: 50px 5% 30px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 40px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .footer-brand h3 {
            color: white;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .footer-brand p {
            font-size: 0.9rem;
            max-width: 280px;
            line-height: 1.7;
        }

        .contact-info h4 {
            color: white;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .contact-info p {
            font-size: 0.9rem;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-info svg {
            width: 16px;
            height: 16px;
            opacity: 0.7;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 40px;
            padding-top: 20px;
            text-align: center;
            font-size: 0.85rem;
            color: #6b7c6b;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header {
                padding: 0.8rem 4%;
            }

            .logo h2 {
                font-size: 1.1rem;
            }

            .nav-links a {
                padding: 6px 12px;
                font-size: 0.85rem;
            }

            .hero {
                padding: 100px 20px 60px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .btn {
                padding: 12px 20px;
                font-size: 0.9rem;
            }

            .purposes {
                padding: 60px 4%;
            }

            .section-header h2 {
                font-size: 1.6rem;
            }

            .footer-content {
                flex-direction: column;
                gap: 30px;
            }
        }
        .logo-icon {
            width: 40px; height: 40px;
            background: linear-gradient(135deg, #2d5a3d 0%, #4a7c59 100%);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 8px 20px rgba(45, 90, 61, 0.4);
        }

        .logo-icon svg { width: 24px; height: 24px; fill: #fff; }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <a href="index.php?url=home">
              <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
              </div>
              <h2><span> AgriLand-Ecosystem</span></h2>
            </a>
        </div>
        <nav class="nav-links">
            <a href="index.php?url=home">Home</a>
            <a href="index.php?url=register">Registration</a>
            <a href="index.php?url=login">Login</a>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <span class="hero-badge">Digital Agriculture Platform</span>
            <h1>Modernizing Agriculture <br><span>in Your District</span></h1>
            <p>
                A comprehensive digital platform bridging Landowners, Farmers, and Machinery Companies. 
                Simplifying agricultural production with a one-stop shop for labor and equipment.
            </p>
            <div class="hero-buttons">
                <a href="index.php?url=register" class="btn btn-main">
                    Get Started
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="#who-we-serve" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </section>

    <section class="purposes" id="who-we-serve">
        <div class="section-header">
            <h2>Who We Serve</h2>
            <p>Connecting every stakeholder in the agricultural ecosystem</p>
        </div>
        <div class="cards-container">
            <div class="card">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h3>For Landowners</h3>
                <p>Easily find and hire skilled farmers in your specific district. Browse profiles and manage your hire requests in one place.</p>
            </div>
            <div class="card">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>For Farmers</h3>
                <p>Set your availability, showcase your skills, and get hired by landowners nearby. Boost your income with consistent work.</p>
            </div>
            <div class="card">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                    </svg>
                </div>
                <h3>For Companies</h3>
                <p>List your agricultural machinery like tractors and harvesters for rent or sale. Manage your inventory and track orders digitally.</p>
            </div>
        </div> 
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-brand">
                <h3>AgriLand-Ecosystem</h3>
                <p>Empowering agricultural communities with digital solutions for a sustainable future.</p>
            </div>
            <div class="contact-info">
                <h4>Contact Us</h4>
                <p>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    admin@agriservice.com
                </p>
                <p>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"/>
                    </svg>
                    +880 1896229708
                </p>
                <p>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    Bashundhara R/A, Dhaka, Bangladesh
                </p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 AgriLand-Ecosystem. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
