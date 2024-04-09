<?php
require_once('db.php');

// Fetch approved patient appointments data
$query = "SELECT id, surname, othernames, phoneno, email, residence, gender, treatmentinfo, appointment, dateofappointment, status, approvalstatuscomment FROM patientappoint WHERE status = 'Approved'";
$result = mysqli_query($conn, $query);

// Create CSV content
$csv = "User ID,Surname,Othernames,Phoneno,Email,Residence,Gender,Treatment Info,Appointment,Date of Appointment,Status,Approval Status Comment\n";

while ($row = mysqli_fetch_assoc($result)) {
    // Append data to CSV content
    $csv .= "{$row['id']},{$row['surname']},{$row['othernames']},{$row['phoneno']},{$row['email']},{$row['residence']},{$row['gender']},{$row['treatmentinfo']},{$row['appointment']},{$row['dateofappointment']},{$row['status']},{$row['approvalstatuscomment']}\n";
}

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="approved_appointments_report.csv"');

// Output CSV content
echo $csv;
exit();
?>
