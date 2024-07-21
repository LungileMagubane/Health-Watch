<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, country, password) VALUES (:username, :email, :country, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        header("Location: login.php"); 
        exit();
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - HealthWatch</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="welcome-message">
        <h1>Welcome to HealthWatch!</h1>
    </div>
    <div class="login-container">
        <div class="login-box">
            
            <form action="signup.php" method="POST">
                <div class="input-group">
                    <label for="username">
                        <span class="icon">&#128100;</span> 
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="input-group">
                    <label for="email">
                        <span class="icon">&#128231;</span> 
                        Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                <div class="input-group">
                    <label for="country">
                        <span class="icon">&#127758;</span> 
                        Country
                    </label>
                    <select id="country" name="country" required>
                    <option value="">Select your country</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Angola">Angola</option>
                        <option value="Benin">Benin</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Eswatini (fmr. Swaziland)">Eswatini (fmr. Swaziland)</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Ivory Coast">Ivory Coast</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Mali">Mali</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Togo">Togo</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    
                </div>
                <div class="input-group">
                    <label for="password">
                        <span class="icon">&#128274;</span> 
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-group">
                    <label for="confirm-password">
                        <span class="icon">&#128274;</span> 
                        Confirm Password
                    </label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                </div>
                <button type="submit">Sign Up</button>
                <div class="links">
                    <a href="login.php">Already have an account? Sign In</a>
                    <p><a href="index.php">Return to Home</a></p> 
                </div>
            </form>
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
    position: relative;
}

.logo h1 {
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

.input-group input, .input-group select {
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
}

footer p {
    margin: 5px 0;
    font-size: 12px;
    color: #888888;
}

</style>