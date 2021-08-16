<!DOCTYPE html>
<html lang="en">

<head>

    <title>Enter Information</title>
    <style>
        .error {
            color: #FF0000;
        }
        body  {
            
            background-color: #d4a79e;
            }
    </style>
</head>

<body>
    <p class="lead text-center" style="margin: 10px;"><a href="Loginform.php">Previous Page</a> </p>
<form method="post" action="RegistrationValidate.php" name="registration" onsubmit="validateform()>
    <table border="0" width="100%">
        <tr>
            <td width="500px"><img src="file/logo.png" alt=""></td>
            <td width="500px"> </td>

           
        </tr>
        <tr>
            <td></td>
            <td height="600px" align="center">
                <form method="post" action="">
                    <fieldset>
                        <legend><b>REGISTRATION</b></legend>
                        <table border="0">
                            <tr>
                                <td>Name</td>
                                <td>:
                                    <input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()"> 
                                  

                                </td>
                                  <td id="nameErr"> </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:
                                    <input type="email" name="email" id="email"onkeyup="ValidateEmail()" onblur="ValidateEmail()"></td>
                                    <td id="emailErr"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td>:
                                    <input type="text" name="username" id="username" onkeyup="checkuserName()" onblur="checkuserName()"/></td>
                                      <td id="userNameErr">  </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:
                                    <input type="password" name="password" id="password" onkeyup="checkPass()" onblur="checkPass()">
                                    
                                </td>
                                <td id="passErr"> </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:
                                    <input type="password" name="curr_password" id="curr_password" onkeyup="passwordVerify()" onblur="passwordVerify()">
                                    
                                </td>
                                <td id="con_passErr"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male" id="gender">Male
                                        <input type="radio" name="gender" value="Female" id="gender">Female
                                        <input type="radio" name="gender" value="Other" id="gender">Other
                                    </fieldset>
                                  
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date Of Birth</legend>
                                        <input type="Date" id="dob" name="dob" min="1953-01-01" max="2010-01-01">
                                    </fieldset>
                                    
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>User Identity</legend>
                                        <input type="radio" name="identity" id="identity" value="Admin" >
                                        <label for="Admin"> Admin</label>
                                        <input type="radio" name="identity" id="identity" value="Manager">
                                        <label for="Manager">Manager</label>
                                        <input type="radio" name="identity" id="identity" value="Stuff">
                                        <label for="Stuff">Stuff</label>
                                        <input type="radio" name="identity" id="identity" value="Vendor">
                                        <label for="Vendor">Vendor</label>
                                    </fieldset>

                                </td>
                           </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>User ID</td>
                                <td>:
                                    <input type="text" name="userid" id="userid" onkeyup="checkuserId()" onblur="checkuserId()">

                                </td>
                                <td id="useridErr"></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" value="reset">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
            <td></td>
        </tr>
    </table>
    </form>
    <script type="text/javascript" src="regValidate.js"></script>
</body>

</html>

                            