<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'vote_portal');


if ( isset( $_SESSION['elecid'] ) AND isset( $_SESSION['vid'] )) {
	 $voterid=$_SESSION['vid'];
  
   $elecid=$_SESSION['elecid'];
    
$selected_radio = $_POST['radio'];

//$sql = "INSERT INTO `finalvotes` (vid,eid,status,vote) VALUES('$voterid', '$elecid','1','$selected_radio')";
$sql="INSERT INTO `finalvotes`(`vid`, `eid`, `status`, `vote`) VALUES ('$voterid', '$elecid',1,'$selected_radio')";
     if(mysqli_query($connection,$sql))
    {
    if(mysqli_num_rows($result1) == 0) {
     echo "<script>alert('Thank You For Voting  ');
window.location.href='vote.php';
 </script>";}
 else
 { echo "<script>alert('YOU HAVE ALREADY VOTED ');
window.location.href='vote.php';
 </script>";}

    }
    else
    {
       echo "<script>alert('YOU HAVE ALREADY VOTED  ');
 window.location.href='voter1.php';
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