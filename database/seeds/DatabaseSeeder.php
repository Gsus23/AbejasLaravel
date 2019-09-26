<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     

        $this->truncateTables([
        	'ubicacion',
        	'apiario',
        	'clima_apiario',
        	'clima_ambiente',
        	'actividad'
        ]);
        $this->call(TablaUbicacionSeeder::class);
        $this->call(TablaApiarioSeeder::class);
        $this->call(TablaClima_ApiarioSeeder::class);
        $this->call(TablaClima_AmbienteSeeder::class);
        $this->call(TablaActividadSeeder::class);
    }
    protected function truncateTables(array $tablas)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	foreach ($tablas as $tabla) {
    		DB::table($tabla)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

   
}
