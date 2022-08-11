<?php
$server="localhost:3306";
$username="root";
$password="";

$connection = mysqli_connect($server,$username,$password);

if($connection==TRUE){
    
$username = $_POST['userName'];
$password = $_POST['passWord'];

$query = " SELECT * FROM `logininfo`.`login` WHERE `username`='$username' AND `password`='$password';";

$result=$connection->query($query);
$rows = mysqli_num_rows($result);

if($rows>0){
    header('location:homepage.html');
}
else{
    header('location:index1.html');
}





}
else{
    echo "Connection not established";
}






















?>