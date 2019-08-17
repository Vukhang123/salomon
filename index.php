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
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
              <i class="fa fa-list" aria-hidden="true"></i> Danh Sach
            </div>    
            <div class="col-md-6 ">
                <input class="form-control form-control-dark w-100" type="text" placeholder="Tìm kiếm"  />
            </div>    
            <div class="col-md-3 ">
                Dang Nhap
            </div>    
        </div>
        <div class="row">
        <!-- Noi Dung -->
             <div class="col-md-3">
                <ul class="nav flex-column">
                    <li class="nav-item">                
                       <a href="#menuloaisanpham" data-toggle="collapse" aria-expanded="true" class="nav-link dropdown-toggle">
                       Loai san pham
                       </a>
                         <ul class="collapse show" id="menuloaisanpham" style>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=danhsachloaisanpham">
                                    Danh sach
                                </a>
                            </li>                         
                            <li class="nav-item">
                                <a class="nav-link" href="?page=themloaisanpham">
                                    Them Loai San Pham
                                </a>
                            </li>                         
                         </ul>
                    </li>                 
                    <li class="nav-item">                
                       <a href="#menusanpham" data-toggle="collapse" aria-expanded="true" class="nav-link dropdown-toggle">
                       San Pham
                       </a>
                         <ul class="collapse show" id="menusanpham" style>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=danhsachsanpham">
                                    Danh sach
                                </a>
                            </li>                         
                            <li class="nav-item">
                                <a class="nav-link" href="?page=themsanpham">
                                    Them San Pham
                                </a>
                            </li>                         
                         </ul>
                   </li>                 
                    <li class="nav-item">                
                       <a href="#menunhasanxuat" data-toggle="collapse" aria-expanded="true" class="nav-link dropdown-toggle">
                       Nha San Xuat
                       </a>
                         <ul class="collapse show" id="menunhasanxuat" style>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=danhsachnhasanxuat">
                                    Danh sach
                                </a>
                            </li>                         
                            <li class="nav-item">
                                <a class="nav-link" href="?page=themnhasanxuat">
                                    Them Nha San Xuat
                                </a>
                            </li>                         
                         </ul>
                   </li>                 
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
                else if($page == 'sualoaisanpham'){
                    include('loaisanpham/sua.php');
                }   
                else if($page == 'suasanpham'){
                    include('sanpham/suasanpham.php');
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