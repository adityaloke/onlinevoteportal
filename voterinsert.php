<?php 
 $db = mysqli_connect('localhost', 'root', '', 'vote_portal');

$Firstname = "";
$Lastname = "";
$voterid = "";
$Password = "";
$Email = "";
$Mobile = "";

  if(!$db)
  {
  	echo 'not connected';

  }
  else
  {$voterid = $_POST['vid'];
$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Password = $_POST['psw'];
$Email = $_POST['email'];
$Mobile= $_POST['Mobile'];

  	
  	
   	$sql = "INSERT INTO `voter_reg` (vid,firstname,lastname,psw,email,Mobile) VALUES('$voterid', '$Firstname','$Lastname','$Password','$Email','$Mobile')";
  	
    if(!mysqli_query($db,$sql))
    {
    	echo "<script>alert(' Registration failed.');
   window.location.href='vote.php';
 </script>";
    }
    else
    {
    	echo "<script>alert(' Registration SUCCESSFULL');
 window.location.href='vote.php';
 </script>";
    }
  }
  ?>