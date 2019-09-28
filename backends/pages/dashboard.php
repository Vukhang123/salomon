<?php
// Include file cấu hình ban đầu của `Twig`
require_once __DIR__.'/../../bootstrap.php';
// Truy vấn database để lấy danh sách
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include_once(__DIR__.'/../../dbconnect.php');
// 2. Chuẩn bị câu truy vấn $sql
$sqlSoLuongSanPham = "select count(*) as SoLuong from `sanpham`";
// 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
$result = mysqli_query($conn, $sqlSoLuongSanPham);
// 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
// Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
// Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
$dataSoLuongSanPham = [];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $dataSoLuongSanPham[] = array(
        'SoLuong' => $row['SoLuong']
    );
}

$sqlSoLuongKhachHang = "select count(*) as SoLuong from `khachhang`";
// 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
$result = mysqli_query($conn, $sqlSoLuongKhachHang);

$dataSoLuongKhachHang = [];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $dataSoLuongKhachHang[] = array(
        'SoLuong' => $row['SoLuong']
    );
}

$sqlSoLuongDonHang = "select count(*) as SoLuong from `dondathang`";
// 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
$result = mysqli_query($conn, $sqlSoLuongDonHang);

$dataSoLuongDonHang = [];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $dataSoLuongDonHang[] = array(
        'SoLuong' => $row['SoLuong']
    );
}

// 2. Chuẩn bị câu truy vấn $sql
$sqlSoLuongGopY = "select count(*) as SoLuong from `gopy`";
// 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
$result = mysqli_query($conn, $sqlSoLuongGopY);
// 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
// Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
// Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
$dataSoLuongGopY = [];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $dataSoLuongGopY[] = array(
        'SoLuong' => $row['SoLuong'] 
    );
}
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">
        Bảng Tin
   </h1> 
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-dark mb-2">
                <div class="card-body pb-0">
                    <div class="text-value" id="baocaoSanPham_SoLuong">
                        <h1><?= $dataSoLuongSanPham[0]['SoLuong'] ?></h1>
                    </div>
                    <div>Tổng số mặt hàng</div>
                </div>
            </div>
            <button class="btn btn-primary btn-sm form-control" id="refreshBaoCaoSanPham">Refresh dữ liệu</button>
        </div> <!-- Tổng số mặt hàng -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-success mb-2">
                <div class="card-body pb-0">
                    <div class="text-value" id="baocaoSanPham_SoLuong">
                        <h1><?= $dataSoLuongKhachHang[0]['SoLuong'] ?></h1>
                    </div>
                    <div>Tổng số khách hàng</div>
                </div>
            </div>
            <button class="btn btn-primary btn-sm form-control" id="refreshBaoCaoSanPham">Refresh dữ liệu</button>
        </div> <!-- Tổng số mặt hàng -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-danger mb-2">
                <div class="card-body pb-0">
                    <div class="text-value" id="baocaoSanPham_SoLuong">
                        <h1><?= $dataSoLuongDonHang[0]['SoLuong'] ?></h1>
                    </div>
                    <div>Tổng số đơn hàng</div>
                </div>
            </div>
            <button class="btn btn-primary btn-sm form-control" id="refreshBaoCaoSanPham">Refresh dữ liệu</button>
        </div> <!-- Tổng số mặt hàng -->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-dark mb-2">
                <div class="card-body pb-0">
                    <div class="text-value" id="baocaoSanPham_SoLuong">
                        <!-- <h1><?= $dataSoLuonggopy[0]['SoLuong'] ?></h1> -->
                    </div>
                    <div>Tổng số góp ý</div>
                </div>
            </div>
            <button class="btn btn-primary btn-sm form-control" id="refreshBaoCaoSanPham">Refresh dữ liệu</button>
        </div> <!-- Tổng số mặt hàng -->
    </div><!-- row -->
    
    <div class="row">
       <!-- Biểu đồ thống kê loại sản phẩm -->
        <div class="col-sm-6 col-lg-6">
            <canvas id="chartOfobjChartThongKeLoaiSanPham"></canvas>
            <button class="btn btn-outline-primary btn-sm form-control" id="refreshThongKeLoaiSanPham">Refresh dữ liệu</button>
        </div><!-- col -->
</div>

