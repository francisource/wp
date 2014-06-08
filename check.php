<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>
 
 <?php include_once 'function/function_check.php'; ?> 
  
    <form action="check.php" method="POST" name"check" id="check"> 
        
        
        <div class="form-group">
            <label>Nome:</label><input class="form-control" type="text" name="name" />
        </div>


             <input type="radio" name="sex" <?php if (isset($sex) && $sex=="male") echo "checked";?>  value="male">Male
             <input type="radio" name="sex" <?php if (isset($sex) && $sex=="female") echo "checked";?>  value="female">Female
             

        
        <div class="form-group">
            <label>Idade:</label><input class="form-control" type="number" name="age" /> 
        </div>
        
     
        <input type="submit" name="submit" value="submit" />
   
    </form> 

  </body>

</html>