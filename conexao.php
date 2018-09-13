<?php

class db {
	private $host = 'localhost';
	private $usuario = 'root';
	private $senha = '';
	private $database = 'physis';

	public function conecta_mysql() {
		//criar a conexao
		$conectar = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($conectar, 'utf8');

		//verficar se houve erro de conexão
		if(mysqli_connect_errno()) {
			echo 'Erro ao tentar se conectar com o Banco de Dados MySQL: '.mysqli_connect_error();
			die();	
		}

		return $conectar;
	}

}
?>