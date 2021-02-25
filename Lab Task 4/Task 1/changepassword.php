<?php include_once('header.php'); 

		$currentPassword="";
		$err_currentPassword="";

		$newPassword="";
		$err_newPassword="";

		$retypePassword="";
		$err_retypePassword="";

		$has_error=false;

		if(isset($_POST['submit'])) 
		{

			if(empty($_POST['currentPassword']))
			{
				$err_currentPassword="*Password Required";
				$has_error=true;
			}
			else
			{
				if( $_SESSION['password'] != $_POST['currentPassword'] )
				{
					$err_currentPassword="*Password Worng!! Try again!!";
				}
				else
				{
					$currentPassword=htmlspecialchars($_POST['currentPassword']);
					$_POST['currentPassword'] = $currentPassword;
				}				
			}
			if(empty($_POST['newPassword']))
			{
				$err_newPassword="*New Password Required";
				$has_error=true;
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
				$has_error=true;
			}
			else
			{
				if ( $_POST['retypePassword'] != $_POST['newPassword'] )
				{
					$err_retypePassword="*New Password must match with the Retyped Password";
					$has_error=true;
				}
				else
				{
					$retypePassword=htmlspecialchars($_POST['retypePassword']);
					$_SESSION['password'] = $retypePassword;
				}
			}
			if(!$has_error)
			{

				header("location:dashboard.php");
			}
		}

?>

<section style="width: 75%;
	float: left;
	padding-left: 30px;">
	<form action="" method="POST">
		<fieldset style="width: 370px">
			<legend style="font-weight: bold;font-size: 18px">CHANGE PASSWORD</legend>
			<table>
				<tr>
					<td> Current Password </td>
					<td> : </td>
					<td> <input type="password" name="currentPassword" value="<?php echo $currentPassword;?>"> <br><span style="color:red"><?php echo $err_currentPassword;?></span> </td>
				</tr>
				<tr>
					<td> New Password </td>
					<td> : </td>
					<td> <input type="password" name="newPassword" value="<?php echo $newPassword;?>"> <br><span style="color:red"><?php echo $err_newPassword;?></span> </td>
				</tr>
				<tr>
					<td> Retype New Password </td>
					<td> : </td>
					<td> <input type="password" name="retypePassword" value="<?php echo $retypePassword;?>"> <br><span style="color:red"><?php echo $err_retypePassword;?></span> </td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</section>

<?php include_once('footer.php'); ?>