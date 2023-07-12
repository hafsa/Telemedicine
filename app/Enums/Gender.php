<?php

namespace App\Enums;

enum Gender: int
{
    case Male = '1';
    case Female = '2';

    public function gender(): string
    {
        return match($this) 
        {
            self::Male => 'male',   
            self::Female => 'female',   
        };
    }
}