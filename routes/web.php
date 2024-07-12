<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LeVanZoeController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\ViewController;

// Method http
//  GET, POST, PUT, PATCH, DELETE

// Base url http://127.0.0.1:8000/test

Route::get('/test', function(){
    echo 'hello';
});

// http://127.0.0.1:8000/
Route::get('/', function(){
    echo 'trang chu';
});

// list-product
Route::get('list-product', [ProductController::class, 'showProduct']);

// Slug 
// http://127.0.0.1:8000/get-product/1
Route::get('get-product/{id}', [ProductController::class, 'getProduct']);

// Params
// http://127.0.0.1:8000/update-product?id=1&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);

Route::get('/thongtinsv', [LeVanZoeController::class, 'thongTin']);

// CRUD => Query builder
Route::group([
    'prefix'  => 'users',
    'as'  => 'users.'
], function(){
    //http://127.0.0.1:8000/users/list-users
Route::get('list-users', [Usercontroller::class, 'listUsers'])
->name('listUsers');

    //http://127.0.0.1:8000/users/add-users
Route::get('add-users', [Usercontroller::class, 'addUsers'])
->name('addUsers');
Route::post('add-users', [Usercontroller::class, 'addPostUsers'])
->name('addPostUsers');

//http://127.0.0.1:8000/users/delete-users/1
Route::get('delete-users/{userId}', [Usercontroller::class, 'deleteUsers'])
->name('deleteUser');

Route::get('update-users/{userId}', [Usercontroller::class, 'updateUser'])
->name('updateUser');

Route::post('update-users', [Usercontroller::class, 'updatePostUsers'])
->name('updatePostUsers');


});
Route::group([
    'prefix'  => 'users',
    'as'  => 'users.'
], function(){

});

Route::group([
    'prefix' => 'products',
    'as' => 'products.'
], function() {
    Route::get('list-product', [ProductController::class, 'listProduct'])
    ->name('listProduct');
    Route::get('add-product', [ProductController::class, 'addProduct'])
    ->name('addProduct');
    Route::post('add-product', [ProductController::class, 'addPostProduct'])
    ->name('addPostProduct');
    Route::get('delete-product/{productID}', [ProductController::class, 'deleteProduct'])
    ->name('deleteProduct');
    Route::get('update-product/{productID}', [ProductController::class, 'updateProduct'])
    ->name('updateProduct');
    Route::post('update-product', [ProductController::class, 'updatePostProduct'])
    ->name('updatePostProduct');
});

Route::get('test', [UserController::class, 'test']);