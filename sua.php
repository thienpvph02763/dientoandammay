<?php 
ob_start();
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table border="1">
        <thead>
        <tr>
            <th>Mã loại</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Phụ kiện</th>
        </tr>
        </thead>
        <tbody>
        <?php include_once 'connect.php';
        $id_sp = $_GET['id_san_pham'];
        $sql = "SELECT * FROM sanpham WHERE ID_SP = $id_sp";
        $qr = mysql_query($sql);
        $r = mysql_fetch_array($qr);
        if(isset($_POST["submit"])) {
            $ma_loai = $_POST['ma_loai'];
            $ten_sp = $_POST['ten_sp'];
            $gia_sp = $_POST['gia_sp'];
            $phukien = $_POST['phukien'];
            $sql2 = "UPDATE `sanpham` SET `ID_LSP`=$ma_loai,`Ten_SP`='$ten_sp',`gia_sp`=$gia_sp, `phukien`='$phukien' WHERE `ID_SP`=$id_sp";
            $qr2 = mysql_query($sql2);
            header("location: index.php");
        }
        ?>
        <tr>
            <td><input type="text" name="ma_loai" value="<?php if(isset($_POST['ma_loai'])) {echo $_POST['ma_loai'];}else {echo $r['ID_LSP'];}; ?>" /></td>
            <td><input type="text" name="ten_sp" value="<?php if(isset($_POST['ten_sp'])) {echo $_POST['ten_sp'];}else {echo $r['Ten_SP'];}; ?>" /></td>
            <td><input type="text" name="gia_sp" value="<?php if(isset($_POST['gia_sp'])) {echo $_POST['gia_sp'];}else {echo $r['gia_sp'];}; ?>" /></td>
            <td><input type="text" name="phukien" value="<?php if(isset($_POST['phukien'])) {echo $_POST['phukien'];}else {echo $r['phukien'];}; ?>" /></td>
        </tr>
        </tbody>
    </table>
    <button type="submit" name="submit">Cập nhật</button>
</form>
</body>
</html>