<?php
    $a = 1;
    $b = 2;
    function sum26(){
        $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    sum26();

    echo '<div class="container bg-warning"><div data-toggle="collapse" data-target="#26">';

    echo $b;
    echo '</div><div id="26"';
    echo '<br>Ví dụ: Biến toàn cục: sử dụng từ khoá global 
    <br \> slice 26 - Lý thuyết php Cơ bản';
    echo '</div></div>';