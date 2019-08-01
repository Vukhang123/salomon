<form  id="xoasanpham" name="xoasanpham" method="post" action="/web/xoa.php" >
    ID Càn Xóa: <input type="text" name="xsp" id="xsp"></br>
    <input type="submit" name="Xoa" value="Xóa">

</form>
<?php
    if(isset($_POST['Xoa'])){
        $conn = mysqli_connect('localhost','root','','salomon') or die ('xoin loi');

        $id = $_POST['xsp'];
        $sql = "DELETE FROM loaisanpham WHERE lsp_ma = $id";

        mysqli_query($conn,$sql);
        echo 'Thanh Cong';
    }
?>