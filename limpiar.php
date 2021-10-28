<?php
function limpiar_dato($dato){
    $dato=trim($dato);
    $dato=htmlspecialchars($dato);
    $dato=stripslashes($dato);
    return $dato;
}

?>