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
    $treatmentinfo = $row['treatmentinfo'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Treatment Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="doclogdash.php">Home</a>
    </nav>
    <div class="container mt-5">
        <form action="updatept.php?ID=<?php echo $UserID ?>" method="post">
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" class="form-control" name="surname" placeholder="Surname" value="<?php echo $surname ?>" disabled>
            </div>
            <div class="form-group">
                <label for="othernames">Other Names:</label>
                <input type="text" class="form-control" name="othernames" placeholder="Other Names" value="<?php echo $othernames ?>" disabled>
            </div>
            <div class="form-group">
                <label for="phoneno">Phone No.:</label>
                <input type="number" class="form-control" name="phoneno" placeholder="Phone Number" value="<?php echo $phoneno ?>"  disabled>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email ?>"  disabled>
            </div>
            <div class="form-group">
                <label for="residence">Residence:</label>
                <input type="text" class="form-control" name="residence" placeholder="Residence" value="<?php echo $residence ?>" disabled>
            </div>
            <div class="form-group">
                <label for="treatmentinfo">Treatment Info and Date:</label>
                <input type="text" class="form-control" name="treatmentinfo" placeholder="Treatment Info" value="Treatment Info and Date">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
</body>
</html>
