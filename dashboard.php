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
Dashboard - Abhyas Academy Ellenabad
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
<body onload="ajax2()">
<!--------------------Header call here----------------->
<?php include 'header.php'; ?>
<div class="panel panel-default"><!--- panel start --->
<div class="panel-heading"><!--- panel body start --->
<b>Dashboard</b>
</div><!---panel heading close here--->
<div class="panel-body"><!--- panel body start --->
<?php 
$sql="SELECT * FROM admin WHERE id='$id'";
$result=$conn->query($sql);
if($row=$result->fetch_assoc())
{
?>
<div class="row">
<div class="col-sm-3">
<div class="panel panel-info">
<div class="panel-heading">
<b>
<center>Welcome <?php echo $row["name"]?>
&nbsp;
<button type="submit" onclick="window.open('logout.php','_self')" class="btn btn-warning"><span class="glyphicon glyphicon-log-out"> Logout</span></button>
</center>
</b>
</div><!--- panel heading close here--->
<div class="panel-body"><!--- panel body --->
<center><b>Profile info</b></center>
<div class="row">
<div class="col-sm-4">
<b>Name: </b>
</div><!--- col 1 close here--->
<div class="col-sm-8">
<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name']?>" disabled> </b>
</div><!---col 2 close here--->
</div><!--- inside row 1 close here--->
<div class="row">
<div class="col-sm-4">
<b>Login id: </b>
</div><!--- col 1 close here--->
<div class="col-sm-8">
<input type="email" name="l_id" id="l_id" class="form-control" value="<?php echo $row['u_id']?>" disabled> </b>
</div><!---col 2 close here--->
</div><!---inside row 2 close here--->
<div class="row">
<div class="col-sm-4">
<b>Password: </b>
</div><!--- col 1 close here--->
<div class="col-sm-8">
<form action='dashboard.php' method='post' class='form-group'>
<input type='hidden' name='passvalue' id='passvalue' value='0'>
<input type="password" name="password" id="password" class="form-control" value="<?php echo $row['password']?>" disabled> </b>
<button type='button' onclick='view()' value='0' class='btn btn' style='pointer:cursor;margin-top:10px;' title='View Password'>
<span class='glyphicon glyphicon-eye-open' id='eye'></span>		                      
</button>					   
</form>
<button type='button' onclick='changepass()' value='0' class='btn btn' style='pointer:cursor;' title='Change Password'>
<span class='glyphicon glyphicon-edit'></span>
</button>
                      
					      <form action="dashboard.php" method="post" class="form-group" name='form1' required style='width:200px'>
						    <input type="hidden" class="form-control" style="width:200" name='p' id='p' placeholder='Enter New Password' required>
						    <input type="hidden" class="form-control" style="width:200" id='pc' disabled>
						    <input type="hidden" class="form-control" style="width:200" id='captcha'placeholder='Enter above Number' required>
							   <div id='btn'>
							   </div>
                               <?php
                             
							 if(isset($_POST["pch"]))
							 {
							 $p=$_POST['p'];
                             $sql1="UPDATE admin SET password='$p' WHERE id='$id'";
                             $result1=$conn->query($sql1);
							 if($result1==TRUE)
							 {
								 echo "<div class='alert alert-success'><b>Password Changed Please Refresh Page!!!</b></div>";
							 }
							 else
							 {
								  echo "<div class='alert alert-warning'><b>error!!!</b></div>";
							 }		
							 }
					   ?>							   
						  </form>						    
</div><!---col 2 close here--->
   
 <hr>
	<!--------------------------------------------------Link's Start here-------------------------------------------------------->
	<li><span class="glyphicon glyphicon-hand-right"></span><a href="shortnoti.php" onclick="student()"><b> Short Notification</b></a></li>
	<li><span class="glyphicon glyphicon-hand-right"></span><a href="#" onclick="student()"><b> Student</b></a></li>
	<input type="hidden" id="sv" value="0">
	<div id="student"></div>
	</hr>
	<li><span class="glyphicon glyphicon-hand-right"></span><a href="thought.php"><b> Today's Thought</b></a></li>
	<li><span class="glyphicon glyphicon-hand-right"></span><a href="add topic.php"><b> Moniter Topic</b></a></li>
	<li><span class="glyphicon glyphicon-hand-right"></span><a href="#" onclick="menu()"><b> Notification</b></a></li>
	<input type="hidden" id="nv" value="0">
	<div id="menu">
	</div>
	<li><span class="glyphicon glyphicon-hand-right"></span><a href="reports.php"><b> Print Report's</b></a></li>
	<li><span class="glyphicon glyphicon-hand-right"></span><a href="settings.php"><b style="color:red"> <span class="glyphicon glyphicon-cog"></span> Settings</b></a></li>
	<hr>
</div><!---inside row 3 close here--->
</div><!--- panel body close here--->
</div><!---panel close here--->	
</div><!---col 1 close here--->	

<div class="col-sm-8">
<div class="panel panel-info">
<div class="panel-heading">
<b>Application Recieved For Admission</b>
</div><!---panel heading close here--->
<div class="panel-body" id="application">



</div><!--- panel body close here--->
<center>
<button type="button" onclick="window.print();">
<span class="glyphicon glyphicon-print"></span>
</button> 
</center>
<?php
if(isset($_POST["delete"]))
{
	$admission_id=$_POST["admission_id"];
	$sql2="DELETE FROM application WHERE id='$admission_id'";
	$result2=$conn->query($sql2);
	if($result2==TRUE)
	{
		?>
		<script src="alertify/js/alertify.js"></script>
		 <script>
		 var alert1="<div class='alert alert-warning'><h3>One Application Deleted!!! </h3></div><br><b>Please Don't Refresh Page</b>";
		 alertify.alert(alert1);
		 </script>
		<?php
	}		
	else
		{
			echo "<div class='alert alert-warning'><h3>error! try again!!! </h3></div>";
		}
}
?>
</div><!--- panel close here--->
</div><!--- col 2 close here>

</div><!---row close here--->	
<?php	
}
?><!--- if close here--->
</div><!---panel body close here--->
</div><!---panel close here--->
<!--------------------Follow us call here-------------->
<?php include 'follow.php';?>
<!--------------------footer call here----------------->
<?php include 'footer.php' ?>
</body>
</html>
<script src="alertify/js/alertify.js"></script>
<script src="application.js"></script><!---ajax file--->
<script> 
function view()
{
	  var passvalue=document.getElementById('passvalue').value;
	  if(passvalue==0)
	  {
		  document.getElementById('password').setAttribute('type','text');
		  document.getElementById('passvalue').value=1;
		  document.getElementById('eye').setAttribute('class','glyphicon glyphicon-eye-close');
	  }
	  else 
	  {
		 document.getElementById('password').setAttribute('type','password');
		  document.getElementById('passvalue').value=0;
		  document.getElementById('eye').setAttribute('class','glyphicon glyphicon-eye-open');
	  }
}
 
   function changepass()
   {
	    var a=Math.floor(Math.random()*100000+1);
		document.getElementById('pc').value=a;
	    var a=document.getElementById('p').setAttribute('type','text');
	    var b=document.getElementById('pc').setAttribute('type','tel');
	    var c=document.getElementById('captcha').setAttribute('type','text');
	    
		document.getElementById('btn').innerHTML="<button type='submit' onclick='btnsub()' name='pch' class='btn btn-primary'><span class='glyphicon glyphicon-saved'></span></button>";
	
	    
   }
   function btnsub()
		{ 
			var pc=document.getElementById('pc').value;
			var p=document.getElementById('p').value;
			var d=document.getElementById('captcha').value;
			
		if(d!=pc)			
		{

		      alertify.alert('Enter Correct Number!!!');
			  
		}
		  else
		  {
			  document.forms[0].submit();
			  alertify.log('Password Changed!!!');
		  }
		}
		function menu()
		{
			var nv=document.getElementById('nv').value;
			var a="<b><li><a href='moniter.php' style='color:indigo'>Moniter Notification</a></li><li><a href='addnoti.php' style='color:indigo'>Add New Notification</a></li></b>";
            if(nv==0)
			{
				document.getElementById('menu').innerHTML=a;
			    document.getElementById('nv').value=1;
			}
			else if(nv==1)
			{
				document.getElementById('menu').innerHTML="";
				document.getElementById('nv').value=0;
			}
		}
		function student()
		{
			var nv=document.getElementById('sv').value;
			var a="<b><li><a href='add student.php' style='color:indigo'>Add New Student</a></li><li><a href='search student.php' style='color:indigo'>Search Student</a></li><li><a href='update student.php' style='color:indigo'>Update Record</a><li><a href='fee.php' style='color:indigo'>Fee Management</a></li><li><a href='list.php' style='color:indigo'>Search Unique id</a></li></b>";
            if(nv==0)
			{
				document.getElementById('student').innerHTML=a;
			    document.getElementById('sv').value=1;
			}
			else if(nv==1)
			{
				document.getElementById('student').innerHTML="";
				document.getElementById('sv').value=0;
			}
		}
</script>