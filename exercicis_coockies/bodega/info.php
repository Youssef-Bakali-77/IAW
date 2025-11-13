<?php

if (!isset($_COOKIE['majoredat']) || !isset($_COOKIE['idioma']) || !isset($_COOKIE['moneda'])) {
    header('Location: bodega.php');
    exit();
}

$majoredat = $_COOKIE['majoredat'];
$idioma = $_COOKIE['idioma'];
$moneda = $_COOKIE['moneda'];

$preus = [
    'eur' => ['vi1' => 39, 'vi2' => 25, 'simb' => '€'],
    'gbp' => ['vi1' => 34, 'vi2' => 22, 'simb' => '£'],
    'usd' => ['vi1' => 42, 'vi2' => 27, 'simb' => '$']
];

$textos = [
    'cat' => [
        'menor' => 'No et podem vendre alcohol si ets menor d’edat.',
        'oferta' => 'T’oferim el vi “Les Terrasses” a un preu de',
        'oferta2' => 'També tenim “Clos Mogador” per',
        'tornar' => 'Tornar'
    ],
    'esp' => [
        'menor' => 'No podemos venderte alcohol si eres menor de edad.',
        'oferta' => 'Te ofrecemos el vino “Les Terrasses” a un precio de',
        'oferta2' => 'También tenemos “Clos Mogador” por',
        'tornar' => 'Volver'
    ],
    'eng' => [
        'menor' => 'We cannot sell you alcohol if you are underage.',
        'oferta' => 'We offer you the wine “Les Terrasses” for',
        'oferta2' => 'We also have “Clos Mogador” for',
        'tornar' => 'Go back'
    ]
];

?>
<!DOCTYPE html>
<html lang="<?= $idioma ?>">
<head>
    <meta charset="UTF-8">
    <title>Bodega - Informació</title>
</head>
<body>
    <h1>Bodega</h1>

    <?php if ($majoredat == 'no'): ?>
        <p><?= $textos[$idioma]['menor'] ?></p>
    <?php else: ?>
        <p><?= $textos[$idioma]['oferta'] ?> <?= $preus[$moneda]['vi1'] . ' ' . $preus[$moneda]['simb'] ?>.</p>
        <p><?= $textos[$idioma]['oferta2'] ?> <?= $preus[$moneda]['vi2'] . ' ' . $preus[$moneda]['simb'] ?>.</p>
    <?php endif; ?>

    <br>
    <a href="bodega.php"><?= $textos[$idioma]['tornar'] ?></a>
</body>
</html>
