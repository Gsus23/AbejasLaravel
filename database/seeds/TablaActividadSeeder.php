<?php

use Illuminate\Database\Seeder;
use App\Models\Actividad;


class TablaActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREING_KEY_CHECKS = 0;');
        factory(Actividad::class,50)->create();

    }
}
