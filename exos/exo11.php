<?php

/**
 * Pas touche ! 
 */
require_once '../inc/functions.php';

/**
 * 
 * Voilà le plan : Il va falloir coder un petit programme permettant de générer une grille de 5 numéros du loto choisis aléatoirement.
 * Les numéros sont compris entre 1 et 49 et il faudra aussi ajouter le numéro complémentaire compris entre 1 et 10 !
 * On veut obtenir ces numéros dans un tableau, par exemple : [45, 5, 1, 13, 28].
 * 
 * Il faudra stocker le résultat dans un array $grilleLoto.
 * 
 * Pour générer un nombre aléatoire, tu peux utiliser une des fonctions fournies par PHP : mt_rand()
 * 
 */

// c'est parti !

// Entrée : rien
// Sortie : le tableau de tous les numéros de la grille
//-------------------------------------------------------------------------
// Génération des 5 numéros principaux entre 1 et 49
$numerosPrincipaux = range(1, 49);
shuffle($numerosPrincipaux);
$numerosPrincipaux = array_slice($numerosPrincipaux, 0, 5);

// Génération du numéro complémentaire entre 1 et 10
$numeroComplementaire = mt_rand(1, 10);

// Création du tableau final
$grilleLoto = $numerosPrincipaux;
$grilleLoto[] = $numeroComplementaire;
/** 
 * Tests
 * Pas touche !
 */
check(11, 'numerosLoto');
