<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create([
            'name'=>'Universidad De El Salvador'
        ]);
        School::create([
            'name'=>'Universidad Jose Simeon Cañas'
        ]);
        School::create([
            'name'=>'ITCA-FEPADE'
        ]);
        School::create([
            'name'=>'Universidad Andres Bello'
        ]);
        School::create([
            'name'=>'Universidad Evangelica'
        ]);
        School::create([
            'name'=>'Universidad Albert Einstein'
        ]);
        School::create([
            'name'=>'Universidad Alberto Masferrer'
        ]);
        School::create([
            'name'=>'Universidad Don Bosco'
        ]);

    }
}
