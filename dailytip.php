<?php
require('db.php');
// ... (Database connection code as before)

// SQL query to select a random tip from the table
$sql = "SELECT * FROM meditips ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

// Check if a tip was found
if ($result->num_rows > 0) {
    // Extract data from the row
    $tip = $result->fetch_assoc();
    $healthaspect = $tip['healthaspect'];
    $advice = $tip['advice'];
    $benefits = $tip['benefits'];

    // Format the tip for display (HTML structure)
    echo '<div class="card border-primary mb-3" style="max-width: 540px;">';
    echo '<div class="card-header">Daily Medical Tip</div>';
    echo '<div class="card-body">';
    echo "<p class='card-text'><b>Health Aspect:</b> $healthaspect</p>";
    echo "<p class='card-text'><b>Advice:</b> $advice</p>";
    echo "<p class='card-text'><b>Benefit:</b> $benefits</p>";
    echo '</div>';
    echo '</div>';
} else {
    // If no tip was found
    echo 'No tip found. Please try again later.';
}

// Close the database connection
$conn->close();
?>
