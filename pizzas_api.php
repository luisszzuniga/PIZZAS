<?php
namespace Challenges\PIZZAS;

use Tainix\Game;
use Tainix\Html;

// INITIALISATION ---------------------
$game = new Game(
	TAINIX_KEY,
	basename(__DIR__)
);

$data = $game->input();

// VISUALISATION DES DONNEES ----------
foreach ($data as $name => $value) {
	$$name = $value;
	Html::debug($$name, '$' . $name);
}

// CODE DU CHALLENGE ------------------

$gm = new GameMotor($data);
$gm->play();

// REPONSE ----------------------------
$game->output(['data' => $gm->getBill()]);

dd($gm->getBill());