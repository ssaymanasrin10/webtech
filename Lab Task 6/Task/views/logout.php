<?php 

session_start();

if (isset($_SESSION['uname']))
{
	session_destroy();
	setcookie("loggedinuser","",time()-60);
	header("Location:login.php");
}
else
{
	header("Location:login.php");
}

?>


