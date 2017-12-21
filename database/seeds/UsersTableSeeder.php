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
        App\User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'avatar' => 'https://vignette.wikia.nocookie.net/hitman/images/4/4e/Hitman_Film.jpg/revision/latest?cb=20120105230947',
            'admin' => 1,
            'email' => 'admin@gmail.com',
        ]);
    }
}
