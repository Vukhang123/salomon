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
<form name="frmnhasanxuat" id="frmnhasanxuat" method="POST" action="">
      Tên Nhà Sản Xuất:<input type="text" name="nsx_ten" id="nsx_ten" /><br>
      <input type="submit" name="btnthem" id="btnthem" value="Them"/>
</form>
<?php
if(isset($_POST['btnthem'])){
    $nsx_ten = $_POST['nsx_ten'];
    $sqlUpdate = "INSERT INTO nhasanxuat (nsx_ten) VALUES (N'$nsx_ten');";
    mysqli_query($conn,$sqlUpdate);
    echo('Thanh  Cong');
    header("location:danhsachnhasanxuat.php");
}
?>