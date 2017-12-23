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
        DB::table('users')->insert([
            [
                'name' => 'Arthur Zanella',
                'email' => 'arthurzanella@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
            [
                'name' => 'Arthur Corso',
                'email' => 'ahcorso@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
            [
                'name' => 'Rafael Palandi',
                'email' => 'rafael@palandi.com.br',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
        ]);

    }
}
