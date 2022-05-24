<?php
    include 'scripts/dbConnection.php';

    //select all from users
    $sql = "SELECT name FROM Users;";
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);    

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
           // $name = $row['name']; 

           echo "
               <option> 
               ". $row['name'] . " 
               </option>
                ";
        }
    } else{
        echo "<option>There are no users listed</option>";
    }
?>