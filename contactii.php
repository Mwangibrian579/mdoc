<?php
require('db.php');
if(isset($_POST['submit'])){
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql= "INSERT INTO contact (surname, email, message) VALUES(?, ?, ?)";
$stmt = mysqli_stmt_init($conn);


mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "sss", $surname, $email, $message);
mysqli_stmt_execute($stmt);

header("Location: index.php");
    exit();

if($stmt->execute()){
    echo"Message submitted succesfully";
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