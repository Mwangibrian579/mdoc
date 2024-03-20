<?php

require_once('db.php');
$query = "select * from doctors";
$result=mysqli_query($conn,$query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="appoi.css">
    <title>Fetch Doctor data</title>
    <nav>
    <a href="Admin.php">Home</a>
    </nav>
</head>
<body>
            <h2> Doctor Data</h2>
                <table class="table">
                    <thead class="heading">     
                         <tr>
                        <td>UserID</td>
                        <td>names</td>
                        <td>profession</td>
                        <td>licenseno</td>
                        <td>password</td>
                        <td>Edit</td>
                        <td>Delete</td>
                        
                    </tr>
                </thead>
                    <tbody>
                    <tr>
                    <?php

                    while($row = mysqli_fetch_assoc( $result ))
                    { 
                        $UserID = $row['id'];
                        $names = $row['names'];
                        $profession = $row['profession'];
                        $licenseno = $row['licenseno'];
                        $password = $row['password'];
                        

                  ?>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['names'] ?></td>
                  <td><?php echo $row['profession'] ?></td>
                  <td><?php echo $row['licenseno'] ?></td>
                  <td><?php echo $row['password'] ?></td>
                  <td><a href="editdc.php?GetID=<?php echo $UserID?>" class="btn">Edit</a></td>
                  <td><a href="deletedc.php?Del=<?php echo $UserID?>" class="btn">Delete</a></td>


                    </tr>
                    <?php

                    }

                    
                        ?>
                    
                    </tbody>
                </table>
</body>
</html>