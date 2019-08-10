<?php
require_once __DIR__ . '/../dbconnect.php';
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
<table border="1">
    <thead>
        <tr>
            <th>Mã Nhà Sản Xuất</th>
            <th>Tên Nhà Sản Xuất</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach($dataNhasanxuat as $row): ?>
            <tr>
            <td><?= $row['nsx_ma']?></td>
            <td><?= $row['nsx_ten']?></td>
            </tr>
            <?php  endforeach; ?>
    </tbody>
</table>