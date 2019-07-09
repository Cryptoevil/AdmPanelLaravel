<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'team'                     => 'Team',
            'team_helper'              => '',
        ],
    ],
    'steal'          => [
        'title'          => 'Steals',
        'title_singular' => 'Steal',
    ],
    'card'           => [
        'title'          => 'Cards',
        'title_singular' => 'Card',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'c_number'          => 'Card Number',
            'c_number_helper'   => '',
            'c_cvv'             => 'CVV',
            'c_cvv_helper'      => '',
            'c_expmonth'        => 'Exp. Month',
            'c_expmonth_helper' => '',
            'c_expyear'         => 'Exp. Year',
            'c_expyear_helper'  => '',
            'c_fullname'        => 'Full Name',
            'c_fullname_helper' => '',
            'c_email'           => 'Email',
            'c_email_helper'    => '',
            'c_address'         => 'Address',
            'c_address_helper'  => '',
            'c_city'            => 'City',
            'c_city_helper'     => '',
            'c_state'           => 'State',
            'c_state_helper'    => '',
            'c_zip'             => 'c_zip',
            'c_zip_helper'      => '',
            'c_cardname'        => 'Card Name',
            'c_cardname_helper' => '',
            'c_sameaddr'        => 'Is shipping equals billing?',
            'c_sameaddr_helper' => 'Означает что shipping адрес такой же как и billing.',
            'c_site'            => 'Site',
            'c_site_helper'     => 'Сайт с которого произошел вбив',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'team'              => 'Team',
            'team_helper'       => '',
            'c_status'          => 'Status',
            'c_status_helper'   => '',
        ],
    ],
    'team'           => [
        'title'          => 'Teams',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
            'name'              => 'Name',
            'name_helper'       => '',
        ],
    ],
    'site'           => [
        'title'          => 'Sites',
        'title_singular' => 'Site',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            's_url'             => 'Site Url',
            's_url_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            's_status'          => 'Status',
            's_status_helper'   => '\'Up\' or \'Down\'',
        ],
    ],
];
