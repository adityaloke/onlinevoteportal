<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'vote_portal');


if ( isset( $_SESSION['ooid'] ) ) {
	$voterid=$_SESSION['ooid'];
  $eid=$_SESSION['eid'];
     $mem=$_POST['mem'];  
    $sql = "INSERT INTO `members` (ooid,eid,mem) VALUES('$voterid', '$eid','$mem')";
  	
  
  	 if(!mysqli_query($connection,$sql))
    {  
    	echo "<script>alert(' Member ALREADY EXIST');
 window.location.href='organization2.php';
 </script>";

    }
    else
    {
    echo "<script>alert(' Member added');
 window.location.href='organization2.php';
 </script>";

    }
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
	echo 'not ';
    // Redirect them to the login page
   //   header("Location: vote.php");
}
?>