<?php
    include 'dbConnection.php';
    $selectedUser = $_POST['delete'];
    $sql3 = "DELETE FROM Users WHERE name = '$selectedUser';";
    $result = mysqli_query($connection, $sql3);
    header("Location: http://localhost:8888/PhpFrontAndBack/"); 
?>