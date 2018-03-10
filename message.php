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
$sql3="SELECT * FROM message ORDER BY id DESC";
$result3=$conn->query($sql3);

while($row3=$result3->fetch_assoc())
{
?>
<hr>
<dl style="color:red;font-weight:bold;cursor:pointer">
<span class="glyphicon glyphicon-hand-right">
 <b><?php echo $row3["name"];?>
 <?php echo  $row3["mobile"];?>
 <?php echo  $row3["message"];?>
  <form action="moniter.php" method="post">
 <input type="hidden" name="mid" id="mid" value="<?php $mid=$row3["id"]; echo $mid;?>">
 <button type="submit" name="delete2" class="btn btn-warning" style="margin-top:10px;"><span class="glyphicon glyphicon-trash"></span></button>
 </form>
 </b>
 </dl>
 <hr>
<?php
}
?>

