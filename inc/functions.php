<?php

function get_item_html($id,$objeto){
    $output = "<div class='col-xs-6 col-sm-3'><a href='detalles.php?id="
        .$id."'><p>"
        . $objeto["titulo"]
        ."</p><img alt='lorem ipsum' src='"
        . $objeto["img"]
        . "'></ahref></div>";
    return $output;

};


