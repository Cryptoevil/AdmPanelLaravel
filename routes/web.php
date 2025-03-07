<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('cards/destroy', 'CardsController@massDestroy')->name('cards.massDestroy');

    Route::resource('cards', 'CardsController');

    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');

    Route::resource('teams', 'TeamController');

    Route::delete('sites/destroy', 'SitesController@massDestroy')->name('sites.massDestroy');

    Route::resource('sites', 'SitesController');
});
