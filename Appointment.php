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
    <link rel="stylesheet" href="appoi.css">
    <title>Fetch patient data</title>
    <nav>
    <a href="Admin.php">Home</a>
    </nav>
</head>
<body>
            <h2> patient Data</h2>
                <table class="table">
                    <thead class="heading">     
                         <tr>
                        <td>User ID</td>
                        <td>Surname</td>
                        <td>othernames</td>
                        <td>phoneno</td>
                        <td>email</td>
                        <td>residence</td>
                        <td>gender</td>
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
                        $surname = $row['surname'];
                        $othernames = $row['othernames'];
                        $phoneno = $row['phoneno'];
                        $email = $row['email'];
                        $residence = $row['residence'];
                        $gender = $row['gender'];
                        $password = $row['password'];
                        

                  ?>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['surname'] ?></td>
                  <td><?php echo $row['othernames'] ?></td>
                  <td><?php echo $row['phoneno'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['residence'] ?></td>
                  <td><?php echo $row['gender'] ?></td>
                  <td><?php echo $row['password'] ?></td>
                  <td><a href="edit.php?GetID=<?php echo $UserID?>" class="btn">Edit</a></td>
                  <td><a href="delete.php?Del=<?php echo $UserID?>" class="btn">Delete</a></td>


                    </tr>
                    <?php

                    }

                    
                        ?>
                    
                    </tbody>
                </table>
</body>
</html>