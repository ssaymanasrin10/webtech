<?php 
		$uname="";
		$err_uname="";

		$password="";
		$err_password="";

		if(isset($_POST['submit'])) 
		{

			if(empty($_POST['uname']))
			{
				$err_uname="*Username Required";
			}
			else
			{
				if(strlen($_POST['uname']) < 2)
				{
					$err_uname="*Username At Least 2 Character";
					$uname=htmlspecialchars($_POST['uname']);
				}
                else
                {
                    if ( preg_match("/^[a-zA-Z\s]+$/", $_POST['uname']) )
                    {
                        $err_uname="*User Name can contain alpha numeric characters, period, dash or underscore only";
					    $uname=htmlspecialchars($_POST['uname']);
                    }
                    else
                    {
                        $uname=htmlspecialchars($_POST['uname']);
				        $_POST['uname'] = $uname;
                    }
                }
			}
			if(empty($_POST['password']))
			{
				$err_password="*Password Required";
			}
			else 
			{
				if ( !preg_match('@[^\w]@', $_POST['password'] ) )
				{
					$err_password="*Password must contain at least one of the special characters";
					$password=htmlspecialchars($_POST['password']);
				}
                else
                {
                    if(strlen($_POST['password']) < 8)
                    {
                        $err_password="*Password must not be less than 8 characters";
                        $password=htmlspecialchars($_POST['password']);
                    }
                    else
                    {
                        $password=htmlspecialchars($_POST['password']);
                        $_POST['password'] = $password;
                    }
                }
			}
		}
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lab 3</title>
</head>
<body>
    <a href="login.php">Login Page</a><br><a href="forget_pass.php">Forgot Password Page</a><br><a href="image.php">Image Page</a>      
	<form action="" method="POST">
		<fieldset style="width: 370px;  margin: auto;">
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
            <a href="forget_pass.php">Forgot Password?</a>
		</fieldset>
	</form>
</body>
</html>