<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
       // $this->call(AdminUserSeeder::class);
       
         $this->call(AssuranceSeeder::class);
        // $this->call(ClientSeeder::class);
      //  $this->call(AdminSeeder::class);
       //  $this->call(UserSeeder::class);
        // $this->call(AgenceSeeder::class);
        // $this->call(CarSeeder::class);
        // $this->call(VisiteSeeder::class);
       //  $this->call(CommandSeeder::class);
       /*cmd: php artisan db:seed */


       
        //create les factory
        
       /* 
          factory(App\Agence::class,10)->create();
          factory(App\User::class,10)->create();
          factory(App\Car::class,10)->create();
          factory(App\Command::class,10)->create();
        */
      
    }
}
