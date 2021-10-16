<?php
$userInput = 'Je suis content d\'être là';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="monscript?data=<?= urlencode($userInput) ?>">Lien</a>
    </body>
</html>
