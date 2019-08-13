<?php

    $conn = mysqli_connect('localhost','root','','salomon') or die ('xoin loi');
    
    $sql="INSERT INTO `loaisanpham`(lsp_ten,lsp_mota) VALUES (N'máy tính bảng','laptop')";
    mysqli_query($conn,$sql);
  
?>
<form  id="themsanpham" name="themsanpham" method="post" action="/web/loaisanpham.php" >
    tensanpham: <input type="text" name="tsp" id="tsp"><br>
    motasanpham: <input type="text" name="mtsp" id="mtsp"><br>
    <input type="submit" name="them" value="them">

</form>