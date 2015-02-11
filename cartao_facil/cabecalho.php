<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Cart&atilde;o&nbsp;F&aacute;cil</title>

<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

</head>

<?php
include "css.php";
include "config.php";
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
<td width="78"><div id="img_logar">
<a href="adm/login.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','imagens/btn_logar_in.gif',1)"><img src="imagens/btn_logar_out.gif" name="Image6" width="78" height="33" border="0" id="Image6" /></a>
</div></td>
<td width="391">
<div id="usuario">
</div></td>
<td width="486">
<div id="logout"></div></td>
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
