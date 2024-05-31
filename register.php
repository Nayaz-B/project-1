<?php 
session_start();
include ("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$Firstname=$_POST['Fname'];
$Lastname=$_POST['Lname'];
$Gender=$_POST['Gender'];
$gmail=$_POST['mail'];
$password=$_POST['password'];
$pass1=$_POST['confirmpass'];
if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
{
$query=" insert into login (Fname,Lname, Gender,mail,password,confirmpass) values ('$Firstname','$Lastname','$Gender''$gmail','$password','$pass1')";
mysqli_query ($con,$query);
echo "<script type='text/javascript'> alert('Successfully Register')</script>";
}
else {
echo"<script type='text/javascript'> alert('Please Enter some Valid information')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <title>Create new account</title>
</head>
<body>
        
    <div class="wrapper"> 
        <h1>Registration form</h1><br>
        <form action="Signup.php" method="POST" onsubmit="return validate()">
            <label>First Name</label>
            <div class="input-box">
            <input type="text" placeholder="First Name" id="Fname" name="Firstname">
        </div>
            <label>Last Name</label>
            <div class="input-box">
            <input type="text" placeholder="Last Name" id="Lname" name="Lastname">
        </div>
            <label>Gender</label>
            <div class="input-box">
            <input type="text" placeholder="Gender" id="Gender" name="Gender"></div>
           <!--- Male:<input type="radio" name="Gender" value="M" id="Male">
            Female:<input type="radio" name="Gender" value="F" id="Female">
            Others:<input type="radio" name="Gender" value="O" id="Others"><br><br> ---->
            <label>Email</label>
            <div class="input-box">
            <input type="text" placeholder="abc@gmail.com" name="email" id="gmail">
        </div>
            <label for="pass1">Password</label>
            <div class="input-box">
            <input type="password" id="password" name="password"  placeholder="password " onkeyup="demo()">
            </div>
           <label for="pass2">Confirm Password</label>
            <div class="input-box">
            <input type="password" placeholder=" confirm password " name="confirmpass" id="confirmpass">
        </div>
            <button type="submit" value="Register" class="btn" onclick="Submit2()" id="sub2">Submit</button>
        <ul>
            <li id="upper">Atleast one UpperCase</li>
            <li id="lower">Atleast one LowerCase</li>
            <li id="num">Atleast one number</li>
            <li id="special">Atleast one special charecter</li>
            <li id="length">minimum 8 charecters</li>
        </ul>
            <script>
                function Submit2(){
                    window.location="LoginForm1.php";
                }
                function demo(){
                    var pass1=document.getElementById("pass1");
                    
                    var upper=document.getElementById("upper");
                    var Lower=document.getElementById("lower");
                    var num=document.getElementById("num");
                    var special=document.getElementById("special");
                    var length=document.getElementById("length");
                    
                    if(pass1.value.match(/[0-9]/)){
                        num.style.color="green";

                    }
                    else{
                        num.style.color="red";
                    }
                    if(pass1.value.match(/[A-Z]/)){
                    upper.style.color="green";

                    }
                    else{
                        upper.style.color="red";
                    }
                    if(pass1.value.match(/[a-z]/)){
                    Lower.style.color="green";

                    }
                    else{
                        Lower.style.color="red";
                    }
                   if(pass1.value.match(/[!@#$%^&*_+]/)){
                        special.style.color="green";
                    }
                    else{
                        special.style.color="red";
                    }
                    if (pass1.value.length>=8){
                       length.style.color="green";
                    }
                    else{
                        length.style.color="red";
                    }
                    }
                function validate(){
                    var box1=document.getElementById("fname");
                    if(box1.value=""){
                        alert("field should not be empty");
                        return false;
                    }
                    var box1=document.getElementById("fname");
                    if(box1.value.length<10){
                        box1.style.backgroundColor="red";
                        return false;
                    }
                }
            </script>
    </form>
    </div>
</body>
</html>