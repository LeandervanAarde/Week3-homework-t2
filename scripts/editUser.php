<?php
    include 'dbConnection.php';

    //get the row that needs to be updated 
   $selectedUser = $_POST['selectedUser'];
   $sql = "SELECT * FROM Users WHERE name = '$selectedUser';";
   $result = mysqli_query($connection, $sql);
   $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            if(empty($_POST['name'])){
                $name = $row['name'];
            } else{
                $name = $_POST['name'];

            }

            if(empty($_POST['age'])){
                $age = $row['Age'];
            } else{
                $age= $_POST['age'];

            }

            if(empty($_POST['occupation'])){
                $occupation= $row['Occupation'];
            } else{
                $occupation= $_POST['occupation'];  
            }

            $sql2 = "UPDATE Users SET name= '$name',Age= '$age', Occupation= '$occupation' WHERE name = '$selectedUser';";
            $result2 = mysqli_query($connection, $sql2);
            header("Location: http://localhost:8888/PhpFrontAndBack"); 
        }


    } else{
        echo "There is no user with that name";
    }
?>