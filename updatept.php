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
$treatmentinfo = $_POST['treatmentinfo'];

$query = "update registration set  treatmentinfo='".$treatmentinfo."'  where id='".$UserID."'" ;
$result = mysqli_query($conn,$query);

if($result)
{
header("location:treat.php");
}
else{
    echo "please check your query";
}
}
else
{
    header("location:doclogdash.php");
}

?>