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

    $sql = "INSERT INTO registration (surname, othernames, phoneno, email, residence, gender, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss", $surname, $othernames, $phoneno, $email, $residence, $gender, $password);

    if(mysqli_stmt_execute($stmt)){
        echo "Registration successful";
        echo "<script>
                setTimeout(function(){
                    window.location.href = 'patlogin.php';
                }, 2000); // 2 seconds
              </script>";
        exit();
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Please fill in all the fields and resubmit";
}

$conn->close();
?>
