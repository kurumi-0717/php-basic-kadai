<?php
$array = [15, 4, 18, 23, 10];

function sort_2way($array, $order) {
    if ($order === true) {
        echo '昇順にソートします。<br>';
        sort($array);
    } else if ($order === false) {
        echo '降順にソートします。<br>';
        rsort($array);
    }
    
    foreach ($array as $value) {
        echo $value . '<br>';
    }
}

// 昇順
sort_2way($array, true);

// 降順
sort_2way($array, false);
?>