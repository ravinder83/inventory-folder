<?php
	// session_start();
	// session_destroy();
	// echo $_COOKIE['username'];
	// echo "<br>";
	// // setcookie('username',"", time()-3600);
	// unset($_COOKIE['username']);
	// if(isset($_COOKIE['username']))  
  	// {
    // 	echo "not deleted";
  	// }else{
	// 	  echo "cookie deleted";
	//   }


	// if (isset($_COOKIE['username'])) {
	// 	unset($_COOKIE['username']); 
	// 	setcookie('username', null, -1, '/'); 
	// 	header('location:login.php');
	// } else {
	// 	echo "false";
	// }
	
?>

<?php
	if (isset($_COOKIE['loginid'])) {
		unset($_COOKIE['loginid']); 
		setcookie('loginid', null, -1, '/'); 
		header('location:login.php');
	} else {
		echo "false";
	}
?>