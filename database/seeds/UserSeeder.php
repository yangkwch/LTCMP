<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    DB::table('users')->delete();

	    User::create([
                     'name' => 'Admin',
                     'email'=>'admin@lontontel.com',
                     'password' => bcrypt('secret'),
      ]);
	}
}
