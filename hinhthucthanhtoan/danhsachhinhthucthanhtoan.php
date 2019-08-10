<?php
require_once __DIR__ . '/../dbconnect.php';
$sql = <<<EOT
        SELECT * FROM hinhthucthanhtoan
EOT;

$result = mysqli_query($conn, $sql);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array(
        'httt_ma' => $row['httt_ma'],
        'httt_ten' => $row['httt_ten'],
                  
    );
}
?>
<table border="1">
    <thead>
        <tr>
            <th>Mã Hình Thức</th>
            <th>Tên Hình Thức</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row): ?>
            <tr>
                <td><?= $row['httt_ma'] ?></td>
                <td><?= $row['httt_ten']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>