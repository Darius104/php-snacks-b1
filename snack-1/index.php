<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <?php 
        $partite =
        [
        
            [
                $squadHome = 
                [
                    'name' => 'Roma',
                    'points' => 30,
                ],
                $squadGuest = 
                [
                    'name' => 'Milan',
                    'points' => 19,
                ]
            ],
            [
                $squadHome = 
                [
                    'name' => 'Juve',
                    'points' => 30,
                ],
                $squadGuest = 
                [
                    'name' => 'Atlanta',
                    'points' => 19,
                ]
            ],
            [
                $squadHome = 
                [
                    'name' => 'Lazio',
                    'points' => 30,
                ],
                $squadGuest = 
                [
                    'name' => 'Palermo',
                    'points' => 19,
                ]
            ]
        ];
        
    ?>
    <?php for($x = 0; $x < count($partite); $x++) { ?>
        <?php $questa_partita = $partita[$x] ?>

        <h2>Partita</h2>

        <span><?php echo $questa_partita.$squadHome['name'] ?></span>
        <span>-</span>
        <span><?php echo $squadGuest['name'] ?></span>

        <span>|</span>

        <span><?php echo $squadHome['points'] ?></span>
        <span>-</span>
        <span><?php echo $squadGuest['points'] ?></span>
    <?php } ?> 
</body>
</html>