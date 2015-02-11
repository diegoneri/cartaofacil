<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
	alert('<?php $_GET['dataExcel'] ?>');
</script>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	require_once 'lib/ex2/excel_reader2.php';
	echo $_POST['dataExcel'];
	$data = new Spreadsheet_Excel_Reader($_GET['dataExcel']);

	include "css.php";
	include "config.php";
	include "verifica.php";
?>

<body>
	<?php echo $data->dump(true,true); ?>
</body>
</html>