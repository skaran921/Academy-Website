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
</head>
<title>
Fee Management - Abhyas Academy Ellenabad
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
<link href="logo.jpg" rel="icon">
<link href="alertify/css/alertify.css" rel="stylesheet" id="alertifyCSS">
<link href="css/header.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body onload="ajax2()">
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<input type="button" value="Dashboard" class="btn btn-danger" onclick="window.open('dashboard.php','_selef')">
<div class="row"><!------------------------------main row start ----------------------------->
<div class="col-sm-6"><!------------------------------main col-sm-6 start ----------------------------->
<div class="panel panel-success" style="margin-top:10px;">
<div class="panel-heading">
<b>Fee Management</b>
</div><!--- panel heading close here--->
<div class="panel-body">
<form action="fee.php" method="post"class="form-group"><!---form--->
<div class="row">
<div class="col-sm-3">
           <label>Unique id:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="text" name="id" id="id" class="form-control"  placeholder="Enter Unique id of Student" required >

</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-3">
           <label>Fee Amount:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="number" name="fee" id="fee" class="form-control"  placeholder="Enter Fee Recieved Amount" required >

</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-8">
<center>
<input type="submit" name="save" value="Save" class="btn btn-primary" style="margin-top:10px;">
</center>
</div>
</div>
<?php
if(isset($_POST["save"]))
{
	$id=$_POST["id"];
	$sql1="SELECT  uid,rfee FROM student WHERE uid='$id'";
	$result1=$conn->query($sql1);
	if($row1=$result1->fetch_assoc())
  {    $rfee=$row1["rfee"];
	  $uid=$_POST["id"];
	  $fee=$_POST["fee"];
	  $fee1=$rfee+$fee;
	  $sql2="UPDATE student SET rfee='$fee1' WHERE uid='$id'";
	  $result2=$conn->query($sql2);
	    if($result2==TRUE)
	  {
		$id=$_POST["id"];
	    $fee=$_POST["fee"];
	    $sql="INSERT INTO fee(uid,fee)VALUES('$id','$fee')";
	    $result=$conn->query($sql);
	    if($result==TRUE)
	    {
		?>
		<script src="alertify/js/alertify.js"></script>
										  <script>
										  var x="<li><div class='alert alert-success'><b>Entry Saved!!!.</li><li><br>Please Don't Refresh Page</b></div></li>";
									     alertify.alert(x);
										 </script>
		<?php
	    }
	     else
	     {
		echo "<div class='alert alert-warning'><b>error try again!!!</b></div>";
	     }
	  }
		 
  }
	else
	{
		echo "<div class='alert alert-warning'><b>Wrong id Please Enter Correct id!!!</b></div>";
	}
	
	
}
?>
</form>
</div><!--- Panel body here--->
</div><!--- Panel close here--->
</div><!--- main col1 close here--->

<div class="col-sm-6"><!---------------------main-col-2 -------------------->
<div class="panel panel-default">
<div class="panel-heading" style="background-color:#564;color:white;">
<b>View Fee Info</b>
</div><!---------panel-heading close here----------->
<div class="panel-body">
        
		<div class="row">
	 <form action="feeinfo.php" method="post">
		  <div class="col-sm-3">
		          <b>Enter Unique Id: </b>
		  </div>
		  <div class="col-sm-6">
		          <input type="number" name="search" id="search" placeholder="Search By Unique id" class="form-control" required>
		  </div>
		                <div class="col-sm-9">
					<center><button type="submit" name="find" class="btn btn-primary" target="_blank" style="margin-top:10px;"><span class="glyphicon glyphicon-search"></span></button></div>
						</div>
	 </form>	  
	 <div id="">
	 </div>
		
		
</div><!---------panel-body close here----------->
</div><!---------panel close here----------->
</div><!---------------------close main-col-2 -------------------->

</div><!--- main close here--->

<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
<script src="feeinfo.js"></script>