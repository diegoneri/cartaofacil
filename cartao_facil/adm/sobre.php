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

		<?php
        $sql_sec = mysql_query("SELECT * FROM sobre");
		while($linha = mysql_fetch_array($sql_sec)){
			$nome = $linha['nome'];
			$foto = $linha['foto'];
			$texto = $linha['texto'];
		}
		?>
        <div id="titulo_pg">Sobre</div> <!-- titulo_pg -->        
		<div id="conteudo">

		
        <span id="foto_sobre" style="float:left"><img src="fotos/<?php echo $foto ?>" /></span>
        <span id="titulo" style="font-size:18px; float:left"><strong><br />
		<?php echo $nome ?>
        </strong></span><br /><br />
        <?php echo $texto ?>
        
        </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- /fundo_paginas/ -- >
</body>
</html>
