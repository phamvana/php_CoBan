<?php
    $a = 1;
    $b = 2;
    function sum26(){
        $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    sum26();
    echo $b;
    echo '<br>Ví dụ: Biến toàn cục: sử dụng từ khoá global 
    <br \> slice 26 - Lý thuyết php Cơ bản';