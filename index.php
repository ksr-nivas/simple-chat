<?php
include("include/session.php");

if($session->logged_in){
	header("Location: chat.php");exit;
}else{
	echo "not logged in<br>";
}
?>
<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/jquery.1.7.2.min.js"></script>
		
	</head>
	<body>
	<div class="login_holder">
		<!-- <form method="post"> action="inc/login.php" 
			<label for="username">Username:</label><input type="text" name="username"/><br/>
			<label for="password">Password:</label><input type="password" name="password"/><br/>
			<input type="submit" value="Submit" name=""/>
		<form> -->
		<form class="cmxform" id="loginForm" name="loginForm" method="post" action="process.php" novalidate="novalidate">
        <table align="center" cellpadding="4" cellspacing="5">
        	<tr><td>Login</td></tr>
            <tr><td><br></td></tr>
        	<tr><td>Username</td></tr>
            <tr><td><input type="text" name="username" id="username" class="txtBox"></td></tr>
            <tr><td><span id="userErr" class="error"><?php echo $form->error("username"); ?></span></td></tr>
            <tr><td>Password</td></tr>
            <tr><td><input type="password" name="password" id="password" class="txtBox"></td></tr>
            <tr><td><span id="pwdErr" class="error"><?php echo $form->error("password"); ?></span></td></tr>
            <tr><td><input type="submit" name="loginForm" id="loginForm" value="Login"></td></tr>
        </table>
        </form>
        
		
			
		</form>
	</div>
    
    
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>	
</body>
</html>