<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
         Model::unguard();

         $this->call(UsersTableSeeder::class);
         // $this->call(AsyleesTableSeeder::class);

        Model::reguard();
          

         // $this->call(UsersTableSeeder::class);
     //   DB::table('users')->insert([
    	// 'name'=> 'Jose',
     //    'email'=>'ccsistemas791@gmail.com',
     //    'password'=>bcrypt('123456'),
     //    'type'=>'admin',
         
     //      ]);
    }
}
