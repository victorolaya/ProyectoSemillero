<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
        	DB::table('mentores')->insert([
        		'nombres' => $faker->firstName,
        		'apellidos' => $faker->lastName,
        		'documento_de_identidad' => 'CC',
        		'numero_documento' => $faker->randomNumber($nbDigits=NULL),
        		'edad' => $faker->randomDigit,
        		'fecha_de_nacimiento' => $faker->date($format = 'd-m-Y',$max ='now'),
        		'direccion' => $faker->streetName,
        		'municipio' => $faker->city,
        		'numero_movil' => $faker->e164PhoneNumber,
        		'correo_electronico'=> $faker->email,
        		'eps' => $faker->company,
        		'rh' => 'a'
        		'areas_id' => ''
        	]);
        }
        
    }
}
