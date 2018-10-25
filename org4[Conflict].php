
<?php
$db = mysqli_connect('localhost', 'root', '', 'vote_portal');
$elecid = $_POST['elecid'];
$sum=0;

$sql1="SELECT cd AS cd1 FROM `candidates` WHERE eid = $elecid AND status='a'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd = $row1['cd1'];

$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='a'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
echo "votes for candidate ",$cd,$sum,"<br>";

$sql1="SELECT cd AS cd1 FROM `candidates` WHERE eid = $elecid AND status='b'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd = $row1['cd1'];

$sum1=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='b'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum1 = $row['value_sum'];
echo "votes for candidate ",$cd,$sum1,"<br>";

$sql1="SELECT cd AS cd1 FROM `candidates` WHERE eid = $elecid AND status='c'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd = $row1['cd1'];

$sum2=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='c'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum2 = $row['value_sum'];
echo "votes for candidate ",$cd,$sum2,"<br>";

$sql1="SELECT cd AS cd1 FROM `candidates` WHERE eid = $elecid AND status='d'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd = $row1['cd1'];

$sum3=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='d'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum3 = $row['value_sum'];
echo "votes for candidate ",$cd,$sum3,"<br>";

$sql1="SELECT cd AS cd1 FROM `candidates` WHERE eid = $elecid AND status='e'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd = $row1['cd1'];

$sum4=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='e'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum4 = $row['value_sum'];
echo "votes for candidate ",$cd,$sum4,"<br>";

$sql1="SELECT cd AS cd1 FROM `candidates` WHERE eid = $elecid AND status='f'";
 $result1 =mysqli_query($db,$sql1);
$row1 = mysqli_fetch_assoc($result1); 
$cd = $row1['cd1'];

$sum5=0;
$sql="SELECT count(*) AS value_sum FROM `finalvotes` WHERE eid = $elecid AND vote='f'";
      $result =mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result); 
$sum5 = $row['value_sum'];
echo "votes for candidate ",$cd,$sum5,"<br>";

?>

<!DOCTYPE html>
<html lang="en-US">
<body>



<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

var bool1 = "<?php echo $sum ?>"; 
var bool2 = "<?php echo $sum1 ?>";
var bool3 = "<?php echo $sum2 ?>";
var bool4 = "<?php echo $sum3 ?>";
var bool5 = "<?php echo $sum4 ?>";
var bool6 = "<?php echo $sum5 ?>";


function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work',  Number(bool1)],
  ['Eat', Number(bool2)],
  ['TV',  Number(bool3)],
  ['Gym', Number(bool4)],
  ['Sleep', Number(bool5)],
  ['Sleep1', Number(bool6)]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>

