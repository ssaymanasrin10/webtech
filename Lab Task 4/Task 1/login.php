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
				$uname=htmlspecialchars($_POST['uname']);
			}

			if(empty($_POST['password']))
			{
				$err_password="*Password Required";
				$has_error=true;
			}
			else 
			{
				$password=htmlspecialchars($_POST['password']);
			}

			if(!$has_error)
			{
				if(!empty($_SESSION['uname']))
				{
					if( $_SESSION['uname'] == $_POST['uname'] && $_SESSION['password'] == $_POST['password'] )
					{
						$uname=$_SESSION['uname'];
						setcookie("loggedinuser",$uname,time()+18000);
						header("location:dashboard.php?uname=$uname");
					}
					else
					{
						$err_msg="*Username or Password Incorrect";
					}
				}
				else
				{
					$err_msg="*User Not Registerd!!";
				}
			}
		}



 ?>




<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>

<form action="" method="post">
	 <header>

    <div style="text-align: right;">
        <div style="">
        	<h2 style="text-align: left;font-family: bold;">Wedding System</h2>
            <a href="#">Home</a> &nbsp;|&nbsp; <a href="login.php">Login</a> &nbsp;|&nbsp; <a href="registration.php">Registration</a>
        </div>
    </div>
    </header>
    <hr>
    <fieldset style="width: 370px;margin:auto;">
			<legend style="font-weight: bold;font-size: 18px">LOGIN</legend>
			<table>
				<tr>
					<td>User Name </td>
					<td> : </td>
					<td> <input type="text" name="uname" value="<?php echo $uname;?>"> <br><span style="color:red"><?php echo $err_uname;?></span> </td>
				</tr>
				<tr>
					<td>Password </td>
					<td> : </td>
					<td> <input type="text" name="password" value="<?php echo $password;?>"> <br><span style="color:red"><?php echo $err_password;?></span> </td>
				</tr>
				</table>
				<hr>
				<tr>
					<td><input type="checkbox" name="c" value="checkbox"></td> <td>Remember Me </td>
					
					
				</tr>
				<br>
				<br>

			
			<input type="submit" name="submit" value="Submit">
            <a href="forget_pass.php">Forgot Password?</a><br>
            <span style="color:red"><?php echo $err_msg;?></span>
		</fieldset>
</form>
</body>
</html>