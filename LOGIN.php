<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: LANDING.php"); 
        exit();
    } else {
        $error_message = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HealthWatch</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="welcome-message">
        <h1>Welcome to HealthWatch!</h1>
    </div>
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <h1>Welcome</h1>
            </div>
            <?php
            if (isset($error_message)) {
                echo '<p class="error-message">' . $error_message . '</p>';
            }
            ?>
            <form action="login.php" method="POST">
                <div class="input-group">
                    <label for="email">
                        <span class="icon">&#128231;</span> <!-- Email icon -->
                        Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">
                        <span class="icon">&#128274;</span> 
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit">Sign In</button>
                <div class="links">
                    <a href="#">Forgot Username?</a> | <a href="#">Forgot Password?</a>
                </div>
            </form>
            <div class="register-link">
                <p>Don't have an account? <a href="signup.php">Create one</a></p>
                <p><a href="index.php">Return to Home</a></p> 
            </div>
        </div>
    </div>
    <footer>
        <p>LEGAL RESTRICTIONS AND TERMS OF USE APPLICABLE TO THIS SITE. Use of this site signifies your agreement to the terms of use.</p>
        <p>© 1998 - 2024 HealthWatch Foundation for Medical Education and Research. All rights reserved.</p>
    </footer>
</body>
</html>



<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.welcome-message {
    text-align: center;
    margin: 30px 0;
}

.welcome-message h1 {
    font-size: 28px;
    color: #005eb8;
    margin: 0;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.login-box {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 40px;
    max-width: 360px;
    width: 100%;
    text-align: center;
}

.logo h2 {
    font-size: 36px;
    color: #005eb8;
    margin-bottom: 20px;
}

form {
    margin: 0;
}

.input-group {
    margin-bottom: 20px;
    text-align: left;
    position: relative;
}

.input-group label {
    display: flex;
    align-items: center;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 8px;
    color: #333;
}

.input-group .icon {
    font-size: 18px;
    margin-right: 10px;
    color: #005eb8;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #d3d3d3;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}

button {
    background-color: #005eb8;
    color: #ffffff;
    border: none;
    padding: 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    margin-top: 10px;
}

button:hover {
    background-color: #004a8d;
}

.links {
    margin-top: 10px;
    font-size: 14px;
}

.links a {
    color: #005eb8;
    text-decoration: none;
}

.links a:hover {
    text-decoration: underline;
}

.register-link {
    margin-top: 20px;
    font-size: 14px;
}

.register-link a {
    color: #005eb8;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

footer {
    background-color: #ffffff;
    text-align: center;
    padding: 15px;
    box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
    font-size: 12px;
    color: #666;
}

.register-link p {
    margin: 10px 0;
    font-size: 14px;
}

.register-link a {
    color: #005eb8;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

.error-message {
    color: red;
    text-align: center;
    margin-bottom: 10px;
}


</style>