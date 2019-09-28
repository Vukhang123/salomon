<?php
require_once __DIR__ . '/../../dbconnect.php';

require_once __DIR__ . '/../../bootstrap.php';

$sql = <<<EOT
    SELECT hsp.hsp_ma, sp.sp_ten, sp.sp_gia, hsp.hsp_tentaptin
    FROM hinhsanpham hsp
    JOIN sanpham sp ON hsp.sp_ma = sp.sp_ma
EOT;
$result = mysqli_query($conn, $sql);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array(
        'hsp_ma' => $row['hsp_ma'],
        'sp_ten' => $row['sp_ten'],
        'sp_gia' => $row['sp_gia'],
        'hsp_tentaptin' => $row['hsp_tentaptin'],
    );
}
?>

<style>
.img-thumbnail {
    width: 120px;
    height: 120px;
    border: 1px solid red;
}
</style>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">
        Danh Sách Hình Ảnh
   </h1> 
</div>
<a href="?page=themhinhsanpham"class="btn btn-success mt-2"><i class="fa fa-plus-circle" aria-hidden="true"></i>Thêm Hình sản phẩm</a>
<table class="table table-bordered table-hover table-sm mt-2">
<thead class="thead-dark">
    <tr>
        <th>Mã hình</th>
        <th>Tên sản phẩm</th>
        <th>Giá bán</th>
        <th>Hình ảnh</th>
        <th>Chức năng</th>
    </tr>
</thead>    
    <?php foreach($data as $row): ?>
    <tr>
        <td><?= $row['hsp_ma']; ?></td>
        <td><?= $row['sp_ten']; ?></td>
        <td><?= $row['sp_gia']; ?></td>
        <td>
        <img src="/salomon/public/uploads/<?= $row['hsp_tentaptin']; ?>"  class="img-thumbnail">
        </td>
        <td>
                 <button class="btn btn-primary btn-edit " data-hsp-ma="<?= $row['hsp_ma']?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Edit
                </button>
                <button class="btn btn-danger btn-delete " data-hsp-ma="<?= $row['hsp_ma']?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete
                </button>
    </td>
    </tr>
    <?php endforeach; ?>
</table>