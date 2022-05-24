<?php
    include 'scripts/dbConnection.php';

    //select all from users
    $sql1 = "SELECT * FROM Users;";
    $result = mysqli_query($connection, $sql1);
    $resultCheck = mysqli_num_rows($result);    

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
           // $name = $row['name']; 

           echo "
                <div class ='row_item'>
                    <p><strong>Name: </strong> ". $row['name'] . " </p>
                    <p><strong>Age: </strong> ". $row['Age'] . " </p>
                    <p><strong>Occupation: </strong> " . $row['Occupation']. " </p>
                </div> 
                ";
        }
    } else{
        echo "<h1>No data found inside the database</h1>";
    }
?>