<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	 factory(App\User::class)->create([

          'name'=>'Jose Ignacio RG',
          'email'=>'ccsistemas791@gmail.com',
          'password'=>bcrypt('123456'),
          'type'=>'admin'


        ]);

        factory(App\User::class)->create();

    }
}
