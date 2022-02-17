<?php

namespace Faker\Test\Provider\en_BD;

use Faker\Generator;
use Faker\Provider\en_BD\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumber()
    {
        $phoneNumber = $this->faker->phoneNumber();
        $this->assertNotEmpty($phoneNumber);
    }

    public function testPhoneNumberWithCountryCode()
    {
        $phoneNumberWithCountryCode = $this->faker->phoneNumberWithCountryCode();
        $this->assertNotEmpty($phoneNumberWithCountryCode);
    }
}
