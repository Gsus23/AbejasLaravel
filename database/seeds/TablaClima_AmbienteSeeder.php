<?php

use Illuminate\Database\Seeder;
use App\Models\Clima_Ambiente;

class TablaClima_AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Clima_Ambiente::class,50)->create();
    }
}
