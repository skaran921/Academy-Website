<?php
session_start();
?>
<!DOCTYPE html>
<htmL>
<title>
Abhyas Academy Ellenabad
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
<link href="css/w3.css" rel="stylesheet">
</head>
<body>
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<br>
          <div class="notification1">
		     <marquee>
			 Welcome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <font color="indigo">
			 <span class="glyphicon glyphicon-hand-up"></span> 
			 Now get Admission by Fill A Simple Online Admission Form
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 Get All New News/Notification's by Click on above Notification Option
			 </font>
			 <sup><font color='red'>Hurry!!!<span class="glyphicon glyphicon-hand-up"></span></font></sup>
			 </marquee>
			 <marquee  class="shortnoti">
			   <font color="#111"> Notification:</font><font color="red"><span class="glyphicon glyphicon-hand-right">
			   <b style="color:blue">
			   <?php 
			       include 'db.php';
							  $sql0="SELECT * FROM shortnoti WHERE id=1";
							  $result0=$conn->query($sql0);
							  if($row0=$result0->fetch_assoc())
							  {
								  echo $row0["notification"];
							  }
							 
			   ?>
			   </b>
			   </span>
			   </font>
			 </marquee>
          </div>
		  <div class="container-fluid">
		     <div class="row">
		         <div class="col-sm-2" style="margin-left:;">
				  <div class="panel panel-info">
				     <div class="panel-heading" style="background-color:;color:;">
						       <b>Login</b>
						   </div><!---panel heading close--->
						   <div class="panel-body" id="thought">
						      <form action="" method="post" class="form-group">
							  <input type="email" name="l_id" id="l_id" placeholder="Login id" class="form-control" required>	
							  <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
							  <button type="submit" name="login" id="login" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"> Login</span></button>
							  </form>
							  <?php 
							      if(isset($_POST["login"]))
								 {
									 include 'db.php';
									 $l_id=$_POST["l_id"];
									 $password=$_POST["password"];
									 $sql="SELECT * FROM admin WHERE u_id='$l_id' AND password='$password'";
									 $result=$conn->query($sql);
									 if($row=$result->fetch_assoc())
									 {
										 $_SESSION["id"]=$row['id'];
										 
										 ?>
										  <script>window.open('dashboard.php','_self');</script>
								     <?php
									 }
									 else
									 {
										 echo "<div class='alert alert-warning'><b>Username or Password not Matched!!!</b></div>";
									 }
									
								 }
							  ?>
							</div><!---panel-body close--->
						    </div><!---panel close--->
				    								  
				 </div><!---column1 close here--->
				 <div class="col-sm-5">				
				 <!----------------------------------------slide start here ----------------------------->
				 <img class="mySlides img-fluid img-thumbnail" src="images/abhyas0.jpeg" alt="Abhyas Academy Ellenabad" title="Abhyas Academy Ellenbad" style="width:500px;margin-bottom:10px;">
				 <img class="mySlides img-fluid img-thumbnail" src="images/abhyas.jpg" alt="Abhyas Academy Ellenabad" title="Abhyas Academy Ellenbad" style="width:500px;margin-bottom:10px;">
				 <img class="mySlides img-fluid img-thumbnail" src="images/abhyas1.jpg" alt="Abhyas Academy Ellenabad" title="Abhyas Academy Ellenbad" style="width:500px;margin-bottom:10px;">
				 <img class="mySlides img-fluid img-thumbnail" src="images/abhyas2.jpg" alt="Abhyas Academy Ellenabad" title="Abhyas Academy Ellenbad" style="width:500px;margin-bottom:10px;">
				 <img class="mySlides img-fluid img-thumbnail" src="images/abhyas3.jpg" alt="Abhyas Academy Ellenabad" title="Abhyas Academy Ellenbad" style="width:500px;margin-bottom:10px;">
				 <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
                 			
				 <!----------------------------------------slide show end----------------------------->
				  </div><!---slide show column close here--->
				 <div class="col-sm-3">
				       <div class="panel panel-info">
					       <div class="panel-heading">
						       <b>Today's Thought</b>
						   </div><!---panel heading close--->
						   <div class="panel-body" id="thought">
						      <b><p>
							  <?php
							   include 'db.php';
							  $sql1="SELECT * FROM thought WHERE id=1";
							  $result1=$conn->query($sql1);
							  if($row1=$result1->fetch_assoc())
							  {
								  echo $row1["thought"];
							  }
							  ?>
							 </p> </b>
							</div><!---panel-body close--->
						    </div><!---panel close--->
							<img src="images/modi.png" alt="PMKVY title="PMKVY" class="img-thumbnail img-fluid" id="modi">
		         </div><!---column2 close here--->
				 <div class="col-sm-2" id='sideimage'>
				        <a href="hscit.php" title="Know About HS-CIT Course From Here">
				        <img src="images/HS-CIT.jpg" alt="HS-CIT" title="HS-CIT" class="img-thumbnail img-fluid" style="width:130px;">
						</a>
						<br>
						<a href="pmkvy.php" title="Know About HS-CIT Course From Here">
				        <img src="images/download.png" alt="PMKVY" title="PMKVY" class="img-thumbnail img-fluid" style="width:130px;">
						</a>
						<br>
				        <img src="images/Skill India.png" alt="Skill India" title="Skill India" class="img-thumbnail img-fluid" style="width:130px"><br>
				        <img src="images/NSDC.jpg" alt="NSDC" title="NSDC" class="img-thumbnail img-fluid" style="width:130px">
				        <img src="images/PMKVY.jpg" alt="PMKVY" title="NSDC" class="img-thumbnail img-fluid" style="width:130px">
		         </div><!---column3 close here--->
		     </div><!---row close here--->
		  </div><!---container close here--->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>

<script src="alertify/js/alertify.js"></script>
<script src="w3.js"></script>
