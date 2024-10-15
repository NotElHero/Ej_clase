<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de clase</title>
</head>
<body>
    <?php
    $random = rand(1, 20);
    $val = $_GET['valor'];
    $par = 0;

    switch($val){
        case $val > $random:
            echo 'El valor introducido es mayor que el aleatorio ',
            $val, ' > ', $random, ')';
            break;
        case $val < $random:
            echo 'El valor introducido es menos que el aleatorio ',
            $val, ' < ', $random, ')';
            break;
        case $val == $random:
            echo 'El valor introducido es igual que el aleatorio ',
            $val, ' = ', $random, ')';
            break;
    }
    echo '<br>';
    
    if ($val % 2 == 0) {
        echo 'El valor introducido es par';
    } else {
        echo 'El valor introducido es impar';
    }
    ?>
</body>
</html>