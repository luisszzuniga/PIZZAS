<?php
namespace Challenges\PIZZAS;

final class GameMotor
{
    private int $bill = 0;
    private array $ingredients = [];
    private array $pizzas = [];
    private array $pizzaiolos;

    public function __construct(array $data)
    {
        $this->pizzaiolos = [
            'michelangelo' => new Michelangelo(),
            'donatello' => new Donatello(),
            'leonardo' => new Leonardo(),
            'raphael' => new Raphael()
        ];

        foreach ($data['ingredients'] as $ingredient) {
            $ingredientData = explode(':', $ingredient);

            $this->ingredients[$ingredientData[0]] = new Ingredient($ingredientData[0], $ingredientData[1]);
        }

        foreach ($data['pizzas'] as $index => $pizza) {
            $ingredients = explode(',', $pizza);
            $ingredientsobjects = [];

            foreach ($ingredients as $ingredient) {
                $ingredientsobjects[] = $this->ingredients[$ingredient];
            }

            $this->pizzas[] = new Pizza($ingredientsobjects, $this->pizzaiolos[$data['pizzaiolos'][$index]]);
        }
    }

    public function play()
    {
        foreach ($this->pizzas as $pizza) {
            $this->bill += $pizza->getPrice();
        }
    }

    public function getBill()
    {
        return $this->bill;
    }
}