<?php

namespace Franc\PhpApiReflection;

class DatabaseMock
{
    static function getUser()
    {
        return [
            'id' => 15,
            'name' => 'Fake user name',
            'email' => 'myemail@fake.com',
            'password' => 'xyz@ABC',
        ];
    }

    static function getProduct()
    {
        return [
            'name' => 'Fake product name',
            'price' => 100.50,
            'quantity' => 10,
        ];
    }
}
