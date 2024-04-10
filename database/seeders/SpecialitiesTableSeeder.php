<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Speciality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Speciality::factory()->count(5)->create()->each(function ($speciality) {
            $speciality->groups()->saveMany(Group::factory()->count(3)->make());
        });
    }
}
