<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="format.css">
	<link rel="stylesheet" type="text/css" href="reg.css">
	
</head>
<script>

function validateform(){  
var myInput=document.myform.psw.value; 
var email=document.myform.email.value;  
  var mobile=document.myform.Mobile.value;  
var q=0
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            //var address = document.getElementById[email].value;
            if (reg.test(email) == false) 
            {
                alert('Invalid Email Address');
                return (false);
            }
             if(mobile.length<10){  
  alert("MOBILE must be 10 digit long.");  
  return false;   
  }  
            if(myInput.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;   
  }  

  
  

  // Validate length
  
  return true;
}  
</script>
<body background="back.jpg" id="xyz2">
<div class="div1">
		<div class="div2">VOTE PORTAL</div>
		<img id="img1" src="xxx.jpg">
		<p>Welcome to Vote Portal. 
		Here you can host a vote poll and vote in any ongoing voting poll.</p>
	</div>


  <div class="container">
    <h1>Register</h1>
   
    <hr>
    <form name="myform" action="orginsert.php" onsubmit="return validateform()"  method="POST">
    <label for="voter id"><b>Organization Id</b></label>
    <input type="text" id="xyz" placeholder="Create Organization Id" name="ooid" required="" >

     <label for="First name"><b>Organization  Name</b></label>
     <input type="text" placeholder="Enter Organization  Name" name="orgname" required="">
 

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required="">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required="">

     <label for="number"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile No" name="Mobile" required="">



    <hr>
   
    <button type="submit" class="registerbtn">Register</button>
    </form>
    <h5><a href="vote.php">login if Already Registered</a></h5>

   
  </div>
  

</body>
</html>