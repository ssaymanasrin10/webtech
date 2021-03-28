<?php 
		include_once('session_user.php');

		$name="";
		$err_name="";

		$email="";
		$err_email="";

		$uname="";
		$err_uname="";

		$address="";
		$err_address="";

		$password="";
		$err_password="";

		$c_password="";
		$err_c_password="";

		$date="";
		$err_date="";

		$gender="";
		$err_gender="";

		$img="";
		$err_img="";

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

			if(empty($_POST['address']))
			{
				$err_address="*Address Required";
				$has_error=true;
			}
			else
			{
				$address=htmlspecialchars($_POST['address']);
				$_SESSION['address'] = $address;
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
					$err_c_password="*Password & Confirm Password Not Match!!";
					$has_error=true;
				}
				else
				{
					$c_password=htmlspecialchars($_POST['c_password']);
				}
			}

			if(empty($_POST['date']))
			{
				$err_date="*Date Required";
				$has_error=true;
			}
			else
			{
				$date=htmlspecialchars($_POST['date']);
				$_SESSION['date'] = $date;
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

			if(empty($_POST['img']))
			{
				$err_img="*Image Required";
				$has_error=true;
			}
			else
			{
				$img=htmlspecialchars($_POST['img']);
			}

			if(!$has_error)
			{
	            header("Location:../controllers/user_Controller.php?req=add_customer");
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

			$address="";
			$err_address="";

			$password="";
			$err_password="";

			$c_password="";
			$err_c_password="";

			$date="";
			$err_date="";

			$gender="";
			$err_gender="";

			$img="";
			$err_img="";
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Customer</title>
</head>
<body>
	<?php include_once('header.php'); ?>

	<section style="width: 75%; float: left; padding-left: 30px;">
                <form  action="" method="POST" style="padding-top: 30px;">
					<fieldset style="width: 370px; margin: auto; align-self: center;">
						<legend style="font-weight: bold;font-size: 18px">ADD CUSTOMER</legend>
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
								<td> Address </td>
								<td> : </td>
								<td> <textarea name="address"><?php echo $address;?></textarea><br><span style="color:red"><?php echo $err_address;?></span> </td>
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
								<td>Gender</td>
								<td> : </td>
								<td>
									<select style="width: 65%;" name="gender">
		                            <option selected disabled value="NULL">Select Gender</option>
		                            <option <?php if($gender == 'Male') echo 'selected'; ?> value="Male">Male</option>
		                            <option <?php if($gender == 'Female') echo 'selected'; ?> value="Female">Female</option>
		                            <option <?php if($gender == 'Other') echo 'selected'; ?> value="Other">Other</option>
		                            </select><br>
		                            <span style="color:red"><?php echo $err_gender;?></span>
								</td>
							</tr>
							<tr>
								<td>Date of Birth</td>
								<td> : </td>
								<td><input style="width: 63%;" type="date" name="date" placeholder="date" value="<?php echo $date;?>"><br><span style="color:red"><?php echo $err_date; ?></span></td>
							</tr>
							<tr>
								<td> Profile Picture </td>
								<td> : </td>
								<td> <input type="file" name="img" value="<?php echo $img;?>"> <br><span style="color:red"><?php echo $err_img;?></span> </td>
							</tr>
						</table>
						<hr>
						<input type="submit" name="submit" value="Submit"> &nbsp;&nbsp; <input type="submit" name="reset" value="Reset">
					</fieldset>
				</form>
            </section>
        </main>

        <?php include_once('index_footer.php'); ?>
	
</body>
</html>