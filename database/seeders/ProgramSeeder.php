<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;


class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program = new Program;
        $program->name= 'IGE';
        $program->description= 'carrera de Ige';
        $program->key= '4O4';
        $program->save();

        $program = new Program;
        $program->name= 'idustrial';
        $program->description= 'carrera de idustrial';
        $program->key= 'E4';
        $program->save();

        $program = new Program;
        $program->name= 'ILE';
        $program->description= 'carrera de leyes';
        $program->key= '43';
        $program->save();
    }
}
