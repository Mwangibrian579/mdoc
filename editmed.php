<?php

require_once('db.php');
$TipID= $_GET['GetID'];
$query= "select  * from meditips where id='".$TipID."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc( $result))
{
    $TipID = $row['id'];
    $healthaspect = $row['healthaspect'];
    $advice = $row['advice'];
    $benefit = $row['benefits'];
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
    <form action="updatemed.php?ID=<?php echo $TipID ?>" method="post">
    <div class="form-group">
                <label for="healthaspect">Healthaspect:</label>
                <input type="text" class="form-control" id="healthaspect" name="healthaspect" placeholder="healthaspect" value="<?php echo $healthaspect ?>">
            </div>
            <div class="form-group">
                <label for="advice">Advice:</label>
                <input type="text" class="form-control" id="advice" name="advice" placeholder="advice" value="<?php echo $advice ?>">
            </div>
            <div class="form-group">
                <label for="benefits">Benefits:</label>
                <input type="text" class="form-control" id="benefits" name="benefits" placeholder="benefits" value="<?php echo $benefit ?>">
            </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>
</body>
</html>