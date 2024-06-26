<?php

require_once('db.php');
$query = "select * from doctors";
$result=mysqli_query($conn,$query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Doctor Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="appoi.css">
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="Admin.php">Home</a>
</nav>
<div class="container">
    <h2>Doctor Data</h2>
    <table class="table">
        <thead class="heading">
        <tr>
            <th>User ID</th>
            <th>Names</th>
            <th>Profession</th>
            <th>License No.</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $UserID = $row['id'];
            $names = $row['names'];
            $profession = $row['profession'];
            $licenseno = $row['licenseno'];
            $password = $row['password'];
            ?>
            <tr>
                <td><?php echo $UserID ?></td>
                <td><?php echo $names ?></td>
                <td><?php echo $profession ?></td>
                <td><?php echo $licenseno ?></td>
                <td><?php echo $password ?></td>
                <td><a href="editdc.php?GetID=<?php echo $UserID ?>" class="btn btn-primary">Edit</a></td>
                <td><a href="deletedc.php?Del=<?php echo $UserID ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>