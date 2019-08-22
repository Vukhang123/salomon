    
<?php
require_once __DIR__ . '/../dbconnect.php';
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
/*
[
    ['lsp_ma' => 1, 'lsp_ten' => 'MÃ¡y tÃ­nh báº£ng', 'lsp_mota' => ''],
    ['lsp_ma' => 2, 'lsp_ten' => 'MÃ¡y tÃ­nh báº£ng', 'lsp_mota' => ''],
    ['lsp_ma' => 3, 'lsp_ten' => 'MÃ¡y tÃ­nh báº£ng', 'lsp_mota' => ''],
]
*/
/*print_r($data);die;*/
?>
<!-- <style>
    .sua{
        background-color:#ffc107;
        color:black;
        border-color:#ffc107;
    }
    .xoa{
        background-color:red;
        color:black;
        border-color:red;
    }
    .btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.thead{
    color: #fff;
    background-color: #343a40;
    border-color: #454d55;
    border-bottom-width: 2px;
}
.table {
    
    margin-bottom: 11rem;
    color: #164879;
    border: 1px solid black; 
    border-collapse: collapse;
    border-spacing: 2px;
} -->


<!-- </style> -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">
        Danh Sách Loại Sản Phẩm
   </h1> 
</div>
<a href="/salomon/?page=themloaisanpham" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>Thêm Loại sản phẩm</a>
<div class="table-responsive-sm">
<table class="table table-bordered table-hover table-sm">
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
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
