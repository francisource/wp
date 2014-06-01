<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>


    
    

    <?php $meses = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'); ?>


    <?php

   function $signo() {
    if(($data > 0) and ($data < 21)){
        echo "Capricórnio";
      }else{
         echo "Aquário";
    }
   }

    $data = 10;
    $mes = "fevereiro";
    
    switch ($mes){ 
       
    case 'janeiro':
            echo $signo();
            break;
    case 'fevereiro':
            echo $signo;
            break;
    case 'março':
            echo $signo;
            break;
    case 'abril':
            echo $signo;
            break;
    case 'maio':
            echo $signo;
            break;
    case 'junho':
            echo $signo;
            break;
    case 'julho':
            echo $signo;
            break;
    case 'agosto':
            echo $signo;
            break;
    case 'setembro':
            echo $signo;
            break;
    case 'outubro':
            echo $signo;
            break;
    case 'novembro':
            echo $signo;
            break;
    case 'dezembro':
            echo $signo;
            break; 
            default;
            echo "";
    }



?>


   <div>
        <select name="mes">
            <option value="0">SELECIONE</option>
                <?php foreach ($meses as $mes): ?>
                   <option data-cidade="<?php echo $mes->parent ?>" value="<?php echo $mes->term_id ?>">
                    <?php echo $mes->name ?></option>
                <?php endforeach; ?>
        </select>
    </div>


    <div>
        <select name="data">
            <option value="0">SELECIONE</option>
                <?php foreach ($datas as $data): ?>
                   <option data-cidade="<?php echo $data->parent ?>" value="<?php echo $data->term_id ?>">
                    <?php echo $data->name ?></option>
                <?php endforeach; ?>
        </select>
    </div>

</body>

</html