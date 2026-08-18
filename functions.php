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
?>