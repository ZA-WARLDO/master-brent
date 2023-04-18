<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => "Alex Babineaux",
            'email' => "alexbabineaux@gmail.com",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('alexpassword'),
            'user_type' => 'Photographer',
            'contact'=> "09123456789",
            'address' => "Zone-5 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'id' => 2,
            'name' => "Errol John Celis",
            'email' => "ecelis@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('errolpassword'),
            'user_type' => 'Customer',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'remember_token' => Str::random(10),
        ]);

    }
}
