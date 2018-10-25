<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'vote_portal');


if ( isset( $_SESSION['ooid'] ) ) {
  $voterid=$_SESSION['ooid'];
  $eid=$_SESSION['eid'];
     $start=$_POST['start'];  
      $end1=$_POST['end1'];  
    $sql = "INSERT INTO `finalsub` (ooid,eid,start,end1) VALUES('$voterid', '$eid','$start','$end1')";
    
  
     if(!mysqli_query($connection,$sql))
    {  
      echo "<script>alert('Failed to CREATE details try again');
 window.location.href='organization2.php';
 </script>";

    }
    else
    {
   echo "<script>alert('ELECTION CREATED SUCCESSFULLY');
 window.location.href='organization1.php';
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