<?php
include("include/session.php");

if(!$session->logged_in){
	header("Location: process.php");exit;
}
?>
<style>
p{
border-top: 1px solid #EEEEEE;
margin-top: 0px; margin-bottom: 5px; padding-top: 5px;
}
</style>
<?php
$username=$_SESSION['username'];
/*$sql = "SELECT * FROM users where username!='$username' ORDER BY username";
$data = $database->query($sql);*/

$sql = "SELECT * FROM chatmessages where userid='$username' OR recipientuserid='$username' ORDER BY cts";
//echo $sql;
$data = $database->query($sql);
while($row = mysql_fetch_array($data)){

	$time = date("Y-m-d",strtotime($row['cts']));
	$now = date("Y-m-d");
	if (($row['userid'] == $username) && ($time == $now)) {
		$user = '<strong style="color:green;">'.$row['userid'].'</strong>'.'-->'.$row['recipientuserid']; 
	}else{
		$user = '<strong style="color:blue;">'.$row['userid'].'</strong>'; 			
	}	
	if ($time == $now) {
		$hourAndMinutes = date("h:i A", strtotime($row['cts']));
	}else{
		$hourAndMinutes = date("Y-m-d", strtotime($row['cts']));
	}
	echo '<p>'.$user.':<em>('.$hourAndMinutes.')</em>'.'<br/>'.' '.'<img src="Images/img2/spechbubble_sq_line.png" width="10" height="10">'.' '. $row['message']. '</p>';

}

?>