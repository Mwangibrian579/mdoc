<?php
require ('db.php');

function usernameExists($conn, $surname){
    $sql ="SELECT * FROM registration WHERE surname = ?";
    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $surname);  // bind parameters for markers in the SQL statement
    mysqli_stmt_execute($stmt);   // execute the prepared statement


    $result = mysqli_stmt_get_result($stmt);
     if ($row = mysqli_fetch_assoc($result)){   
        return $row;
     } else {
        $result = false;
        return $result;
}

mysqli_stmt_close($stmt);
}

?>