<?php
function Menu($colecao){
    if (!empty($colecao)) {
        $menu = '<nav><ul>';
            foreach($colecao as $key => $value){
                if ($value == " | ") {
                    $menu .= '<li>'.$value.'</li>';
                    continue; 
                }
                $menu .= '<li><a href="'.$key.'.php">'.$value.'</a></li>';
            }
        $menu .= '</ul></nav>';
        echo $menu;
    }
}
function Noticias($noticia){
    ?>
    <h1>DESTAQUES</h1>
    <img src="<?php echo $noticia['imagem']?>" alt="">
    <h2><?php echo $noticia['titulo'];?></h2>
    <h3><?php echo $noticia['texto']?></h3>
    <button><a href="<?php echo $noticia['link']?>.php">LEIA MAIS</a></button>
    <?php
    
} 
function Artigos($noticia){ ?>
        <div>
            <h1>DESTAQUES</h1>
            <h2><?php echo $noticia['titulo'];?></h2>
            <h3><?php echo $noticia['texto']?></h3>
            <button><a href="<?php echo $noticia['link']?>.php">LEIA MAIS</a></button>
            <h4>MAIS ARTIGOS</h4>
            <ul>
                <li><?php echo $noticia['titulo'];?></li>
                <li><?php echo $noticia['titulo'];?></li>
                <li><?php echo $noticia['titulo'];?></li>
            </ul>
        </div>
<?php
} ?>
