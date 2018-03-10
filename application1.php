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
<table class="table table-hover table-condensed table borderd table-responsive"> 
<tr style="background-color:#454;color:white"><th>Sr. No.</th> <th>Name </th> <th>Father Name</th><th>Mother Name</th><th>DOB</th><th>Gender</th> 
<th>Address</th> <th>Course</th> <th>Mobile No.</th><th>Aadhaar No.</th><th>Marital Status</th><th>Qulification</th><th>Time</th><th>Status</th></tr>
<?php 
$sql1="SELECT * FROM application ORDER BY id DESC";
$result1=$conn->query($sql1);

$sr=1;
while($row1=$result1->fetch_assoc())
{
	   $mobile=$row1["mobile"];
	   $course=$row1["course"];
	   $name=$row1["name"];
	   $dob=$row1["dob"];
	   
	  $sql2="SELECT name,dob,course,mobile FROM student WHERE name='$name' AND dob='$dob' AND course='$course' AND mobile='$mobile'";
      $result2=$conn->query($sql2);
	  
	  $sql3="SELECT name,course,mobile FROM student WHERE name='$name' AND course!='$course' AND dob='$dob'";
      $result3=$conn->query($sql3);
	 
	  
	?>
	<tr style="font-weight:bold;font-family:Bauhaus 93">
	<td><?php echo $sr; ?></td>
	<td><?php echo $row1["name"];?></td>
	<td><?php echo $row1["fname"];?></td>
	<td><?php echo $row1["mname"];?></td>
	<td><?php echo $row1["dob"];?></td>
	<td><?php echo $row1["gender"];?></td>
	<td><?php echo $row1["address"];?></td>
	<td><?php echo $row1["course"];?></td>
	<td><?php echo $row1["mobile"];?></td>
	<td><?php echo $row1["aadhaar"];?></td>
	<td><?php echo $row1["mStatus"];?></td>
	<td><?php echo $row1["qulification"];?></td>
	<td><?php echo $row1["time"];?></td>
	<td>
	      <?php
		  if($row2=$result2->fetch_assoc())
		  {
			  ?>
			  <button class='btn btn-default'><b style='color:green'><span class="glyphicon glyphicon-check"></span></b></button>
		      <?php
		  }
		  else if($row3=$result3->fetch_assoc())
		  {
			  echo "<button class='btn btn-default'><b style='color:orange'><span class='glyphicon glyphicon-info-sign'></span></b></button>";
		  }
		  else
		  {
			  echo "<button class='btn btn-default'><b style='color:red'><span class='glyphicon glyphicon-unchecked'></span></b></button>";
		  }			  
		  ?>
	</td>
 	</tr>
	<?php
	$sr++;
}//while loop end here
?>
</table><!--- table close here--->
<ul class="list-group">
	            <li class="list-group-item">
				<b>Total Student:</b> <?php echo $sr-1;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				     <button type="button" class="btn btn-default" onclick="window.print()">
				       <span class="glyphicon glyphicon-print"></span>
					 </button>
				</li>
	  </ul>