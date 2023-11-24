<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name'=>'UES FC',
            'description'=>'Equipo de la UES',
            'type'=>'Masculino',
            'color'=>'rojo',
            'status'=>'Activo',
            'cycle_id'=>1,
            'school_id'=>1,
            'tournament_id'=>1,
        ]);
        Team::create([
            'name'=>'USAM FC',
            'description'=>'Equipo de la USAM',
            'type'=>'Masculino',
            'color'=>'azul',
            'status'=>'Activo',
            'cycle_id'=>2,
            'school_id'=>2,
            'tournament_id'=>1,
        ]);
        Team::create([
            'name'=>'UEES FC',
            'description'=>'Equipo del la Evangelica',
            'type'=>'Masculino',
            'color'=>'amarillo y blanco',
            'status'=>'Activo',
            'cycle_id'=>4,
            'school_id'=>3,
            'tournament_id'=>1,
        ]);
        Team::create([
            'name'=>'UAE FC',
            'description'=>'Equipo de la ALbert Einstein',
            'type'=>'Masculino',
            'color'=>'morado',
            'status'=>'Activo',
            'cycle_id'=>5,
            'school_id'=>4,
            'tournament_id'=>1,
        ]);
        Team::create([
            'name'=>'ITCA FC',
            'description'=>'Equipo del ITCA FEPADE',
            'type'=>'Masculino',
            'color'=>'green',
            'status'=>'Activo',
            'cycle_id'=>6,
            'school_id'=>5,
            'tournament_id'=>1,
        ]);

    
         Team::create([
            'name'=>'UNAB FC',
            'description'=>'Equipo de La Andres Bello',
            'type'=>'Masculino',
            'color'=>'Negro',
            'status'=>'Activo',
            'cycle_id'=>7,
            'school_id'=>6,
            'tournament_id'=>1,
        ]);


        Team::create([
            'name'=>'UCA FC',
            'description'=>'Equipo de La Jose Simeon Cañas',
            'type'=>'Masculino',
            'color'=>'Naranja',
            'status'=>'Activo',
            'cycle_id'=>8,
            'school_id'=>7,
            'tournament_id'=>1,
        ]);

        Team::create([
            'name'=>'Don Bosco  FC',
            'description'=>'Equipo de La Don Bosco',
            'type'=>'Masculino',
            'color'=>'negro con blanco',
            'status'=>'Activo',
            'cycle_id'=>9,
            'school_id'=>8,
            'tournament_id'=>1,
        ]);
    }
}
