<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <h1>Inserisci i dati</h1>
    <?php 
        $name = $_GET['name'];
        $age = $_GET['age'];
        $mail = $_GET['mail'];

        $nome = strlen($name);
        var_dump($nome);

        $anni = is_numeric($age);
        var_dump($anni)
    ?>
    <h2>
        Nome: <?php if($nome > 3 && strpos($mail, '@') && $anni && strpos($mail, '.')) { ?> 
        <h3> Accesso Riuscito </h3>
        <?php } else { ?>
            <h3>Accesso Negato</h3>
        <?php } ?>
    </h2>
</body>
</html>