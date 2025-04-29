<?php
require_once '../inc/functions.php';

/* === Exo 3 : South Park ===
 *
 * South Park, on aime, ou on aime pas, mais on connait tous (enfin j'espère !)
 * 
 * On aurait pu vous demander de placer les lettres a, b, c et d dans un tableau,
 * mais ça aurait été moins fun...
 * 
 * Alors voilà, on veut avoir le nom des 4 personnages de South Park dans un tableau nommé "characters" :
 * Kyle, Stan, Cartman et Kenny
 * 
 * Mais calme-toi! On veut y aller progressivement...
 *
 * D'abord, on veut Stan, Kyle et Kenny. (étape a)
 * 
 * Puis ensuite, on ajoutera Cartman. (étape b)
 *
 * Bonus :
 * 
 * Comme dans tout bon épisode de South Park, Kenny doit mourrir.
 * Dans notre cas, il doit disparaitre du tableau...
 */

 // A toi de jouer pour l'étape a)
//-------------------------------------------------------------------------
// Étape a: Tableau avec Stan, Kyle et Kenny
$characters = ['Stan', 'Kyle', 'Kenny'];
print_r($characters);



//-------------------------------------------------------------------------
/*
 * Tests du tableau avec uniquement Stan, Kyle et Kenny
 * Pas touche !
 */
check('3a');

// A toi de jouer pour l'étape b)
//-------------------------------------------------------------------------
// Étape b: Ajout de Cartman au tableau
$characters[] = 'Cartman';
print_r($characters);
//-------------------------------------------------------------------------
/*
 * Tests du tableau avec Stan, Kyle, Kenny et désormais Cartman
 * Pas touche !
 */
check('3b');

// A toi de jouer pour le bonus
//-------------------------------------------------------------------------
//Je fais un tableau avc les 4 dedans
$characters = ['Stan', 'Kyle', 'Kenny', 'Cartman'];
//ke crée une variable avec kenny à l'intérieur
$element = 'Kenny';
//je fais un unset pour suprrimer kenny du tableau
unset($characters[array_search($element, $characters)]);
print_r($characters);
//-------------------------------------------------------------------------

/*
 * Tests du bonus
 * Pas touche !
 */
check('3c');