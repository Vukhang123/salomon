<?php
require_once __DIR__ . '/../../dbconnect.php';
// Lấy dữ liệu cần hiệu chỉnh
$hsp_ma = $_GET['hsp_ma'];
$sqlDeleteHinhSanPham = "DELETE FROM hinhsanpham WHERE hsp_ma = $hsp_ma;";
//print_r($sqlDeleteSanPham); die;
$result = mysqli_query($conn, $sqlDeleteHinhSanPham);
// đường dẫn tương đối
header('location:/salomon/backends/index.php?page=hinhsanpham');
// đường dẫn tuyệt đối
//header('location: danhsach.php');
?>