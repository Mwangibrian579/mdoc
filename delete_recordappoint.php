<?php

require_once('db.php');

if (isset($_GET['Del'])) {
    $UserID = $_GET['Del'];

    $query = "DELETE FROM patientappoint WHERE id = '$UserID'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:appointmentread.php?deleted=success"); // Redirect with success message
    } else {
        header("location:appointmentread.php?deleted=error"); // Redirect with error message
    }
} else {
    // Handle unexpected access to this script directly
    echo 'Unauthorized access.';
    exit();
}

?>