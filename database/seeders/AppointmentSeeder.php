<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appointment::create([
            'user_id' => 1,
            'cus_name' => "Errol John Celis",
            'start_date' => Carbon::now(),
            'end_date' => Carbon::createFromDate(2023,9,4),
            'event' => "Birthday",
            'start_time' => "8AM",
        ]);

        Appointment::create([
            'user_id' => 1,
            'cus_name' => "Alexa Regina",
            'start_date' => Carbon::now(),
            'end_date' => Carbon::createFromDate(2023,9,8),
            'event' => "Wedding",
            'start_time' => "8PM",
        ]);

       Appointment::create([
            'user_id' => 2,
            'cus_name' => "Alex Babineaux",
            'start_date' => Carbon::now(),
            'end_date' =>  Carbon::create(2023,4,8),
            'event' => "Birthday",
            'start_time' => "8AM",
        ]);
    }
}
