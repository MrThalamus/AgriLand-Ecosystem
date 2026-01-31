<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Agri-Service</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #3d5a3d;
            --primary-light: #5a7d5a;
            --olive: #6b7b4c;
            --earth-brown: #8b7355;
            --sky-blue: #87a5b4;
            --cream: #f5f2eb;
            --dark: #2c3e2c;
            --white: #ffffff;
            --glass-bg: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.25);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Full-screen blurred background */
        .background {
            position: fixed;
            inset: 0;
            background: 
                url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=1920&q=80') center/cover no-repeat;
            filter: blur(6px);
            transform: scale(1.1);
            z-index: -2;
        }

        /* Gradient overlay for depth */
        .overlay {
            position: fixed;
            inset: 0;
            background: linear-gradient(
                135deg,
                rgba(61, 90, 61, 0.4) 0%,
                rgba(107, 123, 76, 0.3) 50%,
                rgba(135, 165, 180, 0.2) 100%
            );
            z-index: -1;
        }

        /* Floating decorative elements */
        .floating-shapes {
            position: fixed;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(40px);
        }

        .shape-1 {
            width: 400px;
            height: 400px;
            top: -100px;
            right: -100px;
            animation: float 20s ease-in-out infinite;
        }

        .shape-2 {
            width: 300px;
            height: 300px;
            bottom: -80px;
            left: -80px;
            animation: float 15s ease-in-out infinite reverse;
        }

        .shape-3 {
            width: 200px;
            height: 200px;
            top: 50%;
            left: 10%;
            animation: float 18s ease-in-out infinite 2s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(20px, -20px) rotate(5deg); }
            50% { transform: translate(-10px, 20px) rotate(-5deg); }
            75% { transform: translate(15px, 10px) rotate(3deg); }
        }

        /* Main container */
        .login-container {
            display: flex;
            width: 100%;
            max-width: 1000px;
            min-height: 600px;
            margin: 20px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 
                0 25px 50px -12px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(255, 255, 255, 0.1);
        }

        /* Left Side - Welcome Section */
        .welcome-section {
            flex: 1;
            background: rgba(61, 90, 61, 0.85);
            backdrop-filter: blur(20px);
            padding: 50px 40px;
            display: none;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .welcome-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1574943320219-553eb213f72d?w=800&q=60') center/cover no-repeat;
            opacity: 0.15;
            z-index: 0;
        }

        .welcome-content {
            position: relative;
            z-index: 1;
            color: var(--white);
        }

        .welcome-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 16px;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .welcome-content p {
            font-size: 1.05rem;
            opacity: 0.9;
            line-height: 1.7;
            max-width: 320px;
        }

        .features {
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }

        .feature-icon {
            width: 42px;
            height: 42px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-icon svg {
            width: 22px;
            height: 22px;
            fill: var(--white);
        }

        .feature-item span {
            font-size: 0.95rem;
            font-weight: 500;
        }

        /* Right Side - Form Section (Glassmorphism) */
        .form-section {
            flex: 1;
            background: var(--glass-bg);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-left: 1px solid var(--glass-border);
            padding: 50px 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            width: 100%;
            max-width: 380px;
        }

        /* Logo */
        .logo {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 36px;
            text-decoration: none; /* Wrapped logo in anchor tag to redirect to home page */
            cursor: pointer;
        }

        .logo-icon {
            width: 52px;
            height: 52px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--olive) 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(61, 90, 61, 0.3);
        }

        .logo-icon svg {
            width: 28px;
            height: 28px;
            fill: var(--white);
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--white);
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        /* Form Header */
        .form-header {
            margin-bottom: 32px;
        }

        .form-header h2 {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 8px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
        }

        .form-header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: var(--white);
            font-size: 0.9rem;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper svg {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            fill: rgba(255, 255, 255, 0.6);
            transition: fill 0.3s ease;
        }

        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 16px 16px 16px 50px;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 14px;
            font-size: 1rem;
            color: var(--white);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .form-group input[type="email"]:focus,
        .form-group input[type="password"]:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.18);
            border-color: rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.1);
        }

        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .form-group input:focus + svg,
        .input-wrapper:focus-within svg.input-icon {
            fill: rgba(255, 255, 255, 0.9);
        }

        /* Password Toggle Button */
        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .password-toggle svg {
            width: 20px;
            height: 20px;
            fill: rgba(255, 255, 255, 0.6);
            transition: fill 0.3s ease;
            position: static;
            transform: none;
        }

        .password-toggle:hover svg {
            fill: rgba(255, 255, 255, 0.9);
        }

        .form-group input[type="text"].password-visible {
            width: 100%;
            padding: 16px 50px 16px 50px;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 14px;
            font-size: 1rem;
            color: var(--white);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .form-group input[type="text"].password-visible:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.18);
            border-color: rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.1);
        }

        /* Form Options */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .remember-me input {
            width: 18px;
            height: 18px;
            accent-color: var(--olive);
            cursor: pointer;
            border-radius: 4px;
        }

        .remember-me span {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.85);
        }

        .forgot-password {
            color: var(--cream);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .forgot-password:hover {
            color: var(--white);
            text-decoration: underline;
        }

        /* Login Button */
        .btn-login {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--olive) 100%);
            color: var(--white);
            border: none;
            border-radius: 14px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 8px 25px rgba(61, 90, 61, 0.35);
            position: relative;
            overflow: hidden;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(61, 90, 61, 0.45);
        }

        .btn-login:active {
            transform: translateY(-1px);
        }

        .btn-login svg {
            width: 20px;
            height: 20px;
            fill: var(--white);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 28px 0;
            gap: 16px;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
        }

        .divider span {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.875rem;
            white-space: nowrap;
        }

        /* Register Link */
        .register-link {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
        }

        .register-link a {
            color: var(--cream);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .register-link a:hover {
            color: var(--white);
            text-decoration: underline;
        }

        /* Responsive */
        @media (min-width: 768px) {
            .welcome-section {
                display: flex;
            }
            
            .login-container {
                min-height: 650px;
            }
        }

        @media (max-width: 767px) {
            .login-container {
                margin: 16px;
                border-radius: 20px;
                min-height: auto;
            }

            .form-section {
                padding: 40px 28px;
                background: rgba(255, 255, 255, 0.1);
            }

            .form-header h2 {
                font-size: 1.625rem;
            }

            .logo {
                justify-content: center;
            }

            .form-header {
                text-align: center;
            }
        }

        @media (max-width: 380px) {
            .form-section {
                padding: 32px 20px;
            }

            .form-options {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <!-- Blurred Background -->
    <div class="background"></div>
    <div class="overlay"></div>
    
    <!-- Floating Decorative Shapes -->
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <!-- Main Container -->
    <div class="login-container">
        <!-- Left Side - Welcome Section -->
        <div class="welcome-section">
            <div class="welcome-content">
                <h1>Welcome to<br>AgriLand-Ecosystem</h1>
                <p>Your one-stop platform to hire skilled farmers and rent quality agricultural equipment.</p>
                
                <div class="features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                        </div>
                        <span>Hire Skilled Farm Workers</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M19.5 12c.93 0 1.78.28 2.5.76V8c0-1.1-.9-2-2-2h-6.29l-1.06-1.06 1.41-1.41-.71-.71-3.53 3.53.71.71 1.41-1.41L13 6.71V6h-2v2h2.21l.71.71H2v2h12v2H2v2h12v2H2v2h10.29l.71.71V20h2v-.29l1.15 1.15.71-.71-1.41-1.41L14 17.29V17h6c1.1 0 2-.9 2-2v-.76c-.72.48-1.57.76-2.5.76-2.49 0-4.5-2.01-4.5-4.5s2.01-4.5 4.5-4.5z"/></svg>
                        </div>
                        <span>Rent Modern Equipment</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        </div>
                        <span>Verified & Trusted Services</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Form Section -->
        <div class="form-section">
            <div class="form-container">
                <!-- Logo -->
                <a href="index.php?url=home" class="logo" style="text-decoration: none; cursor: pointer;">
                    <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="logo-text">AgriLand-Ecosystem</span>
                </a>

                <!-- Form Header -->
                <div class="form-header">
                    <h2>Welcome Back</h2>
                    <p>Sign in to manage your farm services</p>
                </div>

                <!-- Login Form -->
                <form action="index.php?url=process_login" method="POST">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                            <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-wrapper">
                            <input type="password" id="password" name="password" placeholder="Enter your password" required>
                            <svg class="input-icon" viewBox="0 0 24 24"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
                            <button type="button" class="password-toggle" onclick="togglePassword()">
                                <svg id="eyeIcon" viewBox="0 0 24 24">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" name="remember">
                            <span>Remember me</span>
                        </label>
                        <a href="javascript:void(0)" onclick="openModal()" class="forgot-password">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn-login">
                        <span>Sign In</span>
                        <svg viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                    </button>
                </form>

                <div class="divider">
                    <span>New to AgriLand-Ecosystem?</span>
                </div>

                <p class="register-link">
                    Don't have an account? <a href="index.php?url=register">Create Account</a>
                </p>
            </div>
        </div>
    </div>
    <div id="forgotPasswordModal" class="modal-overlay">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <form action="index.php?url=forgot_password" method="POST">
                <h2 style="color: var(--primary); margin-bottom: 15px;">Reset Password</h2>
                <p style="margin-bottom: 20px; color: #666;">Enter your email to receive a reset link.</p>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Enter your registered email" required 
                           style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                </div>
                <button type="submit" class="btn-login" style="margin-top: 20px; width: 100%;">
                    Send Reset Link
                </button>
            </form>
        </div>
    </div>

    <style>
    /* Modal Styling */
    .modal-overlay {
        display: none; 
        position: fixed; 
        z-index: 1000; 
        left: 0; top: 0; width: 100%; height: 100%; 
        background-color: rgba(0,0,0,0.5);
        backdrop-filter: blur(5px);
    }
    .modal-content {
        background-color: white;
        margin: 10% auto;
        padding: 30px;
        border-radius: 15px;
        width: 90%;
        max-width: 400px;
        position: relative;
        box-shadow: 0 5px 30px rgba(0,0,0,0.3);
    }
    .close-modal {
        position: absolute;
        right: 20px;
        top: 10px;
        font-size: 28px;
        cursor: pointer;
        color: #888;
    }
    </style>

    <script>
    function openModal() {
        document.getElementById('forgotPasswordModal').style.display = 'block';
    }
    function closeModal() {
        document.getElementById('forgotPasswordModal').style.display = 'none';
    }
    // Close if user clicks outside the box
    window.onclick = function(event) {
        let modal = document.getElementById('forgotPasswordModal');
        if (event.target == modal) { closeModal(); }
    }

    // Toggle password visibility
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordInput.classList.add('password-visible');
            // Eye off icon (password visible)
            eyeIcon.innerHTML = '<path d="M12 7c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92c1.51-1.26 2.7-2.89 3.43-4.75-1.73-4.39-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C10.74 7.13 11.35 7 12 7zM2 4.27l2.28 2.28.46.46C3.08 8.3 1.78 10.02 1 12c1.73 4.39 6 7.5 11 7.5 1.55 0 3.03-.3 4.38-.84l.42.42L19.73 22 21 20.73 3.27 3 2 4.27zM7.53 9.8l1.55 1.55c-.05.21-.08.43-.08.65 0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53-2.76 0-5-2.24-5-5 0-.79.2-1.53.53-2.2zm4.31-.78l3.15 3.15.02-.16c0-1.66-1.34-3-3-3l-.17.01z"/>';
        } else {
            passwordInput.type = 'password';
            passwordInput.classList.remove('password-visible');
            // Eye on icon (password hidden)
            eyeIcon.innerHTML = '<path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>';
        }
    }
    </script>
</body>
</html>
