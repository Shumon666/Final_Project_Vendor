<?php
include 'dbcon.php';
if (isset($_POST['submit']))  {
  $email=$_POST['email'];
  $password=$_POST['password'];


  $email_sch="SELECT * FROM vendor WHERE email='$email' AND password='$password' ";


  $query=mysqli_query($con,$email_sch);
  $email_count=mysqli_num_rows($query);

  if ($email_count) {
   $email_pass=mysqli_fetch_assoc($query);
   $db_pass=$email_pass['password']; 
  

   echo "login sucessful";
   header('location:VendorHomePage.php');
  }else {
    echo "login failed! Check email and password ";
  }

}
?>