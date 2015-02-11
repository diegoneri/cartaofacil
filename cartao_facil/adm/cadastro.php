<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<?php	
		include "css.php";
		include "config.php";
	?>

	<style type="text/css">
		table#corpo{
			border:1px solid black;
		}
		.greenBorder td{
			border:1px solid green;
			font-size:13px;
			font-variant:small-caps;	
		}
		
		.greenBorder input[type=text]{
			border:0px;
		}
	</style>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

	<body style="margin:0">
	<div id="fundo_paginas">
		<div id="geral_paginas">    	
			<?php
			include "menu.php";
			?>

			<div id="titulo_pg">
				Cadastro&nbsp;de&nbsp;Associado
			</div> <!-- titulo_pg -->        
			<div id="conteudo" class="greenBorder">
				<form id="form1" name="form1" method="post" action="cadastro_associado.php?funcao=cadastrar">
					<table id="corpo" width="" border="0" cellpadding="3" cellspacing="3">
						<tr>
							<td colspan="2" width="150">
								Unidade<br/>
								<input type="text" name="unidade" id="unidade" style="width:150px" />
							</td>
							<td width="150">
								Filial<br/>
								<input type="text" name="filial" id="filial" style="width:150px" />
							</td>
							<td width="150">
								N&uacute;mero da Matr&iacute;cula<br/>
								<input type="text" name="nm_matricula" id="num_matricula" style="width:150px" />
							</td>	
							<td width="110">
								Data da Filia&ccedil;&atilde;o
								<input type="text" name="dt_filiacao" id="dt_filiacao" style="width:110px"/>
							</td>
							<td width="150">
								Vendedor
								<input type="text" name="vendedor" id="vendedor" style="width:110px"/>
							</td>
						</tr>	
						<tr>
							<td rowspan="4" width="30">Respons&aacute;vel</td>
							<td colspan="2">
								Nome Completo
								<input type="text" name="nome" id="nome" style="width:280px" />
							</td>	
							<td>
								CPF
								<input type="text" name="cpf_responsavel" id="cpf_responsavel" />
							</td>	
							<td>
								N&uacute;mero da Identidade
								<input type="text" name="nm_identidade" id="num_identidade" />
							</td>
							<td>
								Data de Nascimento
								<input type="text" name="dt_nasc" id="dt_nasc" />
							</td>
						</tr>

  <tr>
    <td colspan="2">
		Endere&ccedil;o(Rua/Avenida/N°/Complemento)
		<input type="text" name="endereco" id="endereco" style="width:310px"/>
	</td>
	<td colspan="2">
		Bairro <br/>
		<input type="text" name="bairro" id="bairro" style="width:220px"/>
	</td>
    <td>
		CEP
		<input type="text" name="cep" id="cep" />
	</td>
  </tr>
  <tr>
    <td>Cidade
		<input type="text" name="cidade" id="cidade" />
	</td>
    <td>Estado:
    <input type="text" name="cidade" id="cidade" /></td>	
  </tr>
  <tr>
    <td>Telefone Respons&aacute;vel:</td>
    <td><input type="text" name="tel_responsavel" id="tel_responsavel" /></td>
  </tr>
  <tr>
    <td>Resid&ecirc;ncia Pr&oacute;pria?</td>
    <td><input type="radio" name="radio" id="residencia" value="radio" />
Sim
  <input type="radio" name="radio" id="residencia" value="radio" />
N&atilde;o</td>
  </tr>
  <tr>
    <td>Refer&ecirc;ncia:</td>
    <td><label>
      <input type="text" name="referencia" id="referencia" />
    </label></td>
  </tr>
  <tr>
    <td>Telefone Partente:</td>
    <td><input type="text" name="tel_parente" id="tel_parente" /></td>
  </tr>
  <tr>
    <td>E-Mail:</td>
    <td><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td>Nome do Segurado:</td>
    <td><input type="text" name="nm_segurado" id="nm_segurado" /></td>
  </tr>
  <tr>
    <td>CPF do Segurado:</td>
    <td><input type="text" name="cpf_segurado" id="cpf_segurado" /></td>
  </tr>
  <tr>
    <td>Nascimento do Segurado:</td>
    <td><input type="text" name="dt_nasc_segurado" id="dt_nasc_segurado" /></td>
  </tr>
</table>
<br />
<span class="style2">Dependentes</span>-(opcional)
<br /><br />
<table width="541" border="0" cellpadding="3" cellspacing="3">
  <tr>
    <td width="242">Nome completo do Dependente:</td>
    <td width="278"><label>
      <input type="text" name="nome_dependente" id="nome_dependente" />
    </label></td>
  </tr>
  <tr>
    <td>Parentesco com Associado:</td>
    <td><label>
      <input type="text" name="parentesco" id="parentesco" />
    </label></td>
  </tr>
  <tr>
    <td>Data de Nascimento:</td>
    <td><label>
      <input type="text" name="dt_nasc_dependente" id="dt_nasc_dependente" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Cadastrar" /></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>


      </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- /fundo_paginas/ -->
</body>
</html>