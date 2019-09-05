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

    <div class="login-box">
        <form name="frmDangKy" id="frmDangKy" action="" method="POST">
            <h1>Login</h1>
            <div class="text-box">
            <i class="fa fa-user"></i> <input type="text"  name="kh_tendangnhap" id="kh_tendangnhap" placeholder="username" /><br>
            </div>
            <div class="text-box">
            <i class="fa fa-key" aria-hidden="true"></i> <input type="password" name="kh_matkhau" id="kh_matkhau" placeholder="password"/><br><br>
            </div>
            <button  name="btndangnhap" id="btndangnhap" class="btn" aria-hidden="true">
                Signin 
            </button>
            <!-- <a href=""><input type="button" value="Log In" ></a><br><br><br><br><br><br><br>
            Don't have account? <a href=btn"">Signin</a> -->
            
        </form>  
            <?php
                if(isset($_POST['btndangnhap'])){
                    $kh_tendangnhap = $_POST['kh_tendangnhap'];
                    // mã hóa mật khẩu 
                    $kh_matkhau = $_POST['kh_matkhau'];

                    $sqlSelect = "SELECT * FROM  khachhang WHERE  kh_tendangnhap = '$kh_tendangnhap' AND kh_matkhau = '$kh_matkhau'";
                    $resultSelect = mysqli_query($conn, $sqlSelect);
                    // 
                    $khachhangRow = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record
                    // print_r($sqlSelect);
                    if(empty($khachhangRow)) {
                        echo 'Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin!';
                    } else {
                        echo 'Đăng nhập Thành công!';
                        header('location: /salomon/index.php');
                        //   Lưu username vào trong session
                          $_SESSION['username'] = $kh_tendangnhap;
                    }

                }
                
            ?>
    </div>
</body>
</html>