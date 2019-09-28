<?php
require_once __DIR__ . '/../../dbconnect.php';
require_once __DIR__ . '/../../bootstrap.php';

$sqlnhasanxuat = <<<EQT
  SELECT * FROM nhasanxuat
EQT;
$resultnhasanxuat = mysqli_query($conn,$sqlnhasanxuat);
$datanhasanxuat = [];
while ($row = mysqli_fetch_array($resultnhasanxuat, MYSQLI_ASSOC)) {
    $datanhasanxuat[] = array(
        'nsx_ma' => $row['nsx_ma'],
        'nsx_ten' => $row['nsx_ten'],
    );
}
?>
<form name="frmNhaSanXuat" id="frmNhaSanXuat" method="POST" action="">
    <div class="form-group">
        <label for="nsx_ma">Mã loại Nhà Sản Xuất</label>
        <input type="text" class="form-control" id="nsx_ma" name="nsx_ma" placeholder="Mã loại Nhà Sản Xuất" readonly>
        <small id="lsp_maHelp" class="form-text text-muted">Mã loại Nhà Sản Xuất không được hiệu chỉnh.</small>
    </div>
    <div class="form-group">
        <label for="nsx_ten">Tên Nhà Sản Xuất</label>
        <input type="text" class="form-control" id="nsx_ten" name="nsx_ten" placeholder="Tên Nhà Sản Xuất" >
    </div>
      <input type="submit" name="btnthem" id="btnthem" value="Them" class="btn btn-primary"/>
</form>

<?php
if(isset($_POST['btnthem'])) 
{
    // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
    $tenLoai = $_POST['nsx_ten'];
    // Câu lệnh INSERT
    $sql = "INSERT INTO `nhasanxuat` (nsx_ten) VALUES ('" . $tenLoai ."');";
    // Thực thi INSERT
    mysqli_query($conn, $sql);
    // Đóng kết nối
    mysqli_close($conn);
    // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
    echo 'Thành Công';
}
?>