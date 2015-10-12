<?php 
ob_start();
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
include_once("connect.php");
$id_sp = $_GET['id_san_pham'];
$sql = "DELETE FROM sanpham WHERE ID_SP = $id_sp ";
mysql_query($sql);
header("location: index.php");
?>
<body>
</body>
</html>