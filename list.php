
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
Unique id list - Abhyas Academy Ellenabad
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
<body>
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<input type="button" value="Dashboard" class="btn btn-danger" onclick="window.open('dashboard.php','_selef')">

<div class="panel panel-success" style="margin-top:10px;">
<div class="panel-heading">
<b>Unique id's List</b>
</div><!--- panel heading close here--->
<div class="panel-body">
<div class="row">
<div class="col-sm-6">
          
                  <div class="panel panel-warning" style="margin-top:10px;">
                  <div class="panel-heading">
                  <b>Complete List</b>
                   </div><!--- panel heading close here--->
                    <div class="panel-body">
					<table class="table table-responsive table-striped table-hover">
					<tr><th>Unique id</th><th>Name</th><th>Father Name</th><th>Gender</th><th>Course</th></tr>
                        <?php
						
						   $sql1="SELECT  uid,name,fname,gender,course FROM student ORDER BY name";
	                       $result1=$conn->query($sql1);
	                       while($row1=$result1->fetch_assoc())
						   {
							   ?>
							   <tr style="cursor:pointer">  
				<td><?php echo $row1["uid"];?></td> <td><?php echo $row1["name"];?></td> <td><?php echo $row1["fname"];?></td> <td><?php echo $row1["gender"];?></td> <td><?php echo $row1["course"];?></td>
								 </tr>
							   <?php
						   }
						?>
						</table>
                   </div><!--- Panel body here--->
                   </div><!--- Panel close here--->
</div>
         <div class="col-sm-6">
		            <div class="panel panel-default">
<div class="panel-heading" style="color:white;background-color:#444;">
<b>Find Unique id By Name</b>
</div><!--panel heading close here--->
<div class="panel-body">
      <form action="list.php" method="post">
	       <div class="row">
		      <div class="col-sm-3"><b>Enter Your Name</b></div>
		      <div class="col-sm-6"><input type="text" class="form-control" name="name" placeholder="Enter Your Name" required></div>
		   </div>
		     <div class="row">
			           <div class="col-sm-12">
					     <center> <button type="submit" name="search_uid" class="btn btn-primary" style="margin-top:10px;">
						 <span class="glyphicon glyphicon-search"></span></button></center>
					   </div>
			 </div>
	  </form>
	    <?php
		      if(isset($_POST["search_uid"]))
			  {
				  ?>
                        <table class="table table-responsive table-striped table-hover">
                     
					<tr><th>Unique id</th><th>Name</th><th>Father Name</th><th>Gender</th><th>Course</th></tr>
                        <?php
						    $name=$_POST["name"];
						   $sql2="SELECT  uid,name,fname,gender,course FROM student WHERE name LIKE '%$name%' ORDER BY name";
	                       $result2=$conn->query($sql2);
	                       while($row2=$result2->fetch_assoc())
						   {
							   ?>
							   <tr style="cursor:pointer">  
				<td><?php echo $row2["uid"];?></td> <td><?php echo $row2["name"];?></td> <td><?php echo $row2["fname"];?></td> <td><?php echo $row2["gender"];?></td> <td><?php echo $row2["course"];?></td>
								 </tr>
							   <?php
						   }
			  }			   			  
						?>
						</table>
</div>
</div>
		 </div><!-----col 2 close here---------->
		 <div class="row">
		       <center>
			       <button class="btn btn-warning" onclick="window.print();"><span class="glyphicon glyphicon-print"></span></button>
			   </center>
		 </div>
</div><!---row close---->

</div><!--- Panel body here--->
</div><!--- Panel close here--->

<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>