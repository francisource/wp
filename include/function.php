 <?php


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
     
     
     $mes = $_POST['meses'];
     $data = $_POST['datas'];
     $signo;

 switch ($mes) :
    case 'janeiro':
        $signo = ($data > 0) && ($data < 21) ? "Capricórno" : "Aquário";
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