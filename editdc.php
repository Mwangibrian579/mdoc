<?php

require_once('db.php');
$UserID= $_GET['GetID'];
$query= "select  * from doctors where id='".$UserID."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc( $result))
{
    $UserID = $row['id'];
    $names = $row['names'];
    $profession = $row['profession'];
    $licenseno = $row['licenseno'];
    $password = $row['password'];
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCTOR DETAILS EDITS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <nav>
        <a href="Admin.php" class="btn btn-primary">Home</a>
    </nav>
</div>
<div class="container mt-5">
    <form action="updatedc.php?ID=<?php echo $UserID ?>" method="post">
        <div class="form-group">
            <label for="names">Names:</label>
            <input type="text" class="form-control" name="names" placeholder="Names" value="<?php echo $names ?>">
        </div>
        <div class="form-group">
            <label for="profession">Profession:</label>
            <input type="text" class="form-control" name="profession" placeholder="Profession" value="<?php echo $profession ?>">
        </div>
        <div class="form-group">
            <label for="licenseno">License No.:</label>
            <input type="number" class="form-control" name="licenseno" placeholder="License No." value="<?php echo $licenseno ?>">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $password ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
        <button type="reset" class="btn btn-secondary">RESET</button>
    </form>
</div>
</body>
</html>