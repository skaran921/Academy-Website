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
Settigs - Abhyas Academy Ellenabad
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
<body >
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<div class="panel panel-primary"><!--- panel start --->
<div class="panel-heading"><!--- panel body start --->
<b> <span class="glyphicon glyphicon-cog"></span> Settings</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
            <div class="row"><!-----------------------------inside panel main row start----------------------------->
            <div class="col-sm-4"><!-----------------------------inside panel col start----------------------------->
            <div class="panel panel-warning"><!-----------------------------inside row panel start----------------------------->
            <div class="panel panel-heading"><!-----------------------------panel heading  start----------------------------->
			      <b>Change Header Setting</b>
			</div><!----------------------------- panel heading start----------------------------->
            <div class="panel panel-body"><!----------------------------- panel body start----------------------------->
			               <form action="settings.php" method="post" class="form-conrol">
						         <div class="row"><!----------row 1 inside form start-------->
								 <div class="col-sm-4"><!----------col 1 inside form start-------->
								         <label>Change Colour:</label>
								 </div><!----------col 1 inside form close-------->
								 <div class="col-sm-4"><!----------col 2 inside form start-------->
								         <input type="color" name="color" id="color" required class="form-control">
								 </div><!----------col 2 inside form close-------->
								 </div><!----------row 1 inside form close-------->
								 
						         <div class="row"><!----------row 2 inside form start-------->
									<div class="col-sm-12"><!----------col 1 inside form start--------><br>
								       <center><button type="submit" name="submit" class="btn btn-danger">
									       <b><span class="glyphicon glyphicon-floppy-saved"></span> Change</b>
									   </button></center>
								 </div><!----------col 1 inside form close-------->
								 </div><!----------row 2 inside form close-------->
						   </form>
						   
						   <center><h3>OR Change Colour By Name</h3></center><!-----------------------------------form 2------------------------------>
						   <form action="settings.php" method="post" class="form-conrol">
						         <div class="row"><!----------row 1 inside form start-------->
								 <div class="col-sm-4"><!----------col 1 inside form start-------->
								         <label>Change Colour:</label>
								 </div><!----------col 1 inside form close-------->
								 <div class="col-sm-4"><!----------col 2 inside form start-------->
								         <select name="color" id="color" required class="form-control" >
	<option></option>
	<optgroup label="WHITE HTML COLOR NAMES">
<option >WHITE</option><option>SNOW</option>
<option>HONEYDEW</option><option>MINTCREAM</option> <option>AZURE</option> <option>ALICEBLUE</option> <option>GHOSTWHITE</option>WHITESMOKE<option>SEASHELL</option>
<option>BEIGE</option><option>OLDLACE</option> <option>FLORALWHITE</option> <option>IVORY</option> <option>ANTIQUEWHITE</option>LINEN<option>LAVENDERBLUSH</option>
<option>MISTYROSE</option>
                            </optgroup>
                            <optgroup label="GRAY HTML COLOR NAMES">
<option>GAINSBORO</option> <option>LIGHTGRAY</option> <option>SILVER</option> <option>DARKGRAY</option>GRAY<option>DIMGRAY</option>
<option>LIGHTSLATEGRAY</option> <option>SLATEGRAY</option> <option>DARKSLATEGRAY</option> <option>BLACK</option>
			                 </optgroup>
							 
	<optgroup label="RED HTML COLOR NAMES"> 
	<option>CORAL</option> <option>DARKRED</option> <option>FIREBRICK</option><option>INDIAN RED</option>
    <option>LIGHTCORAL</option>	 <option>SALMON</option> <option>DARKSALMON</option> <option>LIGHTSALMON</option>
    <option>CRIMSON</option> <option>RED</option>  
       </optgroup>
 <optgroup label="ORANGE HTML COLOR NAMES">
 <option>ORANGE</option> <option>ORANGERED</option><option>TOMATO</option> <option>DARKORANGE</option>
 </optgroup>
 <optgroup label="PINK HTML COLOR NAMES">
 <option>PINK</option>
 <option>LIGHTPINK</option> <option>HOTPINK</option> <option>DEEPPINK</option> <option>MEDIUMVIOLTERED</option> <option>PALEVIOLETRED</option>
 </optgroup>
 <optgroup label="YELLOW HTML COLOR NAMES">
<option>GOLD</option> <option>YELLOW</option> <option>LIGHTYELLOW</option> <option>LEMONCHIFFON</option> <option>LIGHTGOLDENRODYELLOW</option>
<option>PAPAYAWHIP</option> <option>MOCCASIN</option> <option>PEACHPUFF</option> <option>PALEGOLDENROD</option> <option>KHAKI</option> <option>DARKKHAKI</option>
</optgroup>
<optgroup label="PURPLE HTML COLOR NAMES">
<option>LAVENDER</option> <option>THISTLE</option> <option>PLUM</option> <option>VIOLET</option> <option>ORCHID</option> <option>FUCHSIA</option>
<option>MAGENTA</option> <option>MEDIUMORCHID</option> <option>MEDIUMPURPLE</option> <option>REBECPCCAURPLE</option> <option>BLUEVIOLET</option>
<option>DARKVIOLET</option> <option>DARKORCHID</option> <option>DARKMAGENTA</option> <option>PURPLE</option> <option>INDIGO</option>
<option>SLATEBLUE</option> <option>DARKSLATEBLUE</option> <option>MEDIUMSLATEBLUE</option> 
</optgroup>
<optgroup label="Green HTML COLOR NAMES">
<option>GREENYELLOW</option> <option>CHARTREUSE</option>
<option>LAWNGREEN</option> <option>LIME</option> <option>LIMEGREEN</option> <option>PALEGREEN</option> <option>LIGHTGREEN</option><option>MEDIUMSPRINGGREEN</option>
<option>SPRINGGREEN</option> <option>MEDIUMSEAGREEN</option> <option>SEAGREEN</option> <option>FORESTGREEN</option> <option>GREEN</option><option>DARKGREEN</option>
<option>YELLOWGREEN</option> <option>OLIVEDRAB</option> <option>OLIVE</option> <option>DARKOLIVEGREEN</option> <option>MEDIUMAQUAMARINE</option>
<option>DARKSEAGREEN</option><option>YELLOWGREEN</option> <option>LIGHTSEAGREEN</option> <option>DARKCYAN</option> <option>TEAL</option>
</optgroup>
<optgroup label="BLUE HTML COLOR NAMES">
 <option>CYAN</option>									 
<option>LIGHTCYAN</option><option>PALETURQUOISE</option> <option>AQUAMARINE</option> <option>TURQUOISE</option> <option>MEDIUMTURQUOISE</option> <option>DARKTURQUOISE</option>			
<option>CADETBLUE</option> <option>STEELBLUE</option> <option>LIGHTSTEELBLUE</option> <option>POWDERBLUE</option> <option>LIGHTBLUE</option>			
<option>SKYBLUE</option> <option>LIGHTSKYBLUE</option> <option>DEEPSKYBLUE</option> <option>DODGERBLUE</option> <option>CORNFLOWERBLUE</option>
<option>MEDIUMSLATEBLUE</option><option>ROYALBLUE</option> <option>BLUE</option> <option>MEDIUMBLUE</option> <option>DARKBLUE</option> <option>NAVY</option>
<option>MIDNIGHTBLUE</option>
</optgroup>
<optgroup label="BROWN HTML COLOR NAMES">
<option>CORNSILK</option> <option>BLANCHEDALMOND</option> <option>BISQUE</option> <option>WHEAT</option> <option>BURLYWOOD</option>
<option>TAN</option><option>ROSYBROWN</option> <option>SANDYBROWN</option> <option>GOLDENROD</option> <option>DARKGOLDENROD</option> <option>PERU</option>
<option>CHOCOLATE</option><option>SADDLEBROWN</option> <option>SIENNA</option> <option>BROWN</option> <option>MAROON</option>
</optgroup>
<optgroup label="WHITE HTML COLOR NAMES">
<option>WHITE</option><option>SNOW</option>
<option>HONEYDEW</option><option>MINTCREAM</option> <option>AZURE</option> <option>ALICEBLUE</option> <option>GHOSTWHITE</option>WHITESMOKE<option>SEASHELL</option>
<option>BEIGE</option><option>OLDLACE</option> <option>FLORALWHITE</option> <option>IVORY</option> <option>ANTIQUEWHITE</option>LINEN<option>LAVENDERBLUSH</option>
<option>MISTYROSE</option>
                            </optgroup>
                            <optgroup label="GRAY HTML COLOR NAMES">
<option>GAINSBORO</option> <option>LIGHTGRAY</option> <option>SILVER</option> <option>DARKGRAY</option>GRAY<option>DIMGRAY</option>
<option>LIGHTSLATEGRAY</option> <option>SLATEGRAY</option> <option>DARKSLATEGRAY</option> <option>BLACK</option>
			                 </optgroup>
						 
										 
										 </select>
										 
								 </div><!----------col 2 inside form close-------->
								 </div><!----------row 1 inside form close-------->
								 
						         <div class="row"><!----------row 2 inside form start-------->
								 <div class="col-sm-12"><!----------col 1 inside form start--------><br>
								       <center><button type="submit" name="submit1" class="btn btn-warning">
									       <b><span class="glyphicon glyphicon-floppy-saved"></span> Change</b>
									   </button></center>
								 </div><!----------col 1 inside form close-------->
								 </div><!----------row 2 inside form close-------->
						   </form>
						   <?php
						         if(isset($_POST["submit"]) OR isset($_POST["submit1"]))
								 {
									 $color=$_POST["color"];
									 $sql="UPDATE settings SET value='$color' WHERE property='color' AND pageName='header.php'";
									 $result=$conn->query($sql);
									 if($result==TRUE)
									 {
										 ?>
										   <script src="alertify/js/alertify.js"></script>
										   <script>
										      $msg="<div class='alert alert-success'><b> Color Changed!!!....Go to Home Page.......</b></div>";
											  alertify.alert($msg);
										   </script>
										 <?php
									}
									 else
									 {
										 echo "div class='alert alert-danger'><b> error try Again!!!..</b></div>";
									 }
								 }
						   ?>
            </div><!----------------------------- panel body close----------------------------->
            </div><!----------------------------- panel close----------------------------->
            </div><!----------------------------- inside main panel col close----------------------------->
            </div><!----------------------------- inside main panel main row close----------------------------->
			
</div><!---panel body close here--->
</div><!---panel close here--->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
