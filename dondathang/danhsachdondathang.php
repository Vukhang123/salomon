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
        'httt_ten' => $row['httt_ten'],
        'kh_tendangnhap' => $row['kh_tendangnhap'],            
    );
}
?>
<table border="1">
    <thead>
        <tr>
            <th>Mã Đơn Hàng</th>
            <th>Ngày Lập</th>
            <th>Ngày Giao</th>
            <th>Nơi Giao</th>
            <th>Trạng Thái Thanh Toán</th>
            <th>Hình Thức Thanh Toán</th>
            <th>Tên Đăng Nhập</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row): ?>
            <tr>
                <td><?= $row['dh_ma'] ?></td>
                <td><?= $row['dh_ngaylap'] ?></td>
                <td><?= $row['dh_ngaygiao'] ?></td>
                <td><?= $row['dh_noigiao'] ?></td>
                <td><?= $row['dh_trangthaithanhtoan'] ?></td>
                <td><?= $row['httt_ten'] ?></td>
                <td><?= $row['kh_tendangnhap'] ?></td>  
             </tr>        
        <?php endforeach; ?>
    </tbody>
</table>