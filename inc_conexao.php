<?php 

class banco_conect
{

	private $host = 'localhost';
	private $usuario = 'root';
	private $senha = '';
	private $dataBase = 'hago';

	public function conecta_mysql()
	{

		$conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->dataBase);
		mysqli_set_charset($conexao, 'utf-8');
		if(mysqli_connect_errno())
		{
			echo 'Erro ao tentar se conectar com o banco de dados: '.mysqli_connect_erro();
		}
		return $conexao;
	}
}

?>