<?php

use Illuminate\Database\Seeder;
use App\Profesor;
class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesor::class,20)->create();
        /*   Alumno::create([
            'id' => '1',
            'name' => 'nathaly',
            'email' => 'nc945374@gmail.com',
            'password' => bcrypt('Zelaya123'),
       ]);  */
    }
}
