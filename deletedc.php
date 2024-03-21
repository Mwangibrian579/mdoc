<?php

require_once('db.php');

if (isset($_GET['Del'])) {
    $doctorID = $_GET['Del'];

    // Retrieve doctor information (optional, for confirmation message)
    $getDoctorQuery = "SELECT * FROM doctors WHERE id = '$doctorID'";
    $getDoctorResult = mysqli_query($conn, $getDoctorQuery);

    if ($getDoctorResult) {
        $doctorData = mysqli_fetch_assoc($getDoctorResult); // Get doctor details (e.g., name)
    } else {
        echo 'Error retrieving doctor information for confirmation.';
        exit(); // Terminate if doctor info retrieval fails
    }

    // Display confirmation message using JavaScript
    echo '<script>';
    echo 'if (confirm("Are you sure you want to delete the record for ' . (isset($doctorData['name']) ? $doctorData['name'] : 'doctor ID ' . $doctorID) . '?")) {';
    echo '  // User confirmed deletion, proceed
    window.location.href = "delete_doctor.php?Del=' . $doctorID . '";';
    echo '} else {';
    echo '  // User canceled deletion, redirect back
    window.location.href = "Admin.php";';
    echo '}';
    echo '</script>';

} else {
    header("location:Admin.php");
}

?>
