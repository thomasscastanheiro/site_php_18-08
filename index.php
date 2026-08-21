<?php include_once './functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazendo site com PHP</title>
    <link rel="stylesheet" href="./style.css">
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
        <?php $colecaoNoticias = array(
            array(
                'titulo'=>'Niclas Eliasson é o novo reforço!',
                'descricao'=>'',
                'imagem'=>'niclaseliasson.jpg',
                'texto'=>'Atacante sueco de 30 anos é contratado pelo Sport Club Internacional!'
            ),
            array(
                'titulo'=>'',
                'descricao'=>'',
                'imagem'=>'artigo.png',
                'texto'=>''
            ),
            array(
                'titulo'=>'',
                'descricao'=>'',
                'imagem'=>'artigo.png',
                'texto'=>''
                )
            );?>
        <section>
            <h1>DESTAQUES</h1>
            <img src="<?php echo $colecaoNoticias[0]['imagem']?>" alt="">
            <h2><?php echo $colecaoNoticias[0]['titulo'];?></h2>
            <h3><?php echo $colecaoNoticias[0]['texto']?></h3>
            <button><a href="<?php echo $colecaoNoticias[0]['titulo']?>.php"></a></button>
        </section>
    </main>
</body>
</html>