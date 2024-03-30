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
            <a href="Admin.php" class="btn btn-primary">Home</a>
        </nav>
        <h2>Patient Appointments Data</h2>
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
                    <th>Password</th>
                    <th>treatmentinfo</th>
                    <th>appointment</th>
                    <th>dateofappointment</th>
                    <th>status</th>
                    <th>Approval status comment</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
                    $password = $row['password'];
                    $treatmentinfo = $row['treatmentinfo'];
                    $appointment = $row['appointment'];
                    $dateofappointment = $row['dateofappointment'];
                    $status= $row['status'];
                    $approvalstatuscomment= $row["approvalstatuscomment"];
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
                    <td><a href="editappoint.php?GetID=<?php echo $patient_id ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="deleteappoint.php?Del=<?php echo $patient_id?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>