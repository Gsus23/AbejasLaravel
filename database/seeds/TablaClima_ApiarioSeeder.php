<?php

use Illuminate\Database\Seeder;
use App\Models\Clima_Apiario;

class TablaClima_ApiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREING_KEY_CHECKS = 0;');
        factory(Clima_Apiario::class,50)->create();
    }
}
