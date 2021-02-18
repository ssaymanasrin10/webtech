<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter email</label>";  
      }  
      
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                      
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File registration Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;"> 
           <fieldset> 
               <legend><h3 align="">Registration</h3><br /> </legend>                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br /> 

                     <label>Email</label>  
                     <input type="text" name="name" class="form-control" /><br /> 
                     <label>User Name</label>  
                     <input type="text" name="name" class="form-control" /><br /> 
                     <label>Password</label>  
                     <input type="text" name="name" class="form-control" /><br /> 
                     <label>Confirm Password</label>  
                     <input type="text" name="name" class="form-control" /><br /> 

                    <fieldset>
                     <legend><h2>Gender</h2></legend> 
                     <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
      
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
 

  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other</td> 
  </fieldset>
                      <br> 
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><input type="reset" name="reset" value="reset" class="btn btn-info"><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
                </fieldset>
           </div>  
           <br />  
      </body>  
 </html>  