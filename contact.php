<!DOCTYPE html>
<htmL>
<title>
Contact - Abhyas Academy Ellenabad
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
<div class="panel panel-info">
<div class="panel-heading">
<b>Contact us</b>
</div><!--panel heading close here--->
<div class="panel-body">
<div class="row">
<div class="col-sm-6">
<li><b style="color:orange"><span class="glyphicon glyphicon-hand-right"></span></b>
<b style="color:black"> Address:</b><b style="color:primary">BAGICHI DHAAM, NOHAR ROAD ELLENABAD </b></li>
<li><b style="color:orange"><span class="glyphicon glyphicon-hand-right"></span></b>
<b style="color:black"> Mobile No.:</b><b style="color:primary"> 98968-31507</b></li>
<li><b style="color:orange"><span class="glyphicon glyphicon-hand-right"></span></b>
<b style="color:black"> E-Mail:</b><b style="color:primary">abhyasenb@gmail.com</b></li>
<li><b style="color:orange"><span class="glyphicon glyphicon-hand-right"></span></b>
<b style="color:black"> Telephone:</b><b style="color:primary">01698-220084</b></li>
<center>
<b>About Developer<sub>Click on below button</sub><h1><span class="glyphicon glyphicon-hand-down"></span></h1></b>
<input type="button" onclick="aboutd()" class="btn btn-warning" value="About">
</center>
</div><!---col 1 close here--->

<div class="col-sm-6">
<div class="panel panel-danger">
<div class="panel-heading">
<b>if You have Any Problem/Complaint/Suggestion Send us Message From here</b>
</div><!--panel heading close here--->
<div class="panel-body">
                 <form action="contact.php" method="post" class="form-group">
				          					  
						  <div class="row">
				          <div class="col-sm-3">
						         <label>Name:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font></label>
						  </div><!---col1 close here--->                          		  
                          <div class="col-sm-6">
						  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required>
						  </div><!---col1 close here--->							  
						  </div><!---row1 close here--->
						  
						  <div class="row">
				          <div class="col-sm-3">
						         <label>Mobile No.:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font></label>
						  </div><!---col1 close here--->                          		  
                          <div class="col-sm-6">
						  <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter Your Mobile No." required>
						  </div><!---col2 close here--->							  
						  </div><!---row2 close here--->
						  
						  <div class="row">
				          <div class="col-sm-3">
						         <label>Your Message:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font></label>
						  </div><!---col1 close here--->                          		  
                          <div class="col-sm-6">
						  <textarea name="message" id="message" class="form-control" placeholder="Write Your Suggestion/Complaint/Problem here" required></textarea>
						  </div><!---col2 close here--->							  
						  </div><!---row2 close here--->
						  
						  <div class="row">
				          <div class="col-sm-9">
						  <center><input type="submit" name="send" value="Send" class="btn btn-success" style="margin-top:10px" onclick="validatef1()"></center>
						  </div><!---col1 close here--->							  
						  </div><!---row3 close here--->
                 </form>
				 <?php
				 include 'db.php';
				 if(isset($_POST["send"]))
				 {
					$name=$_POST["name"]; 
					$mobile=$_POST["mobile"]; 
					$message=$_POST["message"]; 
				    $sql="INSERT INTO message(name,mobile,message)VALUES('$name','$mobile','$message')";
					$result=$conn->query($sql);
					if($result==TRUE)
					{
						?>
						<script src="alertify/js/alertify.js"></script>
						<script>
						 $n="<li><div class='alert alert-primary'><b>Your Message Send Successfuly</b></div></li>";
						 $p="<li><div class='alert alert-success'><b>Thank You For Your Suggestion</b></div></li>";
						 alertify.alert($n+$p)
						</script>
						
						<?php
					}
					else
					{
						echo"<div class='alert alert-primary'>error! try again!!!</div></li>";
					}
					
				 }
				 ?>
</div><!--panel body close here--->
</div><!---panel close here--->
</div><!---col2 close here--->

</div><!---row close here--->
</div><!--panel body close here--->
</div><!---panel close here--->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
<script>
function validatef1()
{
	var name=document.getElementById('name').value;
	var mobile=document.getElementById('mobile').value;
	var message=document.getElementById('message').value;
	error1="<h3><div class='alert alert-warning'>Please Enter Name!!!</h3>";
	error2="<h3><div class='alert alert-danger'>Please Enter Mobile No.!!!</h3>";
	error3="<h3><div class='alert alert-danger'>Please Write Message!!!</h3>";
	if(name=="")
	{
		alertify.log(error1);
		return false;
	}
	else if(isNaN(mobile) || mobile<=0)
	{
		alertify.log(error2);
		document.getElementById('mobile').focuse();
		return false;
	}
	else if(message=="")
	{
		alertify.log(error3);
		document.getElementById('message').focuse();
		return false;
	}
	else
	{
		document.forms[0].submit();
	}
	
}
</script>
<script>
function aboutd()
{
	var x="<div class='alert alert-info'><li><b><span class='glyphicon glyphicon-hand-right'> </span> Name: Karan Soni</b></li></div>";
	var y="<div class='alert alert-success'><li><b><span class='glyphicon glyphicon-hand-right'> </span> E-Mail: skaran921@gmail.com</b></li></div>";
	var z="<div class='alert alert-warning'><li><b><span class='glyphicon glyphicon-hand-right'> </span> Mobile: 9466067763</b></li></div><br><br>	";
	var a="<div class='alert alert-danger'><li><b><span class='glyphicon glyphicon-hand-right'> </span> Address: Ward No.7,Near Data Hari Shaha Aashram,Mameran Road Ellenabad,Sirsa(Haryana)</b></li></div>";
	alertify.alert(x+y+z+a);
}
</script>