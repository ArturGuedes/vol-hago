<?php

$pdo = new PDO("mysql:host=localhost;dbname=hago", 'root', '');
$armazena = array();

$pagina = isset($_GET['pagina'])?$_GET['pagina']:'';

if($_GET['consultar'] == 'login_consulta')
{
$login = $_GET['login'];
	$sq = $pdo->prepare("SELECT * FROM voluntario WHERE login = :login");
	$sq->bindValue(":login", $login, PDO::PARAM_INT);
	$sq->execute();

	$i = 0;
	
	$armazena['qtd'] = $sq->rowCount();

	while($ln = $sq->fetchObject()){
		$armazena['login'][$i] = utf8_encode($ln->login);
		$armazena['nome'][$i] = utf8_encode($ln->nome);
		$armazena['data_nasc'] = utf8_encode($ln->data_nasc);
		$armazena['escolaridade'] = utf8_encode($ln->escolaridade);
		$armazena['endereco'] = utf8_encode($ln->endereco);
		$armazena['senha'] = utf8_encode($ln->senha);
		$i++;
	}

}
elseif ($pagina == 'pesquisar_usuario')
{
	$login = $_GET['login'];
	$senha = $_GET['senha'];

	$sq = $pdo->prepare("SELECT * FROM voluntario WHERE login = :login AND senha = :senha");
	$sq->bindValue(":login", $login, PDO::PARAM_INT);
	$sq->bindValue(":senha", $senha, PDO::PARAM_INT);
	$sq->execute();

	$i = 0;
	
	$armazena['qtd'] = $sq->rowCount();

	while($ln = $sq->fetchObject()){
		$armazena['login'][$i] = utf8_encode($ln->login);
		$armazena['nome'][$i] = utf8_encode($ln->nome);
		$armazena['data_nasc'] = utf8_encode($ln->data_nasc);
		$armazena['escolaridade'] = utf8_encode($ln->escolaridade);
		$armazena['endereco'] = utf8_encode($ln->endereco);
		$armazena['senha'] = utf8_encode($ln->senha);
		$i++;
	}

}

die(json_encode($armazena));

?>
