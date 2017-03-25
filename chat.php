<?php
include("include/session.php");

if(!$session->logged_in){
	header("Location: process.php");exit;
}


$username=$_SESSION['username'];
$sql = "SELECT * FROM users where username!='$username' ORDER BY username";
$data = $database->query($sql);
//var_dump($data);
//echo mysql_num_rows($data);

$users =array();
while($rec = mysql_fetch_array($data)){
	$users[] = $rec['username'];
}
//print_r($users); exit;

?>
<html lang="EN">
	<head>
		<meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
		<style>
			body {
				font-family:"Tahoma",Arial Narrow;
				font-size: 12px;
			}
			
		</style>
		<script src="js/jquery.js"></script>
	</head>
	<body>
	<div class="holder">
		<label="welcomemsg">WELCOME: </label><label for="name"><?php echo $username; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><a href="process.php">Logout</a></label>
			<div class="style">	
				<div class="alpha">
					<b align="center">You can view your chats here:</b>
					<input name="user" type="hidden" id="texta" value="<?php echo $username ?>"/>
					<div class="refresh">
					</div>
					<br/>
					<form name="newMessage" class="newMessage" action="" onSubmit="return false">
						<select name="recipient" id="recipient" style="width:270px;">
							<option>--Send Chat To--</option>
								<?php 
									foreach ($users as $fe):
										$name = $fe;
								?>
									<option title="<?php echo $name; ?>"><?php echo $name; ?> </option>
								<?php endforeach; ?>
						</select>
					<textarea name="textb" id="textb">Enter your message here</textarea>
					<input name="submit" type="submit" value="Send" id="johnlei" />
				</form>
			</div>
		</div>
		<script src="js/sendchat.js" type="text/javascript"></script>
		<script src="js/refresh.js" type="text/javascript"></script>
	</div>	
	</body>
</html>