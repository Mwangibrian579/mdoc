<?php


require_once("db.php");
if(isset($_POST['update']))
{
$patient_id = $_POST['ID'];
$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$residence = $_POST['residence'];
$password = $_POST['password'];
// $appointment = $_POST['appointment'];
$dateofappointment =  $_POST['dateofappointment'];
$status= $_POST['status'];
$approvalstatuscomment= $_POST["approvalstatuscomment"];

$query = "update patientappoint set  surname='".$surname."', othernames='".$othernames."', phoneno='".$phoneno."', email='".$email."', residence='".$residence."', dateofappointment='".$dateofappointment."', approvalstatuscomment='".$approvalstatuscomment."' where id='".$patient_id."'" ;
$result = mysqli_query($conn,$query);

if($result)
{
header("location:editappoint.php");
}
else{
    echo "please check your query";
}
}
else
{
    header("location:editappoint.php");
}

?>