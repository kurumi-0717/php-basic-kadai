<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎練習</title>
    <style>
        .box {
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="box">
    <?php
    function sort_2way(array &$array, bool $order)
    {
        if ($order === true) {
            sort($array); // 昇順
        } else {
            rsort($array); // 降順
        }
    }

    $nums = [15, 4, 18, 23, 10];

    // 昇順
    sort_2way($nums, true);
    echo "昇順にソートします。<br>";
    foreach ($nums as $num) {
        echo $num . "<br>";
    }

    // 降順
    sort_2way($nums, false);
    echo "降順にソートします。<br>";
    foreach ($nums as $num) {
        echo $num . "<br>";
    }
    ?>
    </div>
</body>
</html>