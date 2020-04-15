<?php

function conexao(){

	$servidor = "localhost";
	$usuario  = "startc74_cafe";
	$senha    = "?DknYzgEtO11";
	$dbname   = "startc74_projetos";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	mysqli_set_charset( $conn, 'utf8');

	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	return $conn;
}
?>