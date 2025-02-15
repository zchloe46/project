<?php
class SanPhamCtrl {
    private $conn;
    private $model;
    public function __construct() {
        require_once 'models/database.php';
        require_once 'models/sanpham.php';
        $db = new DBConnection();
        $this->conn = $db->getConnection();
        $this->model = new SanPhamModel($this->conn);
    }
    public function listSanPham() {
        $listSP = $this->model->getAllSanPham();
        require_once 'views/sanpham/index.php';  //chỉ chuyển hướng đến view
    } 
    
}
?>