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
            'avatar' => 'Alex.png',
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

        User::create([
            'id' => 3,
            'name' => "Earl John Celis",
            'email' => "ercelis@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('earlpassword'),
            'user_type' => 'Photographer',
            'avatar' => 'earljohn.jpg',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'id' => 4,
            'name' => "Errol Jay Celis",
            'email' => "ejcelis@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('errolpassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 5,
            'name' => "Errol Jayce Celis",
            'email' => "errcelis@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('errolpassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 6,
            'name' => "Errol Jamae Celis",
            'email' => "ejacelis@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('errolpassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 7,
            'name' => "Elden Jami Cruz",
            'email' => "ejamicelis@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('errolpassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 8,
            'name' => "Earl James Celis",
            'email' => "earljcelis@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('errolpassword'),
            'user_type' => 'Studio Owner',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'id' => 9,
            'name' => "Xavier D. Santiago",
            'email' => "xsantiago@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('errolpassword'),
            'user_type' => 'Photographer',
            'contact'=> "09123456689",
            'address' => "Zone-3 Sta.Cruz, Naga City, Camarines Sur",
            'year_experience' => "5 years",
            'remember_token' => Str::random(10),
        ]);


    }
}
