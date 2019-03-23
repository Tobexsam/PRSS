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


use App\faculty;
use App\Staff;
use Illuminate\Support\Facades\Route;


Route::get('/',function () {

    return view('Login');

});

Route::get('/admin/setup_project',function () {
    $project = \App\project::All();
    return view('Admin/SetupProject',compact('project'));

});


Route::any('/home','loginController@login');
Route::any('/logout','loginController@logout');
Route::any('/save_project','ProjectController@createProject');
