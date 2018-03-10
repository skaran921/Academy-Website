
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
$sql1="SELECT * FROM academy_notification ORDER BY id DESC";
$result1=$conn->query($sql1);

while($row1=$result1->fetch_assoc())
{
?>
<hr>
<dl style="color:indigo">
<span class="glyphicon glyphicon-hand-right">
 <b><?php $date=$row1["date"]; echo date("d-m-y",strtotime($date));?>
 <?php echo  $row1["notification"];?>
 <form action="moniter.php" method="post">
 <input type="hidden" name="id1" id="id1" value="<?php $id1=$row1["id"]; echo $id1;?>">
 <button type="submit" name="delete1" class="btn btn-warning" style="margin-top:10px;"><span class="glyphicon glyphicon-trash"></span></button>
 </form>
 </b>
 </dl>
 <hr>
<?php
}
?>