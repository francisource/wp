 <?php

$age = $_POST['age'];
$name = $_POST['name'];
$sex= "";

 if (empty($_POST["sex"])) {
     $sexErr = "Sex is required";
   } else {
     $sex = test_input($_POST["sex"]);
   }
   
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if(($sex == 'female') && ($age < 24)) {
	echo "<p> O nome digitado foi, <strong>".$name. "</strong></p>";
	echo "<p><strong> aceito(a)</strong> </p>";
}else{
	echo "<p><strong> não aceito(a) </strong></p>";
}

?>