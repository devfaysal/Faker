<?php

namespace Faker\Test\Provider\en_BD;

use Faker\Provider\en_BD\PhoneNumber;
use Faker\Test\TestCase;

final class PhoneNumberTest extends TestCase
{

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
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
