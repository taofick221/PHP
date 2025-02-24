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

 $sql="SELECT * FROM users WHERE dest = 'Bihar'";
 $result= mysqli_query($conn,$sql);

$num= mysqli_num_rows($result);
echo $num ." database found";

echo "<br>";
$no=1;
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo $no . " .hello " .$row['name'].  " welcome to ". $row['dest'];
        echo "<br>"; 
        $no=$no+1;
    }
    }

    $sql="UPDATE `users` SET `name` = 'Rohan2' WHERE `users`.`sno` = 4";
    $result= mysqli_query($conn,$sql);
    
    if($result){
        echo "Data is updated successfully";

    }
    else{
        echo"data is not updated ";
    }


?>