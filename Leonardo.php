<?php
namespace Challenges\PIZZAS;

final class Leonardo extends Pizzaiolo
{
    public function bill(array $ingredients): int
    {
        $price = 0;

        foreach ($ingredients as $ingredient) {
            $price += $ingredient->getPrice();
        }

        return $price;
    }
}