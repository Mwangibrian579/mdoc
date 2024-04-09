<?php
require_once('db.php');

// Fetch patient data
$query = "SELECT id, surname, othernames, phoneno, email, residence, gender FROM registration";
$result = mysqli_query($conn, $query);

// Create CSV content
$csv = "User ID,Surname,Othernames,Phoneno,Email,Residence,Gender\n";

while ($row = mysqli_fetch_assoc($result)) {
    // Append data to CSV content
    $csv .= "{$row['id']},{$row['surname']},{$row['othernames']},{$row['phoneno']},{$row['email']},{$row['residence']},{$row['gender']}\n";
}

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="patients_report.csv"');

// Output CSV content
echo $csv;
exit();
?>
