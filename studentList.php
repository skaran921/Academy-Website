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
Student List- Abhyas Academy Ellenabad
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
<link href="images/logo.jpg" rel="icon">
<link href="alertify/css/alertify.css" rel="stylesheet" id="alertifyCSS">
<link href="css/header.css" rel="stylesheet">
<link href="css/time.css" rel="stylesheet">
</head>
<body>
<div class="row"><!------row start------>
<div class="col-sm-2" style="margin-top:10px;"><!------col start------>
<a href="index.php">
<img src="images/logo.jpg" style="margin-top:20px;margin-left:30px;">
</a>
</div>
<div class="col-sm-2" style="margin-top:10px"><!----------col 2 start --------------> 
<div id="time"></div>
</div><!-------col 1 close------->
</div><!-------row1 close------->

<div class="row"><!--------row 2 start------------>
<div class="col-sm-1">
</div>
     <form action="studentList.php" method="post" class="form-group"><!-----------------form----------------->
  <div class="col-sm-3" style="margin-left:17px;margin-top:7px;">
     	   <select  name="colname" id="colname" class="form-control" required onchange="change()">
	      <option>Select a Option</option>
	      <option>uid</option><option>id</option><option>name</option><option>fname</option><option>mname</option><option>dob</option><option>gender</option>
		    <option>city</option><option>address</option>course<option>mobile</option><option>aadhaar</option><option>mStatus</option>
			<option>qulification</option> <option>tfee</option>
		   <option>session</option><option>month</option><option>time</option>
	   </select>
  </div><!------col 1 close here------>
  <div class="col-sm-3" style="margin-left:17px;margin-top:7px;">
        <input type="text" name="colvalue" id="colvalue" class="form-control" placeholder="Please Enter Value" required>
  </div>
  <div class="col-sm-3" style="margin-top:7px;">
        <button type="submit" name="submit" class="btn btn-default" onclick="validateform()">
		   <span class="glyphicon glyphicon-search"></span>
		</button>
  </div>
  </form>
</div>
<?php  #main php start
if(isset($_POST["submit"]))
{
	$colname=$_POST["colname"];
	$colvalue=$_POST["colvalue"];
	?>
  <div class="container">
  <br>
  <button type="button" class="btn btn-danger" onclick="window.print()"><span class="glyphicon glyphicon-print"></span></button>
  <table class="table table-hover table-condensed table borderd table-responsive" style="margin-top:10px">
  <tr style="color:white;background-color:#345;">
  <th>SR. No.</th><th>ID</th><th>Name</th><th>Father Name</th><th>Mother Name</th><th>DOB</th><th>Gender</th><th>City</th><th>Address</th><th>Course</th>
  <th>Mobile</th> <th>Aadhaar No.</th><th> Marital Status</th><th>Qulification Fee</th><th>Course Fee</th><th>Session</th><th>Time</th>
  </tr>
  <?php
            $sql="SELECT * FROM student WHERE $colname LIKE '%$colvalue%' ORDER BY name";
			$result=$conn->query($sql);
			$x=1;
			$total_fee0=0;
			while($row=$result->fetch_assoc())
			{
				$tfee=$row["tfee"];
				$total_fee0=$total_fee0+$tfee;
				?>
				<tr style="font-weight:bold;font-family:Bauhaus 93">
             <td><?php echo $x;?></td><td><?php echo $row["id"];?></td><td><?php echo $row["name"];?></td><td><?php echo $row["fname"];?></td>
			 <td><?php echo $row["mname"];?></td>
			 <td><?php echo date("d-m-Y",strtotime($row["dob"]));?></td><td><?php echo $row["gender"];?></td><td><?php echo $row["city"];?></td>
			 <td><?php echo $row["address"];?></td>
			 <td><?php echo $row["course"];?></td><td><?php echo $row["mobile"];?></td><td><?php echo $row["aadhaar"];?></td><td><?php echo $row["mStatus"];?></td>
			 <td><?php echo $row["qulification"];?></td>	 <td><?php echo $row["tfee"];?></td>
			 <td><?php echo $row["month"].",".$row["session"];?></td><td><?php echo $row["time"];?></td>
				</tr>
				<?php
			  $x++;
			}
	  ?>
  </table>
  <ul class="list-group">
	            <li class="list-group-item">
				<b>Total Student:</b> <?php echo $x-1;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total Admission Fee:</b> <?php echo $total_fee0;?>
				     <button type="button" class="btn btn-default" onclick="window.print()">
				       <span class="glyphicon glyphicon-print"></span>
					 </button>
				</li>
	  </ul>
  </div><!-------------container close --------------------->
  <?php
}    #if isset close
  ?>
</body>
</html>
<script src="js/time.js"></script>
<script src="alertify/js/alertify.js"></script>
<script>
   function change()
   {
	   var input1=document.getElement.ById("colname").value;
	   alertify.alert("alert");
	    
   }
   
   function validateform()
   {
	   var error1="<b>Please Select Option!!!</b>"; 
	   var error2="<b>Please Enter Value!!!</b>"; 
	   var input1=document.getElement.ById("colname").value;
	   var input2=document.getElement.ById("colvalue").value;
	   if(input1="Select a Option")
	   {
		   alertify.alert(error1);
	   }
	   else if(input2=="")
	   {
		    alertify.alert(error2);
	   }
	   else
	   {
		   document.forms[0].submit();
	   }
   }
</script>