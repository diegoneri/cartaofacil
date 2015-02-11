<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php
include "css.php";
include "config.php";
?>
<body style="margin:0">
<div id="fundo_paginas">
	<div id="geral_paginas">
    	
<?php
include "menu.php";
?>
        <div id="titulo_pg">Cadastro&nbsp;de&nbsp;Associado</div> <!-- titulo_pg -->        
		<div id="conteudo">

<form id="form1" name="form1" method="post" action="cadastro_associado.php?funcao=cadastrar">
  <table width="482" border="0" cellpadding="3" cellspacing="3">
    <tr>
      <td width="245" align="right">Nome</td>
      <td width="236">
        <input type="text" name="nome" id="nome" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">Unidade</td>
      <td>
        <input type="text" name="unidade" id="unidade" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">Filial</td>
      <td>
        <input type="text" name="filial" id="filial" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">N&uacute;mero da Matr&iacute;cula</td>
      <td>
        <input type="text" name="nm_matricula" id="num_matricula" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">Vendedor</td>
      <td>
        <input type="text" name="vendedor" id="vendedor" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">N&uacute;mero da Identidade</td>
      <td>
        <input type="text" name="nm_identidade" id="num_identidade" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">CPF do Respons&aacute;vel</td>
      <td>
        <input type="text" name="cpf_responsavel" id="cpf_responsavel" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">CEP</td>
      <td>
        <input type="text" name="cep" id="cep" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">CPF do Segurado</td>
      <td>
        <input type="text" name="cpf_segurado" id="cpf_segurado" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">E-Mail</td>
      <td>
        <input type="text" name="email" id="email" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">Redi&ecirc;ncia Pr&oacute;pria?</td>
      <td>
        <input type="radio" name="radio" id="residencia" value="radio" />
      
        Sim 
        
        <input type="radio" name="radio" id="residencia" value="radio" />
        N&atilde;o</td>
    </tr>
    <tr>
      <td width="245" align="right">Cidade</td>
      <td>
        <input type="text" name="cidade" id="cidade" />      </td>
    </tr>
    <tr>
      <td width="305" align="right">Data de Nascimento do Segurado</td>
      <td>
        <input type="text" name="dt_nasc_segurado" id="dt_nasc_segurado" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">Data da Filia&ccedil;&atilde;o</td>
      <td>
        <input type="text" name="dt_filiacao" id="dt_filiacao" />      </td>
    </tr>

    <tr>
      <td width="245" align="right">Nome do Segurado</td>
      <td>
        <input type="text" name="nm_segurado" id="nm_segurado" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">Endere&ccedil;o</td>
      <td>
        <input type="text" name="endereco" id="endereco" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">Data do Nascimento</td>
      <td>
        <input type="text" name="dt_nasc" id="dt_nasc" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">Telefone Respons&aacute;vel</td>
      <td>
        <input type="text" name="tel_responsavel" id="tel_responsavel" />      </td>
    </tr>
    <tr>
      <td width="245" align="right">Telefone de Parente</td>
      <td><input type="text" name="tel_parente" id="tel_parente" /></td>
    </tr>
    <tr>
      <td width="245" align="right">Bairro</td>
      <td>
        <input type="text" name="bairro" id="bairro" />      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="button" id="button" value="Cadastrar" />      </td>
    </tr>
  </table>
</form>

        </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- /fundo_paginas/ -->
</body>
</html>
