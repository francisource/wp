<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>

 
   <?php include_once 'function.php'; ?>
  
    <form action="" method="POST" role="form"> 
        
        
        <div class="form-group">
            <label>Nome:</label><input class="form-control" type="text" name="name" />
            <label>Sexo:</label>
            <input class="form-control" type="radio" name="sexMale" value"masculino"/>Masculino
            <input class="form-control" type="radio" name="sexFamele" value"masculino"/>Feminino
            <label>Idade:</label><input class="form-control" type="number" name="age" /> 
        </div>
        
     
        <input type="submit" name="submit" value="submit" />
   
    </form> 
        

  </body>

</html>