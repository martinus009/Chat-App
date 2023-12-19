<?php 
$conn = mysqli_connect("localhost", "root" ,"","chat");
if(!$conn){
    echo "Database connect" . mysqli_connect_error();
}
?>