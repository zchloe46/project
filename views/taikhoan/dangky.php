<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <h1>Đăng ký</h1>
    <form action="index.php?control=taikhoan&act=dangky" method="post">
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
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi"></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="text" name="dienthoai"></td>
            </tr>
            <tr>
                <td>Vai trò</td>
                <td>
                    <select name="vaitro">
                        <option value="0">user</option>
                        <option value="1">admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="dangky" value="Đăng ký"></td>
            </tr>
        </table>
    </form>
</body>
</html>