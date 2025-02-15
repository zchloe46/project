<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
</head>
<body>
    <h1>Danh sách tài khoản</h1>
    <table>
        <tr>
            <th>Mã tài khoản</th>
            <th>Tên tài khoản</th>
            <th>Mật khẩu</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Vai trò</th>
        </tr>
        <?php
        foreach ($listTK as $tk) {
            extract($tk);
            ?>
            <tr>
                <td><?= $idtk?></td>
                <td><?= $tentk?></td>
                <td><?= $matkhau?></td>
                <td><?= $email?></td>
                <td><?= $diachi?></td>
                <td><?= $dienthoai?></td>
                <td><?= $vaitro?></td>
                <td>
                    <a href="index.php?act=chitiettaikhoan&idtk=<?= $idtk?>">Chi tiết</a>
                    <a href="index.php?act=suataikhoan&idtk=<?= $idtk?>">Sửa</a>
                    <a href="index.php?act=xoataikhoan&idtk=<?= $idtk?>">Xóa</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a href="index.php?control=taikhoan&act=dangky">Thêm tài khoản</a>
    <a href="index.php?control=taikhoan&act=dangnhap">Đăng nhập</a>
</body>
</html>