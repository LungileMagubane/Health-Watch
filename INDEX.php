<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALTHWATCH</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><a href="#home">HEALTHWATCH</a></div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Regions</a></li>
            </ul>
        </nav>
    </header>

    <div class="video-container" id="home">
        <video autoplay muted loop id="background-video">
            <source src="img/HEALTHWATCH.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content">
            <h1>Health Outbreak Alerts</h1>
            <p>Stay updated with real-time alerts on potential health outbreaks.</p>
            <a href="LOGIN.php" class="btn">LOGIN</a>
        </div>
    </div>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <div class="about-content">
                <img src="img/PIC.png" alt="About Us Image" class="about-image">
                <div class="about-text">
                    <p>HealthWatch is dedicated to providing real-time alerts and notifications about potential health outbreaks. Our platform integrates data from multiple sources, including environmental sensors, hospitals, social media, and news reports, to monitor and visualize key health indicators and trends.</p>
                    <p>Our mission is to empower healthcare professionals and the public with timely information to prevent and manage health crises effectively. Utilizing advanced technologies such as AI and NLP, we extract insights from vast amounts of medical literature, offering comprehensive information on various diseases and predictive models for potential outbreaks.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <h2>Features</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <i class="fas fa-bell"></i>
                    <h3>Real-Time Alerts</h3>
                    <p>Use generative AI to give tailored alerts and notifications about potential health outbreaks in real-time.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-chart-line"></i>
                    <h3>Data Visualization</h3>
                    <p>Access and visualize integrated data from multiple sources, including environmental sensors, hospitals, social media, and news reports. Utilize customizable dashboards to monitor key health indicators and trends.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-book-medical"></i>
                    <h3>Disease Information</h3>
                    <p>Access detailed information on identified diseases, including symptoms, genetic markers, and transmission patterns. Utilize Natural Language Processing (NLP) to extract insights from medical literature and research papers. Summarize those insights using a LLM.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-predict"></i>
                    <h3>Predictive Models</h3>
                    <p>Predict and forecast potential disease spread and outbreak progression.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-share-alt"></i>
                    <h3>Data Sharing</h3>
                    <p>Share data, insights, and reports with other healthcare professionals and researchers.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-file-medical"></i>
                    <h3>Case Reporting</h3>
                    <p>Report new cases and incidents directly through the app.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
           <a href="/HEALTHWATCH/map.html"><h2>EXPLORE REGIONS</h2></a>
            <p>Use the map to locate different Regions</p>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-section quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section contact-us">
                <h3>Contact Us</h3>
                <p>HealthWatch Headquarters</p>
                <p>Email: info@healthwatch.com</p>
                <p>Phone: +254 456 7890</p>
            </div>
            <div class="footer-section follow-us">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 HealthWatch. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>