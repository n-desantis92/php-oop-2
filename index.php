<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include_once __DIR__ . '/pc.class.php';

    $pc1 = new Pc(1, 2, 3, 4, 5, 2021);
    $pc2 = new Portatili(10, 12);

    $marca = $pc1->marca;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
</head>

<body>
    <ul>
        <li><?php echo 'ciao' ?></li>
        <li><?php echo $pc1->get_anno() ?></li>
        <li><?php echo $pc1->marca ?></li>

    </ul>
    <hr>
    <ul>
        <li><?php echo $pc2->schermo ?></li>
        <li><?php echo $pc2->tipologia ?></li>
        <li><?php echo $pc2->get_anno() ?></li>
    </ul>
</body>

</html>