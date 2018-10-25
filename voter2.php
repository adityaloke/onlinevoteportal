

<?php
$db = mysqli_connect('localhost', 'root', '', 'vote_portal');
$elecid = $_POST['elecid'];
?>
<!DOCTYPE html>
<html>
<style>
.button11 {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  width: 250px;
  position: relative;
 left: 500px;
 top: 20px;

}



.button11:hover {background-color: #3e8e41}

.button11:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	 $("#a01").hide();
	  $("#a02").hide();
	   $("#a12").hide();
	    $("#a15").hide();
   
    });
</script>
<link rel="stylesheet" type="text/css" href="format.css">
	<link rel="stylesheet" type="text/css" href="format1.css">
	<link rel="icon" href="voteindia.jpg">	
<body>
<div class="div1">
		<div class="div2">VOTE PORTAL</div>
		<img id="img1" src="xxx.jpg">
		<p>Welcome to Vote Portal. 
		Here you can host a vote poll and vote in any ongoing voting poll.</p>
	</div>
<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'vote_portal');
$i=0;

$elecid = $_POST['elecid'];
$eid=$elecid;
$_SESSION['elecid']=$elecid;

 $voterid=$_SESSION['vid'];
 
 $sql1 = "SELECT  eid,mem  FROM `members` WHERE eid=$elecid AND mem=$voterid";

$result1 =mysqli_query($db,$sql1);

if ($result1->num_rows == 0)
{
  echo "<script>alert('YOU ARE NOT ALLOWED FOR THIS ELECTION ');
window.location.href='vote.php';
 </script>";

}
 $sql = "SELECT  et,eid,ed  FROM `edetails` WHERE eid=$elecid";


$result =mysqli_query($db,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ELECTION TITLE : ". $row["et"]. "<br>";
        echo "<br> ELECTION ID : ". $row["eid"]. "<br>";
        echo "<br> ELECTION DETAILS : ". $row["ed"]. "<br>";
    }
} else {
	echo "<script>alert('ELECTION ID DOES NOT EXISTS ');
   window.location.href='voter1.php';</script>";
    
}
$sql = "SELECT pos FROM `position` WHERE eid=$elecid";
$result =mysqli_query($db,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> POSITION : ". $row["pos"]. "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT  end1  FROM `finalsub` WHERE eid=$elecid";
$result =mysqli_query($db,$sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ELECTION WILL END ON : ". $row["end1"]. "<br>";
        
    }
} else {
    echo "0 results";
}
$sql = "SELECT  cd FROM `candidates` WHERE eid=$elecid";
$result =mysqli_query($db,$sql);

echo "<br> CANDIDATES : <br>";
if ($result->num_rows > 0) {
	
	$abc=array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$abc[$i]=$row['cd'];
    	$i=$i+1;
       
    }
} else {
    echo "0 results";
}




?> 
<form action="finalvoting.php"  method="POST">
<br>
<input type="radio" name="radio" id="xy1" value="a"><?PHP if (isset($abc[0])) { print $abc[0]; } else {?> <script type='text/javascript'>

             document.getElementById('xy1').style.visibility = 'hidden';

     </script> <?PHP  }?><br>
<input type="radio" name="radio" id="xy2" value="b"><?PHP if (isset($abc[1])) { print $abc[1]; } else {?> <script type='text/javascript'>

             document.getElementById('xy2').style.visibility = 'hidden';

     </script> <?PHP  }?><br>
<input type="radio" name="radio" id="xy3" value="c"><?PHP if (isset($abc[2])) { print $abc[2]; } else {?> <script type='text/javascript'>

             document.getElementById('xy3').style.visibility = 'hidden';

     </script> <?PHP  }?><br>
<input type="radio" name="radio" id="xy4" value="d"><?PHP if (isset($abc[3])) { print $abc[3]; } else {?> <script type='text/javascript'>

             document.getElementById('xy4').style.visibility = 'hidden';

     </script> <?PHP  }?><br>
<input type="radio" name="radio" id="xy5" value="e"><?PHP if (isset($abc[4])) { print $abc[4]; } else {?> <script type='text/javascript'>

             document.getElementById('xy5').style.visibility = 'hidden';

     </script> <?PHP  }?><br>

<input type="radio" name="radio" id="xy6" value="f"><?PHP if (isset($abc[5])) { print $abc[5]; } else {?> <script type='text/javascript'>

             document.getElementById('xy6').style.visibility = 'hidden';

     </script> <?PHP  }?><br>
<button id="a08" class="button11"  type="submit">SUBMIT YOUR VOTE</button>

</form>
</body>
</html>