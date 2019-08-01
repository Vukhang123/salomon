<?php

    $conn = mysqli_connect('localhost','root','','salomon') or die ('xoin loi');
  
    
    $tenloaisanpham= $_POST['tsp'];
    $motaloaisanpham= $_POST['mtsp'];

    $sql="INSERT INTO `loaisanpham`(lsp_ten,lsp_mota) VALUES (N'$tenloaisanpham','l$motaloaisanpham')";
    mysqli_query($conn,$sql);
    echo 'Thanh cong';
?>