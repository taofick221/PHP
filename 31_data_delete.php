<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "dbharry";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);

 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 else{
    echo"connection is successful";
    echo "<br>";
 }

 $sql="DELETE FROM users WHERE sno = '11'";
 $result= mysqli_query($conn,$sql);


echo "<br>";
  
    if($result){
        echo "Data is deleted successfully";

    }
    else{
        echo"data is not deleted ";
    }


?>