<?php

use Illuminate\Database\Seeder;
use App\Models\Actividad;
use Illuminate\Support\Facades\DB;



class TablaActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('TRUNCATE TABLE {$actividad} RESTART IDENTITY CASCADE');
        factory(Actividad::class,50)->create();

    }
}
