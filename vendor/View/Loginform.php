

<!DOCTYPE html>
<html>
<head>
<title> Login Form </title>
<style>
  body  {
            
            background-color: #cccccc;
            }
            <style>
</style>
    </style>
</head>
<body>
  

|| <a href="registrationform.php" class="previous">&laquo; Registration</a>
<table border="0" width="100%">
        <tr>
            <td width="5px"><img src="login.png" alt=""></td>
            <td width="5px"> </td>
            
        </tr>
        <tr>

          </table>
<h1> Login </h1>

<form  name="login" action="loginValidate.php" method="post">
  <table>
  	<tr>
  		<td>Email: </td>
  		<td><input type="text" name="email"></td>
      <br>
     
  	</tr>
      <tr>
  		<td>Password: </td>
  		<td><input type="password" name="password"></td>
      <br>
     
  	</tr>
  	
    

  </table>
  <!--<input type="submit" value="Submit">-->
   <input  type="submit" name="submit" value="submit"> 
  <input type="reset" value="Reset">
</form> 

</body>
</html>