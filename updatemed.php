<?php


require_once("db.php");
if(isset($_POST['update']))
{
$TipID = $_GET['ID'];
$healthaspect = $_POST['healthaspect'];
$advice = $_POST['advice'];
$benefit = $_POST['benefits'];

$query = "update meditips set  healthaspect='".$healthaspect."', advice='".$advice."', benefits='".$benefit."' where id='".$TipID."'" ;
$result = mysqli_query($conn,$query);

if($result)
{
header("location:mediread.php");
}
else{
    echo "please check your query";
}
}
else
{
    header("location:mediread.php");
}

?>