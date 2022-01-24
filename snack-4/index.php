<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

    <?php
        $lorem = "Lorem ipsum dolor sit amet. consectetur adipisicing elit. Fuga consectetur optio molestiae eveniet laudantium laboriosam magnam adipisci eum ipsum. Culpa minus corrupti. exercitationem veniam laboriosam porro. Sapiente id doloremque accusantium";        
        $fine = explode('.', $lorem);
        var_dump($fine);
    ?>

</body>
</html>