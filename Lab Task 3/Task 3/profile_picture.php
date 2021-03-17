<?php   
		$err_picture="";
        $picture="";

		if(isset($_POST['submit'])) 
		{
			$allowed_image_extension = array(
		        "png",
		        "jpg",
		        "jpeg"
		    );

		    // Get image file extension
    		$file_extension = pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION);

    		// Validate file input to check if is not empty
		    if (! file_exists($_FILES["picture"]["tmp_name"]))
		    {
		        $err_picture ="Choose image file to upload.";
		    }
		     // Validate file input to check if is with valid extension
		    else if (! in_array($file_extension, $allowed_image_extension))
		    {
		        $err_picture ="Upload valiid images. Only PNG,JPG and JPEG are allowed.";
		    }
		    // Validate image file size
		    else if ($_FILES["picture"]["size"] > 4000000)
		    {
		        $err_picture ="Image size exceeds 4MB.";
		    }
		    else
    		{
            	echo "Image Updated Successfully";
     		}
		}
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture</title>
</head>
<body>
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
</body>
</html>

