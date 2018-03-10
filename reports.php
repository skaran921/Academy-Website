<?php
session_start();
if(isset($_SESSION["id"]))
{
	$id=$_SESSION["id"];
	//echo $id;
}
else
{
	header('Location:index.php');
}
include 'db.php';
//echo time();
?>
<!DOCTYPE html>
<htmL>
<title>
Report's- Abhyas Academy Ellenabad
</title>
  <meta name="author" content="skaran921,karan soni">
  <meta name="keyword" content="aaellenabad,Abhyas Academy Ellenabad,skaran921,Accounting Management">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!------meta tag------>
<!----------------------Bootstrap Files--------------------------->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/carousel.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<!---------------------css Files------------------>
<link href="logo.jpg" rel="icon">
<link href="alertify/css/alertify.css" rel="stylesheet" id="alertifyCSS">
<link href="css/header.css" rel="stylesheet">
<link href="css/time.css" rel="stylesheet">
</head>
<body>
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<div class="panel panel-danger"><!--- panel start --->
<div class="panel-heading"><!--- panel body start --->
<div id="time"></div>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
    
	<div class="row"><!----main row start here---->
	<div class="col-sm-4"><!----col 1 start here---->
	   <div class="panel panel-warning">
	   <div class="panel-heading" style="color:white;background-color:green;">
	        <b>info</b>
	   </div><!---panel heading close here--->
	   <div class="panel-body">
	   <ul class="list-group">
	     <li class="list-group-item">
	      <input type="button" class="btn btn-danger" value="Dashboard" onclick="window.open('dashboard.php','_self')" accesskey="b">
		 </li>
		 <li class="list-group-item">
		<h4><b> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>	
		 Print Report's v1.0</b></h4>
		 <h4><b> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>	
		 Designed & Develope By Karan Soni</b></h4>
		 </li>
	   </ul>
	   </div><!---panel-body close here--->
	   </div><!---panel 	1 close here--->
	</div><!----col 1 close here---->
	
	<div class="col-sm-4"><!----col 2 start here---->
	   <div class="panel panel-primary">
	   <div class="panel-heading" style="color:white;background-color:green;">
	        <b>Diffrent Print Option's</b>
	   </div><!---panel heading close here--->
	   <div class="panel-body">
	        <ul class="list-group">
	              <li class="list-group-item">
		             <h4> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>	
		              <a href="allStudentList.php" accesskey="A"><b><u style="color:green;">A</u>ll Student List</b></h4>
				 </li>
				 <li class="list-group-item">
		             <h4> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>	
		             <a href="applicationRecievedList.php" accesskey="r"><b>Application <u style="color:green;">R</u>ecieved List</b></h4>
				 </li>
				 <li class="list-group-item">
		             <h4> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>	
		              <a href="feeList.php" accesskey="l"><b>Fee <u style="color:green;">L</u>ist</b></h4>
				 </li>
				<li class="list-group-item">
		             <h4> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>	
		              <a href="studentList.php" accesskey="s"><b><u style="color:green;">S</u>tudent List</b></h4>
				 </li> 
				 <li class="list-group-item">
		             <h4> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>	
		              <a href="#" accesskey="k" onclick="history.back()"><b>Bac<u style="color:green;">k</u></b></h4>
				 </li>
			</ul>	 
			
	   </div><!---pane -body close here--->
	   </div><!---panel 2 close here--->
	</div><!----col 2 close here---->
	
	<div class="col-sm-4"><!----col 3 start here---->
	   <div class="panel panel-primary">
	   <div class="panel-heading" style="color:white;background-color:green;">
	        <b>Shorcut</b>
	   </div><!---panel heading close here--->
	   <div class="panel-body">
	      <ul class="list-group">
	              <li class="list-group-item">
				       <b><font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span> ALT+A ->All Student List </b>
				  </li>
				  <li class="list-group-item">
				       <b><font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span> ALT+B -> Go To Dashboard</b>
				  </li>
				   <li class="list-group-item">
				       <b><font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span> ALT+K -> Back </b>
				  </li>
				  <li class="list-group-item">
				       <b><font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span> ALT+L -> Fee List</b>
				  </li>
				  <li class="list-group-item">
				       <b><font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span> ALT+R -> Application Recieved</b>
				  </li>
				  <li class="list-group-item">
				       <b><font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span> ALT+S -> Student List</b>
				  </li>
				  
				  
		  </ul>
	   </div><!---panel-body close here--->
	   </div><!---panel 3 close here--->
	</div><!----col 3 close here---->
	
	</div><!----main row close here---->
 
</div><!--- panel body close --->
</div><!--- panel close  --->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="js/time.js"></script>
