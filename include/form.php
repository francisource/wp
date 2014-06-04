<html>
	<head>
		<title></title>
    <meta charset="utf-8" />
	</head>
	<body>

 
   <?php include_once 'function.php'; ?>
  
    <form action="" method="POST" role="form"> 
        
        
        <div class="form-group">
            <label for="nome">NOME</label>
            <input class="form-control" type="text" name="form_name" />
        </div>

        <div class="form-group">
            <label for="endereco">ENDEREÇO</label>
            <input class="form-control" type="text" name="form_adress" />
        </div>

        <div class="form-group">
            <label for="complemento">COMPLEMENTO</label>
            <input class="form-control" type="text" name="form_adressComplemento" />
        </div>

        <div class="form-group">
            <label for="bairro">BAIRRO</label>
            <input class="form-control" type="text" name="form_bairro" />
        </div>

        <div class="form-group">
            <label for="cidade">CIDADE</label>
            <input class="form-control" type="text" name="form_city" />
        </div>

        <div class="form-group">       
            <label for="cep">CEP</label>
            <input class="form-control" type="number" name="form_cep" />
        </div>

        <div class="form-group">
            <label for="telefone">TELEFONE</label>
            <input class="form-control" type="number" name="form_tel" />
        </div>

        <div class="form-group"> 
            <label for="email">E-MAIL</label>
            <input class="form-control" type="text" name="form_email" />
        </div>    
            
        <div class="form-group">
            <label for="sexo">SEXO</label>
            <input class="form-control" type="radio" name="form_sexoMale" />Masculino
            <input class="form-control" type="radio" name="form_sexoFamele" />Feminino
        </div>

        <div class="form-group">    
            <label for="estadoCivil">ESTADO CIVIL</label>
            <select class="form-control" name="form-estadoCivil">
                <option value="">SELECIONE
                </option>
                <option value="solteiro">Solteiro(a)</option>
                <option value="solteiro">Casado(a)</option>
                <option value="solteiro">Divorciado(a)</option>
                <option value="solteiro">Viúvo(a)</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input class="form-control" type="text" name="form_cpf" />
        </div>

        <div>
            <label for="rg">RG</label>
            <input class="form-control" type="text" name="form_rg" />
        </div>

        <div class="form-group textarea">
            <label for="mensagem">MENSAGEM</label>
            <textarea class="campo-text" name="mensagem"></textarea>
        </div>
        
        <input type="submit" name="submit" value="submit" />
   
    </form> 
        
    
  </body>

</html>