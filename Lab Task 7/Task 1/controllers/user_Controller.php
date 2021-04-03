<?php

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

	require_once '../model/database.php';

	if(isset($_GET['req']) && $_GET['req'] == 'add_customer')
	{
		insertCustomer();
	}

	elseif(isset($_GET['req']) && $_GET['req'] == 'add_manager')
	{
		insertManager();
	}

	function getAllUser()
	{
		$query="SELECT * FROM `users`";
		$users=get($query);
		return $users;
	}

	function insertCustomer()
	{
		$name      =$_SESSION['name'];
		$email     =$_SESSION['email'];
		$uname     =$_SESSION['uname'];
		$address   =$_SESSION['address'];
		$password  =$_SESSION['password'];
		$gender    =$_SESSION['gender'];
		$date      =$_SESSION['date'];
		$user_type ='customer';

		$query="INSERT INTO users VALUEs(NULL, '$name', '$email', '$uname', '$address', '$password', '$gender', '$date', '$user_type')";
		execute($query);
		header("Location:../views/list_customer.php");
	}


	function insertManager()
	{
		$name      =$_SESSION['name'];
		$email     =$_SESSION['email'];
		$uname     =$_SESSION['uname'];
		$address   =$_SESSION['address'];
		$password  =$_SESSION['password'];
		$gender    =$_SESSION['gender'];
		$date      =$_SESSION['date'];
		$user_type ='manager';

		$query="INSERT INTO users VALUEs(NULL, '$name', '$email', '$uname', '$address', '$password', '$gender', '$date', '$user_type')";
		execute($query);
		header("Location:../views/list_manager.php");
	}
	
 ?>