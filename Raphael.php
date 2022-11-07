<?php
namespace Challenges\PIZZAS;

final class Raphael extends Pizzaiolo
{
    public function bill(array $ingredients): int
    {
        $price = 10;

        usort($ingredients, function ($a, $b) {
            return $a->getPrice() <=> $b->getPrice();
        });

        $price += $ingredients[0]->getPrice();

        usort($ingredients, function ($a, $b) {
            return $b->getPrice() <=> $a->getPrice();
        });

        $price += $ingredients[0]->getPrice();

        return $price;
    }
}