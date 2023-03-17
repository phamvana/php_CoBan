<?php
    $a = 1;
    $b = 2;
    function sum25(){
        global $a, $b;
        $b = $a + $b;
    }
    sum25();
    echo $b;
    echo '<br>Ví dụ: Biến toàn cục: sử dụng từ khoá global <br \> slice 25 - Lý thuyết php Cơ bản';