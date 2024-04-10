<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::factory()->count(20)->create()->each(function ($group) {
            $group->students()->saveMany(Student::factory()->count(10)->make());
        });
    }
}
