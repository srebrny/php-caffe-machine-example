<?php

namespace App\Ingredient\Factory {

    use App\Ingredient\CaffeIngredient;
    use App\Ingredient\Exception\UnknowCaffeIngredientExcetpion;
    use App\Ingredient\WaterCaffeIngredient;

    class IngredientFactory
    {
        public static function create(CaffeIngredient $caffeType): IngredientInterface
        {
            switch ($caffeType->getValue()) {
                case CaffeIngredient::WATER:
                    return new WaterCaffeIngredient();
                default:
                    throw new UnknowCaffeIngredientExcetpion();
            }
        }
    }

}