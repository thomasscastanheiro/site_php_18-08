<?php

function aside(){
    $retorno = '<aside>'.busca().maisLidos().galeria().'</aside>';
    echo $retorno;
}

function busca(){
    $retorno = '<input type="search" name="busca" id="busca">';
    echo $retorno;
}

function maisLidos(){
    $retorno = '<div class = "maisLidos"> Mais Lidos</div>';
    echo $retorno;

}

function galeria(){
    $retorno = '<div class = "fotos">a</div>';
    echo $retorno;
    $retorno2 = '<div class = "fotos">a</div>';
    echo $retorno2;
    $retorno3 = '<div class = "fotos">a</div>';
    echo $retorno3;
    $retorno4 = '<div class = "fotos">a</div>';
    echo $retorno4;
}
?>