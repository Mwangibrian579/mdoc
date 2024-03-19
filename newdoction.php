<?php
require('db.php');
if(isset($_POST['signup'])){
$names = $_POST['names'];;
$profession = $_POST['profession'];
$licenseno = $_POST['licenseno'];
$gender = $_POST['gender'];


$sql= "INSERT INTO doctors (names, profession, licenseno, gender) VALUES(?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);


mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $names, $profession,$licenseno, $gender );
mysqli_stmt_execute($stmt);

header("Location: admin.php");
    exit();

if($stmt->execute()){
    echo"Doctor registered succesfully";
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