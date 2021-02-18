<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		p{
			border-bottom: 2px bold;
		}
	</style>
	<title>Lab 3</title>
</head>
<body>
	<div>
	<form action="" method="POST">
		
		<fieldset style="width: 370px">
			<legend style="font-weight: bold;font-size: 18px">LOGIN</legend>
			
				<p>
					<label>User Name:</label>
					<input type="text" name="name">
				</p>
			<p>
				<label>Password:</label>
				<input type="text" name="pass">
			
			</p>
			<hr>
	

			<a style="border-bottom-style: unset;" href="#"></a>
			<input type="checkbox" name="">Remember Me
          <br>
          <br>

			<input type="Submit" name="Submit"> <a  href="">Forget Password</a>
			
           
		</fieldset>
	</form>
	</div>

	
        <?php 
        
        $uname="";
		$err_uname="";

		$password="";
		$err_password="";

		if(isset($_POST['submit'])) 
		{

			if(empty($_POST['uname']))
			{
				$err_uname="Username Required";
			}
			else
			{
				if(strlen($_POST['uname']) < 2)
				{
					$err_uname="Username At Least 2 Character";
					$uname=htmlspecialchars($_POST['uname']);
				}
                else
                {
                    if ( preg_match("/^[a-zA-Z\s]+$/", $_POST['uname']) )
                    {
                        $err_uname="User Name can contain  character";
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
				$err_password="Password Required";
			}
			else 
			{
				if ( !preg_match('@[^\w]@', $_POST['password'] ) )
				{
					$err_password="Password must contain at least one of the special characters";
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
			
		
			
			echo $name;
			echo $password;	
				}
		}
	
	 ?>

	

</body>
</html>