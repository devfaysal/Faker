<?php

namespace Faker\Test\Provider\en_BD;

use Faker\Provider\en_BD\Address;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testCityName()
    {
        $city = $this->faker->city();
        $this->assertNotEmpty($city);
    }

    public function testVillage()
    {
        $village = $this->faker->village();
        $this->assertNotEmpty($village);
    }

    public function testUnion()
    {
        $union = $this->faker->union();
        $this->assertNotEmpty($union);
    }

    public function testThana()
    {
        $thana = $this->faker->thana();
        $this->assertNotEmpty($thana);
    }
    public function testUpazila()
    {
        $upazila = $this->faker->upazila();
        $this->assertNotEmpty($upazila);
    }
    public function testDistrict()
    {
        $district = $this->faker->district();
        $this->assertNotEmpty($district);
    }
    public function testDivision()
    {
        $division = $this->faker->division();
        $this->assertNotEmpty($division);
    }
    public function testAddress()
    {
        $address = $this->faker->address();
        $this->assertNotEmpty($address);
    }
}
