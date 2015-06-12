<?php




/**
* Perfil de Usuário
*/
Route::group(['prefix' => 'perfil'], function()
{
    Route::get(''                , ['as' => 'profile.index'   , 'uses' => 'ProfileController@index']);
    Route::get('criar'           , ['as' => 'profile.create'  , 'uses' => 'ProfileController@create']);
    Route::post('salvar'         , ['as' => 'profile.store'   , 'uses' => 'ProfileController@store']);
    Route::get('{id}/editar'     , ['as' => 'profile.edit'    , 'uses' => 'ProfileController@edit']);
    Route::post('{id}/atualizar' , ['as' => 'profile.update'  , 'uses' => 'ProfileController@update']);
    Route::get('{id}/remover'    , ['as' => 'profile.destroy' , 'uses' => 'ProfileController@destroy']);
});


/**
* Usuarios
*/
Route::group(['prefix' => 'usuario'], function()
{
    Route::get('criar', ['as' => 'user.create', 'uses' => 'UserController@create']);
});

/**
* Empresas
*/
Route::group(['prefix' => 'empresa'], function()
{
    Route::get('criar', ['as' => 'company.create', 'uses' => 'CompanyController@create']);
});






Route::get('/', 'WelcomeController@index');

Route::get('home', function()
{
    return redirect('/');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
