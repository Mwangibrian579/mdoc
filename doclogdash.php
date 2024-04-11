<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors' Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('pictures/hospi.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center center;
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white background */
            font-family: Arial, sans-serif;
            padding-top: 20px; /* Add some padding to the top */
        }
        .nav-sidebar {
            background-color: #007bff; /* Blue background for sidebar */
            color: #fff; /* White text for sidebar */
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .nav-sidebar a {
            color: #fff; /* White text for sidebar links */
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }
        .nav-sidebar a:hover {
            text-decoration: underline; /* Underline on hover */
        }
        .dashboard-content {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Shadow effect */
        }
        .footer {
            background-color: #343a40; /* Dark background color for footer */
            color: #fff; /* White text color */
            padding: 20px 0; /* Add some padding */
            text-align: center; /* Center align text */
            position: fixed; /* Fix the footer at the bottom */
            width: 100%; /* Full width */
            bottom: 0; /* Stick to the bottom */
            left: 0; /* Align to the left */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 nav-sidebar">
                <h3>Dashboard</h3>
                <a href="treat.php">Treat a patient</a>
                <a href="pendappoints.php">Booked Appointments</a>
                <a href="logoutdc.php">Logout</a>
            </nav>
            <main class="col-md-9">
                <div class="dashboard-content">
                    <h1 class="mt-4 mb-4">Doctors' Dashboard</h1>
                    <p>
                        Dear Esteemed Doctor, we extend our gratitude for your dedication and commitment to patient care. Your passion and expertise are invaluable in providing holistic healthcare to our patients. As healers and caregivers, we encourage you to continue treating each patient with compassion, empathy, and wholehearted dedication. Remember, your thoughtful approach not only heals bodies but also uplifts spirits and brings comfort to those in need. Together, let's strive to make a positive impact on the lives of our patients every day.
                    </p>
                </div>
            </main>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Brian Mwangi. All rights reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
