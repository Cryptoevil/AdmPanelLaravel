<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-07-09 17:06:20',
            'updated_at' => '2019-07-09 17:06:20',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '17',
                'title'      => 'steal_access',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '18',
                'title'      => 'card_create',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '19',
                'title'      => 'card_edit',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '20',
                'title'      => 'card_show',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '21',
                'title'      => 'card_delete',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '22',
                'title'      => 'card_access',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '23',
                'title'      => 'team_create',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '24',
                'title'      => 'team_edit',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '25',
                'title'      => 'team_show',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '26',
                'title'      => 'team_delete',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '27',
                'title'      => 'team_access',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '28',
                'title'      => 'site_create',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '29',
                'title'      => 'site_edit',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '30',
                'title'      => 'site_show',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '31',
                'title'      => 'site_delete',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ],
            [
                'id'         => '32',
                'title'      => 'site_access',
                'created_at' => '2019-07-09 17:06:20',
                'updated_at' => '2019-07-09 17:06:20',
            ]];

        Permission::insert($permissions);
    }
}
