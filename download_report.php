<?php
// Include the file that establishes the database connection
require_once('db.php');

// Check if the form is submitted and doctor is selected
if(isset($_POST['download']) && !empty($_POST['doctor'])) {
    // Get the selected doctor from the form
    $doctor = $_POST['doctor'];

    // Prepare the filename for download
    $filename = $doctor . "_appointments.csv";

    // Set the appropriate headers for CSV download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Open PHP output stream for writing CSV data
    $output = fopen('php://output', 'w');

    // Query to fetch appointment data for the selected doctor
    $query = "SELECT * FROM patientappoint WHERE appointment = '$doctor' AND status = 'Approved'";
    $result = mysqli_query($conn, $query);

    // Check if appointments are found
    if(mysqli_num_rows($result) > 0) {
        // Write headers to CSV file
        fputcsv($output, array('User ID', 'Surname', 'Othernames', 'Phoneno', 'Email', 'Residence', 'Gender', 'Date of Appointment'));

        // Loop through the appointment data and write to CSV
        while ($row = mysqli_fetch_assoc($result)) {
            fputcsv($output, $row);
        }

        // Close the output stream
        fclose($output);
        exit(); // Stop further execution
    } else {
        // If no appointments are found, display a message
        echo "No appointments found for the selected doctor.";
    }
} else {
    // If no doctor is selected, display a message
    echo "Please select a doctor.";
}
?>
