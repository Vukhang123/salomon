<?php
require_once __DIR__ . '/../../dbconnect.php';
$sql = <<<EOT
        SELECT * FROM khuyenmai
EOT;

$result = mysqli_query($conn, $sql);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array(
        'km_ma' => $row['km_ma'],
        'km_ten' => $row['km_ten'],
        'kh_noidung' => $row['kh_noidung'],
        'kh_tungay' => $row['kh_tungay'],
        'km_denngay' => $row['km_denngay'],
    );
}
?>
<table border="1">
    <thead>
        <tr>
            <th>Mã Khuyến Mãi</th>
            <th>Tên Khuyến Mãi</th>
            <th>Nội Dung</th>
            <th>Từ Ngày</th>
            <th>Đến Ngày</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row): ?>
            <tr>
                <td><?= $row['km_ma'] ?></td>
                <td><?= $row['km_ten']?></td>
                <td><?= $row['kh_noidung']?></td>
                <td><?= $row['kh_tungay']?></td>
                <td><?= $row['km_denngay']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>