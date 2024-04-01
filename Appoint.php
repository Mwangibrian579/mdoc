<?php
session_start(); // Start session if using session storage

require_once('db.php');

// Check if the patient is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: patlogin.php");
   exit();
}

// Get patient ID from session
$patient_id = $_SESSION['user_id'];

// Retrieve patient registration data from the registration table
$query = "SELECT * FROM registration WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $patient_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the patient exists in the registration table
if ($result->num_rows === 1) {
    // Fetch patient data
    $row = $result->fetch_assoc();

    // Extract patient data
    $surname = $row['surname'];
    $othernames = $row['othernames'];
    $phoneno = $row['phoneno'];
    $email = $row['email'];
    $residence = $row['residence'];
    $gender = $row['gender'];
    $password = $row['password'];
    $treatmentinfo = $row[ 'treatmentinfo'];

    // Get appointment details from the form
    $appointment = $_POST['appointment'];
    $dateofappointment = $_POST['dateofappointment'];

    // Prepare SQL statement to insert data into appointments table
    $sql = "INSERT INTO patientappoint (id, surname, othernames, phoneno, email, residence, gender, password, appointment, dateofappointment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $patient_id, $surname, $othernames, $phoneno, $email, $residence, $gender, $password, $appointment, $dateofappointment);
    $stmt->execute();

    // Check for successful insertion
    if ($stmt->affected_rows === 1) {
        echo "Appointment booked successfully";
        echo "<script>
                setTimeout(function(){
                    window.location.href = 'patloginhome.php';
                }, 2000); // 2 seconds
              </script>";
        exit();
    } else {
        echo "Error booking appointment. Please try again.";
    }
} else {
    echo "Patient not found.";
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>