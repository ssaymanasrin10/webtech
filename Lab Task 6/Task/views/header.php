<header>
	<div style="margin: 30px 30px; padding-bottom: 30px">
		<div style="display: flex; float: right;">
		    Logged in as &nbsp; <a style="text-decoration: none;" href="view_profile.php"> <?php echo $_SESSION['name']; ?> </a> &nbsp;|&nbsp; <a style="text-decoration: none;" href="logout.php">Logout</a>
		</div>
	</div>
</header>

<main style="display: flex; border-top: 1px solid black;">
        <section style="width: 25%; float: left; padding-left: 30px; padding-right: 30px; border-right: 1px solid black;">
            <h4>DASHBOARD</h4>
            <hr>
            <ul>
                <li><a style="text-decoration: none;" href="admin.php">Dashboard</a></li>
                <li>
                	<a style="text-decoration: none;" href="">Manager</a>
                	<ul>
                		<li><a style="text-decoration: none;" href="add_manager.php">Add Manager</a></li>
                		<li><a style="text-decoration: none;" href="list_manager.php">List Manager</a></li>
                	</ul>
            	</li>
            	<li>
                	<a style="text-decoration: none;" href="">Customer</a>
                	<ul>
                		<li><a style="text-decoration: none;" href="add_customer.php">Add Customer</a></li>
                		<li><a style="text-decoration: none;" href="list_customer.php">List Customer</a></li>
                	</ul>
            	</li>
                <li><a style="text-decoration: none;" href="view_profile.php">Profile</a></li>
                <li><a style="text-decoration: none;" href="logout.php">Logout</a></li>
            </ul>
        </section>