<?php

namespace Database\Seeders;

use App\Models\EventCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventCategory::firstOrCreate(
            ['slug' => Str::slug('Running')],
            [
                'name' => 'Running',
                'description' => 'Marathon, Fun Run, Sprint',
                'icon' => 'run.png'
            ]
        );

        EventCategory::firstOrCreate(
            ['slug' => Str::slug('Swimming')],
            [
                'name' => 'Swimming',
                'description' => 'Freestyle, Butterfly, Breaststroke',
                'icon' => 'swim.png'
            ]
        );

        EventCategory::firstOrCreate(
            ['slug' => Str::slug('Boxing')],
            [
                'name' => 'Boxing',
                'description' => 'Amateur Boxing, Professional Boxing',
                'icon' => 'boxing.png'
            ]
        );

        EventCategory::firstOrCreate(
            ['slug' => Str::slug('Tennis')],
            [
                'name' => 'Tennis',
                'description' => 'Singles, Doubles, Mixed Doubles',
                'icon' => 'tennis.png'
            ]
        );

        EventCategory::firstOrCreate(
            ['slug' => Str::slug('Powerlifting')],
            [
                'name' => 'Powerlifting',
                'description' => 'Deadlift, Squat, Bench Press',
                'icon' => 'power.png'
            ]
        );
    }
}