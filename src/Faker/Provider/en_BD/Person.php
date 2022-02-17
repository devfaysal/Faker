<?php

namespace Faker\Provider\en_BD;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{lastNameMale}} {{firstNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
    );

    protected static $firstNameMale = array(
        'Abir', 'Abdullah', 'Ahsan', 'Neloy', 'Nayem', 'Omi', 'Shohel', 'Masnun', 'Faysal', 'Faisal', 'Rifat', 'Hasnat', 'Tanvir', 'Kamrul', 'Mamun', 'Arif', 'Jamil', 'Bulbul', 'Hasin', 'Mizan', 'Shohan', 'Mithun', 'Masud', 'Shakil', 'Manik', 'Ishtiaq', 'Akash', 'Kibria', 'Farhad'
    );

    protected static $firstNameFemale = array(
        'Zarin', 'Zerin', 'Farhana', 'Fahmida', 'Mahzabin', 'Mehnaz', 'Laboni', 'Sabrin', 'Sabrina', 'Lima', 'Annie', 'Zeba', 'Bushra', 'Farah', 'Nazia', 'Promi', 'Labiba', 'Sadia', 'Nusrat', 'Tahsin'
    );

    protected static $lastNameMale = array(
        'Khan', 'Ahmed', 'Ahamed', 'Sarkar', 'Hasan', 'Bhuiyan', 'Sikdar', 'Prodhan', 'Hossain', 'Uddin', 'Mia', 'Alam', 'Chowdhury', 'Kazi', 'Mondol'
    );

    protected static $lastNameFemale = array(
        'Khan', 'Ahmed', 'Ahamed', 'Sarkar', 'Hasan', 'Bhuiyan', 'Sikdar', 'Prodhan', 'Jahan', 'Akter', 'Khatun', 'Chowdhury', 'Mondol', 'Kazi'
    );


    public static function lastNameMale()
    {
        return static::randomElement(static::$lastNameMale);
    }


    public static function lastNameFemale()
    {
        return static::randomElement(static::$lastNameFemale);
    }
}
