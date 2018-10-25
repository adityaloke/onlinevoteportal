<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'vote_portal');

 $flag1=0; $flag2=0; $flag3=0; $flag4=0; $flag5=0; $flag6=0;
if ( isset( $_SESSION['ooid'] ) ) {
  $flag1=0; $flag2=0; $flag3=0; $flag4=0; $flag5=0; $flag6=0;
	         $voterid=$_SESSION['ooid'];
            $eid=$_SESSION['eid'];
  if (isset($_POST['cd1'])) {
     $cd1=$_POST['cd1'];  
  $cd1=$_POST['cd1'];  
    $sql = "INSERT INTO `candidates` (ooid,eid,cd,status) VALUES('$voterid','$eid', '$cd1','a')";
    
      if(!mysqli_query($connection,$sql))
    {
      echo 'not inserted';

    }
    else
    {
     $flag1=1;
    }


  }
  if (isset($_POST['cd2'])) {
     $cd1=$_POST['cd2'];  
 
   $sql = "INSERT INTO `candidates` (ooid,eid,cd,status) VALUES('$voterid','$eid', '$cd1','b')";
    
      if(!mysqli_query($connection,$sql))
    {
      echo 'not inserted';

    }
    else
    {
    $flag2=1;
    }


  }
if (isset($_POST['cd3'])) {
     $cd1=$_POST['cd3'];  

  $sql = "INSERT INTO `candidates` (ooid,eid,cd,status) VALUES('$voterid','$eid', '$cd1','c')";
     
      if(!mysqli_query($connection,$sql))
    {
      echo 'not inserted';

    }
    else
    {
     $flag3=1;
    }
}
    if (isset($_POST['cd4'])) {
     $cd1=$_POST['cd4'];  
 
    $sql = "INSERT INTO `candidates` (ooid,eid,cd,status) VALUES('$voterid','$eid', '$cd1','d')";
    
      if(!mysqli_query($connection,$sql))
    {
      echo 'not inserted';

    }
    else
    {$flag4=1;
    }}
if (isset($_POST['cd5'])) {
     $cd1=$_POST['cd5'];  
  
   $sql = "INSERT INTO `candidates` (ooid,eid,cd,status) VALUES('$voterid','$eid', '$cd1','e')";
    
      if(!mysqli_query($connection,$sql))
    {
      echo 'not inserted';

    }
    else
    {
     $flag5=1;
    }
}
  if (isset($_POST['cd6'])) {
     $cd1=$_POST['cd6'];  
 
   $sql = "INSERT INTO `candidates` (ooid,eid,cd,status) VALUES('$voterid','$eid', '$cd1','f')";
    
      if(!mysqli_query($connection,$sql))
    {
    
    }
    else
    {
      $flag6=1;
    }


}
if ($flag1==1 || $flag2==1 || $flag3==1 || $flag4==1 || $flag5==1 || $flag6==1 )
{

  echo "<script>alert('Candidate Added SUCCESSFULLY');
 window.location.href='organization2.php';
 </script>";
}
else
{
  echo "<script>alert('failed to add candidate .candidate already exists');
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