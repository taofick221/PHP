<?php
$servername="localhost";
$username="root";
$password="";
$database="dbharry";

$conn=$mysqli_connect($servername,$username.$password);

if(!$conn){
    echo ("Connection was failed".$mysqli_connet_error());
}
else{
    echo "connection was successful";
}
$sql= "INSERT INTO 'users'('name','id') VALUES ('taofick','221')";
$result= $mysqli_query($conn,$sql);

if($result){
 echo "The value is insert successfully";


}
else{
    echo "Error push data. Check your code again".$mysqli_error($conn);
}

?>