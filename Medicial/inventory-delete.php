<?php
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM `meds` where `MED_ID`='$id'";
if ($conn->query($sql))
	header("location:inventory-view.php");
else
	echo "error";
