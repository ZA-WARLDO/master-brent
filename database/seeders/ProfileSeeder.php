<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'user_id' => 1,
            'project_count' => 23,
            'img' => 'emma-wedding',
            'fee' => "1,400",
            'availability' => "Available",
        ]);
        
        Profile::create([
            'user_id' => 2,
            'project_count' => null,
            'img' => null,
            'fee' => null,
            'availability' => null,
        ]);

        Profile::create([
            'user_id' => 3,
            'project_count' => 14,
            'img' => 'emma-wedding',
            'fee' => "1,400",
            'availability' => "Available",
        ]);

        Profile::create([
            'user_id' => 4,
            'project_count' => 3,
            'img' => 'emma-wedding',
            'fee' => "1,400",
            'availability' => "Not Available",
        ]);

        Profile::create([
            'user_id' => 5,
            'project_count' => 3,
            'img' => 'emma-wedding',
            'fee' => "1,400",
            'availability' => "Not Available",
        ]);

        Profile::create([
            'user_id' => 6,
            'project_count' => 3,
            'img' => 'emma-wedding',
            'fee' => "1,400",
            'availability' => "Available",
        ]);

        Profile::create([
            'user_id' => 7,
            'project_count' => 3,
            'img' => 'emma-wedding',
            'fee' => "1,400",
            'availability' => "Not Available",
        ]);

        Profile::create([
            'user_id' => 8,
            'project_count' => 3,
            'img' => 'emma-wedding',
            'fee' => "1,400",
            'availability' => "Available",
        ]);

        Profile::create([
            'user_id' => 9,
            'project_count' => 3,
            'img' => 'emma-wedding',
            'fee' => "1,400",
            'availability' => "Not Available",
        ]);
    }
}
