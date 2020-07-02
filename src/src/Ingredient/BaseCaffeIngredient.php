<?php


namespace App\Ingredient;


use App\Ingredient\Factory\IngredientInterface;

class BaseCaffeIngredient implements IngredientInterface
{
    private $isRequired = true;
    public function isRequired(): bool
    {
        return $this->isRequired;
    }
}