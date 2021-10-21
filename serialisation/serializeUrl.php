<?php

$notes = array('maths' => 1, 'svt' => 8, 'algo' => 6, 'philo' => 5);
$srzed = serialize($notes);
header('Location:unserializeUrl.php?datas='.urlencode($srzed)); // Une simple redirection, mais avec des données GET.
exit;
