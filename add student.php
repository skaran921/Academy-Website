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
Add New Student - Abhyas Academy Ellenabad
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
<div class="panel panel-default"><!--- panel start --->
<div class="panel-heading" style="background-color:green;color:white;"><!--- panel body start --->
<h4><b>Add New Student Record</b> <input type="button" value="Dashboard" class="btn btn-danger" onclick="window.open('dashboard.php','_selef')"></h4>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->

<form action="add student.php" method="post">
<div class="row">
<div class="col-sm-2">
<label>Name:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required>
</div><!---col1 close here--->
</div><!---1 row close here--->
<div class="row">
<div class="col-sm-2">
<label>Father Name:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Father Name" required>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Mother Name:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="text" name="mname" id="mname" class="form-control" placeholder="Enter Mother Name" required>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-2">
<label>D.O.B:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="date" name="dob" id="dob" class="form-control" required>
</div><!---col1 close here--->
</div><!---3 row close here--->


<div class="row">
<div class="col-sm-2">
<label>Gender:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="gender" id="gender"  class="form-control" required>
<option></option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div><!---col1 close here--->
</div><!---4 row close here--->

<div class="row">
<div class="col-sm-2">
<label>City Village:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="text" name="city" id="city" class="form-control" placeholder="Enter City/Village Name" required>
</div><!---col1 close here--->
</div><!---5 row close here--->



<div class="row">
<div class="col-sm-2">
<label>Resident Address:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<textarea name="address" id="address" class="form-control" placeholder="Enter Your Full Address" required>
</textarea>
</div><!---col1 close here--->
</div><!---4 row close here--->
<div class="row">
<div class="col-sm-2">
<label>Select Course:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="course" id="course"  class="form-control" required>
<option></option>
<option>HS-CIT</option>
<option>PMKVY</option>
<option>Basic Computer</option>
<option>Internet</option>
<option>Basic Website Developement</option>
<option>Tally</option>
<option>Spoken English</option>
<option>Typing Course</option>
<option>Other</option>
</select>
</div><!---col1 close here--->
</div><!---3 row close here--->
<div class="row">
<div class="col-sm-2">
<label>Mobile No.:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile No." required>
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Aadhaar No.:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="number" name="aadhaar" id="aadhaar" class="form-control" placeholder="Enter Aadhaar No." maxlength="12" required>
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Marital Status.:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="mStatus" id="mStatus" class="form-control" required>
        <option></option>
        <option>Married</option>
        <option>Unmarried</option>		
</select>
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Qulification.:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="qulification" id="qulification" class="form-control" required>
        <option></option>
        <option>Below 8th</option><option>8th</option><option>9th</option><option>10th</option><option>11th</option><option>12th</option>
		<option>B.A.</option><option>BCA</option><option>BBA</option><option>B.Com.</option><option>B.Sc.</option>
		<option>Post Graduation</option>
        </select>
</div><!---col1 close here--->
</div><!---1 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Total Course Fee:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="number" name="tfee" id="tfee" class="form-control" placeholder="Enter Total Course Fee" required>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Fee Recieved:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="number" name="rfee" id="rfee" class="form-control" placeholder="Enter Fee Recieved at the time of admission" required>
</div><!---col1 close here--->
</div><!---2 row close here--->

<div class="row">
<div class="col-sm-2">
<label>Select Session:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="session" id="session"  class="form-control" required>
<option></option>
<?php
$y1=2000;
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
<div class="col-sm-2">
<label>Select Admisson Month:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<select name="month" id="month"  class="form-control" required>
<option></option>
<option>Jan</option> <option>Feb</option> <option>Mar</option> <option>Apr</option> <option>May</option> <option>Jun</option> 
<option>Jul</option> <option>Aug</option> <option>Sep</option> <option>Oct</option> <option>Nov</option> <option>Dec</option>

</select>
</div><!---col1 close here--->
</div><!---3 row close here--->

<div class="col-sm-2">
</div>
<div class="col-sm-5">
<button type="submit" name="submit" id="submit" class="btn btn-primary" value="Save" style="margin-top:10px;background-color:wheat;color:indigo;font-weight:bold;" onclick="validateform()" >Save</button>
</div>
</div>
</form>
<!------------------------------------------------php start here---------------------------------------->
<?php 
							     if(isset($_POST["submit"]))
								 {
									 
									 $name=$_POST["name"];
									 $fname=$_POST["fname"];
									 $mname=$_POST["mname"];
									 $dob=$_POST["dob"];
									 $gender=$_POST["gender"];
									 $city=$_POST["city"];
									 $address=$_POST["address"];
									 $course=$_POST["course"];
									 $mobile=$_POST["mobile"];									 
							         $aadhaar=$_POST["aadhaar"];
									 $mStatus=$_POST["mStatus"];
									 $qulification=$_POST["qulification"];
									 $tfee=$_POST["tfee"];
									 $rfee=$_POST["rfee"];
									 $session=$_POST["session"];
									 $month=$_POST["month"];
									 $num0=(rand(10,100));
									 $num2=(rand(100,1000));
									 $num3=time();
									 $uid=$num0.$num2.$num3;
									 $sql="INSERT INTO student(name,fname,mname,dob,gender,city,address,course,mobile,aadhaar,mStatus,qulification,tfee,rfee,session,month,uid) VALUES('$name','$fname','$mname','$dob','$gender','$city','$address','$course','$mobile','$aadhaar','$mStatus','$qulification','$tfee','$rfee','$session','$month','$uid')";
									 $sql1="INSERT INTO afee(afee,uid)VALUES('$rfee','$uid')";
									 $result=$conn->query($sql);
									 $result1=$conn->query($sql1);
									 if($result==TRUE)
									 {
										 ?>
										 <script src="alertify/js/alertify.js"></script>
										  <script>
										  var x="<li><div class='alert alert-success'><b>1 Student Record Saved!!!.</li><li><br>Please Don't Refresh Page</b></div></li>";
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
							  
</div><!---panel body close here--->
</div><!---panel close here--->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
<script>
function validateform()
{
	var name=document.getElementById('name').value;
	var fname=document.getElementById('fname').value;
	var mname=document.getElementById('mname').value;
	var gender=document.getElementById('gender').value;
	var address=document.getElementById('address').value;
	var course=document.getElementById('course').value;
	var mobile=document.getElementById('mobile').value;
	var dob=document.getElementById('dob').value;
	var city=document.getElementById('city').value;
	var tfee=document.getElementById('tfee').value;
	var rfee=document.getElementById('rfee').value;
	var session=document.getElementById('session').value;
	var month=document.getElementById('month').value;
	var aadhaar=document.getElementById('aadhaar').value;
	var mStatus=document.getElementById('mStatus').value;
	var qulification=document.getElementById('qulification').value;
	var error1="<h4><li><div class='alert alert-info'><b>Please Enter Name</b></div></li></h4>";
	var error2="<h4><li><div class='alert alert-info'><b>Please Enter Father Name</b></div></li></h4>";
	var error3="<h4><li><div class='alert alert-info'><b>Please Select Gender</b></div></li></h4>";
	var error4="<h4><li><div class='alert alert-info'><b>Please Enter Address</b></div></li></h4>";
	var error5="<h4><li><div class='alert alert-info'><b>Please Select Course</b></div></li></h4>";
	var error6="<h4><li><div class='alert alert-info'><b>Please Enter Mobile No.</b></div></li></h4>";
	var error7="<h4><li><div class='alert alert-info'><b>Please Enter Date of Birth</b></div></li></h4>";
	var error8="<h4><li><div class='alert alert-info'><b>Please Enter City/Village Name </b></div></li></h4>";
	var error9="<h4><li><div class='alert alert-info'><b>Please Enter Total Fee of Course</b></div></li></h4>";
	var error10="<h4><li><div class='alert alert-info'><b>Please Enter Recieved Fee of Course</b></div></li></h4>";
	var error11="<h4><li><div class='alert alert-info'><b>Please Select Admisson Session</b></div></li></h4>";
	var error12="<h4><li><div class='alert alert-info'><b>Please Select Admisson Month</b></div></li></h4>";
	var error13="<h4><li><div class='alert alert-info'><b>Please Enter Mother Name</b></div></li></h4>";
	var error14="<h4><li><div class='alert alert-info'><b>Please Enter Aadhaar No.</b></div></li></h4>";
	var error15="<h4><li><div class='alert alert-info'><b>Please Select Marital Status</b></div></li></h4>";
	var error16="<h4><li><div class='alert alert-info'><b>Please Select Qulification</b></div></li></h4>";
	
	
	if(name=="" ||name=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error1);
		document.getElementById("name").focus();
		return false;
	}
	else if(fname=="" ||fname=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error2);
		document.getElementById("fname").focus();
		return false;
	}
	else if(mname=="" ||mname=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error13);
		document.getElementById("mname").focus();
		return false;
	}
	else if(dob=="" ||dob=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error7);
		document.getElementById("dob").focus();
		return false;
	}
	else if(gender=="" ||gender=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error3);
		document.getElementById("gender").focus();
		return false;
	}
	else if(city=="" ||city=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error8);
		document.getElementById("city").focus();
		return false;
	}
	else if(address=="" ||address=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error4);
		document.getElementById("address").focus();
		return false;
	}
		else if(course=="" || course=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error5);
		document.getElementById("course").focus();
		return false;
	}
	else if(isNaN(mobile) ||mobile<=0)
	{
		alertify.closeLogOnClick(true);
		alertify.error(error6);
		document.getElementById("mobile").focus();
		return false;
	}
	else if(isNaN(aadhaar) ||aadhaar<=0)
	{
		alertify.closeLogOnClick(true);
		alertify.error(error14);
		document.getElementById("aadhaar").focus();
		return false;
	}
	
	else if(mStatus=="" ||mStatus=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error15);
		return false;
	}
	
	else if(qulification=="" || qulification=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error16);
		return false;
	}
	else if(tfee=="" ||tfee=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error9);
		document.getElementById("tfee").focus();
		return false;
	}
	else if(rfee=="" ||rfee=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error10);
		document.getElementById("rfee").focus();
		return false;
	}
	else if(session=="" || session=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error11);
		document.getElementById("session").focus();
		return false;
	}
	else if(month=="" || month=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error12);
		document.getElementById("month").focus();
		return false;
	}
	else
	{
		document.forms[0].submit();
	}
}
</script>