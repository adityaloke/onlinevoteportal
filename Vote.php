<!DOCTYPE html>
<html>
<head>
	<title>Vote Portal</title>
	<link rel="stylesheet" type="text/css" href="format.css">
	<link rel="stylesheet" type="text/css" href="format1.css">
	<link rel="icon" href="voteindia.jpg">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	 $("#id01").hide();
	  $("#id02").hide();
	  });
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
      if (event.target == modal1) {
        modal.style.display = "none";
    }
}
</script>
<body background="back.jpg" id="xyz1">
	<div class="div1">
		<div class="div2">VOTE PORTAL</div>
		<img id="img1" src="xxx.jpg">
		<p>Welcome to Vote Portal. 
		Here you can host a vote poll and vote in any ongoing voting poll.</p>
	</div>
	<div class="side">
		<button id="id11" class="HOME" onclick="location.href = 'organization3.php';">RESULT</button>
		<button id="id22" class="HOST" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">HOST </button>
		<button id="id33" class="VOTE" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">VOTE</button>
	</div>
	<div class="maindiv">
		<img id="lion_logo"src="logo.jpg">
		<img id="elec_logo"src="eleclogo.png">
		<span>Supported by:</span>
		<img id="gif" src="here1.gif">
	</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate"  action="loginvoterdb.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="abc.png" alt="Avatar" class="avatar" id ="123">
    </div>

    <div class="container">
    	
      <label for="uname"><b>Voter Id:</b></label>
      <input type="text" placeholder="Enter voter id" name="vid" required>

      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>

     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="button" onclick="location.href='register_voter.php';" class="cancelbtn" >Register</button>
    
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate"  action="loginorgdb.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="abc.png" alt="Avatar" class="avatar" id ="123">
    </div>

    <div class="container">
    	 
      <label for="uname"><b>Oraganization  Id:</b></label>
      <input type="text" placeholder="Enter Organization id" name="ooid" required>

      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>

     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="button" onclick="location.href='register_org.php';" class="cancelbtn" >Register</button>
    
    </div>
  </form>
</div>

</body>
</html>