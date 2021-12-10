<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://api.local/read.php',
  CURLOPT_RETURNTRANSFER => true,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo 'cURL Error #:' . $err;
} else {
    $decoded = json_decode($response, true);
    $films = $decoded['data'];
}
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des films</title>
  <link type="text/css" href="cinema.css" rel="stylesheet" />
</head>

<body>
  <header>
    <h1>Liste des films</h1>
  </header>
  <table class="std">
    <tr>
      <th>Titre</th>
      <th>Titre original</th>
    </tr>
    <?php
    // boucle de construction de la liste des films
    foreach ($films as $film) {
        ?>
      <tr>
        <td><?= $film['titre']; ?></td>
        <td><?= $film['titreoriginal']; ?></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>