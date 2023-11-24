<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'name'=>'Universad De El Salvador',
            'address'=>'Campus ingeneria en sistemas'
        ]);
        Place::create([
            'name'=>'Universad Don Bosco',
            'address'=>'Campus ingeneria aeronautica'
        ]);
        Place::create([
            'name'=>'Universad Jose Simeon Cañas',
            'address'=>'Campus ingeneria ambiental'
        ]);
        Place::create([
            'name'=>'Universad De El Salvador',
            'address'=>'Campus ingeneria civil'
        ]);

        Place::create([
            'name'=>'Universad Alberto Masferrer',
            'address'=>'Cancha de La Masferrer'
        ]);
        Place::create([
            'name'=>'ITCA_FEPADE',
            'address'=>'CAFETALON'
        ]);
        Place::create([
            'name'=>'Universad Albert Einstein',
            'address'=>'Polideportivo Einstein'
        ]);
        Place::create([
            'name'=>'Universad Andres Bello',
            'address'=>'Campus Idiomas'
        ]);
    }
}
