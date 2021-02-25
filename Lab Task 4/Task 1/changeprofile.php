<?php  include_once('header.php'); 
		$err_picture="";
        $picture="";

		if(isset($_POST['submit'])) 
		{
			if(empty($_POST['picture']))
			{
				$err_picture ="Please Choose Picture";
			}
			else
			{
				$picture=htmlspecialchars($_POST['picture']);
				$_POST['picture'] = $picture;
			}
		}
	 ?>
<section style="width: 75%;
	float: left;
	padding-left: 30px;>
	<form action="" method="POST" enctype = "multipart/form-data">
		<fieldset style="width: 370px">
			<legend style="font-weight: bold;font-size: 18px">PROFILE PICTURE</legend>
            <img style="width: 200px" src="default.png" alt="">
			<input type="file" name="picture" value="<?php echo $picture;?>">
            <br><span style="color:red"><?php echo $err_picture;?></span>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</section>
<?php include_once('footer.php'); ?>
