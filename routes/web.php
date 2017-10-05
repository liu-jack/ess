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
/*
Route::any('/spa/{all}', function () {
    return view('index');
})
->where(['all' => '.*']);
*/

Route::get('/api/data', function () {
    echo "dios!";
});

Route::any('/{all}', function () {
    return view('welcome');
})->where(['all' => '.*']);
