<?php
require('db.php');
require('functions.php');

if(isset($_POST['login'])) {
    $surname =$_POST['surname'];
    $password =$_POST['password'];

    $surnameExists = usernameExists($conn, $surname);

    if ($surnameExists === false) {
        echo "invalid name";
        exit();
    }

    if($surnameExists['password'] != $password){
        echo "Invalid password";
        exit();
    }else{
        session_start();
        $_SESSION['surname'] = $surnameExists['surname'];
        $_SESSION['user_id'] = $surnameExists['id'];
        header("Location: patloginhome.php");
    }
}
?>
