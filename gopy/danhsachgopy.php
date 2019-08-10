<?php
require_once __DIR__ . '/../dbconnect.php';
$sqlgopy = <<<EOT
SELECT gp.gy_ma,gp.gy_hoten,gp.gy_email,gp.gy_diachi,gp.gy_dienthoai,gp.gy_tieude,gp.gy_noidung,gp.gy_ngaygopy,cdgy.cdgy_ten
FROM gopy gp
JOIN chudegopy cdgy ON gp.cdgy_ma = cdgy.cdgy_ma
EOT;

$resultgopy = mysqli_query($conn, $sqlgopy);
$datagopy = [];
while ($row = mysqli_fetch_array($resultgopy, MYSQLI_ASSOC)) {
    $datagopy[] = array(
        'gy_hoten' => $row['gy_hoten'],
        'gy_email' => $row['gy_email'],   
        'gy_diachi' => $row['gy_diachi'],   
        'gy_dienthoai' => $row['gy_dienthoai'],   
        'gy_tieude' => $row['gy_tieude'],   
        'gy_noidung' => $row['gy_noidung'],   
        'gy_ngaygopy' => $row['gy_ngaygopy'],   
        'cdgy_ma' => $row['cdgy_ma'],   
    );
}
?>
<table border="1">
<thead>
<tr>
<th>Mã Góp Ý</th>
<th>Họ Tên Góp Ý </th>
<th>Email Góp Ý</th>
<th>Địa Chỉ Góp Ý</th>
<th>Điện Thoại Góp Ý</th>
<th>Tiêu Đề Góp Ý</th>
<th>Nội Dung Góp Ý</th>
<th>Ngày Góp Ý</th>
<th>Chủ Đề Góp Ý</th>
</tr>
</thead>
<tbody>
<tbody>
        <?php foreach($datagopy as $row): ?>
        <tr>
            <td><?= $row['gy_ma'] ?></td>
            <td><?= $row['gy_hoten'] ?></td>
            <td><?= $row['gy_email'] ?></td>
            <td><?= $row['gy_diachi'] ?></td>
            <td><?= $row['gy_dienthoai'] ?></td>
            
            <td><?= $row['gy_tieude'] ?></td>
            <td><?= $row['gy_noidung'] ?></td>
            <td><?= $row['gy_ngaygopy'] ?></td>
            <td><?= $row['cdgy_ma'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</tbody>
</table>