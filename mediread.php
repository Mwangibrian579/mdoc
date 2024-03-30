<?php
require_once('db.php');
$query = "SELECT * FROM meditips";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Meditips data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        nav {
            margin-bottom: 20px;
        }
        .heading {
            background-color: #007bff;
            color: #fff;
        }
        .btn {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="Admin.php" class="btn btn-primary">Home</a>
        </nav>
        <h2>Medical Advice Data</h2>
        <table class="table table-striped table-bordered">
            <thead class="heading">
                <tr>
                    <th>Tip ID</th>
                    <th>Healthaspect</th>
                    <th>Advice</th>
                    <th>Benefits</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $TipID = $row['id'];
                    $healthaspect = $row['healthaspect'];
                    $advice = $row['advice'];
                    $benefit = $row['benefits'];
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['healthaspect'] ?></td>
                    <td><?php echo $row['advice'] ?></td>
                    <td><?php echo $row['benefits'] ?></td>
                    <td><a href="editmed.php?GetID=<?php echo $TipID?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="deletemed.php?Del=<?php echo $TipID?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
