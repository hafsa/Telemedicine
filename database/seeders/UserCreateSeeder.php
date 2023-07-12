<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $check = DB::table('users')
                ->select('id')->where('email','user@yopmail.com')
                ->first();
        if (empty($check->id)) {
            \App\Models\User::create([
                'name' => 'User',
                'email' => 'user@yopmail.com',
                'password' => Hash::make('Test@1234'),
            ]);
        }

        $check = DB::table('superadmins')
                ->select('id')->where('email','admin@yopmail.com')
                ->first();
        if (!isset($check->id)) {
            \App\Models\Superadmin::create([
                'name' => 'Admin',
                'email' => 'admin@yopmail.com',
                'password' => Hash::make('Test@1234'),
            ]);
        }

        $check = DB::table('doctors')
                ->select('id')->where('email','doctor@yopmail.com')
                ->first();
        if (empty($check->id)) {
            \App\Models\Doctor::create([
                'name' => 'Doctor',
                'email' => 'doctor@yopmail.com',
                'password' => Hash::make('Test@1234'),
            ]);
        }
    }
}
