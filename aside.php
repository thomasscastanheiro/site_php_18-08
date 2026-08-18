<?php

function aside(){
    $retorno = '<aside>'.busca().'</aside>';
    echo $retorno;
}

function busca(){
    $retorno = '<input type="search" name="busca" id="busca">';
    echo $retorno;
}

function maisLidos(){
    $retorno = '<div> Mais Lidos</div>';
    echo $retorno;

}
?>