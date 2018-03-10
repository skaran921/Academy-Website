<?php
session_start();
include 'db.php';
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
Add Notification - Abhyas Academy Ellenabad
</title>
  <meta name="author" content="skaran921,karan soni,skaran">
  <meta name="keyword" content="aaellenabad,Abhyas Academy Ellenabad,skaran921,add notification">
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
<div class="panel panel-default"><!--- panel start --->
<div class="panel-heading"><!--- panel body start --->
<b>Add Notification's</b> <button type="submit" onclick="window.open('logout.php','_self')" class="btn btn-warning"><span class="glyphicon glyphicon-log-out"> Logout</span></button>

</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<button class="btn btn-danger" onclick="window.open('dashboard.php','_self')"><b>Dashboard</b></button>
<div class="row">


<div class="col-sm-6">
<div class="panel panel-primary"><!--- panel start --->
<div class="panel-heading" style="background-color:orange;color:white;"><!--- panel body start --->
<b>Add Academy Personal Notification's</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<form action="addnoti.php" method="post" class="form-group">

     
	 
	 <div class="row">
	 <div class="col-sm-4">
	 <label>
	 Notification Date:
	 </div><!---col 1 close here--->
	 <div class="col-sm-6">
	 <input type="date" name="date1" id="date1" class="form-control" required>
	 </div><!---col 2 close here--->
	 </div> <!---row1 close here--->

     <div class="row">
	 <div class="col-sm-4">
	 <label>
	 Notification:
	 </div><!---col 1 close here--->
	 <div class="col-sm-6">
	 <textarea name="noti1" id="noti1" class="form-control" placeholder="Write New Academy Personal Notification here.........." required></textarea>
	 
	 <?php
	if(isset($_POST["submit1"]))
	{
      $date1=$_POST["date1"];		
      $noti1=$_POST["noti1"];		
      $sql="INSERT INTO academy_notification(date,notification)VALUES('$date1','$noti1')";
	$result=$conn->query($sql);
	  if($result==TRUE)
	 {
		 ?>
         <script src="alertify/js/alertify.js"></script>
		 <script>
		 var alert2="<div class='alert alert-success'><h3>Successfully Added New Notification!!! </h3></div><br><b>Please Don't Refresh Page</b>";
		 alertify.alert(alert2);
		 </script>		
		
	<?php
	}
	 else
	 {
		 echo "<div class='alert alert-danger'><b> error try again!!! don't Refresh Page </b></div>";
	 }
	}
	
	?>
	 
	 </div><!---col 2 close here--->
	 </div> <!---row2 close here--->
	 <div class="row">
	 <div class="col-sm-12">
	 <center><input type="submit" name="submit1" value="Add" onclick="validate1()" class="btn btn-warning" style="margin-top:10px;"></center>
	 </div><!---col 1 close here--->
	 </div> <!---row3 close here--->
	
 
</form>
</div><!---panel body close here--->
</div><!---panel close here--->
</div><!---col close here--->

<div class="col-sm-6">
<div class="panel panel-warning"><!--- panel start --->
<div class="panel-heading"><!--- panel body start --->
<b>Add Job OR Education Related Notification's</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<form action="addnoti.php" method="post" class="form-group">

     
	 
	 <div class="row">
	 <div class="col-sm-4">
	 <label>
	 Opening Date:
	 </div><!---col 1 close here--->
	 <div class="col-sm-6">
	 <input type="date" name="odate" id="odate" class="form-control" required>
	 </div><!---col 2 close here--->
	 </div> <!---row1 close here--->

     <div class="row">
	 <div class="col-sm-4">
	 <label>
	 Notification:
	 </div><!---col 1 close here--->
	 <div class="col-sm-6">
	 <textarea name="noti2" id="noti2" class="form-control" placeholder="Write Job OR Education Related Notification here.........." required></textarea>
	 </div><!---col 2 close here--->
	 </div> <!---row2 close here--->
	 <div class="row">
	 <div class="col-sm-4">
	 <label>
	 Closing Date:
	 </div><!---col 1 close here--->
	 <div class="col-sm-6">
	 <input type="date" name="cdate" id="cdate" class="form-control" required>
	 </div><!---col 2 close here--->
	 </div> <!---row3 close here--->
	 
	 <div class="row">
	 <div class="col-sm-12">
	 <center><input type="submit" name="submit2" value="Add" onclick="validate2()" class="btn btn-danger	" style="margin-top:10px;"></center>
	 
	<?php
	if(isset($_POST["submit2"]))
	{
      $odate=$_POST["odate"];		
      $noti2=$_POST["noti2"];		
      $cdate=$_POST["cdate"];		
	$sql1="INSERT INTO job_notification(odate,notification,cdate)VALUES('$odate','$noti2','$cdate')";
	$result1=$conn->query($sql1);
	  if($result1==TRUE)
	 {
		 ?>
		 <script src="alertify/js/alertify.js"></script>
		 <script>
		 var alert1="<div class='alert alert-success'><h3>Successfully Added New Notification!!! </h3></div><br><b>Please Don't Refresh Page</b>";
		 alertify.alert(alert1);
		 </script>
		<?php 
	 }
	 else
	 {
		 echo "<div class='alert alert-danger'><b> error try again!!! </b></div>";
	 }
	}
	
	?>
 </div><!---col 1 close here--->
	 </div> <!---row4 close here--->
</form >
</div><!---panel body close here--->
</div><!---panel close here--->
</div><!---col close here--->

</div><!---row close here--->

</div><!---panel body close here--->
</div><!---panel close here--->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
<script>
function validate1()
{
	var date1=document.getElementById("date1").value;
	var noti1=document.getElementById("noti1").value;
    var error1="<h3>Please Enter Date!!!</h3>";
    var error2="<h3>Please Write Notification!!!</h3>";
	if(date1=="")
	{      alertify.closeLogOnClick(true);
            alertify.error(error1);
			document.getElementById("date1").focuse();
			return false;
	}
	else if(noti1=="")
	{       alertify.closeLogOnClick(true);
            alertify.error(error2);
			document.getElementById("noti1").focuse();
			return false;
	}
	else
	{
		document.forms[0].submit();
	}
}

function validate2()
{
	var odate=document.getElementById("odate").value;
	var noti2=document.getElementById("noti2").value;
	var cdate=document.getElementById("cdate").value;
    var error1="<h3>Please Enter Opening Date!!!</h3>";
    var error2="<h3>Please Write Notification!!!</h3>";
	var error3="<h3>Please Enter Closing Date!!!</h3>";
	if(odate=="")
	{      alertify.closeLogOnClick(true);
            alertify.error(error1);
			document.getElementById("odate").focuse();
			return false;
	}
	else if(noti2=="")
	{       alertify.closeLogOnClick(true);
            alertify.error(error2);
			document.getElementById("noti2").focuse();
			return false;
	}
	else if(cdate=="")
	{      alertify.closeLogOnClick(true);
            alertify.error(error3);
			document.getElementById("cdate").focuse();
			return false;
	}
	else
	{
		document.forms[1].submit();
	}
}
</script>