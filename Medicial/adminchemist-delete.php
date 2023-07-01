<?php
	include "config.php";
	$sql="DELETE FROM `registration` WHERE id='$_GET[id]'";
	if ($conn->query($sql))
	header("location:adminchemistview.php");
	else
	echo "error";
?>