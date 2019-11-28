<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/users', function(){
    $users = \App\User::latest()->paginate(5);
    
   return view('users',[
    'users' => $users,
  ]);
});

Route::get('/','PostsController@index');

Route::get('/p/create', 'PostsController@create');

Route::post('/p', 'PostsController@store');

Route::get('/p/{post}', 'PostsController@show');


Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::post('/follow/{user}', 'FollowsController@store');

