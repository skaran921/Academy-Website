<!DOCTYPE html>
<htmL>
<title>
Computer Topic's- Abhyas Academy Ellenabad
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
<div class="panel panel-default"><!--- panel start --->
<div class="panel-heading" style="color:white;background-color:#454;"><!--- panel body start --->
<b><span class="glyphicon glyphicon-search"></span> Search Computer Topic's</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<center>
    <form action="search topic.php" method="post" class="form-group" style="width:400px;"> 
	   <div class="input-group">
	      <input type="search" name="topic" class="form-control" placeholder="Enter Topic Name ex. HTML,PHP" required style="padding:20px" autofocus>
		  <span class="input-group-btn">
		  <button type="submit" name="search" class="btn btn-default"  style="padding:10px;">
		  
		  </span>
		        <span class="glyphicon glyphicon-search" ></span>
				
		  </button>
		</div>
	</form>
	</center>
	<ul class="list-group">
	
	<?php 
	if(isset($_POST["search"]))
	{
	 include 'db.php';
	 $topic=$_POST["topic"];
	 $sql="SELECT * FROM topic WHERE name LIKE '%$topic%' OR keyword LIKE '%$topic%'";
	 $result=$conn->query($sql);
	 
	 while($row=$result->fetch_assoc())
	 {
			  
		     ?>
			 <h1><span class="glyphicon glyphicon-hand-down"></span></h1>
			 <table class='table table-responsive table-striped'>
			 <tr><th><h4><b style="color:#0000cc"><?php echo $row["name"];?></b></h4></th></tr>
			 <tr><th><b style="color:#666666"><?php echo $row["description"];?></b></th></tr>
			 <tr><th><mark><b style="color:#008000">Source: <?php echo $row["source"];?></mark></b> <br>
			 &nbsp;<b style="color:red">For More Detail: <a href="<?php echo $row["link"]; ?>">Click<sup>here</a></sup></b></th></tr>
			</table> 
			<hr>
			 <?php
			 
	      
	 }
	
     	 
		  
	}
	?>
</ul>
<button type="submit" id="about" class="btn btn-default" onclick="info()"><b><span class="glyphicon glyphicon-info-sign"></span> info</b></button>
</div><!--- panel body close--->
</div><!--- panel close--->
  
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
<script>
function info()
{
	var x="<div class='alert alert-danger' style='font-weight:bold;'>if You Enter Some Topic Name in Search Box And You Don't Recieved any Result That Mean Your Topic Not Found!!!</div>";
	alertify.alert(x);
}
</script>
