<?php
$chaine = '<Montjoie ! Saint Denis ! Que trépasse si je faiblis !>';
echo htmlentities($chaine)."<br>";
// affiche &lt;Montjoie ! Saint Denis ! Que tr&eacute;passe si je faiblis !&gt;

$chaine = 'Sâche que "5 > 4" & "7 <= 8" vaut vrai. ';
echo htmlspecialchars($chaine);
// affiche Sâche que &quot;5 &gt; 4&quot; &amp; &quot;7 &lt;= 8&quot; vaut vrai.
