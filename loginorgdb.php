<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
$connection = mysqli_connect('localhost', 'root', '', 'vote_portal');
if (isset($_POST['psw'])) {
	
if (empty($_POST['ooid']) || empty($_POST['psw'])) {
echo "Organization id or Password is invalid";
}
else
{
// Define $username and $password
$voterid=$_POST['ooid'];
$password=$_POST['psw'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// To protect MySQL injection for Security purpose
$voterid = stripslashes($voterid);
$password = stripslashes($password);
	
// SQL query to fetch information of registerd users and finds user match.
	$sql = "SELECT psw FROM `org_reg` WHERE ooid='$voterid'";
  	$result=mysqli_query($connection,$sql);{
  	while($row = $result->fetch_assoc()){
  		$abc = $row["psw"];
  	}
}
    //$rows = mysqli_num_rows($query);	
if (password_verify($password,$abc)) {
 // Initializing Session
$_SESSION['ooid']=$voterid;
 $flag=1;
  echo "<script>alert('LOGIN SUCCESSFULLY');
 window.location.href='organization1.php';
 </script>";
 
} else {
 echo "<script>alert('Username or password is incorrect');
 window.location.href='vote.php';
 </script>";

  
exit();
}

mysqli_close($connection); // Closing Connection
}
}
?>