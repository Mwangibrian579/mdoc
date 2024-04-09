<?php

require_once('db.php');

// Fetch doctors data
$query = "SELECT id, names, profession, licenseno FROM doctors";
$result = mysqli_query($conn, $query);

// Create CSV content
$csv = "User ID,Names,Profession,License No.\n";

while ($row = mysqli_fetch_assoc($result)) {
    // Append data to CSV content
    $csv .= "{$row['id']},{$row['names']},{$row['profession']},{$row['licenseno']}\n";
}

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="doctors_report.csv"');

// Output CSV content
echo $csv;
exit();
?>
