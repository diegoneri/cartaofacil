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
$sql_sec = mysql_query("SELECT * FROM contato");
while($linha = mysql_fetch_array($sql_sec)){
	$telefone = $linha['telefone'];
	$endereco = $linha['endereco'];
}
?>
        <div id="titulo_pg">Contate-nos</div> <!-- titulo_pg -->        
		<div id="conteudo" style="padding-top:20px;">
Telefone para contato:<br /> <?php echo $telefone ?><br /><br />
Endere&ccedil;o:<br /> <?php echo $endereco ?>
        </div><!-- conteudo -->
    <div style="clear:both"></div>     
    </div><!-- geral_paginas -->
   
</div><!-- /fundo_paginas/ -- >
</body>
</html>
