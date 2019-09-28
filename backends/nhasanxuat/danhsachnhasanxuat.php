<?php
require_once __DIR__ . '/../../dbconnect.php';
$sqlNhasanxuat = <<<EOT
            SELECT * FROM nhasanxuat
EOT;

$resultNhasanxuat = mysqli_query($conn, $sqlNhasanxuat);
$dataNhasanxuat = [];
while ($row = mysqli_fetch_array($resultNhasanxuat, MYSQLI_ASSOC)) {
    $dataNhasanxuat[] = array(
        'nsx_ma' => $row['nsx_ma'],
        'nsx_ten' => $row['nsx_ten'],
    );
}
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">
        Danh Sách Nhà Sản Xuất
   </h1> 
</div>
<a href="?page=themloaisanpham" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>Thêm Loại sản phẩm</a>
<div class="table-responsive-sm">

<table class="table table-bordered table-hover table-sm mt-2">
    <thead class="thead-dark">
        <tr>
            <th>Mã Nhà Sản Xuất</th>
            <th>Tên Nhà Sản Xuất</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($dataNhasanxuat as $row): ?>
            <tr>
               <td><?= $row['nsx_ma']?></td>
               <td><?= $row['nsx_ten']?></td>
               <td>
                   
                    <button class="btn btn-danger btn-delete " data-nsx-ma="<?= $row['nsx_ma']?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete
                    </button>
            </td>
            </tr>
        <?php  endforeach; ?>
    </tbody>
</table>
</div>