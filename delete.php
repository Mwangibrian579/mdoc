<?php

require_once('db.php');

if (isset($_GET['Del'])) {
    $UserID = $_GET['Del'];

    // Retrieve user information (optional, for confirmation message)
    $getUserQuery = "SELECT * FROM registration WHERE id = '$UserID'";
    $getUserResult = mysqli_query($conn, $getUserQuery);

    if ($getUserResult) {
        $userData = mysqli_fetch_assoc($getUserResult); // Get user details (e.g., name)
    } else {
        echo 'Error retrieving user information for confirmation.';
        exit(); // Terminate if user info retrieval fails
    }

    // Display confirmation message using JavaScript (more user-friendly)
    echo '<script>';
    echo 'if (confirm("Are you sure you want to delete the record for ' . (isset($userData['name']) ? $userData['name'] : 'user ID ' . $UserID) . '?")) {';
    echo '  // User confirmed deletion, proceed
    window.location.href = "delete_record.php?Del=' . $UserID . '";';
    echo '} else {';
    echo '  // User canceled deletion, redirect back
    window.location.href = "Appointment.php";';
    echo '}';
    echo '</script>';

} else {
    header("location:Appointment.html");
}

?>
