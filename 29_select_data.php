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
 }

$sql = "SELECT * FROM `users`";
$result= mysqli_query($conn,$sql);

$num= mysqli_num_rows($result);
echo $num;
echo "<br>";

if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo $row['id']. " .hello " .$row['name'].  " your email is ". $row['email'];
        echo "<br>"; 
    }
    }

?>