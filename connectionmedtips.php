<?php
require('db.php');
if(isset($_POST['signup'])){
$healthaspect = $_POST['healthaspect'];
$advice = $_POST['advice'];
$benefits = $_POST['benefits'];

$sql= "INSERT INTO meditips (healthaspect, advice, benefits) VALUES(?, ?, ?)";
$stmt = mysqli_stmt_init($conn);


mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "sss", $healthaspect, $advice, $benefits);
mysqli_stmt_execute($stmt);

header("Location: admin.php");
    exit();

if($stmt->execute()){
    echo"Added succesfully";
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