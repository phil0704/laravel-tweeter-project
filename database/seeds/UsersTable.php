<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $profile = Factory::create();

      // Let's make 25 users in just a few lines!
      foreach( range( 1, 25 ) as $index ) {
          $user = new User;
          $user->name = $profile->name;
          $user->email = $profile->email;
          $user->username = $profile->username;
          $user->password = 'password';
          $user->age = rand( 13, 65 );
          $user->save();
      }
    }
}
