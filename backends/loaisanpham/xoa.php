<?php
    require_once __DIR__ . '/../../dbconnect.php';
    $lsp_ma = $_GET['lsp_ma'];
    $sqlDelete = "DELETE FROM loaisanpham WHERE lsp_ma = '$lsp_ma';";
    $result = mysqli_query($conn,$sqlDelete);
    
    header('location:/salomon/backends/index.php?page=danhsachloaisanpham');
?>