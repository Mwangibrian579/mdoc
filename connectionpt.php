<?php
require('db.php');
if(isset($_POST['signup'])){
$appointment= $_POST['appointment'];
$dateappointment= $_POST['dateappointment'];
//$confirmpassword = $_POST['confirmpassword'];

$sql= "INSERT INTO registration ( appointment, dateappointment) VALUES(?, ?)";
$stmt = mysqli_stmt_init($conn);


mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "ss", $appointment, $dateappointment);
mysqli_stmt_execute($stmt);

header("Location: index.php");
    exit();

if($stmt->execute()){
    echo"Registration succesful";
}
else {
    echo"Error : ". $stmt->error;
}

$stmt->close();
}else{
    echo"please fill in all the fields and resubmit";
}
$conn->close();
?>