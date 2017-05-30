<?php

try {
    $a = 0b1 << -1;
} catch (Throwable $exc) {
    $error = true;
    fwrite($exc->getMessage());
    fwrite($exc->get);
    
}



