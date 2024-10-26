<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attendees')->insert([
            ['name' => 'Raman Shrestha', 
            'email' => 'remon.stha22@gmail.com', 
            'event_id' => 1 ],
        ]);
        
    }
}
