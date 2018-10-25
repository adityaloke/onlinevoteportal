<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'vote_portal');


if ( isset( $_SESSION['ooid'] ) AND  isset( $_SESSION['eid'] ) ) {
	 $voterid=$_SESSION['ooid'];
   $eid=$_SESSION['eid'];
     $pos=$_POST['pos'];  
     
  // $sql = "INSERT INTO `position` (ooid,eid,pos) VALUES('$voterid', $eid','$pos')";
  	$sql="INSERT INTO `position`(ooid, eid, pos) VALUES ('$voterid', '$eid','$pos')";
  
  	 if(!mysqli_query($connection,$sql))
    {   
echo "<script>alert(' POSITION ALREADY EXIST');
window.location.href='organization2.php';
 </script>";

    }
    else
    {  echo "<script>alert(' POSITION Added successfully');
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