<?php 
namespace App;

use App\Enums\Gender;

function genders(){
    array_map(
        fn(Gender $gender) => $gender->gender(), 
        Gender::cases()
    );
}