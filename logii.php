<?php
// login.php
require_once 'connection.php';

$surname = $_POST['surname'];
$password = $_POST['password'];

// Validate the surname
if (empty($surname)) {
    echo "Surname is required.";
    exit();
}

// Validate the password
if (empty($password)) {
    echo "Password is required.";
    exit();
}

// Prepare and bind the statement to avoid SQL injection
$stmt = $conn->prepare("SELECT id, password FROM mdoc.registration WHERE surname = ?");
$stmt->bind_param("s", $surname);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $row['password'])) {
        echo "Login successful! Welcome, " . $surname . ".";
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "Surname not found.";
}

$conn->close();
?>