<?php
require_once __DIR__ . '/../dbconnect.php';
$sql = <<<EOT
        SELECT * FROM chudegopy
EOT;

$result = mysqli_query($conn, $sql);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array(
        'cdgy_ma' => $row['cdgy_ma'],
        'cdgy_ten' => $row['cdgy_ten'],
                  
    );
}
?>
<table border="1">
    <thead>
        <tr>
            <th>Mã Chủ Đề</th>
            <th>Tên Chủ Đề</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row): ?>
            <tr>
                <td><?= $row['cdgy_ma'] ?></td>
                <td><?= $row['cdgy_ten']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>