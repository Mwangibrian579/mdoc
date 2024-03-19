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
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update form</title>
    <link rel="stylesheet" href="reg.css"/>
  </head>
  <body>
    <div>

  </div>
 <div>
  <form action="update.php?ID=<?php echo $UserID ?>" method="post">
    Surname:<input type="text"name ="surname"placeholder="surname" value="<?php echo $surname?>"></br>
   </br>
    other names :<input type="text"name="othernames"placeholder="othernames" value="<?php echo $othernames?>"></br>
    <br/>
    phone no.:<input type ="number"name="phoneno"placeholder="Numerals" value="<?php echo $phoneno?>"></br>
    <br/>
    Email:<input type="email"name="email"Placeholder="Optional" value="<?php echo $email?>"></br>
    <br/>
    Residence:<input type="text"name="residence"placeholder="residence" value="<?php echo $residence?>"></br>
    Password:<input type ="password"name="password"placeholder="password" value="<?php echo $password?>"></br>
    <br/>
    <button type="update" class="btn" name="update">UPDATE</button>
    <button type="RESET">RESET</button>
   </form>
</div>
  </body>
</html>
