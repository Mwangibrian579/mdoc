<?php
require_once('db.php');

// Start the session
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: patlogin.php");
    exit();
}

// Get the patient ID from the session
$patient_id = $_SESSION['user_id'];

// Query to fetch patient appointment data based on the session ID
$query = "SELECT * FROM registration WHERE id = $patient_id";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient history data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        nav {
            margin-bottom: 20px;
        }
        .heading {
            background-color: #007bff;
            color: #fff;
        }
        .btn {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="Patloginhome.php" class="btn btn-primary">Home</a>
        </nav>
        <h2>My health history Data</h2>
        <table class="table table-striped table-bordered">
            <thead class="heading">
                <tr>
                    <th>User ID</th>
                    <th>Surname</th>
                    <th>Othernames</th>
                    <th>Phoneno</th>
                    <th>Email</th>
                    <th>Residence</th>
                    <th>Gender</th>
                    <th>treatmentinfo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $patient_id= $row['id'];
                    $surname = $row['surname'];
                    $othernames = $row['othernames'];
                    $phoneno = $row['phoneno'];
                    $email = $row['email'];
                    $residence = $row['residence'];
                    $gender = $row['gender'];
                    $treatmentinfo = $row['treatmentinfo'];
                ?>
                <tr>
                    <td><?php echo $patient_id ?></td>
                    <td><?php echo $surname ?></td>
                    <td><?php echo $othernames ?></td>
                    <td><?php echo $phoneno ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $residence ?></td>
                    <td><?php echo $gender ?></td>
                    <td><?php echo $treatmentinfo ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>