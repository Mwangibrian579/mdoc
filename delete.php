<?php

require_once('db.php');

if(isset($_GET['Del']))
{
    $UserID = $_GET['Del'];
    $query = " delete from registration where id = '".$UserID."'";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        header("location:Appointment.php");
    }
    else
    {
        echo'please check your query';
    }
}
else
{
    header("location:Appointment.html");
}


?>