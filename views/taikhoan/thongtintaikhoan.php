<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin tài khoản</title>
</head>
<body>
    <h1>Thông tin tài khoản</h1>
    <table>
        <tr>
            <td>Mã tài khoản</td>
            <td><input type="text" name="idtk" value="<?= $tk['idtk']?>" readonly></td>
        </tr>
        <tr>
            <td>Tên tài khoản</td>
            <td><input type="text" name="tentk" value="<?= $tk['tentk']?>"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="matkhau" value="<?= $tk['matkhau']?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?= $tk['email']?>"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="diachi" value="<?= $tk['diachi']?>"></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input type="text" name="dienthoai" value="<?= $tk['dienthoai']?>"></td>
        </tr>
        <tr>
            <td>Vai trò</td>
            <td><input type="text" name="vaitro" value="<?= $tk['vaitro']?>"></td>
        </tr>
    </table>
    <a href="index.php?control=taikhoan&act=listTaiKhoan">Quay lại</a>
</body>
</html>