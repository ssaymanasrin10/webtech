<?php 
		session_start();

		$uname="";
		$err_uname="";

		$password="";
		$err_password="";

		$err_msg="";
		$has_error=false;

		if(isset($_POST['submit'])) 
		{

			if(empty($_POST['uname']))
			{
				$err_uname="*Username Required";
				$has_error=true;
			}
			else
			{
				$uname=$_POST['uname'];
			}

			if(empty($_POST['password']))
			{
				$err_password="*Password Required";
				$has_error=true;
			}
			else 
			{
				$password=$_POST['password'];
			}

			if(!$has_error)
			{
				require_once '../controllers/user_Controller.php';

				$users = getAllUser();

                foreach($users as $user)  
                {                	
                	if ( $_POST['uname'] == $user["uname"] && $_POST['password'] == $user["password"] ) 
                	{
                		$user_type = $user["user_type"];
                		if ( $user_type == 'admin' )
                		{
                			$_SESSION['name']      =$user["name"];
                			$_SESSION['email']     =$user["email"];
                			$_SESSION['uname']     =$user["uname"];
                			$_SESSION['password']  =$user["password"];
                			$_SESSION['gender']    =$user["gender"];
                			$_SESSION['address']   =$user["address"];
                			$_SESSION['date']      =$user["date"];
                			$uname                 =$_SESSION['uname'];
							setcookie("loggedinuser",$uname,time()+18000);
                			header("location:admin.php?uname=$uname");
                		}
                	} 
                	else
					{
						$err_msg="*Username or Password Incorrect";
					}
                    
                }  
			}

		}
	 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>

		<?php include_once('index_header.php'); ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="card w-25">
					
				</div>
			</div>
		</div>

		<main>
			<form  action="" method="POST"><div class="card-heaader text-center">

				<fieldset style="width: 370px; margin: auto; align-self: center;">
					<legend style="font-weight: bold;font-size: 18px">LOGIN</legend>
					
					<table>
						<tr>
							<td> Username </td>
							<td> : </td>
							<td> <input type="text" name="uname" value="<?php echo $uname;?>"> <br><span style="color:red"><?php echo $err_uname;?></span> </td>
						</tr>
						<tr>
							<td> Password </td>
							<td> : </td>
							<td> <input type="password" name="password" value="<?php echo $password;?>"> <br><span style="color:red"><?php echo $err_password;?></span> </td>
						</tr>
					</table>
					<hr>
					<input type="submit" name="submit" value="Submit">
		            <span style="color:red"><?php echo $err_msg;?></span>
				</fieldset>
			
			</form>
		</main>

		<?php include_once('index_footer.php'); ?>

	</body>
</html>