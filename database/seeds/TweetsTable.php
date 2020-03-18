<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class TweetsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $profile = Factory::create();

      $users = User::all();
      $numberOfUsers = count( $users );
      // Let's make 25 Tweets in just a few lines!
      foreach( range( 1, 35 ) as $index ) {
          DB::table( 'posts' )->insert( array(
              'user_id' => rand( 1, $numberOfUsers ),
              'caption' => $profile->catchphrase
          ) );
      }
    }
}
