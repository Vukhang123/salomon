
<?php
require_once __DIR__ . '/../dbconnect.php';
?>

<form id="frmDangKy" name="frmDangKy" method="post" action="">

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Tên Đăng Nhập</label>
      <input type="text" class="form-control" name="kh_tendangnhap" id="kh_tendangnhap" placeholder="Tên Đăng Nhập">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="kh_matkhau" id="kh_matkhau" placeholder="Password">
    </div>
  </div>
<!-- Tên đăng nhập: <input type="text" name="kh_tendangnhap" id="kh_tendangnhap" class="form-control" placeholder="Tên Đăng Nhập"/><br />
Mật khẩu: <input type="password" name="kh_matkhau" id="kh_matkhau" class="form-control" placeholder="Mật Khẩu"/><br /> -->
Tên: <input type="text" name="kh_ten" id="kh_ten" class="form-control" placeholder="Name"/><br />
Giới tính: 
<select name="kh_gioitinh" id="kh_gioitinh" class="form-control">
    <option value="0">Nam</option>
    <option value="1">Nữ</option>
    <option value="2">Không công bố</option>
</select>
<br />
Địa chỉ: <input type="text" name="kh_diachi" id="kh_diachi" class="form-control" placeholder="Adress"/><br />
Điện thoại: <input type="text" name="kh_dienthoai" id="kh_dienthoai" class="form-control" placeholder="Number Phone"/><br />
Email: <input type="text" name="kh_email" id="kh_email" class="form-control"  placeholder="Enter email"/><br />
Ngày sinh: <input type="text" name="kh_ngaysinh" id="kh_ngaysinh" class="form-control" placeholder="Day"/><br />
Tháng sinh: <input type="text" name="kh_thangsinh" id="kh_thangsinh" class="form-control" placeholder="Month"/><br />
Năm sinh: <input type="text" name="kh_namsinh" id="kh_namsinh" class="form-control" placeholder="Year"/><br />
CMND: <input type="text" name="kh_cmnd" id="kh_cmnd" class="form-control" placeholder="Chứng Minh Nhân Dân"/><br />
Mã kích hoạt: <input type="text" name="kh_makichhoat" id="kh_makichhoat" class="form-control" /><br />
Trạng thái:
<select name="kh_trangthai" id="kh_trangthai" class="form-control">
    <option value="0">Chưa kích hoạt</option>
    <option value="1">Đã kích hoạt</option>
</select>
<br />
Có quyền Quản trị:
<input type="checkbox" id="kh_quantri" name="kh_quantri" value="1" /><br/>
    <button name="btnLuu" id="btnLuu" class="btn btn-primary">
        <i class="fa fa-heartbeat" aria-hidden="true"></i> Lưu
    </button>
</form>
<?php
if(isset($_POST['btnLuu'])) {
    $kh_tendangnhap = $_POST['kh_tendangnhap'];
    // Mã hóa
    $kh_matkhau = sha1($_POST['kh_matkhau']);
    $kh_ten = $_POST['kh_ten'];
    $kh_gioitinh = $_POST['kh_gioitinh'];
    $kh_diachi = $_POST['kh_diachi'];
    $kh_dienthoai = $_POST['kh_dienthoai'];
    $kh_email = $_POST['kh_email'];
    $kh_ngaysinh = $_POST['kh_ngaysinh'];
    $kh_thangsinh = $_POST['kh_thangsinh'];
    $kh_namsinh = $_POST['kh_namsinh'];
    $kh_cmnd = $_POST['kh_cmnd'];
    $kh_makichhoat = $_POST['kh_makichhoat'];
    $kh_trangthai = $_POST['kh_trangthai'];
    // Checkbox
    $kh_quantri = isset($_POST['kh_quantri']) ? $_POST['kh_quantri'] : 0;
    
    $sqlInsert = "INSERT INTO khachhang (kh_tendangnhap, kh_matkhau, kh_ten, kh_gioitinh, kh_diachi, kh_dienthoai, kh_email, kh_ngaysinh, kh_thangsinh, kh_namsinh, kh_cmnd, kh_makichhoat, kh_trangthai, kh_quantri) VALUES ('$kh_tendangnhap', '$kh_matkhau', '$kh_ten', $kh_gioitinh, '$kh_diachi', '$kh_dienthoai', '$kh_email', $kh_ngaysinh, $kh_thangsinh, $kh_namsinh, '$kh_cmnd', '$kh_makichhoat', $kh_trangthai, $kh_quantri)";
    
    $resultInsert = mysqli_query($conn, $sqlInsert);
}
?>