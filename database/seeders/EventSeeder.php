<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            ['title' => 'Tech Conference', 
            'description' => 'A tech conference', 
            'date' => '2024-11-01', 
            'location' => 'Kathmandu', 
            'category_id' => 1 ],
        ]);
        
    }
}
