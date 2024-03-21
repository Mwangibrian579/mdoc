<?php

require_once('db.php');

if (isset($_GET['Del'])) {
    $doctorID = $_GET['Del'];

    $query = "DELETE FROM doctors WHERE id = '$doctorID'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:Docedit.php?deleted=success"); // Redirect with success message
    } else {
        header("location:Docedit.php?deleted=error"); // Redirect with error message
    }
} else {
    // Handle unexpected access to this script directly
    echo 'Unauthorized access.';
    exit();
}

?>
