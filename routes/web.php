<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
$name = 'yousef';
Route::view('/', 'welcome', compact('name'));

// Route::view('/', 'welcome', ['name' => 'Ahmed']);
Route::get('/user/{id}',function($userID){
    return 'user '.$userID;
});

Route::get('*',function(){
    return 'love you ';
});




Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
    });
;