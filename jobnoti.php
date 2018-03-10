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
$sql2="SELECT * FROM job_notification ORDER BY id DESC";
$result2=$conn->query($sql2);

while($row2=$result2->fetch_assoc())
{
?>
<hr>
<dl style="color:indigo">
<span class="glyphicon glyphicon-hand-right">
 <b><?php $odate=$row2["odate"]; echo date("d-m-y",strtotime($odate));?>
 <?php echo  $row2["notification"];?>
 <?php $cdate=$row2["cdate"];echo date("d-m-y",strtotime($cdate));?>
 <form action="moniter.php" method="post">
 <input type="hidden" name="id2" id="id2" value="<?php $id2=$row2["id"]; echo $id2;?>">
 <button type="submit" name="delete" class="btn btn-warning" style="margin-top:10px;"><span class="glyphicon glyphicon-trash"></span></button>
 </form>

 
 
 </b>
 </dl>
 <hr>
<?php
}
?>

