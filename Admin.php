<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('pictures/hospii.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center center;
        }
        .dashboard-link {
            text-decoration: none;
            color: #fff;
        }
        .dashboard-link:hover {
            color: #fff;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Administrator Panel</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="Appointment.php" class="btn btn-primary btn-block dashboard-link">Read and Edit Patient Data</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="Docedit.php" class="btn btn-primary btn-block dashboard-link">Read and Edit Doctor Details</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="newdoc.php" class="btn btn-primary btn-block dashboard-link">Add Doctor</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="contactmade.php" class="btn btn-primary btn-block dashboard-link">Client Comments and Messages</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="admediadvice.php" class="btn btn-primary btn-block dashboard-link">Add Patient Medical Tips</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="mediread.php" class="btn btn-primary btn-block dashboard-link">Read Available Medical Tips</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="appointmentread.php" class="btn btn-primary btn-block dashboard-link">Pending Patient Appointments Confirmation and Viewing</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="patreport.php" class="btn btn-primary btn-block dashboard-link">Registered Patients Report</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="appointmentreport.php" class="btn btn-primary btn-block dashboard-link">Approved Appointments Reports</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="docreport.php" class="btn btn-primary btn-block dashboard-link">Employed Doctors Reports</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="bookdocreport.php" class="btn btn-primary btn-block dashboard-link">Booked Doctors Reports</a>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            &copy; 2024 Brian Mwangi. All rights reserved.
        </div>
    </footer>
</body>
</html>
