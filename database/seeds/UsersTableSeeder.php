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
            'password'       => '$2y$10$U2Zf32gEdZ4VJyZBg5OKX.ahih/jLXdNkytBaEGD.88/dPbeLmOXO',
            'remember_token' => null,
            'created_at'     => '2019-07-09 17:06:20',
            'updated_at'     => '2019-07-09 17:06:20',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
