<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include "css.php";
include "config.php";
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
table#corpo {
	border: 1px solid black;
}

.greenBorder td {
	border: 1px solid green;
	font-size: 13px;
	font-variant: small-caps;
}

.greenBorder input[type=text] {
	border: 0px;
}
</style>

<script src="js/cadastro.js"></script>
<script src="js/mascaras.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery.blockUI.js"></script>
</head>

<body style="margin: 0px">
<div id="fundo_paginas">
<div id="geral_paginas"><?php
include "menu.php";
?>

<div id="titulo_pg">Cadastro&nbsp;de&nbsp;Associado</div>
<!-- titulo_pg -->
<div id="conteudo" class="greenBorder">
<form id="form1" name="form1" method="post"
	action="cadastro_associado.php?funcao=cadastrar">
<table id="corpo" width="" border="0" cellpadding="3" cellspacing="3">
	<tr>
		<td colspan="2" width="150">Vendedor <input type="text" name="vendedor"
			id="vendedor" style="width: 110px" /></td>	
		<td  width="150">Unidade<br />
		<input type="text" name="unidade" id="unidade" style="width: 150px" />
		</td>
		<td width="150">Filial<br />
		<input type="text" name="filial" id="filial" style="width: 150px" /></td>
		<td width="150">N&uacute;mero da Matr&iacute;cula<br />
		<input type="text" name="nm_matricula" id="num_matricula"
			style="width: 150px" /></td>
		<td width="110">Data da Filia&ccedil;&atilde;o <input type="text"
			name="dt_filiacao" id="dt_filiacao" style="width: 110px"
			maxlength="10" onkeydown="Mascara(this,Data);"
			onkeypress="Mascara(this,Data);" onkeyup="Mascara(this,Data);" /></td>

	</tr>
	<tr>
		<td rowspan="4" width="30">Respons&aacute;vel</td>
		<td colspan="2">Nome Completo <input type="text" name="nome" id="nome"
			style="width: 280px" /></td>
		<td>CPF <input type="text" name="cpf_responsavel" id="cpf_responsavel" />
		</td>
		<td>N&uacute;mero da Identidade <input type="text"
			name="nm_identidade" id="num_identidade" /></td>
		<td>Data de Nascimento <input type="text" name="dt_nasc" id="dt_nasc" />
		</td>
	</tr>

	<tr>
		<td colspan="2">Endere&ccedil;o(Rua/Avenida/N°/Complemento)<br /> <input
			type="text" name="endereco" id="endereco" style="width: 310px" /></td>
		<td colspan="2">Bairro <br />
		<input type="text" name="bairro" id="bairro" style="width: 220px" /></td>
		<td>CEP <br /><input type="text" name="cep" id="cep" /></td>
	</tr>
	<tr>
		<td>Cidade <br /><input type="text" name="cidade" id="cidade" /></td>
		<td>Estado <select id="uf" name="uf" onchange="_onSelectEstado();">
			<option value="0">Selecione o Estado:</option>
			<option value="sp">São Paulo</option>
			<!--  <option value="ac">Acre</option>
			<option value="al">Alagoas</option>
			<option value="ap">Amapá</option>
			<option value="am">Amazonas</option>
			<option value="ba">Bahia</option>
			<option value="ce">Ceará</option>
			<option value="df">Distrito Federal</option>
			<option value="es">Espirito Santo</option>
			<option value="go">Goiás</option>
			<option value="ma">Maranhão</option>
			<option value="ms">Mato Grosso do Sul</option>
			<option value="mt">Mato Grosso</option>
			<option value="mg">Minas Gerais</option>
			<option value="pa">Pará</option>
			<option value="pb">Paraíba</option>
			<option value="pr">Paraná</option>
			<option value="pe">Pernambuco</option>
			<option value="pi">Piauí</option>
			<option value="rj">Rio de Janeiro</option>
			<option value="rn">Rio Grande do Norte</option>
			<option value="rs">Rio Grande do Sul</option>
			<option value="ro">Rondônia</option>
			<option value="rr">Roraima</option>
			<option value="sc">Santa Catarina</option>
			<option value="se">Sergipe</option>
			<option value="to">Tocantins</option>-->
		</select></td>
		<td>Telefone Residencial<br/><input type="text"
			name="tel_responsavel" id="tel_responsavel" maxlength="14"
			onkeydown="Mascara(this,Telefone);"
			onkeypress="Mascara(this,Telefone);"
			onkeyup="Mascara(this,Telefone);" style="width:140px"/></td>
		<td>Telefone Celular<br/><input type="text"
			name="tel_celular" id="tel_celular" maxlength="14"
			onkeydown="Mascara(this,Telefone);"
			onkeypress="Mascara(this,Telefone);"
			onkeyup="Mascara(this,Telefone);" style="width:140px"/></td>
	</tr>
	<tr>
		<td align="right">Resid&ecirc;ncia Pr&oacute;pria?<br/>
		<input type="radio" name="radio" id="residencia" value="radio" />
		Sim <input type="radio" name="radio" id="residencia" value="radio" />
		N&atilde;o</td>				
		<td colspan="4">E-Mail: <br/>
		<input type="text" name="email" id="email" /></td>
	</tr>	
	<tr>
		<td colspan="2">Refer&ecirc;ncia <br/>
		<input type="text" name="referencia" id="referencia" style="width:210px" /></td>
		<td colspan="2">Telefone refer&ecirc;ncia:<br/>
		<input type="text" name="tel_parente" id="tel_parente" maxlength="14"
			onkeydown="Mascara(this,Telefone);"
			onkeypress="Mascara(this,Telefone);"
			onkeyup="Mascara(this,Telefone);" style="width:120px"/></td>
	</tr>

</table>

<input type="button" class="botao"  value="Cadastrar Associado" id="btnCadastrarAssociado" name="btnCadastrarAssociado"/>
<br />



<span class="style2">Dependentes</span> (opcional) <br />
<br />
<table width="700" border="0" cellpadding="3" cellspacing="3">
	<tr>
		<td width="380">Nome completo do Dependente: <br />
		<input type="text" name="nome_dependente"
			id="nome_dependente" style="width:375px"/></td>
		<td width="380">Parentesco com Associado: <br />
		<input type="text" name="parentesco" id="parentesco" /></td>
		<td>Data de Nascimento:
		 <input type="text" name="dt_nasc_dependente"
			id="dt_nasc_dependente" /></td>
		<td style="border:none;">
			<input type="button" name="cDepend" id="cDepend" value="Cadastrar" onclick="funcao_envia_dep();" />
		</td>
	</tr>
</table>
<p>&nbsp;</p>
</form>


</div>
<!-- conteudo -->
<div style="clear: both"></div>
</div>
<!-- geral_paginas --></div>
<!-- /fundo_paginas/ -->
</body>
</html>
