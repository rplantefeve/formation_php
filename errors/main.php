<?php
include_once 'BusinessException.php';

try {
    //include 'e_parse.php';
    
    // un cas Métier, je gère une erreur métier
    // Règle de Gestion : RGT1256
    if($_GET['val'] > 2) {
        throw new BusinessException('Pas plus de 2');
    }
    
} catch (Throwable $t) {
    echo 'Something went wrong :'. $t->getMessage();
}

