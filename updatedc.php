<?php


require_once("db.php");
if(isset($_POST['update']))
{
    $UserID = $_GET['ID'];
    $names = $_POST['names'];
    $profession = $_POST['profession'];
    $licenseno = $_POST['licenseno'];
    $password = $_POST['password'];

$query = "update doctors set  names='".$names."', profession='".$profession."', licenseno='".$licenseno."', password='".$password."'  where id='".$UserID."'" ;
$result = mysqli_query($conn,$query);

if($result)
{
header("location:Docedit.php");
}
else{
    echo "please check your query";
}
}
else
{
    header("location:Docedit.php");
}

?>