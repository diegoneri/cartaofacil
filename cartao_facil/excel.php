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
    	
<script language="javascript">
	function enviarExcel(){
		var nomeArquivo = document.getElementById('dataExcel').value;
		if (nomeArquivo != ''){
			document.forms["formExcel"].submit(); 
		}
	}
</script>		
<?php
include "menu.php";
?>
        <div id="titulo_pg">Excel</div> <!-- titulo_pg -->        
		<div id="conteudo">
        
        <br />
        <h1>Leitura de arquivo Excel</h1>
        <form id="formExcel" enctype="multipart/form-data" action="planilha.php" method="get">
          <table width="600">
			<tr>
				<td>Selecione um arquivo:</td>
				<td><input type="file" name="dataExcel" id="dataExcel" /></td>
				<td><input type="button" value="Carregar" onclick="enviarExcel();"/></td>
          </tr>
          </table>
        </form>
        <br /><hr /><br />



        </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- /fundo_paginas/ -- >
</body>
</html>
