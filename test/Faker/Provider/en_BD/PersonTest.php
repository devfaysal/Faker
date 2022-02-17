<?php

namespace Faker\Test\Provider\en_BD;

use Faker\Provider\en_BD\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }

    public function testPersonName()
    {
        $name = $this->faker->name();
        $this->assertNotEmpty($name);
    }
}
