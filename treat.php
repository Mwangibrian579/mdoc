<?php

require_once('db.php');
$query = "select * from registration";
$result=mysqli_query($conn,$query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Treatment Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #007bff; /* Blue background for navigation */
            padding: 10px 0; /* Add some padding */
        }
        nav a {
            color: #fff; /* White text for navigation links */
            margin-right: 20px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline; /* Underline on hover */
        }
        .heading {
            background-color: #007bff;
            color: #fff;
        }
        .btn {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="doclogdash.php">Home</a>
    </nav>
    <div class="container mt-4">
        <h2 class="mb-4">Patient Data</h2>
        <table class="table">
            <thead class="heading">     
                <tr>
                    <th>User ID</th>
                    <th>Surname</th>
                    <th>Othernames</th>
                    <th>Phone No.</th>
                    <th>Email</th>
                    <th>Residence</th>
                    <th>Gender</th>
                    <th>Treatment Info</th>
                    <th>Treat this patient</th>
                </tr>
            </thead>
            <tbody>
                    <?php

                    while($row = mysqli_fetch_assoc( $result ))
                    { 
                        $UserID = $row['id'];
                        $surname = $row['surname'];
                        $othernames = $row['othernames'];
                        $phoneno = $row['phoneno'];
                        $email = $row['email'];
                        $residence = $row['residence'];
                        $gender = $row['gender'];
                        $treatmentinfo = $row['treatmentinfo'];
            
                        

                  ?>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['surname'] ?></td>
                  <td><?php echo $row['othernames'] ?></td>
                  <td><?php echo $row['phoneno'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['residence'] ?></td>
                  <td><?php echo $row['gender'] ?></td>
                  <td><?php echo $row['treatmentinfo'] ?></td>
                  <td><a href="editpt.php?GetID=<?php echo $UserID?>" class="btn"> patient treatment info</a></td>


                    </tr>
                    <?php

                    }

                    
                        ?>
                    
                    </tbody>
                </table>
</body>
</html>