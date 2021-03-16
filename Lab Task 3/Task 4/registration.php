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
				
			}

			if(empty($_POST['email']))
			{
				$err_email="*Email Required";
				$has_error=true;
			}
			else
			{
				$email=htmlspecialchars($_POST['email']);
				
			}

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

			if(empty($_POST['c_password']))
			{
				$err_c_password="*Confirm Password Required";
				$has_error=true;
			}
			else 
			{
				if ( $_POST['password'] != $_POST['c_password'])
				{
					$err_c_password="*Password & Confirm Password Not Match!!";
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
					$err_date="You Can Input Only Numeric Value";
					$has_error=true;
				}
				else
				{
					$date=htmlspecialchars($_POST['date']);
					
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
					$err_month="You Can Input Only Numeric Value";
					$has_error=true;
				}
				else
				{
					$month=htmlspecialchars($_POST['month']);
					
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
					$err_year="You Can Input Only Numeric Value";
					$has_error=true;
				}
				else
				{
					$year=htmlspecialchars($_POST['year']);
					
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
				
			}

			if(!$has_error)
			{
				if(file_exists('data.json'))
				{
					$current_data = file_get_contents('data.json');  
				    $array_data   = json_decode($current_data, true);  
				    $extra        = array(
								    'name'     =>$_POST['name'],
								    'email'    =>$_POST['email'],
								    'uname'    =>$_POST['uname'],
								    'password' =>$_POST['password'],
								    'gender'   =>$_POST["gender"],  
								    'date'     =>$_POST['date'],
								    'month'    =>$_POST['month'],
								    'year'     =>$_POST['year']
								);  
				    $array_data[] = $extra;  
				    $final_data = json_encode($array_data);

				    if(file_put_contents('data.json', $final_data))  
	                {  
	                    echo "Confirm";
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
	                }
		        }
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
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form  action="" method="POST">
		<fieldset style="width: 370px">
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
						<fieldset class="box-center" style="width: 370px">
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
						<fieldset class="box-center" style="width: 370px">
							<legend style="font-weight: bold;font-size: 18px">Date of Birth</legend>
							<input style="width: 20% ;"  type="text" name="date" placeholder="date" value="<?php echo $date;?>">&nbsp;/&nbsp;<input  style="width: 20% ;" type="text" name="month" placeholder="month" value="<?php echo $month;?>">&nbsp;/&nbsp;<input style="width: 20% ;" type="text" name="year" placeholder="year" value="<?php echo $year;?>">
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