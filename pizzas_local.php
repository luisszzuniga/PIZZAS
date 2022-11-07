<?php
namespace Challenges\PIZZAS;

use Tainix\Html;

// ECHANTILLON ------------------------
$ingredients = ['tomates:2', 'champignons:2', 'mozzarella:2', 'jambon:2', 'serrano:3', 'chevre:2', 'oeuf:2', 'chorizo:5', 'saumon:5', 'basilic:2', 'oignons:1', 'poivron:3', 'salade:3', 'anchois:2', 'olive:1', 'ananas:5'];
$pizzas = ['salade,salade,olive,anchois,jambon', 'oignons,mozzarella,oignons', 'chorizo,chevre,serrano', 'serrano,anchois,chorizo,chevre', 'oeuf,salade,mozzarella', 'oeuf,jambon,olive', 'tomates,saumon,chevre', 'champignons,salade,olive,champignons,anchois,champignons', 'tomates,ananas,chorizo,oeuf', 'serrano,serrano,mozzarella,saumon,basilic', 'chevre,oeuf,saumon,poivron', 'serrano,olive,basilic,ananas', 'salade,ananas,oeuf,ananas,oeuf', 'jambon,oignons,mozzarella', 'basilic,ananas,chevre,chevre,basilic,champignons', 'chorizo,ananas,oeuf', 'poivron,chorizo,oignons,ananas,poivron'];
$pizzaiolos = ['donatello', 'leonardo', 'raphael', 'raphael', 'donatello', 'donatello', 'donatello', 'michelangelo', 'donatello', 'raphael', 'donatello', 'raphael', 'donatello', 'donatello', 'raphael', 'leonardo', 'leonardo'];

Html::debug($ingredients, '$ingredients');
Html::debug($pizzas, '$pizzas');
Html::debug($pizzaiolos, '$pizzaiolos');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('282', 'Réponse attendue', 'success');