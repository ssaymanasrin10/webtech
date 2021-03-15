<?php 
		$currentPassword="";
		$err_currentPassword="";

		$newPassword="";
		$err_newPassword="";

		$retypePassword="";
		$err_retypePassword="";

		if(isset($_POST['submit'])) 
		{

			if(empty($_POST['currentPassword']))
			{
				$err_currentPassword="*Password Required";
			}
			else
			{
				$currentPassword=htmlspecialchars($_POST['currentPassword']);
				$_POST['currentPassword'] = $currentPassword;				
			}
			if(empty($_POST['newPassword']))
			{
				$err_newPassword="*New Password Required";
			}
			else 
			{
				
				if ( $_POST['newPassword'] == $_POST['currentPassword'] )
				{
					$err_newPassword="*New Password should not be same as the Current Password";
				}
				else
				{
					$newPassword=htmlspecialchars($_POST['newPassword']);
					$_POST['newPassword'] = $newPassword;
				}
			}
			if(empty($_POST['retypePassword']))
			{
				$err_retypePassword="*Retype Password Required";
			}
			else
			{
				if ( $_POST['newPassword'] != $_POST['retypePassword'] )
				{
					$err_retypePassword="*New Password must match with the Retyped Password";
				}
				else
				{
					$retypePassword=htmlspecialchars($_POST['retypePassword']);
					$_POST['retypePassword'] = $retypePassword;
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
		<fieldset style="width: 370px;  margin: auto; align-self: center;">
			<legend style="font-weight: bold;font-size: 18px">CHANGE PASSWORD</legend>
			<table>
				<tr>
					<td> Current Password </td>
					<td> : </td>
					<td> <input type="text" name="currentPassword" value="<?php echo $currentPassword;?>"> <br><span style="color:red"><?php echo $err_currentPassword;?></span> </td>
				</tr>
				<tr>
					<td style="color: green"> New Password </td>
					<td> : </td>
					<td> <input type="text" name="newPassword" value="<?php echo $newPassword;?>"> <br><span style="color:red"><?php echo $err_newPassword;?></span> </td>
				</tr>
				<tr>
					<td style="color: red"> Retype New Password </td>
					<td> : </td>
					<td> <input type="text" name="retypePassword" value="<?php echo $retypePassword;?>"> <br><span style="color:red"><?php echo $err_retypePassword;?></span> </td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>