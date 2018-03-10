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
All Student List- Abhyas Academy Ellenabad
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
<div class="col-sm-3" style="margin-top:10px;"><!------col start------>
<a href="index.php">
<img src="images/logo.jpg" style="margin-top:20px;margin-left:30px;">
</a>
</div>
<div class="col-sm-4" style="margin-top:10px"><!----------col 2 start --------------> 
<div id="time"></div>
</div><!-------col 1 close------->
</div><!-------row1 close------->

  <div class="container">
  <br>
  <button type="button" class="btn btn-danger" onclick="window.print()"><span class="glyphicon glyphicon-print"></span></button>
  <table class="table table-hover table-condensed table borderd table-responsive" style="margin-top:10px">
  <tr style="color:white;background-color:orange">
  <th>SR. No.</th><th>ID</th><th>Name</th><th>Father Name</th><th>Mother Name</th><th>DOB</th><th>Gender</th><th>City</th><th>Address</th><th>Course</th>
  <th>Mobile</th><th>Aadhaar No.</th><th>Marital Status</th><th>Qulification</th><th>Admission Fee</th>
  </tr>
  <?php
            $sql="SELECT * FROM student ORDER BY name";
			$result=$conn->query($sql);
			$x=1;
			$total_fee0=0;
			while($row=$result->fetch_assoc())
			{
				$tfee=$row["tfee"];
				$total_fee0=$total_fee0+$tfee;
				?>
				<tr style="font-weight:bold;font-family:Bauhaus 93">
             <td><?php echo $x;?></td><td><?php echo $row["id"];?></td><td><?php echo $row["name"];?></td><td><?php echo $row["fname"];?></td><td><?php echo $row["mname"];?></td>
			 <td><?php echo date("d-m-Y",strtotime($row["dob"]));?></td><td><?php echo $row["gender"];?></td><td><?php echo $row["city"];?></td><td><?php echo $row["address"];?></td>
			 <td><?php echo $row["course"];?>
			 </td><td><?php echo $row["mobile"];?><td><?php echo $row["aadhaar"];?></td><td><?php echo $row["mStatus"];?></td><td><?php echo $row["qulification"];?></td>
			 </td><td><?php echo $row["tfee"];?></td>
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
</body>
</html>
<script src="js/time.js"></script>