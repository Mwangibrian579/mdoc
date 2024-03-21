<?php

require_once('db.php');
$query = "select * from contact";
$result=mysqli_query($conn,$query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch customer opinions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="appoi.css">
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="Admin.php">Home</a>
</nav>
<div class="container">
    <h2>Client Messages</h2>
    <table class="table">
        <thead class="heading">
        <tr>
            <th>User ID</th>
            <th>surname</th>
            <th>email</th>
            <th>message</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $UserID = $row['id'];
            $surname= $row['surname'];
            $email = $row['email'];
            $message = $row['message'];
            ?>
            <tr>
                <td><?php echo $UserID ?></td>
                <td><?php echo $surname ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $message?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>