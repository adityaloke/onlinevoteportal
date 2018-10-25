<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="format.css">
	<link rel="stylesheet" type="text/css" href="reg.css">
	
</head>
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
    <form action="voterinsert.php" method="POST">
    <label for="voter id"><b>Voter Id</b></label>
    <input type="text" id="xyz" placeholder="Create Voter Id" name="vid" required="" >

     <label for="First name"><b>First name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" required="">
  <label for="Last name"><b>Last name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" required="">


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