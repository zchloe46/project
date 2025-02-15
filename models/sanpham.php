<?php
class SanPhamModel {
    private $conn;
    public function __construct($db) {
        //$db is an object of class DBConnection
        $this->conn = $db;  
    } 
    public function getAllSanPham() {
        $sql = "SELECT * FROM sanpham";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    public function getSPbyMa($ma) {
        $sql = "SELECT * FROM sanpham where masp = $ma";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function themSanPham($tensp, $gia, $mota, $iddm) {
        $sql = "INSERT INTO sanpham VALUES ('$tensp', '$gia', '$mota', '$iddm')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function suaSanPham($masp, $tensp, $gia, $mota, $iddm) {
        $sql = "UPDATE sanpham SET tensp = '$tensp', gia = '$gia', mota = '$mota', iddm = '$iddm' WHERE masp = '$masp'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function xoaSanPham($masp) {
        $sql = "DELETE FROM sanpham WHERE masp = '$masp'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
?>