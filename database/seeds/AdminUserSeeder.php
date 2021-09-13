<?php

use Illuminate\Database\Seeder;
Use App\User;
Use Illuminate\Auth;
Use Illuminate\support\facades\Hash;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users =User::all();
          foreach($users as $user){
            if(array_key_exists('admin',$user->name)){
              echo 'name exist';
            }
            else{
              User::create([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
              //  'tel' => '0655212365',
              //  'ville' => 'er-rich',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'), // password
                'remember_token' => Str::random(10),
                'admin'=>1
                ]);
            }
          }
    }
}
