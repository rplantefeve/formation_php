<?php

if (!$conn = mysqli_connect($host, $user, $passwd)) {
    $msg = mysql_error();
    echo "$msg<br>\n";
    exit;
} 




