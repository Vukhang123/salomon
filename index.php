<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salomon</title>
    <link href="public/vendor/boostrap/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="public/css/sanpham/sanpham.css" type="text/css" rel="stylesheet" />
    <link href="public/vendor/fonawesone/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <style>
    
    </style>
</head>
<body>
    <div class="container-fluid">
                    <div class="row table-dark ">
                        <div class="col-md-2 col-12 col-xl-2 ">
                        <i class="fa fa-tags fw"></i> Danh Sach
                        </div>       
                        <div class="col-md-2 col-12 col-xl-2 ">
                            <a class="" href="?page=dangky">Đăng Ký</a>
                        </div> 
                        <div class="col-md-8 col-12 col-xl-8 ">
                            Đăng Xuất
                        </div>    
                    </div>
    </div>            
        <div class="container-fluid  h-100">    
            <div class="row justify-content-center h-100" style="min-height: 1000px;">
                <!-- Noi Dung -->
                <div class="col-md-2 col-12 col-xl-2 table-dark ">          
                        <ul class="nav flex-column ">
                            <li class="nav-item a1 ">                
                            <a href="#menuloaisanpham" data-toggle="collapse" aria-expanded="true" class="nav-link dropdown-toggle a nav-brand ">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i> Loai san pham
                            </a>
                                <ul class="collapse " id="menuloaisanpham" style>
                                    <li class="nav">
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
                            <li class="nav-item">                
                            <a href="#menusanpham" data-toggle="collapse" aria-expanded="true" class="nav-link dropdown-toggle">
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
                            <li class="nav-item">                
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
                            <li class="nav-item">                
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
                                       
                    </ul>
                </div>
                <div class="col-md-10 col-12 col-xl-10 bg " >
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
                    ?>
                    
                </div><!-- /End content -->
            </div>
        </div> 
        <div class="container-fluid">
            <div class="row table-dark">
                <div class="col-md-12 col-12 col-xl-12  ">
                    <h1>Hành Trang Tương  Lai</h1>
                </div>    
            </div>
        </div>      
    </div>
     
</div>

<!-- Liên kết thư viện JQuery -->
    <script src="public/vendor/jquery/jquery-3.4.1.min.js"> </script>
<!-- Liên kết thư viện POPPERJS -->
    <script src="public/vendor/poperjs/popper.min.js"> </script>
<!-- Liên kết thư viện Bootstrap 4 -->
    <script src="public/vendor/boostrap/bootstrap/js/bootstrap.min.js"> </script>
<!-- Liên kết thư viện sweetalert 2 -->  
    <script src="public/vendor/seetarlert2/sweetalert2.all.min.js"> </script>
<!-- Custom script -->

<?php if($page == 'danhsachhinh' ) :?> 
    <script src=public/js/hinhsanpham/hinhsanpham.js></script>    
<?php endif ?>

<?php  if($page == 'themsanpham') : ?>
    <script src="public/vendor/jqueryvalidation/jquery.validate.min.js"> </script>         
    <script src="public/vendor/jqueryvalidation/localization/messages_vi.min.js"> </script>
    <script src="public/js/sanpham/sanpham-validate.js"> </script>
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