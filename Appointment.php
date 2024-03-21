<?php
require_once('db.php');
$query = "SELECT * FROM registration";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch patient data</title>
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
        <h2>Patient Data</h2>
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
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $UserID = $row['id'];
                    $surname = $row['surname'];
                    $othernames = $row['othernames'];
                    $phoneno = $row['phoneno'];
                    $email = $row['email'];
                    $residence = $row['residence'];
                    $gender = $row['gender'];
                    $password = $row['password'];
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['surname'] ?></td>
                    <td><?php echo $row['othernames'] ?></td>
                    <td><?php echo $row['phoneno'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['residence'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><a href="edit.php?GetID=<?php echo $UserID?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?Del=<?php echo $UserID?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
