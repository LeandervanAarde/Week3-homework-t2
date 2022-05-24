<?php
    include 'dbConnection.php';

    if(empty($_POST['name'] && $_POST['age'] && $_POST['occupation'])){
        echo "Please enter all fields";
    } else{
        $name = $_POST['name'];
        $age = $_POST['age'];
        $occupation = $_POST['occupation'];

        $sql = "INSERT INTO Users( id, name, Age, Occupation) VALUES (NULL,'$name','$age','$occupation');";
        $result = mysqli_query($connection, $sql);
        header("Location: http://localhost:8888/PhpFrontAndBack"); 
    }
?>