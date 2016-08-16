<?php
	session_start();
	if(is_numeric($_SESSION['user_id'])) {
		header ('Location: read.php');
	}
?>

<form action="loginProcessing.php" method="post">
	<label for="login">Login</label>
	<input type="text" name="login" id="login">
	<br>
	<label></label>
	<input type="password" name="pass">
	<button>OK</button>
</form>