<?php
require_once __DIR__ . '/../../dbconnect.php';
// Here DOCS
// End of Text
$sql = <<<EOT
    SELECT sp.sp_ma, sp.sp_ten, sp.sp_gia, sp.sp_giacu, sp.sp_mota_ngan, sp.sp_soluong,
        lsp.lsp_ten, nsx.nsx_ten, km.km_ten
    FROM sanpham sp
    JOIN loaisanpham lsp ON sp.lsp_ma = lsp.lsp_ma
    JOIN nhasanxuat nsx ON sp.nsx_ma = nsx.nsx_ma
    LEFT JOIN khuyenmai km ON sp.km_ma = km.km_ma;
EOT;
$result = mysqli_query($conn, $sql);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array(
        'sp_ma' => $row['sp_ma'],
        'sp_ten' => $row['sp_ten'],
        'sp_gia' => $row['sp_gia'],
        'sp_giacu' => $row['sp_giacu'],
        'sp_mota_ngan' => $row['sp_mota_ngan'],
        'sp_soluong' => $row['sp_soluong'],
        'lsp_ten' => $row['lsp_ten'],
        'nsx_ten' => $row['nsx_ten'],
        'km_ten' => $row['km_ten'],
    );
}
// var_dump($data);die;
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">
        Danh Sách Sản Phẩm
   </h1> 
</div>
<a href="/salomon/?page=themsanpham" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>Thêm Sản phẩm</a>
<div class="table-responsive-sm">
<table class="table table-bordered table-hover table-sm  mt-2">
    <thead class="thead-dark">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Giá cũ sản phẩm</th>
            <th>Mô tả ngắn sản phẩm</th>
            <th>Số lượng sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Nhà sản phẩm</th>
            <th>Khuyến mãi sản phẩm</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row): ?>
        <tr>
            <td><?= $row['sp_ma'] ?></td>
            <td><?= $row['sp_ten'] ?></td>
            <td><?= $row['sp_gia'] ?></td>
            <td><?= $row['sp_giacu'] ?></td>
            <td><?= $row['sp_mota_ngan'] ?></td>
            <td><?= $row['sp_soluong'] ?></td>
            <td><?= $row['lsp_ten'] ?></td>
            <td><?= $row['nsx_ten'] ?></td>
            <td><?= $row['km_ten'] ?></td>
            <td>
               <!-- <a href="/salomon/?page=suasanpham?sp_ma=<?= $row['sp_ma']; ?>">Sửa</a>
                <a href="/web02/sanpham/xoa.php?sp_ma=<?= $row['sp_ma']; ?>">Xóa</a>-->
                <button class="btn btn-primary btn-edit " data-sp-ma="<?= $row['sp_ma']?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Edit
                </button>
                <button class="btn btn-danger btn-delete " data-sp-ma="<?= $row['sp_ma']?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete
                </button>
                
            </td>
        </tr>
        <?php endforeach; ?>
        
    </tbody>
</table>
<nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
        </nav>
</div>