<?php

namespace Faker\Test\Provider\en_BD;

use Faker\Provider\en_BD\Person;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testPersonName()
    {
        $name = $this->faker->name();
        $this->assertNotEmpty($name);
    }
}
