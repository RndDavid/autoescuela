<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'David',
            'email' => 'rnd25david@gmail.com',
            'password' => bcrypt('25252520')
        ]);
    }
}
