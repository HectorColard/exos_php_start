<?php
require_once '../inc/functions.php';

/* === Exo 1 : Additionner ===
 *
 * C'est le moment d'appliquer nos connaissances sur les fonctions en PHP
 *
 * Rien d'extraordinaire dans la fonction qu'on va vous demander de définir :
 *
 * nom de la fonction : addition
 * but de la fonction : additionner 2 nombres fournis en arguments et renvoyer le résultat obtenu
 *
 * Exemples :
 * $somme = addition(1, 3); // => $somme sera égal à 4
 * $somme = addition(2, 4); // => $somme sera égal à 6
 * $somme = addition(5, 4); // => $somme sera égal à 9
 *
 * 
 * -- En bonus --
 * 
 * On aimerait pouvoir additionner 3 nombres
 * Tout en laissant la possibilité de vouloir additionner que 2 nombres
 * 
 * Exemples :
 * $somme = addition(1, 3); // => $somme sera égal à 4
 * $somme = addition(1, 3, 1); // => $somme sera égal à 5
 */
//-------------------------------------------------------------------------
//je créer une fonction avec 2 arguments que je retourne par la suite
function addition($nombre1, $nombre2) {
    return $nombre1 + $nombre2;


// pour le bonus je fais une condition pour vérifier si le 3ème argument est donné ou pas
    //on peut utiliser  func_num_args() est une fonction native de PHP qui retourne le nombre d'arguments passés
    // à la fonction courante.
    //et func_get_arg() qui récupère un argument spécifique par son index
    if (func_num_args() > 2) {
        $nombre3 = func_get_arg(2);
        $resultat += $nombre3;
    }

    return $resultat;
}
//-------------------------------------------------------------------------
/*
 * Tests
 * Pas touche !
 */
check(1);
