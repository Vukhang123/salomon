<?php
require_once __DIR__ . '/../dbconnect.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salomon</title>
    <link href="/salomon/public/vendor/bootstrap/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="/salomon/public/vendor/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
  
    <link rel="stylesheet" href="/salomon/public/backend/css/app.css" type="text/css" />
    
    <?php if($page == 'dashboard') : ?>
        <link rel="stylesheet" href="/salomon/public/vendor/Chart.js/Chart.min.css">
    <?php endif ?>
</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Nền tảng</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Tìm kiếm" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Đăng xuất</a>
            </li>
        </ul>
</nav>
<div class="container-fluid">
        <div class="row"  id="main-content">
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <!-- Bảng Tin -->
                <li class="nav-item">
                    <a class="nav-link active dropdown-toggle" href="?page=dashboard"  aria-expanded="true">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <span>Bảng Tin</span>
                    </a>
                </li>
                <!-- End menu Bảng Tin --> 

                <!-- Loai San Pham -->
                <li class="nav-item">
                    <a href="#loaisanphamSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link active dropdown-toggle">
                        <i class="fa fa-align-right" aria-hidden="true"></i> <span> Loai san pham</span>
                    </a>
                    <ul class="collapse" id="loaisanphamSubMenu" style>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=danhsachloaisanpham">
                                
                                Danh sách
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=themloaisanpham">
                                
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Ket Thuc Loai San Pham -->

                <!-- Sản Phẩm -->
                <li class="nav-item">
                        <a href="#sanphamSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link active dropdown-toggle">
                            <i class="fa fa-product-hunt" aria-hidden="true"></i> Sản Phẩm
                        </a>
                        <ul class="collapse" id="sanphamSubMenu">
                            <li class="nav-item">
                                <a class="nav-link" href="?page=danhsachsanpham">
                                    <span data-feather="list"></span>
                                    Danh sách
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=themsanpham">
                                    <span data-feather="plus"></span>
                                    Thêm mới
                                </a>
                            </li>
                        </ul>
                </li>
                <!-- End menu Sản Phẩm -->

                <!-- Hình Ảnh -->
                <li class="nav-item">
                        <a href="#hinhsanphamSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link active dropdown-toggle">
                            <i class="fa fa-file-image-o" aria-hidden="true"></i> Hình Ảnh
                        </a>
                        <ul class="collapse" id="hinhsanphamSubMenu">
                            <li class="nav-item">
                                <a class="nav-link" href="?page=hinhsanpham">
                                    <span data-feather="list"></span>
                                    Danh sách
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=themhinhsanpham">
                                    <span data-feather="plus"></span>
                                    Thêm mới
                                </a>
                            </li>
                        </ul>
                </li>
                <!-- End menu Hình Ảnh -->
                
                
                <!-- Nhà Sản Xuất -->
                <li class="nav-item">
                    <a href="#nsxsanphamSubMenu" data-toggle="collapse" aria-expanded="true" class="nav-link active dropdown-toggle">
                        <i class="fa fa-university" aria-hidden="true"></i> Nhà Sản Xuất
                    </a>
                    <ul class="collapse" id="nsxsanphamSubMenu">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=danhsachnhasanxuat">
                                <span data-feather="list"></span>
                                Danh sách
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=themnhasanxuat">
                                <span data-feather="plus"></span>
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                    <!-- End menu  Nhà Sản Xuất  -->
            </ul>
        </div>
    </nav>
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
                <div>
                <?php                  

                   if ($page == 'dashboard'){
                    include('pages/dashboard.php');
                   } 
                   if($page == 'danhsachloaisanpham'){
                    include('loaisanpham/capnhatdanhsach.php');
                   } 
                   else if($page == 'themloaisanpham'){
                    include('loaisanpham/themloaisanpham.php');
                   } 
                   else if($page == 'sualoaisanpham'){
                    include('loaisanpham/sua.php');
                   }  
                   else if($page == 'danhsachsanpham'){
                    include('sanpham/danhsachsanpham.php');
                   }  
                   else if($page == 'themsanpham'){
                    include('sanpham/themsanpham.php');
                   }  
                   else if($page == 'suasanpham'){
                    include('sanpham/suasanpham.php');
                   }  
                   else if($page == 'hinhsanpham'){
                       include('hinhsanpham/danhsach.php');
                   }
                   else if($page == 'themhinhsanpham'){
                       include('hinhsanpham/them.php');
                   }
                   else if($page == 'danhsachnhasanxuat'){
                       include('nhasanxuat/danhsachnhasanxuat.php');
                   }
                   else if($page == 'themnhasanxuat'){
                       include('nhasanxuat/themnhasanxuat.php');
                   }
                   else if($page == 'themnhasanxuat'){
                       include('nhasanxuat/themnhasanxuat.php');
                   }
                   
                   
                   ?>
                </div>
            </main>
        </div>
    </div>

<!-- Liên kết thư viện JQuery -->
<script src="/salomon/public/vendor/jquery/jquery-3.4.1.min.js"> </script>
<!-- Liên kết thư viện POPPERJS -->
    <script src="/salomon/public/vendor/popperjs/popper.min.js"> </script>
<!-- Liên kết thư viện Bootstrap 4 -->
    <script src="/salomon/public/vendor/bootstrap/bootstrap/js/bootstrap.min.js"> </script>
<!-- Liên kết thư viện sweetalert 2 -->  
    <script src="/salomon/public/vendor/seetarlert2/sweetalert2.all.min.js"> </script>
<!-- Custom script -->

<?php if($page == 'dashboard') : ?>
        <script src="/salomon/public/vendor/Chart.js/Chart.min.js"></script>
        <script src="/salomon/public/js/page/dashboard.js"></script>
<?php endif ?>
<!-- DanhSach_Sanpham -->
<?php  if($page == 'danhsachsanpham') : ?>
    <script src="/salomon/public/vendor/jqueryvalidation/jquery.validate.min.js"> </script>         
    <script src="/salomon/public/js/sanpham/sanpham.js"> </script>
<?php endif ?>  
<!-- danhsach_loaisanpham  -->
<?php  if($page == 'danhsachloaisanpham') : ?>
    <script src="/salomon/public/vendor/jqueryvalidation/jquery.validate.min.js"> </script>         
    <script src="/salomon/public/js/loaisanpham/loaisanpham.js"> </script>
<?php endif ?>  
<!-- danhsach_hinhsanpham  -->
<?php  if($page == 'hinhsanpham') : ?>
    <script src="/salomon/public/vendor/jqueryvalidation/jquery.validate.min.js"> </script>         
    <script src="/salomon/public/js/hinhsanpham/hinhsanpham.js"> </script>
<?php endif ?>  
<!-- danhsach_nhasanxuat  -->
<?php  if($page == 'danhsachnhasanxuat') : ?>
    <script src="/salomon/public/vendor/jqueryvalidation/jquery.validate.min.js"> </script>         
    <script src="/salomon/public/js/nhasanxuat/nhasanxuat.js"> </script>
<?php endif ?>  

    
</body>
</html>