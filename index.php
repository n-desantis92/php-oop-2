<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once __DIR__ . '/pc.class.php';

$pc1 = new Pc(1, 2, 3, 4, 5, 2025);
$pc2 = new Portatili('notebook', '17p', 'red', 1, 2, 3, 4);
$pc3 = new Fissi('pc-corto', '33X33', 'black');
$marca = $pc1->marca;
$pc4 = new Fissi('gaming', '50X30X60', 'green')
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
        <li>
            <h2>portatili</h2>
        </li>
        <li>Tipologia: <?php echo $pc2->tipologia; ?></li>
        <li>la marcha è: <?php echo $pc2->marca; ?></li>
        <li>il suo schermo è: <?php echo $pc2->schermo; ?></li>
        <li>il suo colore è: <?php echo $pc2->colore; ?></li>
        <li>anno: <?php echo $pc2->get_anno(); ?></li>
        <li>prezzo: <?php echo $pc2->get_prezzo(); ?></li>


    </ul>
    <hr>
    <ul>
        <li>
            <h2>fissi</h2>
        </li>
        <li>marca: <?php echo $pc3->marca ?></li>
        <li>tipologia: <?php echo $pc3->tipologia ?></li>
        <li>dimensione: <?php echo $pc3->dimensione ?></li>
        <li>colore: <?php echo $pc3->colore ?></li>
        <li>peso: <?php echo $pc3->get_peso() ?></li>

        <li>anno: <?php echo $pc3->get_anno() ?></li>
    </ul>
    <hr>
    <ul>
        <li>
            <h2>fissi</h2>
        </li>
        <li>marca: <?php echo $pc4->marca ?></li>
        <li>tipologia: <?php echo $pc4->tipologia ?></li>
        <li>dimensione: <?php echo $pc4->dimensione ?></li>
        <li>colore: <?php echo $pc4->colore ?></li>
        <li>peso: <?php echo $pc4->get_peso() ?></li>

        <li>anno: <?php echo $pc4->get_anno() ?></li>
    </ul>
</body>

</html>