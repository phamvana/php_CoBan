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
// $r=$query->fetch();
// echo '<pre>', print_r($r), '</pre>';

//PDO::FETCH_BOTH
// $r=$query->fetch(PDO::FETCH_BOTH);
// echo '<pre>', print_r($r), '</pre>';  

//PDO::FETCH_NUM
// $r=$query->fetch(PDO::FETCH_NUM);
// echo '<pre>', print_r($r), '</pre>';

//PDO::FETCH_ASSOC
// $r = $query->fetch(PDO::FETCH_ASSOC);
// echo '<pre>', print_r($r), '</pre>';

//PDO::FETCH_OBJ
// $r = $query->fetch(PDO::FETCH_OBJ);
// echo '<pre>', print_r($r), '</pre>';
echo "<hr />";
while($r = $query->fetch(PDO::FETCH_OBJ)){
    echo $r->email, "<br />";
}
echo "<hr />";
require('bootstrap/footer.php');
