    
<?php
require_once __DIR__ . '/../../dbconnect.php';
$sql = "SELECT * FROM loaisanpham;";
$result = mysqli_query($conn, $sql);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array(
        'lsp_ma' => $row['lsp_ma'],
        'lsp_ten' => $row['lsp_ten'],
        'lsp_mota' => $row['lsp_mota'],
    );
}

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">
        Danh Sách Loại Sản Phẩm
   </h1> 
</div>
<a href="?page=themloaisanpham" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>Thêm Loại sản phẩm</a>
<div class="table-responsive-sm">
    <table class="table table-bordered table-hover table-sm mt-2">
        <thead class="thead-dark">
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Mô Tả</th>
                <th>Chức năng</th>

            </tr>
    </thead>
    <tbody>
    <?php foreach($data as $row) : ?>
    <tr>
        <td><?= $row['lsp_ma'];?></td>
        <td><?= $row['lsp_ten'];?></td>
        <td><?= $row['lsp_mota'];?></td>
        <td>
        <button class="btn btn-primary btn-edit " data-lsp-ma="<?= $row['lsp_ma']?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Edit
                    </button>
                    <button class="btn btn-danger btn-delete " data-lsp-ma="<?= $row['lsp_ma']?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete
                    </button>
        </td>

    </tr>
    <?php endforeach; ?>

    </tbody>
    </table> 
</div>
