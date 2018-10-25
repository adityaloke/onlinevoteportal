<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="format.css">
	<link rel="stylesheet" type="text/css" href="format1.css">
	<link rel="icon" href="voteindia.jpg">
	<title></title>
</head>
<script type="text/javascript">
	function back()
	{
		 window.location.href='vote.php';
	}
</script>
<style>
.button {
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
.button1 {
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
 left: 250px;
 top: 250px;

}
.button2 {
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
 left: 10px;
 top: 420px;

}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<body>
	<div class="div1">
		<div class="div2">VOTE PORTAL</div>
		<img id="img1" src="xxx.jpg">
		<p>Welcome to Vote Portal. 
		Here you can host a vote poll and vote in any ongoing voting poll.</p>
	</div>

 <button class="button" onclick="location.href = 'organization2.php';">Create New Election</button>
 <button class="button1" onclick="location.href = 'organization3.php';"> View Status of Election</button>
  <button class="button2" onclick="back()"> BACK</button>


</body>
</html>