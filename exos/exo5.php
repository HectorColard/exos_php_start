<?php
global $bartPunishment;
require_once '../inc/functions.php';
require_once '../inc/bart.php'; // fichier déclarant la variable $bartPunishment

/* === Exo 5 : 3 punitions ===
 *
 * Après South Park, parlons d'un autre enfant calme, gentil et exemplaire : Bart Simpson !
 * 
 * Un peu plus haut, nous avons inclus un fichier "bart.php".
 * Analyse le contenu de ce fichier, et la variable $bartPunishment
 * 
 * A partir de cette variable,
 *   - stocke dans la variable $sentence1 la première phrase de la liste
 *   - stocke dans la variable $sentence4 la phrase à l'index 4 de la liste
 *   - stocke dans la variable $sentenceX l'avant-dernière phrase de la liste
 */

// A toi de jouer
//-------------------------------------------------------------------------
// Stocker dans $sentence1 la première phrase de la liste
$sentence1 = $bartPunishment[1]; // "Je ne suis pas une femme de 32 ans."

// Stocker dans $sentence4 la phrase à l'index 4 de la liste
$sentence4 = $bartPunishment[4]; // "Je ne graisserai pas les barres de la cour de récré."

// Stocker dans $sentenceX l'avant-dernière phrase de la liste
// D'abord, trouver l'index de la dernière phrase
$lastIndex = max(array_keys($bartPunishment)); // 15
// Ensuite, récupérer l'avant-dernière phrase (index 14)
$sentenceX = $bartPunishment[$lastIndex - 1]; // "Je ne gaspillerai pas de craies."

// Afficher les résultats pour vérification
echo "Phrase 1: " . $sentence1 . "\n";
echo "Phrase 4: " . $sentence4 . "\n";
echo "Avant-dernière phrase: " . $sentenceX . "\n";
//-------------------------------------------------------------------------
/*
 * Tests
 * Pas touche !
 */
check(5);
