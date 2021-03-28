<?php include_once('session_user.php'); ?>
<!DOCTYPE html>
<html>
    <head>   
        <title>Dashboard</title>
    </head>
    <body>

        <?php include_once('header.php'); ?>

            <section style="width: 75%; float: left; padding-left: 30px;">
                <h1 style="text-align: center;">Welcome To <?php echo $_SESSION['name']; ?></h1>
            </section>
        </main>

        <?php include_once('index_footer.php'); ?>

    </body>
</html>