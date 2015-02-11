<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Cart&atilde;o&nbsp;F&aacute;cil</title>

</head>
<?php

include "css.php";
include "config.php";

session_start();

$login_usuario = $_SESSION["login_usuario"];

$sql = mysql_query("SELECT * FROM adm WHERE login = '$login_usuario'");
while($linha = mysql_fetch_array($sql)){
	$nome = $linha['nome'];
}

?>
<body onload="MM_preloadImages('imagens/btn_logar_in.gif')">

<style type="text/css">
<!--
#bg1{
	background:url(imagens/bg1.gif) repeat-x;
	float:left;
	width:975px;
}
-->
</style>


<div id="fundo">

<!-- imagens de Cima -->
<div id="bg1">

<div id="titulo1"><img src="imagens/tit1.jpg" width="212" height="163" /></div><!-- titulo1 -->
<div id="titulo2"><img src="imagens/tit2.jpg" width="210" height="163" /></div><!-- titulo2 -->

<div id="titulo3"><img src="imagens/tit3.gif" width="358" height="96" /></div><!-- titulo3 -->

<div id="logotipo"><a href="?pg=home.php"><img src="imagens/card_facil_logo.gif" width="358" height="67" border="0" /></a><br></div><!-- logotipo -->

</div><!-- bg1 -->
<!-- /imagens de cima/ -->


<!-- **************************************************** -->



<table width="975px" height="33" cellpadding="0" cellspacing="0" background="imagens/bg2.gif">
<tr>
<td width="18" height="33"></td>
<td width="174">
<div id="usuario_logado">
Bem Vindo <?php echo $nome ?>

</div></td>
<td width="295">
<div id="logout">
 | <a href="logout.php">Sair</a>
</div></td>
<td width="486">
</td>
</tr>
</table>


<!--<img src="imagens/tr2.gif" width="2" height="33" /><a href="adm/login.php"><img src="imagens/btn_logar.gif" width="78" height="33" border="0" /></a><img src="imagens/tr2.gif" width="2" height="33" /><img src="imagens/btn_out.gif" width="78" height="33" border="0" /><br />-->

<!--
</td>
</tr>
</table>-->

<!--<table width="975px" border="0" cellpadding="0" cellspacing="0"><tr>
  <td background="imagens/bg3.gif"><img src="imagens/spacer.gif" width="1" height="18"><br></td></tr></table>-->
<!-- /HEAD -->

</div><!-- fundo -->
</body>
</html>
