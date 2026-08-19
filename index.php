<?php include_once './functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazendo site com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php 
            $colecaoMenu = array(
                'index'=>'Home',
                " | ",
                'marketing'=>'Marketing',
                " | ",
                'internet'=>'Internet',
                " | ",
                'dinheiro'=>'Ganhar Dinheiro',
                " | ",
                'webmaster'=>'Webmaster',
                " | ",
                'scripts'=>'Scripts',
                " | ",
                'software'=>'Software',
                " | ",
                'comercio'=>'Comércio Eletrônico',
                " | ",
                'downloads'=>'Downloads',
                " | ",
                'contato'=>'Contato',
            );
            Menu($colecaoMenu,"SitePHP");
        ?>
    </header>
    <main>
        
    </main>
</body>
</html>