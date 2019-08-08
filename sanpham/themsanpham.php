<?php
require_once __DIR__ . '/../dbconnect.php';
$sqlLoaisanpham = <<<EOT
        SELECT * 
        FROM loaisanpham
EOT;

$resultLoaisanpham = mysqli_query($conn, $sqlLoaisanpham);
$dataLoaisanpham = [];
while ($row = mysqli_fetch_array($resultLoaisanpham, MYSQLI_ASSOC)) {
    $dataLoaisanpham[] = array(
        'lsp_ma' => $row['lsp_ma'],
        'lsp_ten' => $row['lsp_ten'],   
    );
}
$sqlNhasanxuat = <<<EOT
        SELECT * 
        FROM nhasanxuat
EOT;

$resultNhasanxuat = mysqli_query($conn, $sqlNhasanxuat);
$dataNhasanxuat = [];
while ($row = mysqli_fetch_array($resultNhasanxuat, MYSQLI_ASSOC)) {
    $dataNhasanxuat[] = array(
        'nsx_ma' => $row['nsx_ma'],
        'nsx_ten' => $row['nsx_ten'],   
    );
}

$sqlKhuyenmai = <<<EOT
        SELECT * 
        FROM khuyenmai
EOT;

$resultKhuyenmai = mysqli_query($conn, $sqlKhuyenmai);
$dataKhuyenmai = [];
while ($row = mysqli_fetch_array($resultKhuyenmai, MYSQLI_ASSOC)) {
    $dataKhuyenmai[] = array(
        'km_ma' => $row['km_ma'],
        'km_ten' => $row['km_ten'],   
    );
}

?>
<form  name="frmloaisanpham" id="frmloaisanpham" method="post" action="" >
    Tên Sản Phẩm:<input type="text" name="sp_ten" id="sp_ten" /><br>
    Giá Sản Phẩm:<input type="text" name="sp_gia" id="sp_gia" /><br>
    Giá Cũ Sản Phẩm:<input type="text" name="sp_giacu" id="sp_giacu" /><br>
    Mô Tả Sản Phẩm:<input type="text" name="sp_mota" id="sp_mota" /><br>
    Mô Tả Chi Tiết Sản Phẩm:<input type="text" name="sp_mota_ngan" id="sp_mota_ngan" /><br>
    Ngày Cập Nhật Sản Phẩm:<input type="text" name="sp_ngaycapnhat" id="sp_ngaycapnhat" /><br>
    Số Lượng Sản Phẩm:<input type="text" name="sp_soluong" id="sp_soluong" /><br>
    Tên Loại Sản Phẩm : <select name="lsp_ma" id="lsp_ma">Loại Sản Phẩm :
             <?php foreach($dataLoaisanpham as $Loaisanpham): ?>    
                 <option value="<?= $Loaisanpham['lsp_ma']?>"><?= $Loaisanpham['lsp_ten']?></option>
             <?php endforeach ?>    
    </select><br>
    Tên Nhà Sản Xuất :<select name="nsx_ma" id="nsx_ma">
             <?php foreach($dataNhasanxuat as $nhasanxuat): ?>    
                 <option value="<?= $nhasanxuat['nsx_ma']?>"><?= $nhasanxuat['nsx_ten']?></option>
             <?php endforeach ?>    
    </select><br>
    Khuyến Mãi :<select name="km_ma" id="km_ma">
             <?php foreach($dataKhuyenmai as $khuyenmai): ?>    
                 <option value="<?= $khuyenmai['nsx_ma']?>"><?= $khuyenmai['nsx_ten']?></option>
             <?php endforeach ?>    
    </select><br>
    <input type="submit" value="Thêm Sản Phẩm" name="themsanpham"/>
    
</form>