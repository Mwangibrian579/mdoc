<?php

require_once('db.php');
$UserID= $_GET['GetID'];
$query= "select  * from registration where id='".$UserID."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc( $result))
{
    $UserID = $row['id'];
    $surname = $row['surname'];
    $othernames = $row['othernames'];
    $phoneno = $row['phoneno'];
    $email = $row['email'];
    $residence = $row['residence'];
    $gender = $row['gender'];
    $password = $row['password'];
    $treatmentinfo = $row['treatmentinfo'];
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
    <form action="update.php?ID=<?php echo $UserID ?>" method="post">
        <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" name="surname" class="form-control" placeholder="Surname" value="<?php echo $surname ?>">
        </div>
        <div class="form-group">
            <label for="othernames">Other Names:</label>
            <input type="text" name="othernames" class="form-control" placeholder="Other Names" value="<?php echo $othernames ?>">
        </div>
        <div class="form-group">
            <label for="phoneno">Phone No.:</label>
            <input type="number" name="phoneno" class="form-control" placeholder="Phone No." value="<?php echo $phoneno ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
            <label for="residence">Residence:</label>
            <input type="text" name="residence" class="form-control" placeholder="Residence" value="<?php echo $residence ?>">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password ?>">
        </div>
        <div class="form-group">
            <label for="treatmentinfo">treatmentinfo:</label>
            <input type="text" name="treatmentinfo" class="form-control" placeholder="treatmentinfo" value="<?php echo $treatmentinfo ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>
</body>
</html>