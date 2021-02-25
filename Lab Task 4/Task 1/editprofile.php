<?php include_once('header.php'); 
		
		$name="";
		$err_name="";

		$email="";
		$err_email="";

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

			if(empty($_POST['month']))
			{
				$err_month="*Month Required";
				$has_error=true;
			}
			else
			{
				$month=htmlspecialchars($_POST['month']);
				$_SESSION['month'] = $month;
			}

			if(empty($_POST['year']))
			{
				$err_year="*Year Required";
				$has_error=true;
			}
			else
			{
				$year=htmlspecialchars($_POST['year']);
				$_SESSION['year'] = $year;
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
				header("location:view.php");
			}
		}
?>
        <section style="width: 100%;
	float: left;
	padding-left: 30px;">
            <form  action="" method="POST">
				<fieldset style="width: 370px">
					<legend style="font-weight: bold;font-size: 18px">EDIT PROFILE</legend>
					<table>
						<tr>
							<td> Name </td>
							<td> : </td>
							<td> <input type="text" name="name" value="<?php echo $_SESSION['name'];?>"> <br><span style="color:red"><?php echo $err_name;?></span> </td>
						</tr>
						<tr>
							<td> Email </td>
							<td> : </td>
							<td> <input type="email" name="email" value="<?php echo $_SESSION['email'];?>"> <br><span style="color:red"><?php echo $err_email;?></span> </td>
						</tr>
						<tr>
							<td> Gender </td>
							<td> : </td>
							<td>
								<input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo $_SESSION['gender'];?>value="female">Female
									<input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo $_SESSION['gender'];?>value="male">Male
									<input type="radio" name="gender"<?php if (isset($gender) && $gender=="other") echo $_SESSION['gender'];?>value="others">Others	<br><span style="color:red"><?php echo $err_gender;?></span>
							</td>
						</tr>
						<tr>
							<td> Date of Birth </td>
							<td> : </td>
							<td>
								<input style="width: 50px;"  type="text" name="date" placeholder="date" value="<?php echo $_SESSION['date'];?>">&nbsp;/&nbsp;<input style="width: 50px;" type="text" name="month" placeholder="month" value="<?php echo $_SESSION['month'];?>">&nbsp;/&nbsp;<input style="width: 50px;" type="text" name="year" placeholder="year" value="<?php echo $_SESSION['year'];?>"><br>
								<span style="color:red"><?php echo $err_date;  echo $err_month;  echo $err_year; ?></span>
							</td>
						</tr>
					</table>
					<hr>
					<input type="submit" name="submit" value="Submit">
				</fieldset>
			</form>
        </section>
<?php include_once('footer.php'); ?>