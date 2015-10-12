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
if(isset($_POST['submit'])){
	include_once("connect.php");
    $id_loai_sp = $_POST["id_loai_sp"];
	$id_sp = $_POST["ID_SP"];
	$ten_sp = $_POST["ten_sp"];
	$ga_sp = $_POST["ga_sp"];
	$phukien = $_POST["phukien"];
	$sql = "INSERT INTO sanpham (ID_SP, ID_LSP,Ten_SP, gia_sp, phukien) VALUES ($id_sp, $id_loai_sp, '$ten_sp', '$ga_sp', '$phukien')";
	mysql_query($sql);
	header("location: index.php");
	}
?>
<form method="post">
    <table border="1">
        <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Mã loại</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Phụ kiện</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="ID_SP" /></td>
                <td><input type="text" name="id_loai_sp" /></td>
                <td><input type="text" name="ten_sp" /></td>
                <td><input type="text" name="ga_sp" /></td>
                <td><input type="text" name="phukien" /></td>
            </tr>
        </tbody>
    </table>
    <button type="submit" name="submit">Thêm</button>
</form>
<body>
</body>
</html>