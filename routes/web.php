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

Route::get('/', function () {
    return view('public');
})->name('homepublic');


Route::get('/card', function(){
    return view('layouts/cards');
});

Route::get('/register', function(){
    return view('auth/register');
})->name('registration');

Route::get('/dovesiamo', function(){
    return view('dovesiamo');
})->name('dovesiamo');

Route::get('/chisiamo', function(){
    return view('chisiamo');
})->name('chisiamo');

Route::get('/modificaprofilo', function(){
    return view('modificaprofilo');
})->name('modificaprofilo');

Route::get('/profiloutente', function(){
    return view('profiloutente');
})->name('profiloutente');

Route::get('/profilostaff', function(){
    return view('profilostaff');
})->name('profilostaff');

Route::get('/profiloadmin', function(){
    return view('profiloadmin');
})->name('profiloadmin');

Route::get('/chat', function(){
    return view('chat');
})->name('chat');

Route::get('/inserimentopost', function(){
    return view('inserimentopost');
})->name('inserimentopost');







//rotte login 

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');


//rotte registrazione

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register')->name('confirmreg');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
