<?php
$chaine = 'J\'ai ton désir ancré sur le mien';
echo htmlentities($chaine)."<br>";
// affiche J'ai ton d&eacute;sir ancr&eacute; sur le mien

$chaine = 'Sâche que "5 > 4" & "7 <= 8" vaut vrai. ';
echo htmlspecialchars($chaine);
// affiche Sâche que &quot;5 &gt; 4&quot; &amp; &quot;7 &lt;= 8&quot; vaut vrai.