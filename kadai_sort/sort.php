<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function sort_2way($array, $order = 'asc') {
    if ($order === 'asc') {
        sort($array);
    } elseif ($order === 'desc') {
        rsort($array);
    }
    
    foreach($array as $value) {
        echo "$value";
        echo "<br>";
    }
}

$array_data = [15, 4, 18, 23, 10];

echo "Ascending Order:<br>";
sort_2way($array_data, 'asc');

echo "<br>Descending Order:<br>";
sort_2way($array_data, 'desc');

?>

</body>
</html>