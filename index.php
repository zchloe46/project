<?php
include_once 'controllers/sanphamCtrl.php';
include_once 'controllers/taikhoanCtrl.php';

if(isset($_GET['control'])) {
    $control = $_GET['control'];
} else {
    $control = null;
}

if(isset($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = null;
}

if($control == null || $act ==null) {
    $taikhoanCtrl = new TaiKhoanCtrl();
    $taikhoanCtrl -> dangnhap();
    exit();
}
switch ($control) {
    case 'sanpham':
        $sanphamCtrl = new SanPhamCtrl();
        switch ($act) {
            case 'listSanPham':
                $sanphamCtrl->listSanPham();
                break;
            default:
                include_once 'views/home.php';
                break;
        }
        break;
    case 'taikhoan':
        $taikhoanCtrl = new TaiKhoanCtrl();
        switch ($act) {
            case 'listTaiKhoan':
                $taikhoanCtrl->listTaiKhoan();
                break;
            case 'dangky':
                $taikhoanCtrl->themTaiKhoan();
                break;
            case 'chitiettaikhoan':
                $taikhoanCtrl->chitietTaiKhoan();
                break;
            case 'dangnhap':
                $taikhoanCtrl->dangnhap();
                break;
            case 'dangxuat':
                $taikhoanCtrl->dangxuat();
                break;
            case 'update':
                $taikhoanCtrl->xoaTaiKhoan();
                break;
            
            default:
                include_once 'views/home.php';
                break;
        }
        break;
    default:
        include_once 'views/home.php';
        break;
}

?>