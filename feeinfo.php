<?php
session_start();
if(isset($_POST["search"]))
{
	$id=$_POST["search"];
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
</head>
<title>
Fee Management - Abhyas Academy Ellenabad
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
<?php include 'header.php'; ?>
<div class="panel panel-default">
<div class="panel-heading" style="background-color:#433;color:white;">
<b>View Fee Info</b>
</div><!---------panel-heading close here----------->
<div class="panel-body">

		<?php
		if(isset($_POST["find"]))
		{
			$uid=$_POST["search"];
			$sql1="SELECT uid,name,fname,tfee,rfee,session,month FROM student WHERE uid='$uid'";
			$sql2="SELECT * FROM fee WHERE uid='$uid'";
			$sql3="SELECT * FROM afee WHERE uid='$uid'";
			$sql4="SELECT fee from fee WHERE uid='$uid'";
            $result1=$conn->query($sql1);			
            $result2=$conn->query($sql2);
            $result3=$conn->query($sql3);
            $result4=$conn->query($sql4);
             if($row1=$result1->fetch_assoc())
			 {     
		           ?>
		 <div class='row'>
		 <div class='col-sm-7'>
				     <div class="" style="margin-left:10px;margin-right:10px;"><!--------------for table ------------------->
				    <table class="table table-responsive table-bordered table-hover" style="cursor:pointer;" style="">
					
					<tr style="background-color:indigo;color:white;">
					<th>id:<?php echo $row1["uid"];?></th><th>Name: <?php echo $row1["name"];?></th><th>Father Name: <?php echo $row1["fname"];?></th>
					</tr>
					
					<tr style="background-color:#131;color:white;">
					<th>Date</th><th>Course Fee</th><th>Fee Received</th>
					</tr>			
					
					
				   <?php
				  echo "<tr><th>".$row1['month'].", ".$row1['session']." <font color='red'><span class='glyphicon glyphicon-asterisk'></span>(Session)</font></th><th>".$row1['tfee']."</th><th</th></tr>";
				  if($row3=$result3->fetch_assoc())
				  {
				  echo "<tr><th>".date("d-m-y",strtotime($row3['time']))."</th><th></th><th>".$row3['afee']."<font color='red'><span class='glyphicon glyphicon-asterisk'></span>(Recd. at Admission Time)</font></th><th</th></tr>";
				  }
				  while($row2=$result2->fetch_assoc())
				  {
					  $date2=$row2["time"];
					  echo "<tr><th>".date("d-m-y",strtotime($date2))."</th><th></th><th>".$row2['fee']."</th></tr>";
				  }
				         $sum=0;
						 $sum=$sum+$row3["afee"];
						While($row4=$result4->fetch_assoc())
						 {
							 $sum=$sum+$row4["fee"];
						 }
				       echo "<tr style='color:green'><th colspan='2'>Total Fee Received</th><th>".$sum."<font color='red'><span class='glyphicon glyphicon-asterisk'></span>(Total Fee Recieved)<h4><span class='glyphicon glyphicon-hand-up'></span></h3></font></th></tr>";
					
					   if($diff=$row1['tfee']-$sum==0)
					   {
						    echo "<tr style='color:red'><th colspan='2'>Remaning Fee</th><th>NILL</th></tr>";
					   }
					   else
					   {
				       echo "<tr style='color:red'><th colspan='2'>Remaning Fee</th><th>".$fr=$row1['tfee']-$sum."</th></tr>";
			           }
			}

		
             else
			 {
				 echo "<div class='alert alert-warning'><b>Sorry!!! Not Match Found</b></div>";
			 }				 
		}
		?>
		</table>
		<center><button class="btn btn-primary" onclick="window.print()"><span class="glyphicon glyphicon-print"></span></button></center>
		</div>
		
		</div><!---------panel-body close here----------->
</div><!---------panel close here----------->
</div><!---------col close here----------->
</div><!---------row close here----------->