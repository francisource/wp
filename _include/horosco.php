<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>


  <?php
    $data = 10;
    $mes = 'fevereiro';
    
    switch ($mes) :
       case 'Janeiro':
           if(($data > 0) && ($data < 21)){
               echo "Capricórnio";
           }else{
               echo "Aquário";
               }
            break;
    case 'fevereiro':
           if(($data > 0) && ($data < 20)){
               echo "Aquário";
           }else{
               echo "Peixes";
               }
            break;
    case 'março':
           if(($data > 0) && ($data < 21)){
               echo "Peixes";
           }else{
               echo "Áries";
               }
            break;
    case 'abril':
           if(($data > 0) && ($data < 21)){
               echo "Áries";
           }else{
               echo "Touro";
               }
            break;
    case 'maio':
           if(($data > 0) && ($data < 21)){
               echo "Touro";
           }else{
               echo "Gêmeos";
               }
            break;
    case 'junho':
           if(($data > 0) && ($data < 22)){
               echo "Gêmeos";
           }else{
               echo "Câncer";
               }
            break;
    case 'julho':
           if(($data > 0) && ($data < 21)){
               echo "Câncer";
           }else{
               echo "Leão";
               }
            break;
    case 'agosto':
           if(($data > 0) && ($data < 23)){
               echo "Leão";
           }else{
               echo "Virgem";
               }
            break;
    case 'setembro':
           if(($data > 0) && ($data < 23)){
               echo "Virgem";
           }else{
               echo "Libra";
               }
            break;
    case 'outubro':
           if(($data > 0) && ($data < 23)){
               echo "Libra";
           }else{
               echo "Escorpião";
               }
            break;
    case 'novembro':
           if(($data > 0) && ($data < 22)){
               echo "Escorpião";
           }else{
               echo "Sagitário";
               }
            break;
    case 'dezembro':
           if(($data > 0) && ($data < 22)){
               echo "Sagitário";
           }else{
               echo "Capricórnio";
               }
            break; 
            default;
    endswitch;
?>

  </body>

</html
