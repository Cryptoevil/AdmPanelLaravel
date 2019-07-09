<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$IQF9QdKwNd.p2chSR4UQUOffCldrxI9Tiu6GoSBuOngfDrY431wDK',
            'remember_token' => null,
            'created_at'     => '2019-07-09 22:51:10',
            'updated_at'     => '2019-07-09 22:51:10',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
