<?php namespace App\Tests;


use App\Ingredient\CaffeIngredient;
use App\Ingredient\Exception\UnknowCaffeIngredientExcetpion;
use App\Ingredient\Factory\IngredientFactory;
use App\Ingredient\WaterCaffeIngredient;

class WaterIngredientTest extends \Codeception\Test\Unit
{
    /**
     * @var \App\Tests\UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testFactoryCreateObject()
    {
        $this->tester->assertInstanceOf(
            WaterCaffeIngredient::class,
            IngredientFactory::create(CaffeIngredient::WATER())
        );
    }

    // tests
    public function testCheckIfWaterIsRequired()
    {
        $this->tester->assertTrue(
            (IngredientFactory::create(CaffeIngredient::WATER())->isRequired())
        );
    }

    /**
     * We test if water should be boiled in case we make Ice Caffe
     *
     * @throws \App\Ingredient\Exception\UnknowCaffeIngredientExcetpion
     */
    public function testCheckIfWaterShouldBeBoiledAndTemparatureIsEnught()
    {
        $caffe = IngredientFactory::create(CaffeIngredient::WATER());

        $this->tester->assertArrayHasKey("min", $caffe->getOptimalTemperatureRange());
        $this->tester->assertArrayHasKey("max", $caffe->getOptimalTemperatureRange());

        $this->tester->assertEquals(90.5, $caffe->getMinRequiredTemperature());
        $this->tester->assertEquals(96.0, $caffe->getMaxRequiredTemperature());
    }

}