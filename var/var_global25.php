<?php
    $a = 1;
    $b = 2;
    function sum25(){
        global $a, $b;
        $b = $a + $b;
    }
    sum25();
    echo '<div class="container bg-info"><div data-toggle="collapse" data-target="#25">';
    echo $b;
    echo '</div><div id="25"';
    echo '<br>Ví dụ: Biến toàn cục: sử dụng từ khoá global <br \> slice 25 - Lý thuyết php Cơ bản';
    echo '</div></div>';