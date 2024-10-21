<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todologinController;
use App\Http\Controllers\todopageController;
use App\Http\controllers\todoTeamController;

// Signup page
Route::get('/', function () {
    return view('welcome');
})->name("welcome");

// Store signup todo
Route::post('/store', [todologinController::class, 'store'])
->name("todoStore");

// Login page
Route::get('/login', function () {
    return view('login');
})->name("login");

// Allow login credentials
Route::post('/loginvalidate', [todologinController::class, 'loginvalidate'])
    ->name("validlogin");

// Dashboard
Route::get('/dashboard', [todopageController::class, 'index'])->name('dashboard');

// introduction
Route::get('/homepage', function(){
    return view('homepage');
})->name("homepage");

// Display add button in dashboard
Route::get('/createpage', function () {
    return view('createpage');
})->name("createpage");

// From create page (to create a todo)
Route::post('/createtodo', [todopageController::class, 'createtodo'])
    ->name("createtodo");

//route to edit
Route::get('/pageedit/{id}', [todopageController::class, 'pageedit'])
    ->name('pageedit');

//route to update
Route::post('/update', [todopageController::class, 'pageupdate'])
    ->name('todo.update');

// Route to delete a todo
Route::get('/pagedelete/{id}', [todopageController::class, 'pagedelete'])
    ->name('pagedelete');

//route to logout
Route::get('/logout', [todopageController::class, 'pagelogout'])
    ->name('logout');

//teams
//dashboard
Route::get('/dashboardmember', [todoTeamController::class, 'index'])->name('dashboardmember');
//create page
// Display add button in dashboard
Route::get('/createmember', function () {
    return view('teams.createmember');
})->name("createmember");
//create page
Route::post('/createteam', [todoTeamController::class, 'createteam'])
    ->name("createteam");
    //route to edit
Route::get('/edit/{id}', [todoTeamController::class, 'editteam'])
->name('editteam');
//route to update
Route::post('/updateteam', [todoTeamController::class, 'updateteam'])
->name('updateteam');
// Route to delete a todo
Route::get('/delete/{id}', [todoTeamController::class, 'deleteteam'])
    ->name('deleteteam');
//profile edit
Route::get('/profileedit',[todologinController::class,'profileedit'])->name('profileedit');
Route::post('/profileupdate',[todologinController::class,'profileupdate'])->name('profileupdate');
