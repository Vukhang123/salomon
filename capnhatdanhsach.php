    
<?php
require_once __DIR__ . '/dbconnect.php';
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
<table border="1">
<tr>
    <th>Mã</th>
    <th>Tên</th>
    <th>Mô Tả</th>
    <th>Chức năng</th>

</tr>
<?php foreach($data as $row) : ?>
<tr>
    <td><?= $row['lsp_ma'];?></td>
    <td><?= $row['lsp_ten'];?></td>
    <td><?= $row['lsp_mota'];?></td>
    <td>
        <a href="/salomon/Sua.php?id=<?= $row['lsp_ma'];?>">sua</a>
    </td>
    <td>
        <a href="/salomon/Xoa.php?id=<?= $row['lsp_ma'];?>">Xóa</a>
    </td>
</tr>
<?php endforeach; ?>
</table> 
