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
Moniter Notification - Abhyas Academy Ellenabad
</title>
  <meta name="author" content="skaran921,karan soni">
  <meta name="keyword" content="aaellenabad,Abhyas Academy Ellenabad,skaran921,About us">
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
<body onload="ajax(),ajax1(),ajax2()">
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<div class="panel panel-default">
<div class="panel-heading">
<b>Moniter All Notification</b>
</div><!--panel heading close here--->
<div class="panel-body"><!--- MAIN BODY--->
<button class="btn btn-danger" onclick="window.open('dashboard.php','_self')"><b>Dashboard</b></button>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-default">
<div class="panel-heading" style="background-color:orange;color:white;font-weight:bold;">
<b>Moniter Academy Personal Notification</b>
</div><!--panel heading close here--->

<div class="panel-body" id="academynoti" >




</div><!--panel body close here--->

<?php
 if(isset($_POST["delete1"]))
 {
	 $aid=$_POST["id1"];
	 $sql="DELETE FROM academy_notification WHERE id='$aid'";
	 $result=$conn->query($sql);
	 if($result==TRUE)
	 {
		 ?>
		 <script src="alertify/js/alertify.js"></script>
		 <script>
		 var alert1="<div class='alert alert-warning'><h3>One Notification Deleted!!! </h3></div><br><b>Please Don't Refresh Page</b>";
		 alertify.alert(alert1);
		 </script>
		 <?php
	 }
	 else
	 {
		 echo "<script>alert('error Try Again!!!');</script>";
	 }
 }
 ?>
</div><!---panel close here--->
</div><!---col 1 close here--->

<div class="col-sm-4">
<div class="panel panel-warning">
<div class="panel-heading">
<b>Job OR Education Related Notification</b>
</div><!--panel heading close here--->
<div class="panel-body">
<div class="panel-body" id="jobnoti">


</div><!------Job Notification ------>

<?php
 if(isset($_POST["delete"]))
 {
	 $jid=$_POST["id2"];
	 $sql2="DELETE FROM job_notification WHERE id='$jid'";
	 $result2=$conn->query($sql2);
	 if($result2==TRUE)
	 {
		?>
		<script src="alertify/js/alertify.js"></script>
		 <script>
		 var alert2="<div class='alert alert-danger'><h3>One Notification Deleted!!! </h3></div><br><b>Please Don't Refresh Page</b>";
		 alertify.alert(alert2);
		 </script>
		<?php
	 }
	 else
	 {
		 echo "<script>alert('error Try Again!!!');</script>";
	 }
 }
  
 ?>
</div><!--panel body close here--->
</div><!---panel close here--->
</div><!---col 2 close here--->

<div class="col-sm-4">
<div class="panel panel-danger">
<div class="panel-heading">
<b>Complaint/Suggestion Box</b>
</div><!--panel heading close here--->
<div class="panel-body" id="message">
<?php
 if(isset($_POST["delete2"]))
 {
	 $mid=$_POST["mid"];
	 $sql3="DELETE FROM message WHERE id='$mid'";
	 $result3=$conn->query($sql3);
	 if($result3==TRUE)
	 {
		?>
		<script src="alertify/js/alertify.js"></script>
		 <script>
		 var alert2="<div class='alert alert-danger'><h3>One Suggestion/Complaint Deleted!!! </h3></div><br><b>Please Don't Refresh Page</b>";
		 alertify.alert(alert2);
		 </script>
		<?php
	 }
	 else
	 {
		 echo "<script>alert('error Try Again!!!');</script>";
	 }
 }
  
 ?>
</div><!--panel body close here--->
</div><!---panel close here--->
</div><!---col 3 close here--->

</div><!---row close here--->

</div><!---main panel body close here--->
</div><!---main panel  close here--->

<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
<script src="ajax.js"></script>
<script src="ajax1.js"></script>
<script src="ajax2.js"></script>
