<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>

<body>
    <h1>Thêm sản phẩm</h1>
    <form action="index.php?control=sanpham&act=themSanPham" method="post">
        <table>
            <tr>
                <td><label for="tensp">Tên sản phẩm</label></td>
                <td><input type="text" name="tensp" id="tensp"></td>
            </tr>
            <tr>
                <td><label for="giasp">Giá sản phẩm</label></td>
                <td><input type="text" name="giasp" id="giasp"></td>
            </tr>
            <tr>
                <td><label for="mota">Mô tả</label></td>
                <td><textarea name="mota" id="mota" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><label for="danhmuc">Danh mục</label></td>
                <td>
                    <select name="danhmuc" id="danhmuc">
                        <option value="1">danh muc 1</option>
                        <option value="2">danh muc 2</option>
                        <option value="3">danh muc 3</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">Lưu</button>
    </form>
</body>

</html>