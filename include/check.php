<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>
 
  <!-- <?php include_once 'function/function_check.php'; ?> -->
  
    <form action="check.php" method="POST" name"check"> 
        
        
        <div class="form-group">
            <label>Nome:</label><input class="form-control" type="text" name="name" />
        </div>

       
       
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male

        
        <div class="form-group">
            <label>Idade:</label><input class="form-control" type="number" name="age" /> 
        </div>
        
     
        <input type="submit" name="submit" value="submit" />
   
    </form> 
        

   <?php


$age = $_POST['age'];
$name = $_POST['name'];

$gender = "";

 if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
   
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

echo $gender;
?>

  </body>

</html>