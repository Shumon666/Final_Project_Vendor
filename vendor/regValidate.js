function validateform(){  
      var name=document.registration.name.value; 
      var email=document.registration.email.value; 
      var username=document.registration.username.value; 
      var password=document.registration.password.value;
      var curr_password=document.registration.curr_password.value; 
      var gender=document.registration.gender.value;  
      var dob=document.registration.dob.value
      var identity=document.registration.identity.value; 
      var userid=document.registration.userid.value;

      
       if (name==null || name=="") {
        alert(" name can't be blank.");  
        return false;  
      }  
       else if (password.length<6) {
        alert("Password must be at least 6 characters long");  
        return false;  
      } 
      else if (email==null || email==""){  
        alert("email can't be blank");  
        return false;  
      }else if(pnum.length>10){  
        alert("Phone number must be at least 11 characters long.");  
        return false;  
      } 
      else if(gender.length>0){  
        alert("gender  must be select");  
        return false;  
      } 
      else if(dob==null || dob==""){  
        alert("Must select a date of birth");  
        return false;  
      } 
       else if(identity==null || dob==""){  
        alert("Must select identity");  
        return false;  
      } 
    }
      function checkName(){
          if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }else if(document.getElementById("name").value.length<3){
          document.getElementById("name").style.borderColor = "red";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("nameErr").innerHTML = "name must be at least 3 characters long.";
      }
      else{
        document.getElementById("nameErr").innerHTML = "";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("name").style.borderColor = "black";
      }
        }
        function checkuserName(){
          if (document.getElementById("username").value == "") {
          document.getElementById("userNameErr").innerHTML = "User Name can't be blank";
          document.getElementById("userNameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
      }else if(document.getElementById("username").value.length<3){
          document.getElementById("username").style.borderColor = "red";
          document.getElementById("userNameErr").style.color = "red";
        document.getElementById("userNameErr").innerHTML = "User name must be at least 3 characters long.";
      }
      else{
        document.getElementById("userNameErr").innerHTML = "";
          document.getElementById("userNameErr").style.color = "red";
        document.getElementById("username").style.borderColor = "black";
      }
        }
    
       function ValidateEmail()
      {
        var mailformat =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
       if(document.getElementById("email").value.match(mailformat))
        {
        document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "green";
        document.getElementById("emailErr").innerHTML = "valid email";
          document.getElementById("emailErr").style.color = "green";
          return true;
           }
          else
             {
               document.getElementById("emailErr").innerHTML = "invalid email address , must contain @ or specific email provider address";
           document.getElementById("emailErr").style.color = "red";
           document.getElementById("email").style.borderColor = "red";
            return false;
                 }
        }
        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passErr").innerHTML = "Password can't be blank";
          document.getElementById("passErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<6){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
      }
      else{
        document.getElementById("passErr").innerHTML = "";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("password").style.borderColor = "black";
      }
        }

        function passwordVerify() {
  if (document.getElementById("curr_password").value == "") {
    document.getElementById("con_passErr").innerHTML = "Confrim Password can't be blank";
          document.getElementById("con_passErr").style.color = "red";
          document.getElementById("curr_password").style.borderColor = "red";
  }
 else if (document.getElementById("password").value === document.getElementById("curr_password").value) {
     document.getElementById("con_passErr").innerHTML = "";
        document.getElementById("curr_password").style.borderColor = "green";
        document.getElementById("con_passErr").innerHTML = "password matched";
          document.getElementById("con_passErr").style.color = "green";
          return true;

   
  }
  else{
      document.getElementById("con_passErr").innerHTML = "password don't match ";
           document.getElementById("con_passErr").style.color = "red";
           document.getElementById("curr_password").style.borderColor = "red";
            return false;
  }
}
function checkuserId(){
          if (document.getElementById("userid").value == "") {
          document.getElementById("useridErr").innerHTML = "User id can't be blank";
          document.getElementById("useridErr").style.color = "red";
          document.getElementById("userid").style.borderColor = "red";
      }else if(document.getElementById("userid").value.length<3){
          document.getElementById("userid").style.borderColor = "red";
          document.getElementById("useridErr").style.color = "red";
        document.getElementById("useridErr").innerHTML = "User od must be at least 3 characters long.";
      }
      else{
        document.getElementById("useridErr").innerHTML = "";
          document.getElementById("useridErr").style.color = "red";
        document.getElementById("userid").style.borderColor = "red";
      }
        }