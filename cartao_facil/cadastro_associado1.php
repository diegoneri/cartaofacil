<?php
include "config.php";

$nome = $_POST['nome'];
$unidade = $_POST['unidade'];
$filial = $_POST['filial'];
$nm_matricula = $_POST['nm_matricula'];
$vendedor = $_POST['vendedor'];
$nm_identidade = $_POST['nm_identidade'];
$cpf_responsavel = $_POST['cpf_responsavel'];
$cep = $_POST['cep'];
$cpf_segurado = $_POST['cpf_segurado'];
$email = $_POST['email'];
$residencia_propria = $_POST['residencia_propria'];
$id_cidade = $_POST['id_cidade'];
$dt_nasc_segurado = $_POST['dt_nasc_segurado'];
$dt_filiacao = $_POST['dt_filiacao'];
$nm_segurado = $_POST['nm_segurado'];
$endereco = $_POST['endereco'];
$dt_nasc = $_POST['dt_nasc'];
$tel_responsavel = $_POST['tel_responsavel'];
$tel_parente = $_POST['tel_parente'];
$id_bairro = $_POST['id_bairro'];

if($_GET['funcao'] == "cadastrar"){
	$sql_into = mysql_query("INSERT INTO associado(
	nome,
	unidade,
	filial,
	nm_matricula,
	vendedor,
	nm_identidade,
	cpf_responsavel,
	cep,
	cpf_segurado,
	email,
	id_cidade,
	dt_nasc_segurado,
	dt_filiacao,
	nm_segurado,
	endereco,
	dt_nasc,
	tel_responsavel,
	tel_parente,
	id_bairro
	) VALUES (
	'$nome',
	'$unidade',
	'$filial',
	'$nm_matricula',
	'$vendedor',
	'$nm_identidade',
	'$cpf_responsavel',
	'$cep',
	'$cpf_segurado',
	'$email',
	'$id_cidade',
	'$dt_nasc_segurado',
	'$dt_filiacao',
	'$nm_segurado',
	'$endereco',
	'$dt_nasc',
	'$tel_responsavel',
	'$tel_parente',
	'$id_bairro'
	)");
	header ('Location: index.php?pg=cadastro');
}else{
	echo "falhou";
}


?>