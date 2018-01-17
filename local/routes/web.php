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
use App\Models\User;
Route::get('/', function () {
	return view('welcome');
});
Route::get('test', function(){
	$users = App\Models\User::where('name','admin')
					->take(1)
					->get();
	$user  = User::chunk(2 , function($result){
		// dd($result);
	});
	$column1 = User::where('id','4')->get(['id','name']);
	$column2 = User::select('id','name')->where('id','4')->get();
});
Route::get('/users','User\UserController@index')->name('users.index');



