<?php
include "config.php";

$unidade = $_POST['unidade'];
$filial = $_POST['filial'];
$num_matricula = $_POST['num_matricula'];
$dt_filiacao = $_POST['dt_filiacao'];
$vendedor = $_POST['vendedor'];
$nome = $_POST['nome'];
$num_identidade = $_POST['num_identidade'];
$endereco = $_POST['endereco'];
$dt_nasc = $_POST['dt_nasc'];
$cpf_responsavel = $_POST['cpf_responsavel'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$tel_responsavel = $_POST['tel_responsavel'];
$referencia = $_POST['referencia'];
$tel_parente = $_POST['tel_parente'];
$email = $_POST['email'];
$nm_segurado = $_POST['nm_segurado'];
$cpf_segurado = $_POST['cpf_segurado'];
$dt_nasc_segurado = $_POST['dt_nasc_segurado'];

//dependente
$nome_dependente = $_POST['nome_dependente'];
$parentesco = $_POST['parentesco'];
$dt_nasc_parentesco = $_POST['dt_nasc_dependente'];

if($_GET['funcao'] == "cadastrar"){
	$sql_into_associado = mysql_query("INSERT INTO associado(
	unidade,
	filial,
	nm_matricula,
	dt_filiacao,
	vendedor,
	nome,
	nm_identidade,
	endereco,
	dt_nasc,
	cpf_responsavel,
	bairro,
	cep,
	cidade,
	tel_responsavel,
	referencia,
	tel_parente,
	email,
	nm_segurado,
	cpf_segurado,
	dt_nasc_segurado
	) VALUES (
	'$unidade',
	'$filial',
	'$nm_matricula',
	'$dt_filiacao',
	'$vendedor',
	'$nome',
	'$nm_identidade',
	'$endereco',
	'$dt_nasc',
	'$cpf_responsavel',
	'$bairro',
	'$cep',
	'$cidade',
	'$tel_responsavel',
	'$referencia',
	'$tel_parente',
	'$email',
	'$nm_segurado',
	'$cpf_segurado',
	'$dt_nasc_segurado'
	)");
	
	//printf("Last inserted record has id %d\n", mysql_insert_id());

	$sql_into_dependente = mysql_query("INSERT INTO dependente(nome, parentesco, dt_nasc, id_associado) VALUES ('$nome_dependente', '$parentesco', '$dt_nasc_parentesco',".mysql_insert_id().")");
	header ('Location: index.php?pg=cadastro');
}else{
	echo "falhou";
}


?>