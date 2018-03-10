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
<head>
<title>
Add Topic - Abhyas Academy Ellenabad
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
<div class="panel-heading"><!--- panel body start --->
<b>Topic's</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
          <button class="btn btn-danger" onclick="window.open('dashboard.php','_self')"><b>Dashboard</b></button>
          <div class="row"><!----main row start here---->
	<div class="col-sm-4"><!----col 1 start here---->
	   <div class="panel panel-primary">
	   <div class="panel-heading">
	        <b>Add Topic</b>
	   </div><!---panel heading close here--->
	   <div class="panel-body">
	   <ul class="list-group">
        <form action="add topic.php" method="post" class="form-group">
	     <li class="list-group-item">
		  <label>Topic Name:</label>
		  <input type="text" name="name" class="form-control" placeholder="Enter Topic Name" required>
		 </li>
		 <li class="list-group-item">
		  <label>Description:</label>
		  <textarea name="description" class="form-control" placeholder="Enter Topic Description ...." required></textarea>
		 </li>
		 <li class="list-group-item">
		  <label>Keyword:</label>
		  <input type="text" name="keyword" class="form-control" placeholder="Enter Topic Keyword's...ex. What is HTML" required>
		 </li>
		 <li class="list-group-item">
		  <label>Source:</label>
		  <input type="text" name="source" class="form-control" placeholder="Enter Topic Source..." required>
		 </li>
		 <li class="list-group-item">
		  <label>Link:</label>
		  <input type="text" name="link" class="form-control" placeholder="Enter Link For More Detail..." required>
		 </li>
		 <li class="list-group-item">
		    <input type="submit" name="add" class="btn btn-primary" value="Add">
		  </li>
		  <?php
		       if(isset($_POST["add"]))
			   {
				   $name=$_POST["name"];
				   $description=$_POST["description"];
				   $keyword=$_POST["keyword"];
				   $source=$_POST["source"];
				   $link=$_POST["link"];
				   $sql="INSERT INTO topic(name,description,keyword,source,link)VALUES('$name','$description','$keyword','$source','$link')";
				   $result=$conn->query($sql);
				   if($result==TRUE)
				   {
					   ?>
					    <script>
						var x="Topic Added!!!";
						alert(x);
						window.open("add topic.php","_self")
						</script>
						
					   <?php
				   }
				   else
				   {
					   echo "<li class='list-group-item'><div class='alert alert-warning'><b>error!!! Try Again</b></div></li>";
				   }
			   }
		  ?>
		 </ul>
		 </form>
		 </div><!--- panel body close --->
</div><!--- panel close  --->
</div><!----col1 close--->

                 <div class="col-sm-4"><!----col 1 start here---->
				 <div class="row">
				 <div class="col-sm-12">
	   <div class="panel panel-primary">
	   <div class="panel-heading">
	        <b>Search Topic ID</b>
	   </div><!---panel heading close here--->
	   <div class="panel-body">
	   <ul class="list-group">
        <form action="add topic.php" method="post" class="form-group">
	     <li class="list-group-item">
		 <div class="input-group">
	      <input type="search" name="topic" class="form-control" placeholder="Enter Topic Name ex. HTML,PHP" required>
		  <span class="input-group-btn">
		  <button type="submit" name="search" class="btn btn-primary" style="">
		  </span>
		        <span class="glyphicon glyphicon-search" >
		  </button>
		</div>
		 </li>
		 
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
			 <li class="list-group-item-heading"><h4><b style="color:blue"><?php echo $row["name"];?></b></h4></li>
			 <li class="list-group-item"><b style="color:grey"><?php echo $row["description"];?></b></li>
			 <li class="list-group-item"><mark><b style="color:red">Source: <?php echo $row["source"];?></mark></b></li>
			 <li class="list-group-item">
			 <b style="color:red;font-size:22px;"><span class="glyphicon glyphicon-hand-right"></span> ID: <?php echo $row["id"];?></b>
			 </li>
			 <?php
	      }
	  /* if($row=$result->fetch_assoc())
	   {
	      
	  }
	  else
	  {
	            
               ?>
			   <div id="msg">
			   </div>
			   <script src="alertify/js/alertify.js"></script>
			   <script>
			    var x="<li class='list-group-item'><div class='alert alert-danger'><b>Sorry Result Not Found!!!</b></div></li>";
			     alertify.alert(x);
			     
			   </script>
			   <?php				
	  }*/
	}
	?>
		 </ul>
		 </form>
</div> <!--- panel body close --->
</div><!--- pane2 close  --->
</div><!--- sub col 1 close  --->

<div class="col-sm-12">
	   <div class="panel panel-primary">
	   <div class="panel-heading">
	        <b>Alter Topic</b>
	   </div><!---panel heading close here--->
	   <div class="panel-body">
	   <ul class="list-group">
        <form action="add topic.php" method="post" class="form-group">
	     <li class="list-group-item">
		 <div class="input-group">
	      <input type="number" name="id" class="form-control" placeholder="Enter Topic id" required>
		  <span class="input-group-btn">
		  <button type="submit" name="search_id" class="btn btn-primary" style="">
		  </span>
		        <span class="glyphicon glyphicon-search" >
		  </button>
		</div>
		 </li>
		 </form><!----------------------------search id ---------------------------->
		 <form action="add topic.php" method="post">
	<?php 
	if(isset($_POST["search_id"]))
	{
	 include 'db.php';
	 $id=$_POST["id"];
	 $sql="SELECT * FROM topic WHERE id='$id'";
	 $result=$conn->query($sql);
	 while($row=$result->fetch_assoc())
	      {
		     ?>
			 <li class="list-group-item">
			 <label>Topic Name: </label>
			 <input type="text" name="name" value="<?php echo $row["name"];?>" class="form-control" required>
			 </li>
			 <li class="list-group-item">
			 <label>Description: </label>
			 <textarea name="description" class="form-control" required><?php echo $row['description']?></textarea>
			 </li>
			 <li class="list-group-item">
			 <label>Keyword: </label>
			 <input type="text" name="keyword" value="<?php echo $row["keyword"];?>" class="form-control" required>
			 </li>
			 <li class="list-group-item">
			 <label>Source: </label>
			 <input type="text" name="source" value="<?php echo $row["source"];?>" class="form-control" required>
			 </li>
			 <li class="list-group-item">
			 <label>Link: </label>
			 <input type="text" name="link" value="<?php echo $row["link"];?>" class="form-control" required>
			 </li>
			 
			 <input type="hidden" name="id" value="<?php echo $row["id"];?>">
			 
			 <?php
	      }
	  /* if($row=$result->fetch_assoc())
	   {
	      
	  }
	  else
	  {
	            
               ?>
			   <div id="msg">
			   </div>
			   <script src="alertify/js/alertify.js"></script>
			   <script>
			    var x="<li class='list-group-item'><div class='alert alert-danger'><b>Sorry Result Not Found!!!</b></div></li>";
			     alertify.alert(x);
			     
			   </script>
			   <?php				
	  }*/
	  echo "<input type='submit' name='save' class='btn btn-primary' value='Save' style='margin-top:10px;'>";
	}
	?>
	
	      <?php
		       if(isset($_POST["save"]))
			   {
				   $id=$_POST["id"];
				   $name=$_POST["name"];
				   $description=$_POST["description"];
				   $keyword=$_POST["keyword"];
				   $source=$_POST["source"];
				   $link=$_POST["link"];
				   $sql="UPDATE topic SET name='$name',description='$description',keyword='$keyword',source='$source',link='$link' WHERE id='$id'";
				   $result=$conn->query($sql);
				   if($result==TRUE)
				   {
					   ?>
					    <script>
						var x="Topic UPDATED!!!";
						alert(x);
						window.open("add topic.php","_self")
						</script>
						
					   <?php
				   }
				   else
				   {
					   echo "<li class='list-group-item'><div class='alert alert-warning'><b>error!!! Try Again</b></div></li>";
				   }
			   }
		  ?>
		 </ul>
		 </form>
</div> <!--- panel body close --->
</div><!--- pane2 close  --->
</div><!--- sub col 1 close  --->
</div><!--- sub row 1 close  --->
</div><!----main col2 close--->

  <div class="col-sm-4"><!---3rd col start here---->
    <div class="panel panel-primary"><!---panel start here---->
    <div class="panel-heading"><!---panel start here---->
	  <b>Delete Topic</b>
  </div><!---panel heading close here---->
       <div class="panel-body"><!---panel body start here---->
	          <ul class="list-group">
        <form action="add topic.php" method="post" class="form-group" name="form3">
	     <li class="list-group-item">
		 <div class="input-group">
	      <input type="number" name="delete_id" class="form-control" placeholder="Enter Topic id" required>
		  <span class="input-group-btn">
		  <button type="submit" name="delete" class="btn btn-danger" style="">
		  <span class="glyphicon glyphicon-trash"></span>
		  </button>
		  </span>
		        
		</div>
		 </li>
		  </form><!----------------------------search id ---------------------------->
		  <?php
		   if(isset($_POST["delete"]))
		   {
			   
			   ?>
			     <li class="list-group-item">
				 <form action="add topic.php" method="post">
				 <center>
				 <input type="hidden" value="<?php echo $_POST["delete_id"] ?>" name="delete_id" class="form-control" placeholder="Enter Topic id" required>
				  <fieldset><legend>Are You Sure To Delete...?</legend>
				         <input type="submit" id="btn2" value="Delete" name="confirm" class="btn btn-success">
				         <input type="submit" id="btn3" value="Cancel" name="cancel" class="btn btn-warning">
				  </fieldset>
				  </center>
				 </form>
				 </li>
			   <?php
		   }
		    if(isset($_POST["confirm"]))
		    {
			       $id=$_POST["delete_id"];
			       $sql="DELETE FROM topic WHERE id=$id";
				   $result=$conn->query($sql);
				     if($result==TRUE)
					 {
					  ?>
						   <script src="alertify/js/alertify.js"></script>
						   <script>						   				   
						     alertify.success("<div class='alert alert success'><h4>1 Topic Deleted Which ID is: <?php echo $id; ?> !!!</h4></div></li>");
							 
						   </script>
						 <?php
					 }
					 else
					 {
						 echo "<div class='alert alert-danger'><b>error!!! Try Again</b></div>";
					 }		   			   
		   }
		  if(isset($_POST["cancel"]))
		   {
			   ?>
			   <script>						   				   
		alert("Cancel Delete!!!");
							 
		</script>
			   <?php
		   }
		 ?>
		 </ul>
  </div><!---panel body close here---->
  </div><!---panel close here---->
  </div><!---3rd col close here---->
  
</div><!---main row close--->
</div><!--- panel body close --->
</div><!--- panel close  --->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
