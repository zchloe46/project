<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ sản phẩm</title>
</head>
<body>
    <h1>Danh Sách Sản Phẩm</h1>
    <table>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Mã danh mục</th>
        </tr>
        <?php
        foreach ($listSP as $sp) {
            extract($sp);
            ?>
            <tr>
                <td><?= $idsp?></td>
                <td><?= $tensp?></td>
                <td><?= $gia?></td>
                <td><?= $mota?></td>
                <td><?= $iddm?></td>
                <td>
                    <a href="index.php?act=chitietsanpham&idsp=<?= $idsp?>">Chi tiết</a>
                    <a href="index.php?act=suasanpham&idsp=<?= $idsp?>">Sửa</a>
                    <a href="index.php?act=xoasanpham&idsp=<?= $idsp?>">Xóa</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a href="index.php?act=themsanpham">Thêm sản phẩm</a>
</body>
</html>