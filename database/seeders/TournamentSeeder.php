<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament::create([
            'name'=>'Torneo de Futbol Universidades De El Salvador',
            'description'=>'Campeonato para decidir que universidad tiene el mejor equipo de futbol',
            'dateinit'=>'23-01-01',
            'dateend'=>'23-11-23',
            'status'=>'1'
        ]);
    }
}
