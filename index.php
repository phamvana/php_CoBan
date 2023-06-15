<?php 
    require('bootstrap/header.php');



    require_once "PDO/connect.php";
    $qr = "SELECT * FROM users";
    $query = $handler->query($qr);
    
    // while($r=$query->fetch())
    // {
    //     //Xuất kết quả từ bảng users
    //     echo $r['name'], "<br />"; 
    // }
    $r=$query->fetch();
    echo '<pre>', print_r($r), '</pre>';

    require('bootstrap/footer.php');

?>
