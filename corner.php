<?php
include 'db.php';
?>
<!DOCTYPE html>
<htmL>
<title>
Student Corner-Abhyas Academy Ellenabad
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
<b>Student Corner</b>
</div><!--panel heading close here--->
<div class="panel-body">

           <div class="row"><!---------------------------------------------main row start here----------------------------->
		   
           <div class="col-sm-6"><!---------------------------------------------col-1 start here----------------------------->
		   
		   <div class="panel panel-default">
<div class="panel-heading" style="color:white;background-color:#444;">
<b>Find Your Unique id</b>
</div><!--panel heading close here--->
<div class="panel-body">
      <form action="corner.php" method="post">
	       <div class="row">
		      <div class="col-sm-3"><b>Enter Your Name</b></div>
		      <div class="col-sm-6"><input type="text" class="form-control" name="name" placeholder="Enter Your Name" required></div>
		   </div>
		     <div class="row">
			           <div class="col-sm-12">
					     <center> 
						 <button type="submit" name="search_uid" class="btn btn-success" style="margin-top:5px;"><span class="glyphicon glyphicon-search"></span></button>
						 </center>
					   </div>
			 </div>
	  </form>
	    <?php
		      if(isset($_POST["search_uid"]))
			  {
				  ?>
                        <table class="table table-responsive table-striped table-hover">
                     
					<tr><th>ID</th><th>Unique id</th><th>Name</th><th>Father Name</th><th>DOB</th><th>Gender</th><th>Course</th></tr>
                        <?php
						    $name=$_POST["name"];
						   $sql2="SELECT  id,uid,name,fname,dob,gender,course FROM student WHERE name LIKE '%$name%' ORDER BY name";
	                       $result2=$conn->query($sql2);
	                       while($row2=$result2->fetch_assoc())
						   {
							   ?>
							   <tr style="cursor:pointer">  
				<td> <?php echo $row2["id"];?></td> <td><?php echo $row2["uid"];?></td> <td><?php echo $row2["name"];?></td> <td><?php echo $row2["fname"];?></td> 
				<td><?php echo date("d/m/Y",strtotime($row2['dob']));?></td> <td><?php echo $row2["gender"];?></td> <td><?php echo $row2["course"];?></td>
								 </tr>
							   <?php
						   }
			  }			   			  
						?>
						</table>
</div>
</div>
		   
		               <div class="panel panel-default"><!-----------------------col-1 panel start here--------------------->
                       <div class="panel-heading">
                       <b>See Your Info</b>
                       </div><!--panel heading close here--->
                       <div class="panel-body"><!-----------------------col-1 panel body here--------------------->
					           
					           <center>
            <form action="corner.php" method="post" class="form-group">
		    <div class="input-group">
			<center>
		    <input type="search" class="form-control" name="search" placeholder="Enter Unique Student id" autofocus required>
			<span class="input-group-btn">
			<input type="submit" class="btn btn-default" name="searchr" value="Search" style="margin-top:5px;">
			</span>
			</center>
		    </form>
</center>
<?php
if(isset($_POST["searchr"]))
{
	$uid1=$_POST["search"];
	$sql1="SELECT * FROM student WHERE uid='$uid1'";
	$result1=$conn->query($sql1);
	if($row1=$result1->fetch_assoc())
	{
	?><!----------------------------------------php break for some html code--------------------------------------->
	
<div class="panel panel-default"><!--- panel start --->
<div class="panel-heading" style="background-color:green;color:white;"><!--- panel body start --->
<h4><b>Search Student Record</b></h4>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<form action="update student.php" method="post">


<div class="row">
<div class="col-sm-4">
<label>Unique id: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="text" class="form-control"  value="<?php echo $row1['uid'];?>" required disabled>
<input type="hidden" name="id"  value="<?php echo $row1['id'];?>" >
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-4">
<label>Name: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="text" class="form-control" value="<?php echo $row1['name'];?>" required disabled>
</div><!---col1 close here--->
</div><!---1 row close here--->
<div class="row">
<div class="col-sm-4">
<label>Father Name:</label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="text" class="form-control"  value="<?php echo $row1['fname'];?>"required disabled>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-4">
<label>Mother Name:</label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="text"  class="form-control" value="<?php echo $row1['mname'];?>"required disabled>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-4">
<label>D.O.B: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="date" class="form-control" value="<?php echo $row1['dob'];?>"required disabled>
</div><!---col1 close here--->
</div><!---3 row close here--->


<div class="row">
<div class="col-sm-4">
<label>Gender: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<select  class="form-control"  required disabled>
<option><?php echo $row1['gender'];?></option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div><!---col1 close here--->
</div><!---4 row close here--->

<div class="row">
<div class="col-sm-4">
<label>City/Village:</font> </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="text" class="form-control"  value="<?php echo $row1['city'];?>" required disabled>
</div><!---col1 close here--->
</div><!---5 row close here--->



<div class="row">
<div class="col-sm-4">
<label>Resident Address: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<textarea  class="form-control" required disabled>
<?php echo $row1['address'];?>
</textarea>
</div><!---col1 close here--->
</div><!---4 row close here--->
<div class="row">
<div class="col-sm-4">
<label>Select Course </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<select   class="form-control" required disabled>
<option><?php echo $row1['course'];?></option>
<option>Select Course</option>
<option>HS-CIT</option>
<option>PMKVY</option>
<option>Computer Course</option>
</select>
</div><!---col1 close here--->
</div><!---3 row close here--->
<div class="row">
<div class="col-sm-4">
<label>Mobile No.: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="number" class="form-control"  value="<?php echo $row1['mobile'];?>" required disabled>
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-4">
<label>Aadhaar No.: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="number" class="form-control" value="<?php echo $row1['aadhaar'];?>" required disabled>
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-4">
<label>Marital Status: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="text" class="form-control" value="<?php echo $row1['mStatus'];?>" required disabled>
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-4">
<label>Qulification : </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="text" class="form-control" value="<?php echo $row1['qulification'];?>" required disabled>
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-4">
<label>Total Fee: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="number"  class="form-control"  value="<?php echo $row1['tfee'];?>" required disabled>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-4">
<label>Fee Recieved: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<input type="number"  class="form-control" value="<?php echo $row1['rfee'];?>" required disabled>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-4">
<label>Select Session: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<select   class="form-control" required disabled>
<option><?php echo $row1['session'];?></option>
<option>Select Session</option>
<?php
$y1=1997;
$var=1;
while($var<=200)
{
	$var1=$y1+$var;
?>
<option><?php echo $var1;?></option>
<?php
$var++;
}
?>
</select>
</div><!---col1 close here--->
</div><!---3 row close here--->

<div class="row">
<div class="col-sm-4">
<label>Select Admisson Month: </label>
</div><!---col1 close here--->
<div class="col-sm-8">
<select name="month" id="month"  class="form-control" required disabled>
<option><?php echo $row1['month'];?></option>
<option>Select Month</option>
<option>Jan</option> <option>Feb</option> <option>Mar</option> <option>Apr</option> <option>May</option> <option>Jun</option> 
<option>Jul</option> <option>Aug</option> <option>Sep</option> <option>Oct</option> <option>Nov</option> <option>Dec</option>

</select>
</div><!---col1 close here--->
</div><!---3 row close here--->

<div class="col-sm-2">
</div>

</div>
</form>
<div class="row">

<div class="col-sm-8">
<center>
<button type="button"  class="btn btn-primary"  style="margin-top:10px;background-color:indigo;font-weight:bold;" onclick="window.print()" >
<span class="glyphicon glyphicon-print"></span>
</button>
</center><br>
</div>
</div>
</div>
<?php
	}
	else
	{
		echo "<div class='alert alert-warning' style='' align='center'><b>Sorry Not Match Found!!!</b></div>";
	}
}
?><!----------------------------------------------php again start and end here--------------------------->  
					   
					   </div><!-----------------------col 1 panel body close here--------------------->
					   </div><!-----------------------col 1 panel  close here--------------------->
					

<div class="panel panel-danger">
								       <div class="panel-heading" style="background-color:#444;color:white;">
									        <b>See About Your Fee info</b>
									   </div>
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
									   </div>
								   </div>
					
					   
           </div><!---------------------------------------------col-1 close here----------------------------->
 
 
		   
		   <div class="col-sm-6">
		          <div class="panel panel-default">
		          <div class="panel-heading" style="background-color:#656;color:white">
				      <b>Notes/Other </b>
					</div>
		          <div class="panel-body">
				  <ul class="list-group">
				      <li class="list-group-item">					  
					  <h4> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>	
				  <a href="search topic.php	"><b>Search Computer Topic's</b></a></li>
				  </h4>
				  </ul>
				  <table><tr><td>
				 <h5> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>
				  <b>Hindi Typing Notes</b></td><td>
				  <a href="notes/ht.pdf"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-download"></span></button></a>
				  </h5></td></tr><tr><td>
				 
				  <h5> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>
				        <b>Punjabi Typing Notes</b></td><td>
				  <a href="notes/pt.pdf"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-download"></span></button></a>
				  </h5>  </td></tr><tr><td>
				  				  
				  <h5> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>
				        <b>Shortcut key Notes</b></td><td>
				  <a href="notes/shortcut keys.pdf"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-download"></span></button></a>
				  </h5></td></tr><tr><td>
				
				<h5> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>
				        <b>Basic HTML Notes</b></td><td>
				  <a href="notes/Basic_HTML.pdf"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-download"></span></button></a>
				  </h5></td></tr><tr><td>
				  
				  				<h5> <font color="red"><span class="glyphicon glyphicon-circle-arrow-right"></span></font>
				        <b>HTML Forms Notes</b></td><td>
				  <a href="notes/HTML-Forms.pdf"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-download"></span></button></a>
				  </h5></td></tr><tr><td>
				    </table><!-----------------Notes Table Close here----------------------->
				  <center><h3 style="color:#774;"> Know About Our Staff Member's</h3>
 
												<h1 style="color:#553;"><span class="glyphicon glyphicon-hand-down"></span></h1>
												<button class="btn btn-info" onclick="about()">Click here</button>
							       </center><br>
								   
				 </div><!-----------------------col 2 panel body close here--------------------->
			     </div><!-----------------------col 2 panel  close here--------------------->
		   </div><!----------------------col 2 close here----------------->
           </div><!---------------------------------------------main row close here----------------------------->
		 

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
function about()
{
	var msg="<table class='table table-responsive'><tr style='background-color:#667;color:white;'><th>Name</th><th>Position</th><th>Qulification</th></tr>";
	var msg0="</table>";
	alertify.alert(msg+msg0);
}
</script>	
	