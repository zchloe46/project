<?php
class TaiKhoanModel {
    private $conn;
    public function __construct($db) {
        //$db is an object of class DBConnection
        $this->conn = $db;  
    }
    public function getAllTaiKhoan() {
        $sql = "SELECT * FROM taikhoan";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    
    public function getTKbyMa($tentk) {
        $sql = "SELECT * FROM taikhoan WHERE tentk = :tentk";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':tentk', $tentk, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function themTaiKhoan($tentk, $matkhau, $email, $diachi, $dienthoai, $vaitro) {
        $sql = "INSERT INTO taikhoan (tentk, matkhau, email, diachi, dienthoai, vaitro) VALUES ('$tentk', '$matkhau', '$email', '$diachi', '$dienthoai', '$vaitro')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function suaTaiKhoan($tentk, $matkhau, $email, $diachi, $dienthoai, $vaitro) {
        $sql = "UPDATE taikhoan SET matkhau = '$matkhau', email = '$email', diachi = '$diachi', dienthoai = '$dienthoai', vaitro = '$vaitro' WHERE tentk = '$tentk'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function xoaTaiKhoan($tentk) {
        $sql = "DELETE FROM taikhoan WHERE tentk = '$tentk'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
?>