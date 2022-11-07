<?php
namespace Challenges\PIZZAS;

final class Donatello extends Pizzaiolo
{
    public function bill(array $ingredients): int
    {
        usort($ingredients, function ($a, $b) {
            return $b->getPrice() <=> $a->getPrice();
        });

        return $ingredients[0]->getPrice() * 5;
    }
}