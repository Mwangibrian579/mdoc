<?php
require('db.php');
if(isset($_POST['signup'])){
$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$residence = $_POST['residence'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$sql= "INSERT INTO registration (surname, othernames, phoneno, email, residence, gender, password) VALUES(?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);


mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "sssssss", $surname, $othernames, $phoneno, $email, $residence, $gender ,$password);
mysqli_stmt_execute($stmt);

header("Location: patlogin.php");
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