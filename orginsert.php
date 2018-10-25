<?php 
 $db = mysqli_connect('localhost', 'root', '', 'vote_portal');

  if(!$db)
  {
  	echo 'not connected';

  }
  else
  {$ooid = $_POST['ooid'];
$orgname = $_POST['orgname'];
$Password = $_POST['psw'];
$hashed_password = password_hash($Password,PASSWORD_DEFAULT);
$Email = $_POST['email'];
$Mobile= $_POST['Mobile'];
  	
  	
   	$sql = "INSERT INTO `org_reg` (ooid,orgname,psw,email,Mobile) VALUES('$ooid', '$orgname','$hashed_password','$Email','$Mobile')";
  	
    if(!mysqli_query($db,$sql))
    {
     echo "<script>alert('Failed to add ORGANIZATION try again');
 window.location.href='vote.php';
 </script>";

    }
    else
    {
    	 echo "<script>alert('SUCCESSFULLY CREATED ');
 window.location.href='vote.php';
 </script>";
    }
  }
  ?>