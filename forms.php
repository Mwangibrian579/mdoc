<?php
// save_form_data.php
require_once 'connection.php';

$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$residence = $_POST['residence'];
$gender = $_POST['gender'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

$sql = "INSERT INTO mdoc.registration (surname, othernames, phoneno, email, residence, gender, password)
VALUES ('$surname', '$othernames', '$phoneno', '$email', '$residence', '$gender', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New registration record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>