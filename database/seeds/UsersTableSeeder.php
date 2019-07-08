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
            'password'       => '$2y$10$s9kwImHVw6VEpWujAX.h8.Uimtkmy/mRSqEQzlxebuSxQFS8BfeLa',
            'remember_token' => null,
            'created_at'     => '2019-07-08 21:11:46',
            'updated_at'     => '2019-07-08 21:11:46',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
