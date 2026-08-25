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
        <section>
        <?php $colecaoNoticias = array(
            array(
                'link'=>'niclaseliasson',
                'titulo'=>'Niclas Eliasson é o novo reforço!',
                'descricao'=>'',
                'imagem'=>'niclaseliasson.jpg',
                'texto'=>'Atacante sueco de 30 anos é contratado pelo Sport Club Internacional! "O Inter é gigante. É uma honra fazer parte deste Clube!" Sueco, brasileiro e mais novo colorado, Niclas Eliasson chega ao Inter por empréstimo junto ao AEK, da Grécia, até junho de 2027. Para a TV Inter, o meia-atacante concedeu sua primeira entrevista como atleta do Clube do Povo! "Agradeço essa oportunidade. Sempre sonhei em jogar no Brasil, ainda mais com a camisa de um Clube com tanta história e todo o sucesso que teve. Estou muito feliz. Sempre joguei na Europa, passei por vários países, e agora apareceu essa oportunidade, de vir para este projeto. Estou feliz por fazer parte disso." - Niclas Eliasson'
            ),
            array(
                'link'=>'niclaseliasson',
                'titulo'=>'Niclas Eliasson é o novo reforço!',
                'descricao'=>'',
                'imagem'=>'niclaseliasson.jpg',
                'texto'=>'Atacante sueco de 30 anos é contratado pelo Sport Club Internacional! "O Inter é gigante. É uma honra fazer parte deste Clube!" Sueco, brasileiro e mais novo colorado, Niclas Eliasson chega ao Inter por empréstimo junto ao AEK, da Grécia, até junho de 2027.'
            ));
            Noticias($colecaoNoticias[0]);
            ?>
        </section>
        <article>
            <?php
            Artigos($colecaoNoticias[1]);
            Artigos($colecaoNoticias[1]);
            ?>
        </article>
    </main>
</body>
</html>