<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
    <h1>Array di 15 numeri casuali</h1>

    <?php $x = 0; ?>
    <?php $array = []; ?>

    <?php while($x < 15) { ?>
        <?php $number = rand(1,15); ?>
        <?php if(!in_array($number, $array)) { ?>
            <?php $array[] = $number ?>
            <?php $x++ ?>
        <?php } ?>
    <?php } ?> 
    <?php var_dump($array) ?>
</body>
</html>