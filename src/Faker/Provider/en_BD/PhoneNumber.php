<?php

namespace Faker\Provider\en_BD;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '013########',
        '014########',
        '015########',
        '016########',
        '017########',
        '018########',
        '019########'
    );

    /**
     * @example '+8801670354490'
     */
    public function phoneNumberWithCountryCode()
    {
        return "+88" . $this->phoneNumber();
    }
}
