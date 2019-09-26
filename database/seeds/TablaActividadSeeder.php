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
        factory(Actividad::class,50)->create();
    }
}
