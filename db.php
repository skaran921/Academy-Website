<?php
$conn=new mysqli("localhost","root","","abhyas");
if(!$conn)
{
	die("Connection Failed!!!".mysqli_connect_error());
}
?>