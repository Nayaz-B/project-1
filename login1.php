<?php
$con=mysqli_connect("localhost","root","","register",4000);
if($con){
    echo "connected";
}
else{
    echo "not connected";
}

$uname=$_POST['uname'];
$password=$_POST['pass'];

$sql="insert into login(Username,Password) values ('$uname','$password')";
$result =mysqli_query($con,$sql);
if($result){
    echo "inserted";
}
else{
    echo "error";
}
?>