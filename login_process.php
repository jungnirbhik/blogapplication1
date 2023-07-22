<?php
session_start();
include("connection.php");

if(isset($_POST['login']));{
    if($_SERVER["REQUEST_METHOD"]=="POST"){

$email =$_POST['email'];
$password=$_POST['password'];

if($email && $password){
  
    $query="SELECT * FROM user WHERE email ='{$email}'";
    $final=mysqli_query($conn,$query);
    $numrows=mysqli_num_rows($final);
 }

    $insertquery="insert into user(email,password) values('$email','$password')";
    $result =mysqli_query($conn,$insertquery);
    if($result){
        if($result){
           
        echo"You have succefully loged in.";
        }
        else{
            echo"youre not logged in.";
        }
         header("Location:home.php");
        exit(); // Make sure to include this to prevent further script execution
    } else {
        // If the login fails, you can show an error message or redirect back to the login page.
        header("Location:login.php?error=1");
        exit();
    }
    
    }
}

?>
