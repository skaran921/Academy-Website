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
?>
<!DOCTYPE html>
<htmL>
<title>
Serach Student - Abhyas Academy Ellenabad
</title>
  <meta name="author" content="skaran921,karan soni">
  <meta name="keyword" content="aaellenabad,Abhyas Academy Ellenabad,skaran921,Add New Student">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!------meta tag------>
<!----------------------Bootstrap Files--------------------------->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/carousel.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<!---------------------css Files------------------>
<link href="images/logo.jpg" rel="icon">
<link href="alertify/css/alertify.css" rel="stylesheet" id="alertifyCSS">
<link href="css/header.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body>
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<input type="button" value="Dashboard" class="btn btn-danger" onclick="window.open('dashboard.php','_selef')">
<center>
            <form action="search student.php" method="post" class="form-group">
		    <div class="input-group">
			<center>
		    <input type="search" class="form-control" name="search" placeholder="Enter Unique Student id" autofocus required>
			<span class="input-group-btn">
			<input type="submit" class="btn btn-secondary" name="searchr" value="Search">
			</span>
			</center>
		    </form>
</center>
<?php
if(isset($_POST["searchr"]))
{
	$uid1=$_POST["search"];
	$sql1="SELECT * FROM student WHERE uid='$uid1'";
	$result1=$conn->query($sql1);
	if($row1=$result1->fetch_assoc())
	{
	?><!----------------------------------------php break for some html code--------------------------------------->
	
<div class="panel panel-default"><!--- panel start --->
<div class="panel-heading" style="background-color:green;color:white;"><!--- panel body start --->
<h4><b>Search Student Record</b></h4>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<form action="update student.php" method="post">


<div class="row">
<div class="col-sm-2">
<label>Unique id: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="text" name="uniqu" id="unique" class="form-control"  value="<?php echo $row1['uid'];?>" required disabled>
<input type="hidden" name="id"  value="<?php echo $row1['id'];?>" >
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Name: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $row1['name'];?>" required disabled>
</div><!---col1 close here--->
</div><!---1 row close here--->
<div class="row">
<div class="col-sm-2">
<label>Father Name:</label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Father Name" value="<?php echo $row1['fname'];?>"required disabled>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-2">
<label>D.O.B: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="date" name="dob" id="dob" class="form-control" value="<?php echo $row1['dob'];?>"required disabled>
</div><!---col1 close here--->
</div><!---3 row close here--->


<div class="row">
<div class="col-sm-2">
<label>Gender: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="gender" id="gender"  class="form-control" value="" required disabled>
<option><?php echo $row1['gender'];?></option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div><!---col1 close here--->
</div><!---4 row close here--->

<div class="row">
<div class="col-sm-2">
<label>City Village:</font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="text" name="city" id="city" class="form-control" placeholder="Enter City/Village Name" value="<?php echo $row1['city'];?>" required disabled>
</div><!---col1 close here--->
</div><!---5 row close here--->



<div class="row">
<div class="col-sm-2">
<label>Resident Address: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<textarea name="address" id="address" class="form-control" placeholder="Enter Your Full Address" value="" required disabled>
<?php echo $row1['address'];?>
</textarea>
</div><!---col1 close here--->
</div><!---4 row close here--->
<div class="row">
<div class="col-sm-2">
<label>Select Course </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="course" id="course"  class="form-control" required disabled>
<option><?php echo $row1['course'];?></option>
<option>Select Course</option>
<option>HS-CIT</option>
<option>PMKVY</option>
<option>Computer Course</option>
</select>
</div><!---col1 close here--->
</div><!---3 row close here--->
<div class="row">
<div class="col-sm-2">
<label>Mobile No.: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile No." value="<?php echo $row1['mobile'];?>" required disabled>
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Total Fee: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="number" name="tfee" id="tfee" class="form-control" placeholder="Enter Total Course Fee" value="<?php echo $row1['tfee'];?>" required disabled>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Fee Recieved: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="number" name="rfee" id="rfee" class="form-control" placeholder="Enter Fee Recieved at the time of admission" value="<?php echo $row1['rfee'];?>" required disabled>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Select Session: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="session" id="session"  class="form-control" required disabled>
<option><?php echo $row1['session'];?></option>
<option>Select Session</option>
<?php
$y1=1997;
$var=1;
while($var<=200)
{
	$var1=$y1+$var;
?>
<option><?php echo $var1;?></option>
<?php
$var++;
}
?>
</select>
</div><!---col1 close here--->
</div><!---3 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Select Admisson Month: </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="month" id="month"  class="form-control" required disabled>
<option><?php echo $row1['month'];?></option>
<option>Select Month</option>
<option>Jan</option> <option>Feb</option> <option>Mar</option> <option>Apr</option> <option>May</option> <option>Jun</option> 
<option>Jul</option> <option>Aug</option> <option>Sep</option> <option>Oct</option> <option>Nov</option> <option>Dec</option>

</select>
</div><!---col1 close here--->
</div><!---3 row close here--->

<div class="col-sm-2">
</div>

</div>
</form>
<div class="row">

<div class="col-sm-8">
<center>
<button type="button"  class="btn btn-primary"  style="margin-top:10px;background-color:indigo;font-weight:bold;" onclick="window.print()" >
<span class="glyphicon glyphicon-print"></span>
</button>
</center><br>
</div>
</div>
<?php
	}
	else
	{
		echo "<div class='alert alert-warning' style='' align='center'><b>Sorry Not Match Found!!!</b></div>";
	}
}
?><!----------------------------------------------php again start and end here--------------------------->

<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>