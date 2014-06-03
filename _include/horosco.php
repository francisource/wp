<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>

 <?php

$name ="";

     $meses = array( 'janeiro'=>'Janeiro', 
                     'fevereiro'=>'Fevereiro',         
                     'marco'=>'Março',
                     'abril'=>'Abril',
                     'maio'=>'Maio',
                     'junho'=>'Junho',
                     'julho'=>'Julho',
                     'agora'=>'Agosto',
                     'setembro'=>'Setembro',
                     'outubro'=>'Outubro',
                     'novembro'=>'Novembro',
                     'dezembro'=>'Dezembro'); 


    $datas = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31 );

?>
        
  
    
   
       <form action="horosco.php" method="POST"> 
        <div>
        <select name="m">
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
           
           <label> nome:</label><input type="text" name="name" />
           <input type="submit" name="submit" value="submit" />
           
  </form> 
        
        
<?php
    $signo ="";

 switch ("meses") :
    case 'janeiro':
        $signo = ("datas" > 0) && ("data" < 21) ? "Capricórno" : "Aquário";
        break;
    case 'fevereiro':
        $signo = ($data > 0) && ($data < 20) ? "Aquário" : "Peixes";
        break;
    case 'marco':
        $signo = ($data > 0) && ($data < 21) ? "Peixes" : "Áries";
        break;
    case 'abril':
        $signo = ($data > 0) && ($data < 21) ? "Áries" : "Touro";
        break;
    case 'maio':
        $signo = ($data > 0) && ($data < 21) ? "Touro" : "Gêmeos";
        break;
    case 'junho':
        $signo = ($data > 0) && ($data < 22) ? "Gêmeos" : "Câncer";
        break;
    case 'julho':
        $signo = ($data > 0) && ($data < 21) ? "Câncer" : "Leão";
        break;
    case 'agosto':
        $signo = ($data > 0) && ($data < 23) ? "Leão" : "Virgem";
        break;
    case 'setembro':
        $signo = ($data > 0) && ($data < 23) ? "Virgem" : "Libra";
        break;
    case 'outubro':
        $signo = ($data > 0) && ($data < 23) ? "Libra" : "Escorpião";
        break;
    case 'novembro':
        $signo = ($data > 0) && ($data < 22) ? "Escorpião" : "Sargitário";
        break;
    case 'dezembro':
        $signo = ($data > 0) && ($data < 22) ? "Sagitário" : "Capricórnio";
        break; 
        default;
    endswitch;



?>
      <?php echo $signo; ?>
        
     <!-- <?php echo $_POST[""]; ?> -->

  </body>

</html>

    
    <!-- http://www.php.net/manual/pt_BR/function.filter-input.php -->