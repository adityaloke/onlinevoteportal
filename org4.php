
<?php
$db = mysqli_connect('localhost', 'root', '', 'vote_portal');
$elecid = $_POST['elecid'];
$sum=0;

$sql1="SELECT cd AS cd1 FROM `candidates` WHERE eid = $elecid AND status='a'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd1 = $row1['cd1'];

$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='a'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];

$sql1="SELECT cd AS cd2 FROM `candidates` WHERE eid = $elecid AND status='b'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd2 = $row1['cd2'];

$sum1=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='b'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum1 = $row['value_sum'];

$sql1="SELECT cd AS cd3 FROM `candidates` WHERE eid = $elecid AND status='c'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd3 = $row1['cd3'];

$sum2=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='c'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum2 = $row['value_sum'];

$sql1="SELECT cd AS cd4 FROM `candidates` WHERE eid = $elecid AND status='d'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd4= $row1['cd4'];

$sum3=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='d'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum3 = $row['value_sum'];

$sql1="SELECT cd AS cd5 FROM `candidates` WHERE eid = $elecid AND status='e'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd5 = $row1['cd5'];

$sum4=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='e'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum4 = $row['value_sum'];

$sql1="SELECT cd AS cd6 FROM `candidates` WHERE eid = $elecid AND status='f'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd6 = $row1['cd6'];

$sum5=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='f'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum5 = $row['value_sum'];

?>

<!DOCTYPE html>
<html lang="en-US">
<body>

<h1 style="color: blue;position: relative; left: 600px;	">RESULTS</h1>

<div style="color: blue;position: relative; left: 300px;" id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

var bool1 = "<?php echo $sum ?>"; 
var cd1 = "<?php echo $cd1 ?>"; 
var cd2 = "<?php echo $cd2 ?>"; 
var cd3 = "<?php echo $cd3 ?>"; 
var cd4 = "<?php echo $cd4 ?>"; 
var cd5 = "<?php echo $cd5 ?>"; 
var cd6 = "<?php echo $cd6 ?>"; 
var bool2 = "<?php echo $sum1 ?>";
var bool3 = "<?php echo $sum2 ?>";
var bool4 = "<?php echo $sum3 ?>";
var bool5 = "<?php echo $sum4 ?>";
var bool6 = "<?php echo $sum5 ?>";


function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  [cd1,  Number(bool1)],
  [cd2, Number(bool2)],
  [cd3,  Number(bool3)],
  [cd4, Number(bool4)],
  [cd5, Number(bool5)],
  [cd6, Number(bool6)]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'VOTES', 'width':850, 'height':600};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>

