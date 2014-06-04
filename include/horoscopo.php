<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>

 
   <?php include_once 'function.php'; ?>
  
    <form action="" method="POST" role="form"> 
        
        
        <div class="form-group">
            <label>Data</label><input class="form-control" type="number" name="datas" />
        </div>
        
        <div class="form-group">
            <select class="form-control" name="meses">
                <option value="0">SELECIONE</option>
                <?php foreach ($meses as $key => $mes): ?>
                <option value="<?php echo $key ?>"> <?php echo $mes ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
     
        <input type="submit" name="submit" value="submit" />
   
    </form> 
        
    <?php echo $signo; ?>

  </body>

</html>

    
    <!-- http://www.php.net/manual/pt_BR/function.filter-input.php -->