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
        $a = new App\User([
            'name' => 'minesh',
            'email' => 'minesh@minesh.io',
            'password' => bcrypt('password')
        ]);

        $a->save();
    }
}
