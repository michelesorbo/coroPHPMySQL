<?php

function pulisci_dati($dato){
    $dato = strtolower(trim($dato));
    $dato = str_replace('.','',$dato);
    return $dato;
}

function pulisci_cf($dato){
    $dato = strtoupper(trim($dato));
    return $dato;
}
?>