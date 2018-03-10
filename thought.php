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
Today Thought - Abhyas Academy Ellenabad
</title>
  <meta name="author" content="skaran921,karan soni">
  <meta name="keyword" content="aaellenabad,Abhyas Academy Ellenabad,skaran921">
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
<b>Change Today's Thought</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<button class="btn btn-danger" onclick="window.open('dashboard.php','_self')"><b>Dashboard</b></button>
<div class="row">
<form action="thought.php" method="post" class="form-group">
<div class="col-sm-2">
</div>
<div class="col-sm-1">
<label>Thought:</label>
</div>
<div class="col-sm-3">
<textarea name="thought" id="thought" class="form-control" placeholder="Write New Today's Thought here........" required></textarea>
<br>
<input type="submit" name="submit" class="btn btn-primary" value="Save">
<?php
if(isset($_POST["submit"]))
{
	include 'db.php';
	$thought=$_POST["thought"];
	$sql="UPDATE thought SET thought='$thought' WHERE id='1'";
	$result=$conn->query($sql);
	if($result==TRUE)
	{
		echo "<div class='alert alert-success'><b>New Thought Added Please Check Home Page</b></div>";
	}
	else
	{
		echo "<div class='alert alert-danger'>error! Try again!!!</div>";
	}
}
?>
</div>
</form>

</div><!---row 1 close here--->
</div><!---panel close here--->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
