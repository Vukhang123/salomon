<?php
require_once __DIR__ . '/../dbconnect.php';
$sql = <<<EOT
SELECT ddh.dh_ma,ddh.dh_ngaylap,ddh.dh_ngaygiao,ddh.dh_noigiao,ddh.dh_trangthaithanhtoan,httt.httt_ten,kh.kh_tendangnhap
FROM dondathang ddh
JOIN hinhthucthanhtoan httt ON ddh.httt_ma = httt.httt_ma
JOIN khachhang kh ON ddh.kh_tendangnhap = kh.kh_tendangnhap
EOT;

$result = mysqli_query($conn, $sql);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array(
        'dh_ma' => $row['dh_ma'],
        'dh_ngaylap' => $row['dh_ngaylap'],
        'dh_ngaygiao' => $row['dh_ngaygiao'],
        'dh_noigiao' => $row['dh_noigiao'],
        'dh_trangthaithanhtoan' => $row['dh_trangthaithanhtoan'],
        'httt_ma' => $row['httt_ma'],
        'kh_tendangnhap' => $row['kh_tendangnhap'],            
    );
}
?>
<table>
<thead>
</thead>
</table>