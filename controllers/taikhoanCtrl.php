<?php
class TaiKhoanCtrl {
    private $conn;
    private $model;
    public function __construct() {
        require_once 'models/database.php';
        require_once 'models/taikhoan.php';
        $db = new DBConnection();
        $this->conn = $db->getConnection();
        $this->model = new TaiKhoanModel($this->conn);
    }
    public function listTaiKhoan() {
        $listTK = $this->model->getAllTaiKhoan();
        require_once 'views/taikhoan/index.php'; 
    }
    public function chitietTaiKhoan() {
        $tentk = $_POST['tentk'];
        $tk = $this->model->getTKbyMa($tentk);
        require_once 'views/taikhoan/thontintaikhoan.php';
    }
    public function themTaiKhoan() {
        if(isset($_POST['dangky'])) {
            $tentk = $_POST['tentk'];   
            $matkhau = $_POST['matkhau'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $dienthoai = $_POST['dienthoai'];
            $vaitro = $_POST['vaitro'];
            $this->model->themTaiKhoan($tentk, $matkhau, $email, $diachi, $dienthoai, $vaitro);
            header('location: index.php?control=taikhoan&act=listTaiKhoan');
        }
        require_once 'views/taikhoan/dangky.php';
    }
    public function update() {
        if(isset($_POST['sua'])) {
            $tentk = $_POST['tentk'];
            $matkhau = $_POST['matkhau'];
            $email = $_POST['email'];
            $diachi = $_POST['dsiachi'];
            $dienthoai = $_POST['dienthoai'];
            $vaitro = $_POST['vaitro'];
            $this->model->suaTaiKhoan($tentk, $matkhau, $email, $diachi, $dienthoai, $vaitro);
            header('location: index.php?control=taikhoan&act=listTaiKhoan');
        }
        require_once 'views/taikhoan/sua.php';
    }
    public function dangnhap() {
        if (isset($_POST['dangnhap'])) {
            $tentk = $_POST['tentk'];
            $matkhau = $_POST['matkhau'];
    
            // Lấy thông tin tài khoản từ database
            $result = $this->model->getTKbyMa($tentk);
    
            if ($result) { // Kiểm tra tài khoản có tồn tại không
                if ($result[0]['matkhau'] === $matkhau) { // So sánh mật khẩu dạng plain text
                    $_SESSION['tentk'] = $tentk;
                    header('Location: index.php?control=home&act=home');
                    exit();
                } else {
                    echo '<script>alert("Sai mật khẩu!"); window.location.href="index.php?control=taikhoan&act=dangnhap";</script>';
                }
            } else {
                echo '<script>alert("Tài khoản không tồn tại!"); window.location.href="index.php?control=taikhoan&act=dangnhap";</script>';
            }
        }
        require_once 'views/taikhoan/dangnhap.php';
    }
    public function dangxuat() {
        session_destroy();
        header('Location: index.php');
    }
    
    public function xoaTaiKhoan() {
        if(isset($_GET['idtk'])) {
            $idtk = $_GET['idtk'];
            $this->model->xoaTaiKhoan($idtk);
            header('location: index.php?control=taikhoan&act=listTaiKhoan');
        }
    }
}
?>