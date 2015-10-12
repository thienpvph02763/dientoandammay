<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý sản phẩm</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<section id="wrapper">
    <aside>
        <h3>Category</h3>
        <ul>
            <li><a href="#">User management</a></li>
            <li class="active"><a href="#">Product management</a></li>
            <li><a href="#">Invoice management</a></li>
        </ul>
    </aside>
    <article>
        <h1>PRODUCT MANAGEMENT</h1>
        <form method="post">
            <table border="1">
                <thead>
                <tr>
                    <th>ID sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Phụ kiện</th>
                    <th colspan="2"><a href="them.php">Thêm mới sản phẩm</a></th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once("connect.php");
                $sql = "SELECT * FROM sanpham INNER JOIN loaisanpham ON loaisanpham.ID_LSP=sanpham.ID_LSP";
                $query = mysql_query($sql);
                while ($rows = mysql_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $rows['ID_SP']; ?></td>
                        <td><?php echo $rows['Ten_SP']; ?></td>
                        <td><?php echo $rows['gia_sp']; ?></td>
                        <td><?php echo $rows['phukien']; ?></td>
                        <td><a href="sua.php?id_san_pham=<?php echo $rows['ID_SP']; ?>">Sửa</a></td>
                        <td><a href="delete.php?id_san_pham=<?php echo $rows['ID_SP']; ?>">Xóa</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </form>
    </article>
</section>
</body>
</html>
