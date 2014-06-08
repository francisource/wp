<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/main.js" type="text/javascript"></script>
    <link href="../css/estilo.css" rel="stylesheet">
	</head>
	<body>

 
   <?php include_once 'function/function_horoscopo.php'; ?>
  
    <form action="" method="POST" role="form" class="form galtform"> 
        
        
        <div class="form-group">
            <label>Data</label><input class="form-control required" type="number" name="datas" max="31" name="datas" step="0.01" />
        </div>
        
        <div class="form-group"><label>mês</label>
            <select class="form-control required" name="meses">
                <option value="0">SELECIONE</option>
                <?php foreach ($meses as $key => $mes): ?>
                <option value="<?php echo $key ?>"> <?php echo $mes ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
     
        <input class="button-form" type="submit" name="submit" value="submit" />
   
    </form> 
        
    <?php echo $signo; ?>

  </body>

</html>

    
    <!-- http://www.php.net/manual/pt_BR/function.filter-input.php -->