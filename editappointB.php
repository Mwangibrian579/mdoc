<?php

require_once('db.php');
$patient_id= $_GET['GetID'];
$query= "select  * from patientappoint where id='".$patient_id."'";
$result = mysqli_query($conn,$query);

 while($row=mysqli_fetch_assoc($result))
     {
        $patient_id = $row['id'];
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
    <form action="updateappointB.php?id=<?php echo $patient_id?>" method="post">
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="radio" id="Approved" name="status" value="<?php echo $approvalstatuscomment ?>">
    <label for="Approved">Approved</label><br>
    <input type="radio" id="Disapproved" name="status" value="<?php echo $approvalstatuscomment ?>">
    <label for="Disapproved">Disapproved</label><br>
        </div>
        <div class="form-group">
            <label for="password">Approval comment:</label>
            <input type="text" name="approvalstatuscomment" class="form-control" placeholder="Comment" value="<?php echo $status ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>
</body>
</html>