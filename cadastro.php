<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
   <meta name="mobile-web-app-capable" content="yes">
   <meta name="theme-color" content="#00b5ff">

   <title>Cadastro</title>
   <script type="text/javascript" src="config.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="assets/css/cadastro.css">
</head>

<body onload="repassaValores();">
   <div class="content">

    <form class="card">

        <div class="espaco">
            <img class="cadastre" src="assets/imgs/cadastro.png">
        </div>

        <div class="input-group input-group-sm mb-3">          

        </div>

<div class="input-group input-group-sm mb-1">    
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">E-mail: </span>
    </div>      
    <input type="e-mail" id="login" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite...">
</div>


    <div class="input-group input-group-sm mb-1">    
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Senha: </span>
    </div>      
    <input type="password" id="senha" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite...">
</div>

<div class="input-group input-group-sm mb-1">    
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Senha: </span>
    </div>      
    <input type="password" id="senha_repeat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite...">
</div>



<div class="input-group input-group-sm mb-1"> 
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Nome: </span>
</div>               
<input type="text" id="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite...">
</div>


<div class="input-group input-group-sm mb-1">    
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Data de Nascimento: </span>
</div>              
<input type="date" id="data_nasc" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite...">
</div>



<select class="custom-select" id="estado_civil">
    <option selected>Selecione o estado civil</option>
    <option value="1">Solteiro(a)</option>
    <option value="2">Divorciado(a)</option>
    <option value="3">Casado(a)</option>
</select> 

<select class="custom-select" id="sexo">
    <option selected>Selecione o seu sexo</option>
    <option value="1">Selecione o sexo</option>
    <option value="2">Feminino</option>
    <option value="3">Masculino</option>
</select>

<div class="input-group input-group-sm mb-1">  
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Endereço: </span>
</div>         
<input type="text" id="endereco" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite seu endereço...">
</div>

<div class="input-group input-group-sm mb-1">  
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Telefone: </span>
</div>            
<input type="text" id="telefone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite seu telefone...">
</div>

<div class="input-group input-group-sm mb-1">        
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Profissão: </span>
</div>      
<input type="text" id="profissao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite sua profissão...">
</div>

<div class="input-group input-group-sm mb-1">     
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Escolaridade: </span>
</div>         
<input type="text" id="escolaridade" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite sua escolaridade...">
</div>

<div class="input-group input-group-sm mb-1">  
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Dados médicos: </span>
</div>            
<input type="text" id="dados_medicos" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite se possui algum problema de saúde...">
</div>

<div class="ab">
<span>Como soube do voluntariado:</span>
</div>    
<select class="custom-select" id="feedback">
   <option>Selecione uma das opções</option>
   <option>Internet</option>
   <option>Palestras</option>
   <option>Jornal</option>
   <option>Amigos</option>
   <option>Palestras</option>
   <option>Televisão</option>
</select>

<div class="radios">
    <label>Possui filhos? </label><p>
        Sim <input type="radio" id="sim" name="sim"> Não <input type="radio" id="nao" name="nao"><p>

            <div class="input-group input-group-sm mb-3">  
              <div class="input-group-prepend">
                <span id="lbl" class="input-group-text" id="basic-addon1">Quant. filhos: </span>
            </div>            
            <input type="text" id="qtd_filhos" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Digite se possui algum problema de saúde...">
        </div>

        
    </div>



    <button onclick="cadastrar();" class="btn-primary">Entrar</button>
</form>
</div>
<div id="exibicao">

</div>
<script>
</script>
</body>

</html>