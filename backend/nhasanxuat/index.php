<?php
require_once __DIR__.'/../../bootstrap.php';

require_once __DIR__ . '/../../dbconnect.php';

$sql = <<< EQT
    SELECT * 
    FROM nhasanxuat
EQT;  
 $result = mysqli_query($conn,$sql);
 $data = [];
 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array(
        'nsx_ma' => $row['nsx_ma'],
        'nsx_ten' => $row['nsx_ten'],
    );
}  
echo $twig->render('backend/nhasanxuat/index.html.twig',[
   'danhsachnhasanxuat'=> $data 
]);