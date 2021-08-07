<?php
	$email=$_POST['email'];
	$pass=$_POST['password'];
	if($email=="sharmabhumi2000@gmail.com" && $pass=="12345678")
	{
		header("location:insert.php");
	}
	else
	{
		header("location:login.php?flag=1");
	}

?>