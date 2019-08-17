    
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
<style>
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
}


</style>
<a href="/salomon/?page=themloaisanpham" class="btn btn-outline-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i>Thêm Loại sản phẩm</a>
<div class="table-responsive-sm">
<table class="table table-bordered table-hover table-responsive table-sm">
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
        <a href="/salomon/?page=sualoaisanpham ?id=<?= $row['lsp_ma']; ?>" class="btn sua">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
        sua
        </a>
        <a href="/salomon/loaisanpham/Xoa.php?id=<?= $row['lsp_ma'];?>" class="btn xoa">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete">
        <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
        <line x1="18" y1="9" x2="12" y2="15"></line>
        <line x1="12" y1="9" x2="18" y2="15"></line></svg>
        Xóa
        </a>
    </td>

</tr>
<?php endforeach; ?>
</tbody>
</table> 
</div>
