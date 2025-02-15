<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="index.php?control=taikhoan&act=dangnhap" method="post">
        <table>
            <tr>
                <td>Tên tài khoản</td>
                <td><input type="text" name="tentk"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="matkhau"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="dangnhap" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
</body>
</html>