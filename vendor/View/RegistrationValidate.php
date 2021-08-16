<?php  
include 'dbcon.php';
 if (isset($_POST['submit'])) {

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['curr_password']) || empty($_POST['gender']) || empty($_POST['identity']) || empty($_POST['userid']) || empty($_POST['dob']))
{
            echo"Plaese fill out all the field";
        }

else{
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $username=mysqli_real_escape_string($con,$_POST['username']);
  $password=mysqli_real_escape_string($con,$_POST['password']);
  $curr_password=mysqli_real_escape_string($con,$_POST['curr_password']);

  $identity=mysqli_real_escape_string($con,$_POST['identity']);
  $gender=mysqli_real_escape_string($con,$_POST['gender']);
  $dob=mysqli_real_escape_string($con,$_POST['dob']);
   $userid=mysqli_real_escape_string($con,$_POST['userid']);

   $emailquery= "SELECT * FROM vendor WHERE email='$email'";
   $query=mysqli_query($con,$emailquery);

   $emailcount=mysqli_num_rows($query);

   if ($emailcount>0) {
     echo "email already exist! ";
   }else{
    if ($pass === $confpass) {
      $insertquery="INSERT INTO vendor( name,email,username,password,curr_password,gender,identity,userid,dob) VALUES('$name','$email','$username','$password','$curr_password','$gender','$identity','$userid','$dob')";
      $iquery=mysqli_query($con,$insertquery);
      
      header('location:Loginform.php');

    }else{
      echo "password not matched";
     
   }  
   }
    }
    }
 ?> 