<?php
require_once('db.php');
$query = "select * from patientappoint";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch patient appointment data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .heading {
            background-color: #007bff;
            color: #fff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .table td, .table th {
            vertical-align: middle;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="doclogdash.php">Home</a>
    </nav>
    <div class="container">
        <h2 class="text-center mb-4">Patient Appointments Data</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="heading">
                    <tr>
                        <th>User ID</th>
                        <th>Surname</th>
                        <th>Other Names</th>
                        <th>Phone No.</th>
                        <th>Email</th>
                        <th>Residence</th>
                        <th>Gender</th>
                        <th>Password</th>
                        <th>Treatment Info</th>
                        <th>Appointment</th>
                        <th>Date of Appointment</th>
                        <th>Status</th>
                        <th>Approval Status Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $patient_id = $row['id'];
                        $surname = $row['surname'];
                        $othernames = $row['othernames'];
                        $phoneno = $row['phoneno'];
                        $email = $row['email'];
                        $residence = $row['residence'];
                        $gender = $row['gender'];
                        $password = $row['password'];
                        $treatmentinfo = $row['treatmentinfo'];
                        $appointment = $row['appointment'];
                        $dateofappointment = $row['dateofappointment'];
                        $status = $row['status'];
                        $approvalstatuscomment = $row["approvalstatuscomment"];
                    ?>
                    <tr>
                        <td><?php echo $patient_id ?></td>
                        <td><?php echo $surname ?></td>
                        <td><?php echo $othernames ?></td>
                        <td><?php echo $phoneno ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $residence ?></td>
                        <td><?php echo $gender ?></td>
                        <td><?php echo $password ?></td>
                        <td><?php echo $treatmentinfo ?></td>
                        <td><?php echo $appointment ?></td>
                        <td><?php echo $dateofappointment ?></td>
                        <td><?php echo $status ?></td>
                        <td><?php echo $approvalstatuscomment ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
