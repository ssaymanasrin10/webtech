 <!DOCTYPE html>
<html>
<head>
	<title>Lab 3</title>
</head>
<body>
	<form action="" method="_POST">
		
		<fieldset style="width: 370px">
			<legend style="font-weight: bold;font-size: 18px">CHANGE PASSWORD</legend>
			<div>
			Current Password :<input type="text" name="currentpassword">
			
			<br>
			<br>
			New Password:
			<td>
			<input style="margin-right: 2px" type="text" name="newpassword"></td>
			
			<br>
			<br>

			Re-type Password:
			<td >
			<input style="margin-right: 2px; color: red;" type="text" name="pass"></td>


			<br>
			<br>
			<hr>
			
			<a style="border-bottom: 1px black" href="#"></a>


			<input type="Submit"> 
			</div>
           
		</fieldset>
	</form>
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

</body>
</html>