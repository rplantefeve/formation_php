<?php


function change (&$var) {
  $var += 10;
}

$var = 1;
change(++$var);
echo "var=$var";
change($var = 5);
echo "var=$var";

