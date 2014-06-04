<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>

 
   <?php include_once 'function.php'; ?>
  
    <form action="" method="POST"> 
        <div>
            <select name="meses">
                <option value="0">SELECIONE</option>
                <?php foreach ($meses as $key => $mes): ?>
                <option value="<?php echo $key ?>"> <?php echo $mes ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <select name="datas">
                <option value="0">SELECIONE</option>
                <?php foreach ($datas as $data): ?>
                   <option value="<?php echo $data ?>"><?php echo $data ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <input type="submit" name="submit" value="submit" />
    
    </form> 
        
    <?php echo $signo; ?>

  </body>

</html>

    
    <!-- http://www.php.net/manual/pt_BR/function.filter-input.php -->