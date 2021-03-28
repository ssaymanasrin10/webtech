<?php include_once('session_user.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Al Manager Information</title>
</head>
<body>
	<?php include_once('header.php'); ?>

	<section style="width: 75%; float: left; padding-left: 30px;">
		<legend style="font-weight: bold;font-size: 18px; text-align: center; padding-top: 30px; padding-bottom: 30px;">ALL MANAGER INFORMATION</legend>
		<table border=1px style="border-collapse:collapse; border-color: black; text-align: center; margin: auto; align-self: center;">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Birth Date</th>
				<th>Action</th>
			</tr>
			<?php
				require_once '../controllers/user_Controller.php';

				$users = getAllUser();
             
				foreach($users as $user)
				{
					if ( $user["user_type"] == 'manager')
					{
						echo "<tr>";
						echo "<td>"."&nbsp;&nbsp;".$user["name"]."&nbsp;&nbsp;"."</td>";
						echo "<td>"."&nbsp;&nbsp;".$user["email"]."&nbsp;&nbsp;"."</td>";
						echo "<td>"."&nbsp;&nbsp;".$user["address"]."&nbsp;&nbsp;"."</td>";
						echo "<td>"."&nbsp;&nbsp;".$user["gender"]."&nbsp;&nbsp;"."</td>";
						echo "<td>"."&nbsp;&nbsp;".$user["date"]."&nbsp;&nbsp;"."</td>";
						echo "<td>"."&nbsp;&nbsp;"."<a style='text-decoration: none;' href='#''>EDIT</a> | <a style='text-decoration: none;' href='#''>DELETE</a>"."&nbsp;&nbsp;"."</td>";
						echo "</tr>";
					}
				}
			?>
		</table>
    </section>
</main>

    <?php include_once('index_footer.php'); ?>
	
</body>
</html>