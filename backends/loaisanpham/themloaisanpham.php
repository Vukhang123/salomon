<?php
require_once __DIR__ . '/../../dbconnect.php';
$sqlLoaisanpham = <<<EOT
            SELECT * FROM loaisanpham
EOT;
$resultLoaisanpham = mysqli_query($conn, $sqlLoaisanpham);
$dataLoaisanpham = [];
while ($row = mysqli_fetch_array($resultLoaisanpham, MYSQLI_ASSOC)) {
    $dataLoaisanpham[] = array(
        'lsp_ma' => $row['lsp_ma'],
        'lsp_ten' => $row['lsp_ten'],
    );
}
?>
<form name="frmLoaisanpham" id="frmLoaisanpham" method="POST" action="">
    <div class="form-group">
        <label for="lsp_ma">Mã loại sản phẩm</label>
        <input type="text" class="form-control" id="lsp_ma" name="lsp_ma" placeholder="Mã loại sản phẩm" readonly>
        <small id="lsp_maHelp" class="form-text text-muted">Mã loại sản phẩm không được hiệu chỉnh.</small>
    </div>
    <div class="form-group">
        <label for="lsp_ten">Tên loại sản phẩm</label>
        <input type="text" class="form-control" id="lsp_ten" name="lsp_ten" placeholder="Tên loại sản phẩm" >
    </div>
      <input type="submit" name="btnthem" id="btnthem" value="Them" class="btn btn-primary"/>
</form>
<?php
if(isset($_POST['btnthem'])){
    $lsp_ten = $_POST['lsp_ten'];
    $sqlUpdate = "INSERT INTO loaisanpham (lsp_ten) VALUES (N'$lsp_ten');";
    mysqli_query($conn,$sqlUpdate);
    echo('Thanh  Cong');
    // header('location:/salomon/backends/index.php?page=capnhatdanhsach');
}
?>