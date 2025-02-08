
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        
        // TODO: Implement email validation and password reset logic here
        // Example: Check if email exists, generate reset link, and send an email
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Adoptpal</title>
    <link rel="stylesheet" href="signin-styles.css">
    <link rel="icon" type="icon/x-icon" href="resources/Pawfect Pawtrails-4.png">
</head>
<body>
    <div class="image-wrapper">
        <a class="paw" href="home.php">
            <img src="resources/logo.png" alt="Adoptpal">
        </a>
    </div>
    <main>
        <div>
            <section class="login-section">
                <h2>Reset Your Password</h2>
                <p>Enter your email address, and we'll send you a link to reset your password.</p>
                <form action="forgotpass.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    <button type="submit">Send Reset Link</button>
                </form>
                <div class="back-login">
                    <p><a href="login.php">Back to Login</a></p>
                </div>
            </section>
        </div>
    </main>
</body>
</html>