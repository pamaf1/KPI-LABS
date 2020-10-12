<?php

use Illuminate\Database\Seeder;

use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Students = User::updateOrCreate(
            ['email' => "andreipodmocov@gmail.com"],
            [
                'name' => "Andrey Podmokov",
                //'type' => User::ADMIN,
                'password' => bcrypt('123456'),
                'email' => "andreipodmocov@gmail.com",
            ]);

    }
}