<?php
require_once '../inc/functions.php';

/* === Exo 9 : Paramètres d'URL ===
 *
 * Pour vérifier vos connaissances sur les paramètres d'URL,
 * on va considérer qu'on se trouve sur un site de mini-jeux 2 joueurs
 * et qu'on se trouve sur la page où le jeu a été choisi, et le nom des joueurs renseigné
 *
 * Pour pouvoir commencer le jeu, il nous faut les trois informations suivantes :
 * le nom du jeu dans une variable nommée "jeu"
 * le nom du premier joueur dans une variable nommée "premierJoueur"
 * le nom du second joueur dans une variable nommée "secondJoueur"
 * 
 * Analysez l'URL pour comprendre quelles valeurs sont attendues dans chacune de ces variables
 */
//-------------------------------------------------------------------------
// Récupération sécurisée des paramètres de l'url
$jeu = isset($_GET['game']) ? $_GET['game'] : '';
$premierJoueur = isset($_GET['player1']) ? $_GET['player1'] : '';
$secondJoueur = isset($_GET['player2']) ? $_GET['player2'] : '';

// Affichage des valeurs qu'on récupère
if ($jeu && $premierJoueur && $secondJoueur) {
    echo "Jeu choisi : " . htmlspecialchars($jeu) . "<br>";
    echo "Premier joueur : " . htmlspecialchars($premierJoueur) . "<br>";
    echo "Second joueur : " . htmlspecialchars($secondJoueur) . "<br>";
} else {
    echo "Erreur : il manque au moins une information dans l'URL.<br>";
    echo "Paramètres attendus : ?jeu=...&premierJoueur=...&secondJoueur=...";
}
//-------------------------------------------------------------------------
/*
 * Tests
 * Pas touche !
 */
check(9);
