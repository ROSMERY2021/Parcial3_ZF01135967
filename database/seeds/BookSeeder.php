<?php

use Illuminate\Database\Seeder;
use App\Models\books;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(books::class,20)->create();
        /* books::create([
             Alumno::create([
            'id' => '1',
            'name' => 'nathaly',
            'email' => 'nc945374@gmail.com',
            'password' => bcrypt('Zelaya123'),
        ]); */
    }
}
