<?php

/* - - - anger routes - - - */ 
Route::get('/anger', ['uses' => 'Casulo\Anger\AngerController@index', 'as' => 'anger']);

Route::get('/anger/users', ['uses' => 'Casulo\Anger\AngerController@users', 'as' => 'anger.users']);
Route::get('/anger/user/{id}', ['uses' => 'Casulo\Anger\AngerController@user', 'as' => 'anger.user']);
Route::post('/anger/user/store', ['uses' => 'Casulo\Anger\AngerController@userRoleAttach', 'as' => 'anger.user-role-attach']);
Route::post('/anger/user/destroy', ['uses' => 'Casulo\Anger\AngerController@userRoleDetach', 'as' => 'anger.user-role-detach']);


Route::get('/anger/roles', ['uses' => 'Casulo\Anger\AngerController@roles', 'as' => 'anger.roles']);
Route::get('/anger/role/{id}', ['uses' => 'Casulo\Anger\AngerController@role', 'as' => 'anger.role']);
Route::post('/anger/role/store', ['uses' => 'Casulo\Anger\AngerController@rolePermissionAttach', 'as' => 'anger.role-permission-attach']);
Route::post('/anger/role/destroy', ['uses' => 'Casulo\Anger\AngerController@rolePermissionDetach', 'as' => 'anger.role-permission-detach']);


Route::get('/anger/permissions', ['uses' => 'Casulo\Anger\AngerController@permissions', 'as' => 'anger.permissions']);
Route::get('/anger/edit', ['uses' => 'Casulo\Anger\AngerController@edit', 'as' => 'anger.edit']);

