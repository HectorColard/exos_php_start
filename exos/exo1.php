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
/* Je déclare mes variables */
$a = 1;
$b = 2;
$c = 2;
/* Je définis ma function avec mes paramètres et je mets une valeur de base à c pour la rendre optionnelle*/
function addition($a, $b, $c = 0)
{
    /* Si c est supérieur à 0 */
    if ($c > 0) {
        /* On additionne a, b et c */
        return $a + $b + $c;
    } else {
        /* Sinon, on n'additionne que a et b */
        return $a + $b;
    }
    /* Je retourne l'addition de mes 2 variables */
}
//-------------------------------------------------------------------------
/*
 * Tests
 * Pas touche !
 */
check(1);
