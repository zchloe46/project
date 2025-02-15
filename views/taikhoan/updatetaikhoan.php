<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin tài khoản</title>
</head>
<body>
    <h1>Sửa thông tin tài khoản</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tên tài khoản</td>
                <td><input type="text" name="tentk" value=""></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="matkhau" value=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value=""></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi" value=""></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="text" name="dienthoai" value=""></td>
            </tr>
            <tr>
                <td>Vai trò</td>
                <td>
                    <select name="vaitro">
                        <option value="0" >user</option>
                        <option value="1" >admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="sua" value="Sửa"></td>
            </tr>
        </table>
    </form>
</body>
</html>