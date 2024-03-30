<?php
require_once("db.php");

if(isset($_POST['update'])) {
    $UserID = $_GET['ID'];
    $treatmentinfo = $_POST['treatmentinfo'];

    // Get the current treatmentinfo from the database
    $query = "SELECT treatmentinfo FROM registration WHERE id = '$UserID'";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentTreatmentInfo = $row['treatmentinfo'];

        // Concatenate the new treatmentinfo with the existing data
        $updatedTreatmentInfo = $currentTreatmentInfo . ', ' . $treatmentinfo;

        // Update the treatmentinfo column with the concatenated value
        $query = "UPDATE registration SET treatmentinfo = '$updatedTreatmentInfo' WHERE id = '$UserID'";
        $result = mysqli_query($conn, $query);

        if($result) {
            header("location:treat.php");
        } else {
            echo "Failed to update treatment information. Please check your query.";
        }
    } else {
        echo "Patient with ID $UserID not found.";
    }
} else {
    header("location:doclogdash.php");
}
?>
