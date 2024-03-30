<!DOCTYPE html>
<html>
<head>
    <title>Daily Medical Tips</title>
    <meta http-equiv="refresh" content="300"> <!-- Refresh the page every 300 seconds (5 minutes) -->
</head>
<body>

<?php
require('db.php');
// ... (Database connection code as before)

// Define the maximum number of attempts to find a tip
$max_attempts = 15; // Set it to the maximum possible range of IDs

// Loop through ID ranges to find a tip
for ($i = 1; $i <= $max_attempts; $i++) {
    // Define the ID range
    $start_id = $i;
    $end_id = $i + 1;

    // SQL query to select a random tip within the ID range
    $sql = "SELECT * FROM meditips WHERE id >= ? AND id < ? ORDER BY RAND() LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $start_id, $end_id);

    // Execute the statement
    $stmt->execute();

    // Get the result (assuming only one row is returned)
    $result = $stmt->get_result();
    $tip = $result->fetch_assoc();

    // Close resources
    $stmt->close();

    // Check if a tip was found
    if ($tip) {
        // Extract data from the row
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

        break; // Exit the loop as a tip is found
    }
}

// If no tip was found after all attempts
if (!$tip) {
    echo 'No tip found. Please try again later.';
}

// Close the database connection
$conn->close();
?>

</body>
</html>
