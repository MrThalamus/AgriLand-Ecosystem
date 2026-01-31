<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Agri-Service</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3d5a3d;
            --primary-dark: #2d452d;
            --cream: #f5f2eb;
            --white: #ffffff;
            --gray: #666;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--cream);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .reset-container {
            background: var(--white);
            max-width: 450px;
            width: 100%;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .icon-box {
            width: 70px;
            height: 70px;
            background: #e8f0e8;
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        h2 {
            color: var(--primary);
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--primary);
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1.5px solid #eee;
            border-radius: 10px;
            outline: none;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(61, 90, 61, 0.1);
        }

        .btn-reset {
            width: 100%;
            padding: 16px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 10px;
        }

        .btn-reset:hover {
            background: var(--primary-dark);
        }

        .back-to-login {
            display: inline-block;
            margin-top: 25px;
            color: var(--primary);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .back-to-login:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="reset-container">
    <div class="icon-box">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
    </div>

    <h2>Set New Password</h2>
    <p>Your identity has been verified. Please choose a new secure password to access your account.</p>

    <?php if(isset($_GET['token'])): ?>
        <form action="index.php?url=reset_password&token=<?php echo htmlspecialchars($_GET['token']); ?>" method="POST">
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="password" placeholder="Min. 6 characters" required minlength="6">
            </div>

            <div class="form-group">
                <label>Confirm New Password</label>
                <input type="password" name="confirm_password" placeholder="Repeat your password" required minlength="6">
            </div>

            <button type="submit" class="btn-reset">Update Password</button>
        </form>
    <?php else: ?>
        <div style="color: red; padding: 20px; background: #fff5f5; border-radius: 10px;">
            <strong>Error:</strong> No reset token found. Please request a new link from the login page.
        </div>
    <?php endif; ?>

    <a href="index.php?url=login" class="back-to-login">← Back to Sign In</a>
</div>

</body>
</html>