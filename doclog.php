<?php
require('db.php');
require('docfunctions.php');

if(isset($_POST['login'])) {
    $licenseno =$_POST['licenseno'];
    $password =$_POST['password'];

    $licensnoExists = usernameExists($conn, $licenseno);

    if ($licensnoExists === false) {
        echo "invalid name";
        exit();
    }

    if($licensnoExists['password'] != $password){
        echo "Invalid password";
        exit();
    }else{
        session_start();
        $_SESSION['licenseno'] = $licensenoExists['licenseno'];
        $_SESSION['user_id'] = $licensenoExists['id'];
        header("Location: doclogdash.php");
    }
}
?>