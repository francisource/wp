<?php

$age = $_POST['age'];
$sex = $_POST['sex'];
$name = $_POST['name'];

   switch ($sex) {
   	case 'female':
   		echo  "aceita";
   		break;
   	case 'male':
   		echo "não aceita";
   		break;
   	
   	default:
   }

?>