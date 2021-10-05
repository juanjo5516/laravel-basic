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
        // $this->call(UsersTableSeeder::class);

        App\User::create([
            'name' => 'Juan José',
            'email' => 'jjaguilal@mineco.gob.gt',
            'password' => bcrypt('12345678')
        ]);

        factory(App\Post::class, 24)->create();

    }
}
