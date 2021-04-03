<?php include_once('session_user.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Al Manager Information</title>
</head>
<body>
	<?php include_once('header.php'); ?>
	<?php include_once('bootstrap.php'); ?>

	<section class="col-md-8">
		<h1 class="text-center pt-2">ALL MANAGER INFORMATION</h1>
		<table class="table text-center  table-striped table-hover">
		  <thead class="table-dark">
		    <tr>
		        <th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Address</th>
				<th scope="col">Gender</th>
				<th scope="col">Birth Date</th>
				<th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
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
		  </tbody>
		</table>
    </section>
</main>

	<?php include_once('javascript.php'); ?>
    <?php include_once('index_footer.php'); ?>
	
</body>
</html>