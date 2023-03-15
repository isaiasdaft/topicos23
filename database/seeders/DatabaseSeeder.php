<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;
use App\Models\Student;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // App\Models\User::factory(10)->create();
       //$this->call(ProgramSeeder::class);
       Program::factory(5)->create();
       Student::factory(10)->create();
       //User::factory(5)->create();
    }
}
