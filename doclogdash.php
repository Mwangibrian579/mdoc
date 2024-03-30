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
            background-color: #f8f9fa; /* Light gray background */
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #007bff; /* Blue background for navigation */
            padding: 10px 0; /* Add some padding */
        }
        nav a {
            color: #fff; /* White text for navigation links */
            margin-right: 20px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Doctors' Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="treat.php">Treat a patient</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pendappoints.php">Booked Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoutdc.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
