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
Application Received List- Abhyas Academy Ellenabad
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
<link href="images/logo.jpg" rel="icon">
<link href="alertify/css/alertify.css" rel="stylesheet" id="alertifyCSS">
<link href="css/header.css" rel="stylesheet">
<link href="css/time.css" rel="stylesheet">
</head>
<body onload="ajax21()">
<div class="row"><!------row start------>
<div class="col-sm-3" style="margin-top:10px;"><!------col start------>
<a href="index.php">
<img src="images/logo.jpg" style="margin-top:20px;margin-left:30px;">
</a>
</div>
<div class="col-sm-4" style="margin-top:10px"><!----------col 2 start --------------> 
<div id="time"></div>
</div><!-------col 1 close------->
</div><!-------row1 close------->

  <div class="container">
  <br>
  <button type="button" class="btn btn-danger" onclick="window.print()"><span class="glyphicon glyphicon-print"></span></button>
  <div id="application1">
  
	  </div>
  </div><!-------------container close --------------------->
</body>
</html>
<script src="js/time.js"></script>
<script src="application1.js"></script><!---ajax file--->