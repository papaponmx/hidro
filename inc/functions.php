<?php

function get_item_html($id,$objeto){
    $output = "<li><a href='detalles.php?=id"
        .$id."'><img alt='lorem ipsum' src='"
        . $objeto["img"]
        . "'>"  . $objeto["titulo"]
        . "
                <p>Detalles</p></ahref></li>";
    return $output;

};


