<?php 
 $db = mysqli_connect('localhost', 'root', '', 'vote_portal');

$firstname = "";
$lastname = "";
$voterid = "";
$password = "";
$email = "";
$mobile = "";
$Email   = "";
  if(!$db)
  {
  	echo 'not connected';

  }
  else{
  	echo 'connected';

  	
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
          $mobile = $_POST['Mobile'];
 		$voterid = $_POST['vid'];

	    $email = $_POST['email'];
        $password = $_POST['psw'];
 
        $query = "INSERT INTO `voter_reg` (voterid, firstname,lastname, password, email,mobile) VALUES ('$voterid', '$firstname','$lastname','$psw', '$email','$mobile')";
        $result = mysqli_query($db, $query);
       
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
   
}


  
  ?>