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
	            header("Location:../controllers/user_Controller.php?req=add_manager");
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
	<title>Add Manager</title>
</head>
<body>
	<?php include_once('header.php'); ?>
	<?php include_once('bootstrap.php'); ?>

	<section class="col-md-8">
                <div class="container d-flex justify-content-center card pb-5">
                	<div class="card-header">
                		<h2 class="text-center">A D D &nbsp; &nbsp; M A N A G E R</h2>
                	</div>
					<div class="card-body">
						<form action="" method="POST" class="row">

						  <div class="col-md-6 pb-1">
						    <label for="name" class="form-label">Name</label>
						    <input type="text" name="name" class="form-control" id="name" value="<?php echo $name;?>">
						    <span style="color:red"><?php echo $err_name;?></span>
						  </div>

						  <div class="col-md-6 pb-1">
						    <label for="email" class="form-label">Email</label>
						    <input type="email" name="email" class="form-control" id="email" value="<?php echo $email;?>">
						    <span style="color:red"><?php echo $err_email;?></span>
						  </div>

						  <div class="col-md-6 pb-1">
						    <label for="uname" class="form-label">Username</label>
						    <input type="text" name="uname" class="form-control" id="uname" value="<?php echo $uname;?>">
						    <span style="color:red"><?php echo $err_uname;?></span>
						  </div>

						  <div class="col-md-6 pb-1">
						    <label for="address" class="form-label">Address</label>
						    <textarea name="address" class="form-control h-25" id="address"><?php echo $address;?></textarea>
						    <span style="color:red"><?php echo $err_address;?></span>
						  </div>

						   <div class="col-md-6 pb-1">
						    <label for="password" class="form-label">Password</label>
						    <input type="password" name="password" class="form-control" id="password" <?php echo $password;?>>
						    <span style="color:red"><?php echo $err_password;?></span>
						  </div>

						  <div class="col-md-6 pb-1">
						    <label for="c_password" class="form-label">Confirm Password</label>
						    <input type="password" name="c_password" class="form-control" id="c_password" value="<?php echo $c_password;?>">
						    <span style="color:red"><?php echo $err_c_password;?></span>
						  </div>
						  
						  <div class="col-md-6 pb-1">
						    <label for="gender" class="form-label">Gender</label>
						    <select id="gender" name="gender" class="form-select">
							    <option selected disabled value="NULL">Select Gender</option>
			                    <option <?php if($gender == 'Male') echo 'selected'; ?> value="Male">Male</option>
			                    <option <?php if($gender == 'Female') echo 'selected'; ?> value="Female">Female</option>
			                    <option <?php if($gender == 'Other') echo 'selected'; ?> value="Other">Other</option>
			                    </sel
			                    <span style="color:red"><?php echo $err_gender;?></span>
						    </select>
						  </div>

						  <div class="col-md-6 pb-1">
						    <label for="date" class="form-label">Confirm Password</label>
						    <input type="date" name="date" class="form-control" id="date" value="<?php echo $date;?>">
						    <span style="color:red"><?php echo $err_date; ?></span>
						  </div>

						  <div class="col-6 pb-1">
						  	<label for="img" class="form-label">Profile Picture</label>
						    <input type="file" name="img" class="form-control" id="img" value="<?php echo $img;?>">
						    
						    <span style="color:red"><?php echo $err_img;?></span>
						  </div>
						  
						  <div class="col-12 pt-2 pb-1">
						    <input type="submit" name="submit" class="btn btn-primary" value="Submit"> &nbsp;&nbsp; <input type="submit" name="reset" class="btn btn-primary" value="Reset">
						  </div>

						</form>
					</div>
				</div>
            </section>
        </main>

        <?php include_once('javascript.php'); ?>
        <?php include_once('index_footer.php'); ?>
	
</body>
</html>