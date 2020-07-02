<?php

namespace App\Ingredient {

    use App\Ingredient\Factory\IngredientInterface;

    class WaterCaffeIngredient extends BaseCaffeIngredient implements IngredientInterface
    {
        private float $min = 90.5;
        private float $max = 96.0;

        public function getOptimalTemperatureRange(): array
        {
            return [
                "min" => $this->min,
                "max" => $this->max
            ];
        }

        public function getMinRequiredTemperature(): float {
            return $this->min;
        }

        public function getMaxRequiredTemperature():float {
            return $this->max;
        }
    }
}