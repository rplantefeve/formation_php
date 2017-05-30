<?php
include './Login.php';

// mon directory (ensemble des login/mdp)
$directory = [new Login('toto', 'azerty'),
    new Login('foo', 'bar'),
    new Login('test', 'test')];

/*
 * Initialisation des variables de contrôle d'affichage
 */
$isAuthenticated = false;
$loginError = false;

function checkCredentials($login, $mdp) {
    global $loginError;
    // par défaut, il y a une erreur
    $loginError= true;
    global $directory;
    // init. du booléen de recherche
    $trouve = false;
    $i = 0;
    while (($i < count($directory)) && !$trouve) {
        // je teste le user
        if ($login == $directory[$i]->getLogin()) {
            // je teste le mot de passe
            if ($mdp == $directory[$i]->getMdp()) {
                // le bon couple mot de passe a été trouvé
                $trouve = true;
                // il n'y a pas eu d'erreur
                $loginError = false;
            }
        }
        // je passe à l'élément du tableau suivant
        $i++;
    }
    // je retourne le résultat de la recherche
    return $trouve;
}

// si la méthode utilisée est la méthode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // si le login et le mot de passe sont saisis
    if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['pwd']) &&
            !empty($_POST['pwd'])) {
        // je vérifie les habilitations
        $isAuthenticated = checkCredentials($_POST['login'], $_POST['pwd']);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="loginform" method="post" action="form.php">
            <label for="login">Login : </label>
            <input type="text" name="login" id="login"/>
            <label for="pwd">Mot de passe :</label>
            <input type ="text" name="pwd" id="pwd"/>

            <button type="submit">OK</button>
        </form>
        <div>
            <p><?php
                if ($isAuthenticated) {
                    echo 'Vous êtes maintenant authentifié';
                }
                if ($loginError) {
                    echo 'Echec de l\'authentification.';
                }
                ?></p>
        </div>
    </body>
</html>
