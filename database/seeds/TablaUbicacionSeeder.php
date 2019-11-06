<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TablaUbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       $url = [
       		'https://www.google.com/maps/place/Apiarios+Castañeda/@4.7966955,-75.7492364,17z/data=!3m1!4b1!4m5!3m4!1s0x8e387d04ea8e3c4b:0x99c7376f76714feb!8m2!3d4.7966955!4d-75.7470477',
       		'https://www.google.com/maps/place/Apiario+Tiagori/@4.5618553,-75.6476467,17z/data=!3m1!4b1!4m5!3m4!1s0x8e38f50eb97375eb:0xea0520df85267044!8m2!3d4.5618553!4d-75.645458',
       		'https://www.google.com/maps/place/Apiarios+Adrian+Barrera/@4.8026587,-75.7115857,17z/data=!3m1!4b1!4m5!3m4!1s0x8e38876e66fb8827:0xe80fd07edd782398!8m2!3d4.8026587!4d-75.709397'
       ];

       foreach ($url as $key => $value) {
       		DB::table('ubicacion')-> insert([
       			'url' => $value,
       			'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
       		]);
       	}
    }
}
