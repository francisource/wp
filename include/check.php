<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>
 
 

  </body>

</html>

<p class="col-md-10 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1">

$age = $_POST['age'];<br>
$name = $_POST['name'];<br>
$sex= "";<br>

 if (empty($_POST["sex"])) {<br>
     $sexErr = "Sex is required";<br>
   } else {<br>
     $sex = test_input($_POST["sex"]);<br>
   }<br>
   
function test_input($data) {<br>
   $data = trim($data);<br>
   $data = stripslashes($data);<br>
   $data = htmlspecialchars($data);<br>
   return $data;<br>
}<br>

if(($sex == 'female') && ($age < 24)) {<br>
  echo "O nome digitado foi, ".$name;<br>
  echo "aceito(a)";<br>
}else{<br>
  echo "não aceito(a)";<br>
}

</p>
