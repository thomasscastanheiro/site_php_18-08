<?php

function busca(){
    return '<input type="search" name="busca" id="busca" placeholder ="Digite o termo de pressione enter">';
}

function maisLidos(){
  return '<div class="maisLidos">
  <h1>Mais Lidos</h1>
  <ul>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  <li>Lorem Ipsum</li>
  </ul>
  </div>';
}


function galeria(){
   $html = '';
    for ($i = 0; $i < 4; $i++) {
        $html .= '<div class="fotos">a</div>';
    }
    return $html;
}

function aside(){
   return '<aside>'.busca().maisLidos().galeria().'</aside>';
}
?>