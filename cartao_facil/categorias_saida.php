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
        <div id="titulo_pg">Categorias&nbsp;de&nbsp;Sa&iacute;da</div> <!-- titulo_pg -->        
		<div id="conteudo">
		  <form id="form1" name="form1" method="post" action="cadastrar_categoria.php?funcao=cadastrar_saida">
		  <table width="303" border="1">
            <tr>
              <td colspan="2" align="center">Cadastrar&nbsp;Categorias&nbsp;de&nbsp;Sa&iacute;da</td>
            </tr>
            <tr>
              <td align="center">C&oacute;digo</td>
              <td align="left"><label>
                <input type="text" name="codigo_saida" id="codigo_saida" />
              </label></td>
            </tr>
            <tr>
              <td width="142">Descri&ccedil;&atilde;o</td>
          <td width="145"><label>
                <textarea name="descricao_saida" id="descricao_saida" cols="55" rows="8"></textarea>
              </label></td>
            </tr>
            <tr>
              <td>Ativa</td>
              <td><label>
                <input type="checkbox" name="ativo_saida" id="ativo_saida" />
              </label></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><label>
                <input type="submit" name="button" id="button" value="Cadastrar" />
              </label></td>
            </tr>
          </table>
          </form>
	    </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- /fundo_paginas/ -- >
</body>
</html>
