<?php
    $conn = mysqli_connect('localhost','root','','salomon') or die ('xin loi');
    // Tùy chỉnh kết nối
// Set charset là utf-8 đối với kết nối này. Dùng để gõ tiếng Việt, Nhật, Thái, Trung Quốc ...
// Lưu ý: gõ với bộ gõ UNIKEY, bảng mã là UNICODE
$conn->query("SET NAMES 'utf8'"); 
$conn->query("SET CHARACTER SET utf8"); 

//session_start
session_start();
?>