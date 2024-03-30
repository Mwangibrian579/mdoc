<?php

require_once('db.php');

if (isset($_GET['Del'])) {
    $TipID = $_GET['Del'];

    $query = "DELETE FROM meditips WHERE id = '$TipID'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:mediread.php?deleted=success"); // Redirect with success message
    } else {
        header("location:mediread.php?deleted=error"); // Redirect with error message
    }
} else {
    // Handle unexpected access to this script directly
    echo 'Unauthorized access.';
    exit();
}

?>