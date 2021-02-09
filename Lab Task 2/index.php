<!DOCTYPE html>
<html>
<head>

	<style>
.error {color: #FF0000;}
</style>
	<title></title>
</head>
<body>

	<?php 
       
       $nameErr = $emailErr = $dateErr = $genderErr = $degreeErr =  $bloodgrpErr = "";
$name = $email = $date = $gender = $degree = $bloodgrp = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["date"])){
  	$dateErr = "Date of birth is required";
  }
  else{
  	$date = test_input($POST["date"]);
  	if(!filter_var($date,strtotime($_SERVER[date])))
  		$dateErr = "Invalid format";

  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if(isset($_POST["degree"])){
  	$degree = $_POST["degree"] ;
  	
  	foreach ($degree as $key => $values) {
  	 	echo $values ;
  	 } 
  }

  if (empty($_POST["bloodgrp"])) {
  	$bloodgrpErr = "bloodgroup is required";
  }else{
       $bloodgrp = test_input($_POST["bloodgrp"]);
  }
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}
	 ?>
<fieldset style="width: 370px;background-color: #EAE9F7 ; ">
	 <legend style="text-align: center;"><h2>PHP Form Validation </h2></legend>

<p style="padding-top: 0px"><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	<table style="margin-top: -190px; ">
		
<tr>	
	<td><label class="required" for="name"><b>Name</b> </label></td>
  <td><input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  </td>
  </tr>

  <br>
  <br>
  <tr>
  	<td><label class="required" for="name"><b>Email</b> </label></td>
  <td> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  </td>
  </tr>
  <br><br>
<tr>
	<td>
		<label class="required" for="name"><b>Date of Birth</b> </label>
	</td>
   <td><input type="date" name="date" value="<?php echo date ('') ?>"></td>
  </tr>
  <tr>
  	<td>
		<label class="required" for="name"><b>Gender</b> </label>
	</td>
  	
  		
  		<td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  		
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
 

  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other</td> 
  <td><span class="error">* <?php echo $genderErr;?></span></td>
  	</td>
  </tr>
  <br>
  <br>
  <tr><td><label><b>Degree</b></label></td>

  	<td><input type="checkbox" name="degree" value="SSC"><label>SSC</label>
  	<input type="checkbox" name="degree" value="HSC"><label>HSC</label>
  	<input type="checkbox" name="degree" value="BSc"><label>BSc</label>
  	<input type="checkbox" name="degree" value="MSc"><label>MSc</label></td>
  </tr>
  <br>
  <br>

  <tr>
  	<td><label ><b>Blood Group</b></label></td>
  	<td><select style=""id="Blood" name="blood">
  		<option></option>
  		<option value="A+">A+</option>
  <option value="B+">B+</option>
</select></td><br>
<br>
  </tr>
 <tr><td> <input type="submit" name="submit" value="Submit"> </td>
 </tr> 
  </table>
</form>

</fieldset>
<?php 

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $date;
echo "<br>";
echo $gender;
echo "<br>";
echo  $degree;
echo "<br>";
echo $bloodgrp;

 ?>


</body>
</html>