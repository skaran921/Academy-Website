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
Add Short Notification
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
<link href="logo.jpg" rel="icon">
<link href="alertify/css/alertify.css" rel="stylesheet" id="alertifyCSS">
<link href="css/header.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body onload="">
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<div class="panel panel-default"><!--- panel start --->
<div class="panel-heading"><!--- panel body start --->
<b>Add Short Notification</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<button class="btn btn-danger" onclick="window.open('dashboard.php','_self')">Dashboard</button>
<div class="row">
<div class="col-sm-6">
<div class="row"><!-------- sub Row-------------->
<div class="col-sm-12"><!-------- sub column -------------->
<div class="panel panel-default"><!--- panel start --->
<div class="panel-heading" style="background-color:#324;color:white;"><!--- panel body start --->
<b>Short Notification Form</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
          <div class="row">
		       
		       <form action="shortnoti.php" method="post" class="form-group">
		      <div class="col-sm-4">
			      <label>Wrte Short Notification:</label>
			  </div>
			  <div class="col-sm-6">
			      <textarea name="notification" id="notification" class="form-control" placeholder="This Notification display in home page" required></textarea>
			  </div>
		  </div>
		     <div class="row">
			      <center>
				  <input type="submit" name="submit" onclick="validate()" class="btn btn-basic" value="Save" style="margin-top:10px;font-weight:bold;">
				  </form>
				  <?php
				  if(isset($_POST["submit"]))
				  {
					  $notification=$_POST["notification"];
					  $sql="UPDATE shortnoti SET  notification='$notification' WHERE id=1";
					  $result=$conn->query($sql);
				  
				  if($result==TRUE)
				  {
					  ?>
					  <script src="alertify/js/alertify.js"></script>
					  <script>
					  var x="<div class='alert alert-success'><b>Notification Saved!!! Go to Home Page</b></div>";
					  alertify.alert(x);
					  </script>
					  <?php
				  }
				  else
				  {
					  echo "<div class='alert alert-warning'><b>error try again!!!</b></div>";
				  
				  }
				  }
				  ?>
				  </center>

			 <div class="col-sm-10">
			 </div>
			 </div>
			 
</div><!---Panel Body Close here--->
</div><!---Panel  Close here--->
</div><!-------------sub col 1 close------->
</div><!-------------sub row 1 close---------->
      <div class="row">
	  <div class="col-sm-12">
	           <div class="panel panel-danger">
	           <div class="panel-heading" style="color:white;background-color:#464;">
			   <b>Update Notification</b>
			   </div><!---panel heading 2 close here--->
			   <div class="panel-body">
			     <?php
				    $sql1="SELECT * FROM shortnoti";
					$result1=$conn->query($sql1);
					if($row1=$result1->fetch_assoc())
					{
					?>
					            <div class="row">
		       <form action="shortnoti.php" method="post" class="form-group">
		      <div class="col-sm-4">
			      <label>Wrte Short Notification:</label>
			  </div>
			  <div class="col-sm-6">
<textarea name="notification" id="notification" class="form-control" placeholder="This Notification display in home page" required><?php echo $row1["notification"];?></textarea>
			  </div>
		  </div>
		     <div class="row">
			      <center>
				  <input type="submit" name="update" onclick="" class="btn btn-default" value="Update" style="margin-top:10px;font-weight:bold;">
				  </form>
				  <?php
				  if(isset($_POST["update"]))
				  {
					  $notification=$_POST["notification"];
					  $sql="UPDATE shortnoti SET  notification='$notification' WHERE id=1";
					  $result=$conn->query($sql);
				  
				  if($result==TRUE)
				  {
					  ?>
					  <script src="alertify/js/alertify.js"></script>
					  <script>
					  var x="<div class='alert alert-danger'><b>Notification Saved!!! Go to Home Page</b></div>";
					  alertify.alert(x);
					  window.open("shortnoti.php","_self")
					  </script>
					  <?php
				  }
				  else
				  {
					  echo "<div class='alert alert-warning'><b>error try again!!!</b></div>";
				  
				  }
				  }
				  ?>
				  </center>

					    
					<?php
					}
					?>
					 </div><!---php row close--->
	           </div><!---panel Body 2 close here--->
	           </div><!---sub panel 2 close here--->
	  </div><!---sub col 2 close here--->
	  </div><!---sub row 2 close here--->
</div><!---col close here--->

<div class="row">
<div class="col-sm-6">
<div class="panel panel-default"><!--- panel start --->
<div class="panel-heading" style="background-color:#423;color:white;"><!--- panel body start --->
<b>Last Added Notification</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<center>
<table class="table table-responsive">
        <tr><th>Notification</th><th>Time</th></tr>
		<?php
		              $sql1="SELECT * FROM shortnoti WHERE id=1";
					  $result1=$conn->query($sql1);						  
				      if($row=$result1->fetch_assoc())
				      {
						   echo "<tr style='color:green;font-weight:bold'><td>".$row["notification"]."</td><td>".$row["time"]."</td></tr>";
				      }
					  else
					  {
						   echo "<div class='alert alert-warning'><b>Not Found Any Notification</b></div>";
					  }
	    ?>
</table>
</center>
</div><!---Panel Body Close here--->
</div><!---Panel  Close here--->
</div><!---col close here--->
</div><!---row close here--->

</div><!---row close here--->
</div><!---Panel Body Close here--->
</div><!---Panel  Close here--->



<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
<script src="alertify/js/alertify.js"></script>
<script>
       function validate()
	   {
		   var notification=document.getElementById("notification").value;
		   var error1="<h3>Please Write Notification</h3>";
		   if(notification=="")
		   {
			   alertify.error(error1);
		   }
		   else
		   { 
	                      document.forms[0].submit();
		   }
	   }
	   
</script>