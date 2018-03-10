<!DOCTYPE html>
<htmL>
<title>
Notification - Abhyas Academy Ellenabad
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
<body>
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<div class="panel panel-default">
<div class="panel-heading">
<b>Notification</b>
</div><!--panel heading close here--->
<div class="panel-body"><!--- MAIN BODY--->

<div class="row">
<div class="col-sm-4">
<div class="panel panel-default">
<div class="panel-heading" style="background-color:orange;color:white;font-weight:bold;">
<b>Academy Personal Notification</b>
</div><!--panel heading close here--->
<div class="panel-body">

<?php
include 'db.php';
$sql1="SELECT * FROM academy_notification ORDER BY id DESC";
$result1=$conn->query($sql1);
?>
<table class="table table-responsive table-striped">
<tr><th></th><th> Date</th><th>Notification</th></tr>
</table>

<marquee  direction="up" scrollamount="2" onmouseover="stop();" onmouseout="start()">

<table class="table table-responsive table-striped">
<?php
while($row1=$result1->fetch_assoc())
{
?>
<tr style="color:indigo"><td>
<span class="glyphicon glyphicon-hand-right"></td><td>
 <b><?php $date=$row1["date"]; echo date("d-m-y",strtotime($date));?></td><td>
 <?php echo  $row1["notification"];?></td>
 </b>
 </tr>

<?php
}
?>
</table>
</marquee>
</div><!--panel body close here--->
</div><!---panel close here--->
</div><!---col 1 close here--->

<div class="col-sm-5">
<div class="panel panel-warning">
<div class="panel-heading">
<b>Job OR Education Related Notification</b>
</div><!--panel heading close here--->
<div class="panel-body">
<?php
$sql2="SELECT * FROM job_notification ORDER BY id DESC";
$result2=$conn->query($sql2);
?>

<table class='table table-responsive table-striped'>
<tr><th><th>Post Date</th><th>Notification</th><th>Last Date</th></tr>
</table>
<marquee  direction="up" scrollamount="2" onmouseover="stop()" onmouseout="start()">
<?php 
echo "<table class='table table-responsive table-striped'>";
while($row2=$result2->fetch_assoc())
{
?>
<tr style="color:green">
<td>
<span class="glyphicon glyphicon-hand-right"></td><td>
 <?php $odate=$row2["odate"]; echo date("d-m-y",strtotime($odate));  ?></td><td>
 <?php echo  $row2["notification"];?></td><td>
 <?php   $cdate=$row2["cdate"]; echo date("d-m-y",strtotime($cdate));?></td>
 </b>
  </tr>

<?php
}
?>
</table>
</marquee>

</div><!--panel body close here--->
</div><!---panel close here--->
</div><!---col 2 close here--->
<div class="col-sm-3">
<div class="panel panel-danger">
<div class="panel-heading">
<b>Complaint/Suggestion Box</b>
</div><!--panel heading close here--->
<div class="panel-body">
<hr>
<dl style="color:indigo;cursor:pointer">
<span class="glyphicon glyphicon-hand-right"></span>
<b><mark>Anyone Can Send us Complaint/Suggestion From Above Contact Menu..<span class="glyphicon glyphicon-hand-up" style="color:red"></span></mark></b></dl>
<?php

$sql3="SELECT * FROM message ORDER BY id DESC";
$result3=$conn->query($sql3);
echo "<table class='table table-responsive'><tr><th><th>Name</th><th>Mobile No.</th><th>Suggestion</th></tr>";
while($row3=$result3->fetch_assoc())
{
?>
<tr style="color:red;font-weight:bold;cursor:pointer"> 
<td>
<span class="glyphicon glyphicon-hand-right"></td><td>
 <b><?php echo $row3["name"];?></td><td>
 <?php echo  $row3["mobile"];?></td><td>
 <?php echo  $row3["message"];?></td><td>
  
 </tr>
<?php
}
echo "</table>";
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