<?php

use Illuminate\Database\Seeder;
use App\Models\Clima_Ambiente;
use Illuminate\Support\Facades\DB;


class TablaClima_AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('TRUNCATE TABLE {$table} RESTART IDENTITY CASCADE');
        factory(Clima_Ambiente::class,50)->create();
    }
}
