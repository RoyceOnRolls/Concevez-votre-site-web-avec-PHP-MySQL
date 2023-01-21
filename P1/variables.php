<?php
$isAllowedToEnter = true;

// SI on a l'autorisation d'entrer
if ($isAllowedToEnter) {
    // instructions à exécuter quand on est autorisé à entrer
    echo "Hello King 👑";
} // SINON SI on n'a pas l'autorisation d'entrer
elseif (!$isAllowedToEnter) {
    // instructions à exécuter quand on n'est pas autorisé à entrer
    echo "Sorry mate 🤷‍♂️";
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
// This code will not excute 🤷‍♂️
else {
    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
}
