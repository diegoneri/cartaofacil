<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>&Aacute;rea&nbsp;Administrativa</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #000033;
}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>
<script type="text/javascript">
<!--
function entrar(pg){
        with(document.getElementById('form')){
                method = 'POST';
				action = 'logar.php';
                submit();
        }
        return;
}

function cancelar(pg){
		with(document.getElementById('form')){
				method = 'POST';
				action = '../index.php';
				submit();
		}
}

-->
</script>
</head>
<body>

<form id="form" name="form">
<br />
<br />
<table width="266" border="0" align="center" cellpadding="3" cellspacing="3">
    <tr>
      <td colspan="2" align="center"><span class="style1">ADMINISTRAÇÃO</span></td>
    </tr>
    <tr>
      <td width="61"><span class="style6">Login:</span></td>
      <td width="184"><label>
        <input type="text" name="login" id="login" />
      </label></td>
    </tr>
    <tr>
      <td><span class="style6">Senha:</span></td>
      <td><label>
        <input type="password" name="senha" id="senha" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="button" value="Logar" onclick="entrar()">
          <input type="button" value="Cancelar" onclick="cancelar()" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>
