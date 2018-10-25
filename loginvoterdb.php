<?php
 // Starting Session
session_start();
$error=''; // Variable To Store Error Message
$connection = mysqli_connect('localhost', 'root', '', 'vote_portal');


if (isset($_POST['vid'])) {
	
if (empty($_POST['vid']) || empty($_POST['psw'])) {
$error = "Voter id or Password is invalid";
}
else
{
// Define $username and $password
$voterid=$_POST['vid'];
$password=$_POST['psw'];
$_SESSION['vid']=$voterid;

$voterid = stripslashes($voterid);
$password = stripslashes($password);
	
// SQL query to fetch information of registerd users and finds user match.
	$sql = "SELECT * FROM  `voter_reg` WHERE psw='$password' AND vid='$voterid'";
  	$query=mysqli_query($connection,$sql);
    $rows = mysqli_num_rows($query);
    

// Set session variables
   
if ($rows == 1) {


 // Initializing Session
	echo "<script>alert('LOGIN SUCCESSFULLY');
   window.location.href='voter1.php';</script>";
} 
else {
	echo "<script>alert(' LOGIN failed.');
   window.location.href='vote.php';</script>";

}
mysqli_close($connection); // Closing Connection
}
}
?>