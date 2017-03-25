<?php
include("include/session.php");

if(!$session->logged_in){
	header("Location: process.php");exit;
}


$username = $_POST['username'];
$message = $_POST['message'];
$recipient = $_POST['recipient'];

$sql = "INSERT INTO chatmessages
	(userid,
	message,recipientuserid)
	VALUES('".$username."','".$message."','".$recipient."')";
	echo $sql;
$qry = $database->query($sql);
?>