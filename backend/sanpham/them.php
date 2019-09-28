<?php
require_once __DIR__. '/../../bootstrap.php';

require_once __DIR__ . '/../../dbconnect.php';

$errors = [];
// Lấy dữ liệu Loại sản phẩm
$sqlLoaiSanPham = <<<EOT
    SELECT * FROM loaisanpham;
EOT;
$resultLoaiSanPham = mysqli_query($conn, $sqlLoaiSanPham);
$dataLoaiSanPham = [];
while ($row = mysqli_fetch_array($resultLoaiSanPham, MYSQLI_ASSOC)) {
    $dataLoaiSanPham[] = array(
        'lsp_ma' => $row['lsp_ma'],
        'lsp_ten' => $row['lsp_ten'],
    );
}
// Lấy dữ liệu Nhà sản xuất
$sqlNhaSanXuat = <<<EOT
    SELECT * FROM nhasanxuat;
EOT;
$resultNhaSanXuat = mysqli_query($conn, $sqlNhaSanXuat);
$dataNhaSanXuat = [];
while ($row = mysqli_fetch_array($resultNhaSanXuat, MYSQLI_ASSOC)) {
    $dataNhaSanXuat[] = array(
        'nsx_ma' => $row['nsx_ma'],
        'nsx_ten' => $row['nsx_ten'],
    );
}
// Lấy dữ liệu Khuyến mãi
$sqlKhuyenMai = <<<EOT
    SELECT * FROM khuyenmai;
EOT;
$resultKhuyenMai = mysqli_query($conn, $sqlKhuyenMai);
$dataKhuyenMai = [];
while ($row = mysqli_fetch_array($resultKhuyenMai, MYSQLI_ASSOC)) {
    $dataKhuyenMai[] = array(
        'km_ma' => $row['km_ma'],
        'km_ten' => $row['km_ten'],
    );
}

if(isset($_POST['btnLuu'])) 
{
    $sp_ten = $_POST['sp_ten'];
    $sp_gia = $_POST['sp_gia'];
    $sp_giacu = $_POST['sp_giacu'];
    $sp_mota_ngan = $_POST['sp_mota_ngan'];
    $sp_mota_chitiet = $_POST['sp_mota_chitiet'];
    $sp_ngaycapnhat = $_POST['sp_ngaycapnhat'];
    $sp_soluong = $_POST['sp_soluong'];
    $lsp_ma = $_POST['lsp_ma'];
    $nsx_ma = $_POST['nsx_ma'];
    $km_ma = isset($_POST['km_ma']) ? $_POST['km_ma'] : 'NULL';

    
    $sql = "INSERT INTO `sanpham`(sp_ten, sp_gia, sp_giacu, sp_mota_ngan, sp_mota_chitiet, sp_ngaycapnhat, sp_soluong, lsp_ma, nsx_ma, km_ma) VALUES (N'$sp_ten', $sp_gia, $sp_giacu, N'$sp_mota_ngan', N'$sp_mota_chitiet', '$sp_ngaycapnhat', $sp_soluong, $lsp_ma, $nsx_ma, $km_ma);";
    mysqli_query($conn,$sql);

    mysqli_close($conn);

    
    header("location:/salomon/backend/sanpham/index.php");
}


echo $twig->render('backend/sanpham/them.html.twig',[
    'danhsachloaisanpham' => $dataLoaiSanPham,
    'danhsachnhasanxuat'=> $dataNhaSanXuat,
    'danhsachkhuyenmai' => $dataKhuyenMai,
    
 ]);