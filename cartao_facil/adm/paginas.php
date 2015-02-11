<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php
switch ($_GET['pg']){

	case 'home':
	include "home.php";
	break;
	
	case 'categorias_entrada':
	include "categorias_entrada.php";
	break;
	
	case 'categorias_saida':
	include "categorias_saida.php";
	break;
	
	case 'contato':
	include "contato.php";
	break;
	
	case 'cadastro':
	include "cadastro.php";
	break;
	
	case 'excel';
	include "excel.php";
	break;
	
	case 'sobre':
	include "sobre.php";
	break;
	
	default:
	include ("home.php");
	break;
}
?>