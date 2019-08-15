<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salomon</title>
    <link href="public/vendor/boostrap/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="public/vendor/fonawesone/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <style>
    div {
        border: 2px solid green;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                cot-1
            </div>    
            <div class="col-md-6 ">
                cot-2
            </div>    
        </div>
        <div class="row">
        <!-- Noi Dung -->
             <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="?page=danhsachloaisanpham">Loại sản phẩm</a></li>
                    <li class="list-group-item"><a href="?page=danhsachsanpham">Sản phẩm</a></li>
                    <li class="list-group-item"><a href="?page=danhsachnhasanxuat">Nhà sản xuất</a></li>
                    <li class="list-group-item"><a href="dondathang\danhsachdondathang.php">Đơn dặt hàng</a></li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
             </div>
              <div class="col-md-9">
              <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'sanpham_danhsach';

                if($page == 'danhsachloaisanpham'){
                    include('loaisanpham/capnhatdanhsach.php');
                }   
                else if($page == 'danhsachsanpham'){
                    include('sanpham/danhsachsanpham.php');
                }   
                else if($page == 'danhsachnhasanxuat'){
                    include('nhasanxuat/danhsachnhasanxuat.php');
                }   
                else if($page == 'danhsachnhasanxuat'){
                    include('nhasanxuat/danhsachnhasanxuat.php');
                }   
                else if($page == 'themloaisanpham'){
                    include('loaisanpham/themloaisanpham.php');
                }   
                else if($page == 'themsanpham'){
                    include('sanpham/themsanpham.php');
                }   
                 ?>
                
            </div><!-- /End content -->
        </div>
       
    </div>

    </div>


<!-- Liên kết thư viện JQuery -->
    <script src="public/vendor/jquery/jquery-3.4.1.min.js"> </script>
<!-- Liên kết thư viện POPPERJS -->
    <script src="public/vendor/poperjs/popper.min.js"> </script>
<!-- Liên kết thư viện Bootstrap 4 -->
    <script src="public/vendor/boostrap/bootstrap/js/bootstrap.min.js"> </script>
    
</body>
</html>