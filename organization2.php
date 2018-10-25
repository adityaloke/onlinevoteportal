
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="format.css">
	<link rel="stylesheet" type="text/css" href="format1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	 $("#a01").hide();
	  $("#a02").hide();
	   $("#a12").hide();
	    $("#a15").hide();
    $("#mem").click(function(){
        $("#a01").show();
         $("#a02").hide();
          $("#a12").hide();
           $("#a14").hide();
            $("#a15").hide();
    });
     $("#sub").click(function(){
        $("#a01").hide();
         $("#a02").hide();
          $("#a12").hide();
           $("#a14").hide();
            $("#a15").show();
    });
   
     $("#pos").click(function(){
    
        $("#a02").show();
         $("#a12").hide();
        $("#a01").hide();
         $("#a14").hide();
          $("#a15").hide();
    });
      $("#cd").click(function(){
    
        $("#a12").show();
         $("#a02").hide();
        $("#a01").hide();
         $("#a14").hide();
          $("#a15").hide();

    });
       $("#edetails").click(function(){
    
        $("#a14").show();
         $("#a02").hide();
        $("#a01").hide();
         $("#a12").hide();
          $("#a15").hide();
    });
});
</script>
	<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 20%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content */
.tabcontent {
    color: white;
    display: none;
    padding: 50px;
    text-align: center;
}




</style>
</head>

<body>
<div class="div1">
		<div class="div2">VOTE PORTAL</div>
		<img id="img1" src="xxx.jpg">
		<p>Welcome to Vote Portal. 
		Here you can host a vote poll and vote in any ongoing voting poll.</p>
	</div>

<button class="tablink" id="edetails">Election Details</button>
<button class="tablink" id="mem" >Members</button>
<button class="tablink" id="pos">Positions</button>
<button class="tablink" id="cd" >Candidates</button>
<button class="tablink" id="sub">Submision</button>
<div id="a01" style="position:relative; left:400px; top:100px;">
	<form  style="width: 600px;" action="memberdb.php"  method="POST" >
  <fieldset >

    <legend>Member Details:</legend>
    Voter id of that Member:<input type="text" name="mem" required="">
 
     

    <button id="a04"  type="submit">Add member</button>
  </fieldset>
</form>
</div>
<div id="a02" style="position:relative; left:400px; top:100px;">
	<form  style="width: 600px;" action="positiondb.php"  method="POST" >
  <fieldset >
  	
    <legend>Enter Position for Election:</legend>
    Position:<input type="text" name="pos" required="Enter">
 
     

    <button id="a05"  type="submit">submit</button>
  </fieldset>
</form>
</div>
<div id="a12" style="position:relative; left:400px; top:100px;">
	<form  style="width: 600px;" action="candidatesdb.php"  method="POST" >
  <fieldset >
  	
    <legend>Enter Candidates for Election:</legend>
    Candidate 1:<input type="text" name="cd1" required="Enter">
      Candidate 2:<input type="text" name="cd2" required="Enter">
     Candidate 3:<input type="text" name="cd3" >
       Candidate 4:<input type="text" name="cd4" >
        Candidate 5:<input type="text" name="cd5" >
         Candidate 6:<input type="text" name="cd6" >
     
 
     

    <button id="a06"  type="submit">submit</button>
  </fieldset>
</form>
</div>
<div id="a14" style="position:relative; left:400px; top:100px;">
	<form  style="width: 600px;" action="edetailsdb.php"  method="POST" >
  <fieldset >
  	
    <legend>Enter Election Details:</legend>
     Election Title:<input type="text" name="et" required="Enter">
      Election Id<input type="text" name="eid" required="Enter"  placeholder="Create election id">
     Election Details:<input type="text" name="ed" id="ed1" style="width: 600px; height: 200px;" >
      
     

    <button id="a07"  type="submit">submit</button>
  </fieldset>
</form>
</div>
<div id="a15" style="position:relative; left:400px; top:100px;">
	<form  style="width: 600px;" action="finalsubdb.php"  method="POST" >
  <fieldset >
  	
    <legend>Start Election:</legend>
   Start Date:
    <input type="date" id="myDate" name="start">
    <br>
    <br>
    End Date:
     <input type="date" id="myDate1" name="end1">

     <br><br>

    <button id="a08"  type="submit">Start Election</button>
  </fieldset>
</form>
</div>


</body>
</html>