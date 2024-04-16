<?php
require_once("db.php");

// Check if the update form is submitted
if(isset($_POST['update'])) {
    // Get the patient ID from the URL query string
    $UserID = $_GET['ID'];

    // Retrieve the current treatment info from the database
    $query = "SELECT treatmentinfo FROM registration WHERE id='$UserID'";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentTreatmentInfo = $row['treatmentinfo'];

        // Get the current date and time as a timestamp
        $currentDateTime = date("Y-m-d");

// Retrieve doctor's name from session data
session_start();
$doctorName = $_SESSION['doctor_name']; // Corrected variable name


       // Format the new treatment info with doctor's name and timestamp
$newTreatmentInfo = "[" . $currentDateTime . "] Doctor: " . $doctorName . " - " . $_POST['treatmentinfo'];


        // Append the new treatment info with its timestamp to the existing one
        $updatedTreatmentInfo = $currentTreatmentInfo . "\n" . $newTreatmentInfo;

        // Update the treatment info in the database
        $query = "UPDATE registration SET treatmentinfo='$updatedTreatmentInfo' WHERE id='$UserID'";
        $result = mysqli_query($conn, $query);

        if($result) {
            header("location:treat.php");
        } else {
            echo "Failed to update treatment information. Please check your query.";
        }
    } else {
        echo "Failed to retrieve current treatment information from the database.";
    }
} else {
    // If the form is not submitted, redirect to doctor's dashboard
    header("location:doclogdash.php");
}
?>
