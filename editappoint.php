<?php

require_once('db.php');
$patient_id= $_GET['GetID'];
$patient_id = isset($_GET['GetID']) && !empty($_GET['GetID']) ? $_GET['GetID'] : '';
$query= "select  * from patientappoint where id='".$patient_id."'";
$result = mysqli_query($conn,$query);

 while($row=mysqli_fetch_assoc($result))
     {
        $patient_id = $row['id'];
        $surname = $row['surname'];
        $othernames = $row['othernames'];
        $phoneno = $row['phoneno'];
        $email = $row['email'];
        $residence = $row['residence'];
        $gender = $row['gender'];
        $password = $row['password'];
        $appointment = $row['appointment'];
        $dateofappointment = $row['dateofappointment'];
        $status= $row['status'];
        $approvalstatuscomment= $row["approvalstatuscomment"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href=""/>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="Admin.php">Home</a>
</nav>
<div class="container">
    <form action="updateappoint.php?ID=<?php echo $patient_id?>" method="post">
        <input type="hidden" value="<?=$patient_id?>" name="ID">
        <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" name="surname" class="form-control" placeholder="Surname" value="<?php echo $surname ?>" disabled>
        </div>
        <div class="form-group">
            <label for="othernames">Other Names:</label>
            <input type="text" name="othernames" class="form-control" placeholder="Other Names" value="<?php echo $othernames ?>" disabled>
        </div>
        <div class="form-group">
            <label for="phoneno">Phone No.:</label>
            <input type="number" name="phoneno" class="form-control" placeholder="Phone No." value="<?php echo $phoneno ?>" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>" disabled>
        </div>
        <div class="form-group">
            <label for="residence">Residence:</label>
            <input type="text" name="residence" class="form-control" placeholder="Residence" value="<?php echo $residence ?>" disabled>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password ?>" disabled>
        </div>
        <div class="form-group">
    <input type="text" id="" name="appointment" value="<?php echo $appointment ?>" disabled>
        </div>
        <div class="form-group">
        <input type="date"name="dateofappointment"placeholder="dateofappointment"required value="<?php echo $dateofappointment ?>"></br>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="radio" id="Approved" name="status" value="Approved">
    <label for="Approved">Approved</label><br>
    <input type="radio" id="Disapproved" name="status" value="Disapproved">
    <label for="Disapproved">Disapproved</label><br>
        </div>
        <div class="form-group">
            <label for="password">Approval comment:</label>
            <input type="text" name="approvalstatuscomment" class="form-control" placeholder="Comment" >
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>
</body>
</html>