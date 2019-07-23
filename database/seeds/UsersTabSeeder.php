<?php

use Illuminate\Database\Seeder;

class UsersTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Rodrigo',
            'email'=> 'rsantiago643@gmail.com',
            'password' => bcrypt('slinky123')
        ]);
    }
}
