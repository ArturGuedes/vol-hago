<?php

$pagina = isset($_GET['pagina'])?$_GET['pagina']:'';

require 'inc_conexao.php';

if($pagina == "cadastrar_usuario")
{
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$data_nasc = $_POST['data_nasc'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	$profissao = $_POST['profissao'];
	$escolaridade = $_POST['escolaridade'];
	$dados_medicos = $_POST['dados_medicos'];
	$feedback = $_POST['feedback'];

	$qtd_filhos = $_POST['qtd_filhos'];
	$sexo = $_POST['sexo'];
	$estado_civil = $_POST['estado_civil'];

	//echo ($login . " " . $senha . " " . $data_nasc . " " . $nome . " " .$endereco . " " . $telefone . " " . $profissao . " " . $escolaridade . " " . $dados_medicos . " " . $feedback);

	inserir_voluntario($login, $senha, $data_nasc, $nome, $endereco, $telefone, $profissao, $escolaridade, $dados_medicos, $feedback, $qtd_filhos, $estado_civil, $sexo);
}



function inserir_voluntario($login, $senha, $data_nasc, $nome, $endereco, $telefone, $profissao, $escolaridade, $dados_medicos, $feedback, $qtd_filhos, $estado_civil, $sexo)
{
	$sql = "INSERT INTO voluntario(nome, login, senha, data_nasc, endereco, telefone, profissao, escolaridade, dados_medicos, feedback, filho, relacionamento, sexo) VALUES ('$nome', '$login','$senha','$data_nasc','$endereco','$telefone','$profissao','$escolaridade','$dados_medicos','$feedback', '$qtd_filhos', '$estado_civil', '$sexo')";

	$bd = new banco_conect();
	$link = $bd->conecta_mysql();

	#Executa no banco
	$resultado = mysqli_query($link, $sql);
	if($resultado)
	{
		?>
		<script>
			alert("Seu cadastro foi efetuado com sucesso!");
		</script>

		<?php
	}

}







?>



