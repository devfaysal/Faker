<?php

namespace Faker\Test\Provider\en_BD;

use Faker\Generator;
use PHPUnit\Framework\TestCase;
use Faker\Provider\en_BD\Person;
use Faker\Provider\en_BD\Company;

final class CompanyTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testCompanyName()
    {
        $company = $this->faker->company();
        $this->assertNotEmpty($company);
    }

    public function testCompanyDepartment()
    {
        $department = $this->faker->department();
        $this->assertNotEmpty($department);
    }

    public function testCompanyJobTitle()
    {
        $jobTitle = $this->faker->jobTitle();
        $this->assertNotEmpty($jobTitle);
    }
}
