<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'vote_portal');


if ( isset( $_SESSION['ooid'] ) ) {
	 $voterid=$_SESSION['ooid'];
   $et=$_POST['et'];
   $eid=$_POST['eid'];
     $ed=$_POST['ed'];  
    $sql = "INSERT INTO `edetails` (ooid,et,eid,ed) VALUES('$voterid', '$et','$eid','$ed')";
  	$_SESSION['eid']=$eid;

  
  	 if(!mysqli_query($connection,$sql))
    { echo "<script>alert('Failed to add details try again');
 window.location.href='organization2.php';
 </script>";
    

    }
    else
    {  
      echo "<script>alert('DETAILS ADDED SUCCESSFULLY');
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