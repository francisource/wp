<!-- Faculdade Unirb-Salvador
	 4ª Semestre de analise e desenvolvimento de sistemas 2014.1
	 início: 31-05-2014
	 autor: Áquila Mota e Francis Cruz
	-->



<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="html/text">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Fecha final link bootstrap -->

	<link href="css/estilo.css" rel="stylesheet">
	<link href="css/style-calculator.css" rel="stylesheet">
	<script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/calculator.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,700,400,800' rel='stylesheet' type='text/css'>



	<title>Faculdade Unirb</title>
</head>
<body class="content-body-one clearfix">
	
    <!-- Seção da home --> 
	<section class="content bg-content-one home clearfix">

		<!-- Menu fixo do da página -->
		<nav class="nav container">
			<ul class="row col-md-10 col-md-offset-3">
				<li>
					<a href="#">Home</a>	
			    </li>
			    <li>
			    	<a href="#">Atividade 1</a>
			    </li>
			    <li>
			    	<a href="#">Atividade 2</a>
			    </li>
			    <li>
			    	<a href="#">Atividade 3</a>
			    </li>
			    <li>
			    	<a href="#">Atividade 4</a>
			    </li>
			    <li>
			    	<a href="#">Sobre</a>
			    </li>
		    </ul>
		</nav>

        <!-- campo do conteúdo e texto -->
		
		<div class="content-info container">
			<p class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">Esse trabalho serve como base para ser fixado o conhecimento de toda as tecnologias, frameworks, linguagens e etc      visto em sala de aula, e aprimoramento delas.<br> Feito com bastante dedicação, usando ao máximo todos recursos necessário para torna uma página simples, em uma página sastifatória.<br>  O principal <strong>objetivo</strong> desse trabalho é executar com bastante eficiencia todas as atividades dadas, são no total de quatro atividades, no qual o conteúdo principal a ser analisado é o <a href="" class="info-a"><strong>php</strong></a>.
			</p>

			<a href="" target="_blank" class="content-img-php col-md-5 col-sm-8 col-md-offset-5 col-xs-offset-4 col-xs-8 col-sm-offset-4"><img src="img/fante.png" alt="php"></a>
			<h3 class="sub-title col-md-4 col-md-offset-1">O <strong>PHP</strong></h3>
			
			<p class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">É uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na <a href="" class="info-a">World Wide Web</a>. Figura entre as primeiras linguagens passíveis de inserção em documentos HTML, dispensando em muitos casos o uso de arquivos externos para eventuais processamentos de dados. O código é interpretado no lado do servidor pelo módulo PHP, que também gera a página web a ser visualizada no lado do cliente.
			<br>
			<br><a href="" class="info-a pull-right">"Wikipédia, a enciclopédia livre."</a></p>
			
		</div>

		<!-- /.content.info < home -->


	</section>

	<!-- /.home -->
		

    <!-- campo com o ínicio da primeira atividade -->
	<section class="content content-atividade-um bg-content-two">
		<article class="sub-content container">

			
        <?php include_once '/include/function/function_horoscopo.php'; ?>
        <h3 class="col-md-12">HORÓSCOPO</h3>

        <p class="col-md-12"> Preencha os campos abaixo, com o dia e o mês de seu nascimento para saber qual é o seu signo. </p>

		<form action="" method="POST" id="horo-form" role="form" class="form form-horoscopo  col-md-12"> 
        
        <div class="form-group pull-left col-md-offset-3 col-md-2">
            <label>Dia</label><input class="form-control area-min-number required" type="number" name="datas" max="31" step="0.01" value=" "/>
        </div>
        
        <div class="form-group col-md-3"><label>Mês</label>
            <select class="form-control area-name" name="meses">
                <option value="0">SELECIONE</option>
                <?php foreach ($meses as $key => $mes): ?>
                <option class="required" value="<?php echo $key ?>"> <?php echo $mes ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
         
        <div class="form-group"> 
        	<input class="button-form btn form1" type="submit" name="submit" value="Enviar" />
        </div> 
    </form> 
    

    <p class="resposta"> Seu signo é, <strong class="upper"><?php echo $signo; ?>.</strong> </p>

    <p class="col-md-4 col-md-offset-4 text-p" >Para visualizar o código clique <a href="#janela1" class="button-modal">Aqui</a></p>
			
<div class="window" id="janela1">
    <a href="#" class="fechar">X Fechar</a>
    <div class="window2" id="janela2"></div>
</div>
 
 
<!-- mascara para cobrir o site -->  
<div id="mascara"></div>
		</article>



	</section>

	<section class="content bg-content-one check-form-form">
		<article class="sub-content container ">
			
	    <h3 class="col-md-12">Verificação</h3>

        <p class="col-md-12"> Preencha os campos abaixo, para saber se você foi aceito ou não. </p>

  
    <form action="" method="POST" name"check" class="form-check col-md-offset-2"> 
        
        <div class="form-group col-md-3">
            <label>Nome:</label><input class="form-control area-name" type="text" name="name" />
        </div>
        <div class="form-group col-md-2">
            <label>Sexo:</label>
             <input class="form-control radio" type="radio" name="sex" <?php if (isset($sex) && $sex=="male") echo "checked";?>  value="male"><p class="p-radio">Masculino</p>
             <input class="form-control radio" type="radio" name="sex" <?php if (isset($sex) && $sex=="female") echo "checked";?>  value="female"><p class="p-radio">Feminino</p>
        </div>
        <div class="form-group col-md-2">
            <label>Idade:</label><input class="form-control area-number" type="number" name="age" /> 
        </div>
        
        <input class="btn button-form form2" type="submit" name="submit" value="Enviar" />
   
    </form> 

    <div class="col-md-12 check-space"><?php include_once 'include/function/function_check.php'; ?> </div>
	<p class="col-md-4 col-md-offset-4 text-p" >Para visualizar o código clique <a href="#janela1" class="button-modal">Aqui</a></p>
		</article>
	</section>

	<section class="content bg-content-two clearfix">
		<article class="sub-content">
            <h3 class="col-md-12">Calculadora Maluca</h3>
			<div id="calculator">
	<!-- Screen and clear key -->
	<div class="top">
		<span class="clear">C</span>
		<div class="screen"></div>
	</div>
	
	<div class="keys">
		<!-- operators and other keys -->
		<span>7</span>
		<span>8</span>
		<span>9</span>
		<span class="operator">+</span>
		<span>4</span>
		<span>5</span>
		<span>6</span>
		<span class="operator">-</span>
		<span>1</span>
		<span>2</span>
		<span>3</span>
		<span class="operator">÷</span>
		<span>0</span>
		<span>.</span>
		<span class="eval">=</span>
		<span class="operator">x</span>
	</div>
</div>
			<a href="#"></a>
		</article>
	</section>

	<section class="content bg-content-one form-content">
		<article class="sub-content container">

	 <h3 class="col-md-12">Formulário</h3>

        <p class="col-md-12"> Preencha os campos abaixo, para que possamos entrar em contato com você. </p>

  
    <form action="" method="POST" role="form" class="col-md-offset-2 col-md-10 form-form"> 
        
        
        <div class="form-group">
            <label for="nome">NOME</label>
            <input class="form-control  area-big form-name required-form3" type="text" name="form_name" />
        </div>

        <div class="form-group">
            <label for="endereco">ENDEREÇO</label>
            <input class="form-control area-big required-form3" type="text" name="form_adress" />
        </div>

        <div class="form-group pull-left space-group">
            <label for="complemento">COMPLEMENTO</label>
            <input class="form-control area-min-number required-form3" type="text" name="form_adressComplemento" />
        </div>

        <div class="form-grou pull-left space-group">
            <label for="bairro">BAIRRO</label>
            <input class="form-control area-small required-form3" type="text" name="form_bairro" />
        </div>

        <div class="form-group">
            <label for="cidade">CIDADE</label>
            <input class="form-control area-small required-form3" type="text" name="form_city" />
        </div>

        <div class="form-group pull-left space-group">       
            <label for="cep">CEP</label>
            <input class="form-control area-small required-form3" type="number" name="form_cep" />
        </div>

        <div class="form-group">
            <label for="telefone">TELEFONE</label>
            <input class="form-control area-small required-form3" type="number" name="form_tel" />
        </div>

        <div class="form-group"> 
            <label for="email">E-MAIL</label>
            <input class="form-control area-big required-form3" type="text" name="form_email" />
        </div>    
            
        <div class="form-group">
            <label for="sexo">SEXO</label>
            <input class="form-control radio " type="radio" name="form_sexo" /><p>Masculino</p>
            <input class="form-control radio " type="radio" name="form_sexo" /><p>Feminino</p>
        </div>

        <div class="form-group pull-left space-group">    
            <label for="estadoCivil">ESTADO CIVIL</label>
            <select class="form-control area-name required-form3" name="form-estadoCivil">
                <option value="">SELECIONE
                </option>
                <option value="solteiro" >Solteiro(a)</option>
                <option value="solteiro" >Casado(a)</option>
                <option value="solteiro" >Divorciado(a)</option>
                <option value="solteiro" >Viúvo(a)</option>
            </select>
        </div>

        <div class="form-group pull-left space-group">
            <label for="cpf">CPF</label>
            <input class="form-control area-small required-form3" type="text" name="form_cpf" />
        </div>

        <div class="form-group">
            <label for="rg">RG</label>
            <input class="form-control area-small required-form3" type="text" name="form_rg" />
        </div>

        <div class="form-group textarea">
            <label for="mensagem">MENSAGEM</label>
            <textarea class="campo-text maxlength required-form3" name="mensagem" maxlength="350"></textarea>
        </div>
        
        <div class="form-group"> 
        	<input class="button-form btn form3" type="submit" name="submit" value="Enviar" />
        </div> 
   
    </form> 


    <?php $form_name = isset($_POST['form_name']) ? $_POST['form_name'] : ''; ?>

    <?php echo "<p> <strong>".$form_name."</strong> EM BREVE ENTRAREMOS EM CONTATO. OBRIGADO(A) PELA COLABORAÇÃO. </p>" ?>

			

			<a href="#"></a>
		</article>
	</section>

	<section class="content">
		<footer>
			<p>Feito com muito <span>♥</span> e carinho, por Francis Cruz & Áquila Mota.</p>
		</footer>
	</section>
</body>
</html>