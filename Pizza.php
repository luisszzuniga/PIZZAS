<?php
namespace Challenges\PIZZAS;

final class Pizza
{
    private array $ingredients;
    private Pizzaiolo $pizzaiolo;
    
    public function __construct(array $ingredients, Pizzaiolo $pizzaiolo)
    {
        $this->ingredients = $ingredients;
        $this->pizzaiolo = $pizzaiolo;
    }

    public function getPrice(): int
    {
        return $this->pizzaiolo->bill($this->ingredients);
    }
}