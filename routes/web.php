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

Route::group(['middleware' => 'auth'], function(){
	Route::get('/', function () {
	    return view('auth/login');
	});

	Route::get('super/admin/dashboard', function(){
		return view('superadmin/dashboard');
	})->name('super/admin/dashboard');

	Route::get('root/admin/dashboard', function(){
		return view('root/dashboard');
	})->name('root/admin/dashboard');

	Route::get('admin/dashboard', function(){
		return view('admin/dashboard');
	})->name('admin/dashboard');

	Route::get('llantero/dashboard', function(){
		return view('llantero/dashboard');
	})->name('llantero/dashboard');

	Route::get('bodega/dashboard', function(){
		return view('bodega/dashboard');
	})->name('bodega/dashboard');
});
