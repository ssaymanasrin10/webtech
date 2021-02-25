<?php 
	session_start();

		$name="";
		$err_name="";

		$email="";
		$err_email="";

		$uname="";
		$err_uname="";

		$password="";
		$err_password="";

		$c_password="";
		$err_c_password="";

		$date="";
		$err_date="";

		$month="";
		$err_month="";

		$year="";
		$err_year="";

		$gender="";
		$err_gender="";

		$has_error=false;

		if(isset($_POST['submit'])) 
		{

			if(empty($_POST['name']))
			{
				$err_name="*Name Required";
				$has_error=true;
			}
			else
			{
				$name=htmlspecialchars($_POST['name']);
				$_SESSION['name'] = $name;
			}

			if(empty($_POST['email']))
			{
				$err_email="*Email Required";
				$has_error=true;
			}
			else
			{
				$email=htmlspecialchars($_POST['email']);
				$_SESSION['email'] = $email;
			}

			if(empty($_POST['uname']))
			{
				$err_uname="*Username Required";
				$has_error=true;
			}
			else
			{
				$uname=htmlspecialchars($_POST['uname']);
				$_SESSION['uname'] = $uname;
			}

			if(empty($_POST['password']))
			{
				$err_password="*Password Required";
				$has_error=true;
			}
			else 
			{
				$password=htmlspecialchars($_POST['password']);
                $_SESSION['password'] = $password;
			}

			if(empty($_POST['c_password']))
			{
				$err_c_password="*Confirm Password Required";
				$has_error=true;
			}
			else 
			{
				if ( $_POST['password'] != $_POST['c_password'])
				{
					$err_c_password="*Password & Confirm Password are not Match!!";
					$has_error=true;
				}
				else
				{
					$c_password=htmlspecialchars($_POST['c_password']);
                	$_SESSION['c_password'] = $c_password;
				}
			}

			if(empty($_POST['date']))
			{
				$err_date="*Date Required";
				$has_error=true;
			}
			else
			{
				if(! preg_match("/^[0-9]*$/", $_POST['date']))
				{
					$err_date="You Can Only input  Numeric Value";
					$has_error=true;
				}
				else
				{
					$date=htmlspecialchars($_POST['date']);
					$_SESSION['date'] = $date;
				}
			}

			if(empty($_POST['month']))
			{
				$err_month="*Month Required";
				$has_error=true;
			}
			else
			{
				if(! preg_match("/^[0-9]*$/", $_POST['month']))
				{
					$err_month="You Can Only input  Numeric Value";
					$has_error=true;
				}
				else
				{
					$month=htmlspecialchars($_POST['month']);
					$_SESSION['month'] = $month;
				}
			}

			if(empty($_POST['year']))
			{
				$err_year="*Year Required";
				$has_error=true;
			}
			else
			{
				if(! preg_match("/^[0-9]*$/", $_POST['year']))
				{
					$err_year="You Can  Only input Numeric Value";
					$has_error=true;
				}
				else
				{
					$year=htmlspecialchars($_POST['year']);
					$_SESSION['year'] = $year;
				}
			}

			if(empty($_POST['gender']))
			{
				$err_gender="*Gender Required";
				$has_error=true;
			}
			else
			{
				$gender=htmlspecialchars($_POST['gender']);
				$_SESSION['gender'] = $gender;
			}

			if(!$has_error)
			{
				header("location:home.php");
			}
		}

		if(isset($_POST['reset'])) 
		{
			$name="";
			$err_name="";

			$email="";
			$err_email="";

			$uname="";
			$err_uname="";

			$password="";
			$err_password="";

			$c_password="";
			$err_c_password="";

			$date="";
			$err_date="";

			$month="";
			$err_month="";

			$gender="";
			$err_gender="";

			$year="";
			$err_year="";
		}
?>





<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
	<header>

    <div style="text-align: right;">
        <div style="">
        	<h2 style="text-align: left;font-family: bold;">Wedding System</h2>
            <a href="#">Home</a> &nbsp;|&nbsp; <a href="login.php">Login</a> &nbsp;|&nbsp; <a href="registration.php">Registration</a>
        </div>
    </div>
    </header>
    <hr>
    <form  action="" method="POST">
		<fieldset style="width: 370px;margin:auto;">
			<legend style="font-weight: bold;font-size: 18px">REGISTRATION</legend>
			<table>
				<tr>
					<td> Name </td>
					<td> : </td>
					<td> <input type="text" name="name" value="<?php echo $name;?>"> <br><span style="color:red"><?php echo $err_name;?></span> </td>
				</tr>

				<tr>
					<td> Email </td>
					<td> : </td>
					<td> <input type="email" name="email" value="<?php echo $email;?>"> <br><span style="color:red"><?php echo $err_email;?></span> </td>
				</tr>
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
				<tr>
					<td> Confirm Password </td>
					<td> : </td>
					<td> <input type="password" name="c_password" value="<?php echo $c_password;?>"> <br><span style="color:red"><?php echo $err_c_password;?></span> </td>
				</tr>
				<tr>
					<td colspan="3">
						<fieldset  style="width: 370px;margin: left;">
							<legend style="font-weight: bold;font-size: 18px">Gender</legend>
							<input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?>value="female">Female
							<input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?>value="male">Male
							<input type="radio" name="gender"<?php if (isset($gender) && $gender=="other") echo "checked";?>value="other">Other
						</fieldset>
						<span style="color:red"><?php echo $err_gender;?></span>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<fieldset style="width: 370px; margin:left;">
							<legend style="font-weight: bold;font-size: 18px">Date of Birth</legend>
							<input style="width: 50px;" type="text" name="date" placeholder="" value="<?php echo $date;?>">&nbsp;/&nbsp;<input style="width: 50px;" type="text" name="month" placeholder="" value="<?php echo $month;?>">&nbsp;/&nbsp;<input style="width: 50px;" type="text" name="year" placeholder="" value="<?php echo $year;?>">(dd/mm/yyy)
						</fieldset>
						<span style="color:red"><?php echo $err_date; ?><br><?php echo $err_month; ?><br><?php echo $err_year; ?></span>
					</td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="submit" value="Submit"> &nbsp;&nbsp; <input type="submit" name="reset" value="Reset">
		</fieldset>
	</form>

</body>
</html>