<?php
	if (isset($_COOKIE['loginid'])) {
		unset($_COOKIE['loginid']); 
		setcookie('loginid', null, -1, '/'); 
		header('location:login.php');
	} else {
		echo "false";
	}
?>