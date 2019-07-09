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
            'password'       => '$2y$10$Aytbz8dPkKLz6N6Rz/.if.sGdCnIHhaxZsPhUpsCiCwBPk4ipBSau',
            'remember_token' => null,
            'created_at'     => '2019-07-09 10:55:21',
            'updated_at'     => '2019-07-09 10:55:21',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
