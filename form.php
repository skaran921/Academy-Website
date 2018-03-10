<!DOCTYPE html>
<htmL>
<title>
Admission Form-Apply Online
</title>
  <meta name="author" content="skaran921,karan soni">
  <meta name="keyword" content="aaellenabad,Abhyas Academy Ellenabad,skaran921,Admission ">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!------meta tag------>
<!----------------------Bootstrap Files--------------------------->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<!---------------------css Files------------------>
<link href="logo.jpg" rel="icon">
<link href="alertify/css/alertify.css" rel="stylesheet" id="alertifyCSS">
<link href="css/header.css" rel="stylesheet">
</head>
<body>
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
<b>Admission Form</b>
</div>
<div class="panel-body">
<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font><font color="green"><b> Please Fill Correct Information in This Form</b></font><br>
<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font><font color="green">
<b>Plz Don't Refresh Page After Submit Form Successfully</u> </b></font><br>
<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font><font color="green">
<b>Any Technical OR Other Problem Regarding This Form Contact us From <u>Above "<a href="contact.php">Contact Us</a>" Menu</u> </b></font>
<form action="" method="post" class="form-group" id="myForm">
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
<label>DOB:<font color="red"><span class="glyphicon glyphicon-asterisk"></span></font> </label>
</div><!---col1 close here--->
<div class="col-sm-5">
<input type="date" name="dob" id="dob" class="form-control" required>
</div><!---col1 close here--->
</div><!---2 row close here--->

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
</div><!---3 row close here--->
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
<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile No." maxlength="10" required>
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

<div class="col-sm-2">
</div>
<div class="col-sm-5">
<input type="submit" name="submit" id="submit" class="btn btn-primary" style="margin-top:10px;" onclick="validateform()" >
</div>
</div>
</form>
<!------------------------------------------------php start here---------------------------------------->
<?php 
							     if(isset($_POST["submit"]))
								 {
									 include 'db.php';
									 $name=$_POST["name"];
									 $fname=$_POST["fname"];
									 $mname=$_POST["mname"];
									 $dob=$_POST["dob"];
									 $gender=$_POST["gender"];
									 $address=$_POST["address"];
									 $course=$_POST["course"];
									 $mobile=$_POST["mobile"];
									 $aadhaar=$_POST["aadhaar"];
									 $mStatus=$_POST["mStatus"];
									 $qulification=$_POST["qulification"];
									 $sql="INSERT INTO application(name,fname,mname,dob,gender,address,course,mobile,aadhaar,mStatus,qulification) VALUES('$name','$fname','$mname','$dob','$gender','$address','$course','$mobile','$aadhaar','$mStatus','$qulification')";
									 $result=$conn->query($sql);
									 if($result==TRUE)
									 {
										 ?>
										 <script src="alertify/js/alertify.js"></script>
										 <script>
										 var x="<b>Your Application Submit...We Contact on Your Mobile No. Shortly...</b>";
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
</div><!---container close here--->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
<style>
input,select,textarea
{
	margin-top:7px;
}
</style>
</html>
<script src="alertify/js/alertify.js"></script>
<script>
function validateform()
{
	var name=document.getElementById('name').value;
	var fname=document.getElementById('fname').value;
	var mname=document.getElementById('mname').value;
	var dob=document.getElementById('dob').value;
	var gender=document.getElementById('gender').value;
	var address=document.getElementById('address').value;
	var course=document.getElementById('course').value;
	var mobile=document.getElementById('mobile').value;
	var aadhaar=document.getElementById('aadhaar').value;
	var mStatus=document.getElementById('mStatus').value;
	var qulification=document.getElementById('qulification').value;
	var error1="<b>Please Enter Name</b>";
	var error2="<b>Please Enter Father Name</b>";
	var error7="<b>Please Enter Mother Name</b>";
	var error8="<b>Please Enter Date of Birth</b>";
	var error3="<b>Please Select Gender</b>";
	var error4="<b>Please Enter Address</b>";
	var error5="<b>Please Select Course</b>";
	var error6="<b>Please Enter Mobile No.</b>";
	var error9="<b>Please Enter Aadhaar No.</b>";
	var error10="<b>Please Select Marital Status</b>";
	var error11="<b>Please Select Qulification</b>";
	
	
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
		alertify.error(error7);
		document.getElementById("mname").focus();
		return false;
	}
	else if(dob=="" ||dob=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error8);
		document.getElementById("dob").focus();
		return false;
	}
	else if(gender=="" || gender=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error3);
		document.getElementById("gender").focus();
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
		alertify.error(error9);
		document.getElementById("aadhaar").focus();
		return false;
	}
	
	else if(mStatus=="" ||mStatus=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error10);
		return false;
	}
	
	else if(qulification=="" || qulification=="null")
	{
		alertify.closeLogOnClick(true);
		alertify.error(error11);
		return false;
	}
	
}
</script>
