<?php


namespace App\Ingredient;

use Elao\Enum\ChoiceEnumTrait;
use Elao\Enum\ReadableEnum;

/**
 * @method static CaffeIngredient WATER()
 * @method static CaffeIngredient UNKNOWN()
 */
final class CaffeIngredient extends ReadableEnum
{
    use ChoiceEnumTrait;

    const WATER = 'water_ingredient';
    const UNKNOWN = "unknow";

    public static function choices(): array
    {
        return [
            self::UNKNOWN => "Unknown",
            self::WATER => 'Water',
        ];
    }
}