<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machakos Level 5 Hospital Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
    <style>
        body {
            background-image: url('pictures/mach.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center center;
            height: 100vh; /* Ensure content occupies the whole page */
            padding-top: 20px; /* Add padding to top */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background for container */
            padding: 20px;
            border-radius: 10px;
            color: #000; /* Text color */
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background for navbar */
            border-bottom: 1px solid #fff; /* White border bottom */
        }
        .footer {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background for footer */
            color: #fff; /* Text color */
        }
        .footer a {
            color: #fff; /* Footer link color */
        }
        .footer a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4 font-weight-bold">Machakos Level Five Public Hospital</h1>
        <nav class="navbar mb-4">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-auto">
                <a class="btn btn-primary" href="Registration.php">New patient Registration</a>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="patlogin.php">Registered Patient Login</a>
            </div>
        </div>
    </div>
</nav>
        <img src="./pictures/home.jpg" class="img-fluid mb-4" alt="our hospital entrance">
        <p>
            Welcome to <em>Machakos Level Five Hospital: Your Gateway to Quality Healthcare in Machakos County</em><br>
            Machakos Level Five Hospital is a premier healthcare facility dedicated to providing comprehensive and compassionate medical services to the residents of Murang'a County and beyond. We are a Level Five county referral hospital, equipped with the latest technology and staffed by a team of highly qualified and experienced professionals.
        </p>
        <div id="goal" class="mb-4">
            <h3 class="font-weight-bold">Our Mission:</h3>
            <p>To deliver accessible, affordable, and high-quality healthcare services to all, while promoting health and well-being within the community.</p>
            <h3 class="font-weight-bold">Our Vision:</h3>
            <p>To be the leading healthcare provider in Machakos County, renowned for its clinical excellence, patient-centered care, and commitment to innovation.</p>
        </div>
        <div id="serv" class="mb-4">
            <h2 class="font-weight-bold">Our services include:</h2>
            <ul>
                <li>Pediatrics</li>
                <li>Oncology</li>
                <li>General surgery</li>
                <li>Internal Medicine</li>
                <li>Orthopedics</li>
                <li>Mental health</li>
            </ul>
        </div>
        <div id="facilities" class="mb-4">
            <h3 class="font-weight-bold">Our facilities are equipped with edge edge technology, including:</h3>
            <ul>
                <li>Digital X-ray and CT scans</li>
                <li>MRI machine</li>
                <li>Fully equipped laboratory</li>
                <li>Modern operating theaters</li>
            </ul>
        </div>
        <p class="mb-4">You can reach us through our phone numbers:</p>
        <p>
            <em>32535345</em><br>
            <em>35366577</em>
        </p>
        <div class="mb-4">
            <p>Have you registered with us as a patient?<br>
                <a class="btn btn-primary mr-2" href="Registration.php">Register here</a><br>
                Are you a registered patient?<br>
                <a class="btn btn-primary" href="patlogin.php">Login here</a>
            </p>
        </div>
    </div>
    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            &copy; 2024 Brian Mwangi. All rights reserved.
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
