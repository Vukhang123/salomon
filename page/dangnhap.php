<?php
require_once __DIR__ . '/../dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="dangnhap.css" type="text/css" rel="stylesheet" />
    <link href="./../public/vendor/fonawesone/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    
</head>

<body>
    <div class="signin">
        <form id="frmDangKy" name="frmDangKy" method="post" action="">
            <h1 style="color: white"><i class="far fa-user"></i>Login</h1>
            <div>
                <i class="far fa-user"></i><input type="text"  name="kh_tendangnhap" id="kh_tendangnhap" placeholder="username"/><br>
            </div>
            <div>
                <input type="password" name="kh_matkhau" id="kh_matkhau" placeholder="password"/><br><br>
            </div>
            <div>
            <button  name="btnDangNhap"  id="btnDangNhap" aria-hidden="true" >
                dang nhap
            </button><br><br><br><br><br><br><br>            
            </div>
            Don't have account? <a href="">Signin</a>
            
            
        </form>
        <?php
                if(isset($_POST['btnDangNhap'])) {
                    $kh_tendangnhap = $_POST['kh_tendangnhap'];
                    // 123456 -> sha1('123456')
                    // ma? hoa' mat khau?
                    $kh_matkhau = sha1($_POST['kh_matkhau']);
                    $sqlSelect = "select * from khachhang where kh_tendangnhap = '$kh_tendangnhap' AND kh_matkhau = '$kh_matkhau'";
                    $resultSelect = mysqli_query($conn, $sqlSelect);
                    $khachhangRow = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record
                    if(empty($khachhangRow)) {
                        echo 'Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin!';
                    } else {
                        echo 'Đăng nhập Thành công!';
                    }
                }
            ?>
    </div>
</body>
</html>