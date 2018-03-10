<script src="js/menu.js"></script>
<link href="css/w3.css" rel="stylesheet">
<link href="css/header.css" rel="stylesheet">
<div class="container-fluid">
<div class="row">
                   <?php #header color
				        include 'db.php';
						$sql="SELECT value FROM settings WHERE property='color' AND pageName='header.php'";
						$result=$conn->query($sql);
						if($row=$result->fetch_assoc())
						{
							$color=$row["value"];
						}
				   ?>
<nav class="navbar navbar-default" style="background-color:<?php echo $color;?>">
  <div class="col-sm-2">    
<div class="navbar-brand">
<a href="index.php"><img src="logo.jpg" alt="Abhyas Academy" title="Abhyas Academy Ellenabad"class="img-fluid"></a>
</div><!---nav brand close here--->
</div>
<div class="col-sm-10">
<div class="nav navbar-nav">
   <h1>Abhyas Academy Ellenabad</h1>
 </div>
     <div class="row">
	  <div class="col-sm-3" style="margin-top:2.4vw;">
	   <a  href="form.php" class="w3-button w3-rounded w3-yellow w3-hover-khaki" id="btn1"><span class="glyphicon glyphicon-hand-right"></span> Online Admission</a>
	   </div>
	   </div>
</nav>
</div><!---row close here--->
</div><!---Container close here--->
</div><!---Container close here--->

	 <!-----------------------------show in pc ----------------->
    <div class="w3-bar  w3-card-4  w3-indigo" style="margin-top:-10px">
				
       <a href="index.php" class="w3-bar-item w3-button w3-hover-red">
          <span class="glyphicon glyphicon-home"></span>Home
	   </a>
	   <a href="#" title="refresh page" onclick="window.location.reload()" class="w3-bar-item w3-button w3-hide-small w3-hover-blue">
	     <span class="glyphicon glyphicon-refresh"></span>Refresh
	   </a>
	   
	   <a href="about.php" title="About us"    class="w3-bar-item w3-button w3-hide-small w3-hover-black">
	       <span class="glyphicon glyphicon-info-sign"></span>About</a>
	   <a href="notification.php" title="Notification"  class="w3-bar-item w3-button w3-hide-small w3-hover-green">
	     <span class="glyphicon glyphicon-list-alt"></span>Notification
	   </a>
	   <a href="course.php" title="View Course"  class="w3-bar-item w3-button w3-hide-small w3-hover-red">
	       <span class="glyphicon glyphicon-education"></span>Course
	   </a>
	   <a href="corner.php" title="Student Corner" class="w3-bar-item w3-button w3-hide-small w3-hover-khaki">
	       <span class="glyphicon glyphicon-user"></span>Student Corner
	   </a>
	   <a href="gallary.php" title="Gallary"  class="w3-bar-item w3-button w3-hide-small w3-hover-yellow">
	      <span class="glyphicon glyphicon-th"></span>Gallary
	   </a>
	   <a href="contact.php" title="Contact"  class="w3-bar-item w3-button w3-hide-small w3-hover-green">
	      <span class="glyphicon glyphicon-map-marker"></span>Contact</a>
	   <a href="sitemap.php" title="sitemap"  class="w3-bar-item w3-button w3-hide-small w3-hover-red">
	   <span class="glyphicon glyphicon-earphone">
	   </span>Sitemap</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-light-gray w3-hide w3-hide-large w3-hide-medium">
<a href="index.php" title="Home" class="w3-bar-item w3-button">
	          <span class="glyphicon glyphicon-home"></span>Home
	   </a>
	   <a href="#" title="refresh page" onclick="window.location.reload()" class="w3-bar-item w3-button">
	     <span class="glyphicon glyphicon-refresh"></span>Refresh
	   </a>
	  <a href="about.php" title="About us"  class="w3-bar-item w3-button">
	       <span class="glyphicon glyphicon-info-sign"></span>About</a>
	   <a href="notification.php" title="Notification"  class="w3-bar-item w3-button">
	     <span class="glyphicon glyphicon-list-alt"></span>Notification
	   </a>
	   <a href="course.php" title="View Course"  class="w3-bar-item w3-button">
	       <span class="glyphicon glyphicon-education"></span>Course
	   </a>
	   <a href="corner.php" title="Student Corner" class="w3-bar-item w3-button">
	       <span class="glyphicon glyphicon-user"></span>Student Corner
	   </a>
	   <a href="gallary.php" title="Gallary"  class="w3-bar-item w3-button">
	      <span class="glyphicon glyphicon-th"></span>Gallary
	   </a>
	   <a href="contact.php" title="Contact"  class="w3-bar-item w3-button">
	      <span class="glyphicon glyphicon-map-marker"></span>Contact</a>
	   <a href="sitemap.php" title="sitemap"  class="w3-bar-item w3-button">
	   <span class="glyphicon glyphicon-earphone">
	   </span>Sitemap</a>
  </div>
  
</div>