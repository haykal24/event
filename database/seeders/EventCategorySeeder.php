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
        EventCategory::create([
            'name' => 'Running',
            'slug' => Str::slug('Running'),
            'description' => 'Marathon, Fun Run, Sprint',
            'icon' => 'run.png'
        ]);

        EventCategory::create([
            'name' => 'Swimming',
            'slug' => Str::slug('Swimming'),
            'description' => 'Freestyle, Butterfly, Breaststroke',
            'icon' => 'swim.png'
        ]);

        EventCategory::create([
            'name' => 'Boxing',
            'slug' => Str::slug('Boxing'),
            'description' => 'Amateur Boxing, Professional Boxing',
            'icon' => 'boxing.png'
        ]);

        EventCategory::create([
            'name' => 'Tennis',
            'slug' => Str::slug('Tennis'),
            'description' => 'Singles, Doubles, Mixed Doubles',
            'icon' => 'tennis.png'
        ]);

        EventCategory::create([
            'name' => 'Powerlifting',
            'slug' => Str::slug('Powerlifting'),
            'description' => 'Deadlift, Squat, Bench Press',
            'icon' => 'power.png'
        ]);
    }
}
