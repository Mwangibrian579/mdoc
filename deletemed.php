<?php

require_once('db.php');

if(isset($_GET['Del'])){
    $TipID = $_GET['Del'];

    // Retrieve record information (optional, for confirmation message)
    $getTipQuery = "SELECT * FROM meditips WHERE id = '$TipID'";
    $getTipResult = mysqli_query($conn, $getTipQuery);

    if ($getTipResult) {
        $tipData = mysqli_fetch_assoc($getTipResult); // Get tip details (e.g., name)
    } else {
        echo 'Error retrieving record information for confirmation.';
        exit(); // Terminate if record info retrieval fails
    }

    // Display confirmation message using JavaScript (more user-friendly)
    echo '<script>';
    echo 'if (confirm("Are you sure you want to delete the record for ' . (isset($tipData['title']) ? $tipData['title'] : 'record ID ' . $TipID) . '?")) {';
    echo '  // User confirmed deletion, proceed
    window.location.href = "delete_tip.php?Del=' . $TipID . '";';
    echo '} else {';
    echo '  // User canceled deletion, redirect back
    window.location.href = "mediread.php";';
    echo '}';
    echo '</script>';

} else {
    echo "No record ID specified for deletion.";
}

$conn->close();
?>
