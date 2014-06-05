<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>

 
   <?php include_once 'function/function_check.php'; ?>
  
    <form action="" method="POST" role="form"> 
        
        
        <div class="form-group">
            <label>Nome:</label><input class="form-control" type="text" name="name" />
        </div>

        <div class="form-group">
            <label>Sexo:</label>
            <input class="form-control" type="radio" name="sex" value"male"/>Masculino
            <input class="form-control" type="radio" name="sex" value"female"/>Feminino
        </div>
        
        <div class="form-group">
            <label>Idade:</label><input class="form-control" type="number" name="age" /> 
        </div>
        
     
        <input type="submit" name="submit" value="submit" />
   
    </form> 
        

  </body>

</html>