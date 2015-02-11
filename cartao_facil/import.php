<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include "config.php";
?>

<?php
  $data = array();

  function add_person( $first, $middle, $last, $email )
  {
  global $data;

  $data []= array(
  'first' => $first,
  'middle' => $middle,
  'last' => $last,
  'email' => $email
  );
  }

  if ( $_FILES['file']['tmp_name'] )
  {
  $dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
  $rows = $dom->getElementsByTagName( 'Row' );
  $first_row = true;
  foreach ($rows as $row)
  {
  if ( !$first_row )
  {
  $first = "";
  $middle = "";
  $last = "";
  $email = "";

  $index = 1;
  $cells = $row->getElementsByTagName( 'Cell' );
  foreach( $cells as $cell )
  {
  $ind = $cell->getAttribute( 'Index' );
  if ( $ind != null ) $index = $ind;

  if ( $index == 1 ) $first = $cell->nodeValue;
  if ( $index == 2 ) $middle = $cell->nodeValue;
  if ( $index == 3 ) $last = $cell->nodeValue;
  if ( $index == 4 ) $email = $cell->nodeValue;

  $index += 1;
  }
  add_person( $first, $middle, $last, $email );
  }
  $first_row = false;
  }
  }
  ?>
<body>
<form id="form1" name="form1" method="post" action="funcao_excel.php">
  <table width="564" height="226" border="0" cellpadding="3" cellspacing="3">
    <tr>
      <td height="18" colspan="3" align="center">Cadastro de Excel via XML</td>
    </tr>
    <tr>
    <?php foreach( $data as $row ) { ?>
      <td width="190" height="15">Primeiro Nome</td>
      <td colspan="2"><?php echo( $row['first'] ); ?></td>
    </tr>
    <tr>
      <td height="34">Segundo Nome</td>
      <td colspan="2"><?php echo( $row['middle'] ); ?></td>
    </tr>
    <tr>
      <td>Terceiro Nome</td>
      <td colspan="2"><?php echo( $row['last'] ); ?></td>
    </tr>
    <tr>
      <td>E-Mail<br /><hr /></td>
      <td colspan="2"><?php echo( $row['email'] ); ?><br /><hr /></td>
    </tr>
    <tr>
    <?php
    }
    ?>
      <td height="23" colspan="3" align="center">
      <a href="#" style="color:#000000; text-decoration:none;">Salvar</a>
      &nbsp;|&nbsp;
      <a href="#" style="color:#000000; text-decoration:none;">Cancelar</a></td>
    </tr>
    <hr />

  </table>
</form>
</body>
</html>
