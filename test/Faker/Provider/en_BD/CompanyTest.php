<?php

namespace Faker\Test\Provider\en_BD;

use Faker\Provider\en_BD\Company;
use Faker\Test\TestCase;

final class CompanyTest extends TestCase
{
    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
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
