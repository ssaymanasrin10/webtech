<?php include_once('header.php'); ?>
        <section style="width: 75%;
    float: left;
    padding-left: 30px;">
            <fieldset style="width: 500px">
            <legend style="font-weight: bold;font-size: 18px">PROFILE</legend>
            <table>
                <tr>
                    <td> Name </td>
                    <td> : </td>
                    <td> <?php echo $_SESSION['name']; ?> </td>
                    <td rowspan="4"><img   style="height: 100%" src="images/default.png"> <br> <a href="profile_picture.php">Change</a></td>
                </tr>
                <tr>
                    <td> Email </td>
                    <td> : </td>
                    <td> <?php echo $_SESSION['email']; ?> </td>
                    <td></td>
                </tr>
                <tr>
                    <td> Gender </td>
                    <td> : </td>
                    <td> <?php echo $_SESSION['gender']; ?> </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td> : </td>
                    <td> <?php echo $_SESSION['date']; ?>/<?php echo $_SESSION['month']; ?>/<?php echo $_SESSION['year']; ?> </td>
                    <td></td>
                </tr>
            </table>
            <hr>
            <a href="editprofile.php">Edit Profile</a>
        </fieldset>
        </section>
    <?php include_once('footer.php'); ?>