<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/main.js" type="text/javascript"></script>
    <link href="../css/estilo.css" rel="stylesheet">
	</head>
	<body>

 
   
  
    <form action="" method="POST" role="form" class="form galtform col-md-offset-2"> 
        
        
        <div class="form-group">
            <label>Data</label><input class="form-control required" type="number" name="datas" max="31" step="0.01" />
        </div>
        
        <div class="form-group"><label>mês</label>
            <select class="form-control" name="meses">
                <option value="0">SELECIONE</option>
                <?php foreach ($meses as $key => $mes): ?>
                <option class="required" value="<?php echo $key ?>"> <?php echo $mes ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
     
        <input class="button-form" type="submit" name="submit" value="submit" />
   
    </form> 
        
    <?php echo $signo; ?>

  </body>

</html<p class="col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-12 col-xs-offset-1"> $meses = <strong style="color: blue"> array</strong> (<br>
                     'janeiro'=>'Janeiro',
                     'fevereiro'=>'Fevereiro',     
                     'marco'=>'Março',
                     'abril'=>'Abril',
                     'maio'=>'Maio',
                     'junho'=>'Junho',
                     'julho'=>'Julho',<br>
                     'agora'=>'Agosto',
                     'setembro'=>'Setembro',
                     'outubro'=>'Outubro',
                     'novembro'=>'Novembro',
                     'dezembro'=>'Dezembro');
            </p>
            
            <p class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-12 col-xs-offset-1"> $mes = $_POST['meses'];<br>
                $data = $_POST['datas'];<br>
                $signo;<br>
            </p>
            
            <p class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-12 col-xs-offset-1">switch ($mes) :<br>
    case 'janeiro':<br>
        $signo = ($data > 0) && ($data < 21) ? "Capricórno" : "Aquário";<br>
        break;<br>
    case 'fevereiro':<br>
        $signo = ($data > 0) && ($data < 20) ? "Aquário" : "Peixes";<br>
        break;<br>
    case 'marco':<br>
        $signo = ($data > 0) && ($data < 21) ? "Peixes" : "Áries";<br>
        break;<br>
    case 'abril':<br>
        $signo = ($data > 0) && ($data < 21) ? "Áries" : "Touro";<br>
        break;<br>
    case 'maio':<br>
        $signo = ($data > 0) && ($data < 21) ? "Touro" : "Gêmeos";<br>
        break;<br>
    case 'junho':<br>
        $signo = ($data > 0) && ($data < 22) ? "Gêmeos" : "Câncer";<br>
        break;<br>
    case 'julho':<br>
        $signo = ($data > 0) && ($data < 21) ? "Câncer" : "Leão";<br>
        break;<br>
    case 'agosto':<br>
        $signo = ($data > 0) && ($data < 23) ? "Leão" : "Virgem";<br>
        break;<br>
    case 'setembro':<br>
        $signo = ($data > 0) && ($data < 23) ? "Virgem" : "Libra";<br>
        break;<br>
    case 'outubro':<br>
        $signo = ($data > 0) && ($data < 23) ? "Libra" : "Escorpião";<br>
        break;<br>
    case 'novembro':<br>
        $signo = ($data > 0) && ($data < 22) ? "Escorpião" : "Sargitário";<br>
        break;<br>
    case 'dezembro':<br>
        $signo = ($data > 0) && ($data < 22) ? "Sagitário" : "Capricórnio";<br>
        break; <br>
        default;<br>
    endswitch;</p>
<p class="col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-12 col-xs-offset-1"> $meses = <strong style="color: blue"> array</strong> (<br>
                     'janeiro'=>'Janeiro',
                     'fevereiro'=>'Fevereiro',     
                     'marco'=>'Março',
                     'abril'=>'Abril',
                     'maio'=>'Maio',
                     'junho'=>'Junho',
                     'julho'=>'Julho',<br>
                     'agora'=>'Agosto',
                     'setembro'=>'Setembro',
                     'outubro'=>'Outubro',
                     'novembro'=>'Novembro',
                     'dezembro'=>'Dezembro');
            </p>
            
            <p class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-12 col-xs-offset-1"> $mes = $_POST['meses'];<br>
                $data = $_POST['datas'];<br>
                $signo;<br>
            </p>
            
            <p class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-1 col-xs-12 col-xs-offset-1">switch ($mes) :<br>
    case 'janeiro':<br>
        $signo = ($data > 0) && ($data < 21) ? "Capricórno" : "Aquário";<br>
        break;<br>
    case 'fevereiro':<br>
        $signo = ($data > 0) && ($data < 20) ? "Aquário" : "Peixes";<br>
        break;<br>
    case 'marco':<br>
        $signo = ($data > 0) && ($data < 21) ? "Peixes" : "Áries";<br>
        break;<br>
    case 'abril':<br>
        $signo = ($data > 0) && ($data < 21) ? "Áries" : "Touro";<br>
        break;<br>
    case 'maio':<br>
        $signo = ($data > 0) && ($data < 21) ? "Touro" : "Gêmeos";<br>
        break;<br>
    case 'junho':<br>
        $signo = ($data > 0) && ($data < 22) ? "Gêmeos" : "Câncer";<br>
        break;<br>
    case 'julho':<br>
        $signo = ($data > 0) && ($data < 21) ? "Câncer" : "Leão";<br>
        break;<br>
    case 'agosto':<br>
        $signo = ($data > 0) && ($data < 23) ? "Leão" : "Virgem";<br>
        break;<br>
    case 'setembro':<br>
        $signo = ($data > 0) && ($data < 23) ? "Virgem" : "Libra";<br>
        break;<br>
    case 'outubro':<br>
        $signo = ($data > 0) && ($data < 23) ? "Libra" : "Escorpião";<br>
        break;<br>
    case 'novembro':<br>
        $signo = ($data > 0) && ($data < 22) ? "Escorpião" : "Sargitário";<br>
        break;<br>
    case 'dezembro':<br>
        $signo = ($data > 0) && ($data < 22) ? "Sagitário" : "Capricórnio";<br>
        break; <br>
        default;<br>
    endswitch;</p>

    
    <!-- http://www.php.net/manual/pt_BR/function.filter-input.php -->