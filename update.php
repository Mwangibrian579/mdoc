<?php


require_once("db.php");
if(isset($_POST['update']))
{
$UserID = $_GET['ID'];
$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$residence = $_POST['residence'];
$password = $_POST['password'];

$query = "update registration set  surname='".$surname."', othernames='".$othernames."', phoneno='".$phoneno."', email='".$email."',residence='".$residence."'  where id='".$UserID."'" ;
$result = mysqli_query($conn,$query);

if($result)
{
header("location:Appointment.php");
}
else{
    echo "please check your query";
}
}
else
{
    header("location:Appointment.php");
}

?>