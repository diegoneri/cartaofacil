<?php
include "config.php";

$codigo_saida = $_POST['codigo_saida'];
$descricao_saida = $_POST['descricao_saida'];

if(isset($_POST["ativo_saida"])){
	$ativa_saida = "s";
}else{
	$ativa_saida = "n";
}

if($_GET['funcao'] == "cadastrar_saida"){
	$cadastrar_categoria = mysql_query("INSERT INTO categorias_saida(id, descricao, ativa) VALUES ('$codigo_saida', '$descricao_saida', '$ativa_saida')");
	header('Location: index.php?pg=categorias_saida');
}


//categoria de entrada

$descricao_entrada = $_POST['descricao_entrada'];
$codigo_entrada = $_POST['codigo_entrada'];
if(isset($_POST["ativo_entrada"])){
	$ativa_entrada = "s";
}else{
	$ativa_entrada = "n";
}

if($_GET['funcao'] == "cadastrar_entrada"){
	$cadastar_categoria_entrada = mysql_query("INSERT INTO categorias_entrada(id, descricao, ativa) VALUES ('$codigo_entrada', '$descricao_entrada', '$ativa_entrada')");
	header('Location: index.php?pg=categorias_entrada');
}

?>