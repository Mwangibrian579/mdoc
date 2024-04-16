<?php
require('db.php');
require('docfunctions.php');

if(isset($_POST['login'])) {
    $licenseno = $_POST['licenseno'];
    $password = $_POST['password'];

    $licensnoExists = usernameExists($conn, $licenseno);

    if ($licensnoExists === false) {
        echo "Invalid license number";
        exit();
    }

    if($licensnoExists['password'] != $password){
        echo "Invalid password";
        exit();
    } else {
        session_start();
        $_SESSION['doctor_name'] = $licensnoExists['names'];
        $_SESSION['user_id'] = $licensnoExists['id'];
        header("Location: doclogdash.php");
    }
}
?>