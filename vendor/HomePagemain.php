<?php
 include 'nav.php';
//include("../Bank/Vendor/view/ContactUs.php")
session_start();
	$success = "";

	if(isset($_POST['submit']))
	{

		$accno = $_POST['accno'];
		$accemail = $_POST['accemail'];

		$email = $rows['accemail'];

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bank Management System</title>
	<style>
        .error {
            color: #FF0000;
        }

        body  {
            
            background-color: #11a587;
            }
    </style>
</head>
<body>
<h1 style= "text-align:center; ">
    
    <p style= "text-align:center;">Welcome to Amar Bank!</p>
    
    <div style="border: black; border-width: 0.5px; border-style: solid;"></h1>
	

<form method="post" action="HomePage.php">
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>


<!--<div style="width: 50px; height: 50px;"></div>
<div class="col-lg-2">
	<ul class="navbar navbar-default nav" style="height: 100px;">

	    <a href="Loginform.php"><span style="margin-left: 1100px; margin-top:20px; font-size: 20px;"><b>Login</b></span></a>
		<a href="registrationform.php"><span style="margin-left: 25px; margin-top: 20px; font-size: 20px;"><b>SignUp</b></span></a>
		<a href="AboutUs.php"><span style="margin-left: 25px; margin-top: 20px; font-size: 20px;"><b>About Us</b></span></a>
		<a href="../view/ContactUs.php"><span style="margin-left: 25px; margin-top: 20px; font-size: 20px;"><b>Contact Us</b></span></a>
		</ul>
		</div>
		</tr>
            <td width="5000000px"><img src="Bank/Vendor/ab.png" alt=""></td>
            <td width="5000000px"> </td>
    </tr>
	

</div>-->
</form>
</body>
</html>