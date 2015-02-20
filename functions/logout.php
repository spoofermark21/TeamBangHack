<?php
	session_start();
	if(isset($_SESSION["isLogin"]))
	{
		$_SESSION = array();
		unset($_SESSION);
		session_destroy();
		header("Location: ../index.php");
		exit;
	}
	else
	{
		header("Location: ../index.php");
		exit;
	}	