<?php
require_once("db.php");

if(isset($_POST['update'])) {
    $UserID = $_GET['ID'];
    $surname = $_POST['surname'];
    $othernames = $_POST['othernames'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $residence = $_POST['residence'];
    $newTreatmentInfo = $_POST['treatmentinfo'];

    // Get the current date and time as a timestamp
    $currentDateTime = date("Y-m-d");

    // Format the new treatment info with its timestamp
    $updatedTreatmentInfo = "[" . $currentDateTime . "] " . $newTreatmentInfo;

    // Retrieve the current treatment info from the database
    $query = "SELECT treatmentinfo FROM registration WHERE id='$UserID'";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentTreatmentInfo = $row['treatmentinfo'];

        // Append the new treatment info with its timestamp to the existing one
        $updatedTreatmentInfo = $currentTreatmentInfo . "\n" . $updatedTreatmentInfo;

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
    header("location:doclogdash.php");
}
?>
