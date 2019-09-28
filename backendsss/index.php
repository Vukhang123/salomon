<?php
require_once __DIR__ . '/../dbconnect.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'sanpham_danhsach';
?> 
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salomon</title>
    <link href="/salomon/public/vendor/bootstrap/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="/salomon/public/css/index/index.css" type="text/css" rel="stylesheet" />
    <link href="/salomon/public/css/sanpham/sanpham.css" type="text/css" rel="stylesheet" />
    <link href="/salomon/public/vendor/fontawesome/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    
    <?php if($page == 'dashboard') : ?>
        <link rel="stylesheet" href="/salomon/public/vendor/Chart.js/Chart.min.css">
    <?php endif ?>

</head>
<body>
    <div class="container-fluid">
                    <div class="row table-dark ">
                        <div class="col-md-2 col-12 col-xl-2 ">
                        <i class="fa fa-user"></i> Danh Sach
                        </div>           
                    </div>
    </div>            
        <div class="container-fluid  ">    
            <div class="row " id="main-content">
                <!-- Noi Dung -->
                <div class="col-md-3 col-12 col-xl-3 nav ">          
                        <ul class="flex-column ">
                            <li class="nav-item">                
                            <a href="?page=dashboard" data-toggle="collapse" aria-expanded="true" class="nav-link dropdown-toggle">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i><span>dashboard</span>
                            </a>
                                
                            </li>                 
                            <li class="nav-item">                
                            <a href="#menuloaisanpham" data-toggle="collapse" aria-expanded="true" class="nav-link dropdown-toggle">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i><span> Loai san pham</span>
                            </a>
                                <ul class="collapse " id="menuloaisanpham" style>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?page=danhsachloaisanpham">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Danh sach
                                        </a>
                                    </li>                         
                                    <li class="nav">
                                        <a class="nav-link" href="?page=themloaisanpham">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Them Loai San Pham
                                        </a>
                                    </li>                         
                                </ul>
                            </li>                 
                            <li class="">                
                            <a href="#menusanpham" data-toggle="collapse" aria-expanded="true" class="nav dropdown-toggle">
                                <i class="fa fa-list-alt" aria-hidden="true"></i> San Pham
                            </a>
                                <ul class="collapse " id="menusanpham" style>
                                    <li class="nav">
                                        <a class="nav-link" href="?page=danhsachsanpham">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Danh sach
                                        </a>
                                    </li>                         
                                    <li class="nav">
                                        <a class="nav-link" href="?page=themsanpham">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Them San Pham
                                        </a>
                                    </li>                         
                                </ul>
                        </li>                 
                            <li class="">                
                            <a href="#menunhasanxuat" data-toggle="collapse" aria-expanded="true" class="nav-link dropdown-toggle">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i> Nha San Xuat
                            </a>
                                <ul class="collapse " id="menunhasanxuat" style>
                                    <li class="nav">
                                        <a class="nav-link" href="?page=danhsachnhasanxuat">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Danh sach
                                        </a>
                                    </li>                         
                                    <li class="nav">
                                        <a class="nav-link" href="?page=themnhasanxuat">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Them Nha San Xuat
                                        </a>
                                    </li>                         
                                </ul>
                        </li>                 
                            <li class="">                
                            <a href="#hinhsanpham" data-toggle="collapse" aria-expanded="true" class="nav-link dropdown-toggle">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i> Hinh San Pham
                            </a>
                                <ul class="collapse " id="hinhsanpham" style>
                                    <li class="nav">
                                        <a class="nav-link" href="?page=themhinhsanpham">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Hinh San Pham
                                        </a>
                                    </li>                         
                                    <li class="nav">
                                        <a class="nav-link" href="?page=danhsachhinh">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> Danh Sach
                                        </a>
                                    </li>                         
                                </ul>
                        </li>   
                        <?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])) : ?>
                        <li class="list-group-item"><a href="/salomon/backend/page/dangxuat.php">Đăng xuất</a></li>
                    <?php else : ?>
                        <li class="list-group-item"><a href="/salomon/backend/page/dangnhap.php">Đăng nhập</a></li>
                    <?php endif ?>              
                                       
                    </ul>
                </div>
                <div class="col-md-9 col-12 col-xl-9 bg " >
                <?php
                   

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
                    else if($page == 'sualoaisanpham'){
                        include('loaisanpham/sua.php');
                    }   
                    else if($page == 'suasanpham'){
                        include('sanpham/suasanpham.php');
                    }   
                    else if($page == 'themhinhsanpham'){
                        include('hinhsanpham/them.php');
                    }   
                    else if($page == 'danhsachhinh'){
                        include('hinhsanpham/danhsach.php');
                    }   
                    else if($page == 'xoahinh'){
                        include('hinhsanpham/xoa.php');
                    }   
                    else if($page == 'dangky'){
                        include('page/dangky.php');
                    }   
                    else if($page == 'dashboard'){
                        include('page/dashboard.php');
                    }
                    ?>
                    
                </div><!-- /End content -->
            </div>
        </div>    
    </div>   
</div>


<!-- Liên kết thư viện JQuery -->
    <script src="/salomon/public/vendor/jquery/jquery-3.4.1.min.js"> </script>
<!-- Liên kết thư viện POPPERJS -->
    <script src="/salomon/public/vendor/poperjs/popper.min.js"> </script>
<!-- Liên kết thư viện Bootstrap 4 -->
    <script src="/salomon/public/vendor/bootstrap/bootstrap/js/bootstrap.min.js"> </script>
<!-- Liên kết thư viện sweetalert 2 -->  
    <script src="/salomon/public/vendor/seetarlert2/sweetalert2.all.min.js"> </script>
<!-- Custom script -->

<?php if($page == 'danhsachhinh' ) :?> 
    <script src=/salomon/public/js/hinhsanpham/hinhsanpham.js></script>    
<?php endif ?>

<?php  if($page == 'danhsachsanpham') : ?>
    <script src="/salomon/public/vendor/jqueryvalidation/jquery.validate.min.js"> </script>         
    <script src="/salomon/public/vendor/jqueryvalidation/localization/messages_vi.min.js"> </script>
    <script src="/salomon/public/js/sanpham/sanpham.js"> </script>
<?php endif ?>   

 <?php if($page == 'dashboard') : ?>
        <script src="/salomon/public/vendor/Chart.js/Chart.min.js"></script>
        <script src="/salomon/public/js/page/dashboard.js"></script>
<?php endif ?>



</body>
</html> <!--          <ul class="list-group">
                    <li class="list-group-item"><a href="?page=danhsachloaisanpham" class="nav-link dropdown-toggle">Loại sản phẩm</a>
                        <ul class="collapse" id="loaisanphamMenu">
                          
                            <li class="nav-item">
                                <a class="nav-link" >
                                    Danh Sach
                                </a>
                            </li>    
                        </ul>

                    </li>
                    <li class="list-group-item"><a href="?page=danhsachsanpham">Sản phẩm</a></li>
                    <li class="list-group-item"><a href="?page=danhsachnhasanxuat">Nhà sản xuất</a></li>
                    <li class="list-group-item"><a href="dondathang\danhsachdondathang.php">Đơn dặt hàng</a></li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul> -->