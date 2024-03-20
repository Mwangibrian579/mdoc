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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOCTOR DETAILS EDITS</title>
    <link rel="stylesheet" href=""/>
  </head>
  <body>
    <div>
    <nav>
      <a href="Admin.php">Home</a>
    </nav>
  </div>
 <div>
  <form action="updatedc.php?ID=<?php echo $UserID ?>" method="post">
    Names :<input type="text"name="names"placeholder="names"value="<?php echo $names?>"></br>
    <br/>
    Profession :<input type ="text"name="profession"placeholder="profession"value="<?php echo $profession?>"></br>
    <br/>
    licenseno:<input type="number"name="licenseno"Placeholder="Numerals"value="<?php echo $licenseno?>"></br>
    <br/>
    Password:<input type="password"name="password"Placeholder="Password"value="<?php echo $password?>"></br>
    
    <button type="update" class="btn" name="update">UPDATE</button>
    <button type="RESET">RESET</button>
   </form>
</div>
  </body>
</html>