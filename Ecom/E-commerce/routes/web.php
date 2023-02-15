<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
Route::get('/login', function () {
    return view('login');
});
Route::view('/register','register');
Route::view('/admin','admin');
Route::view('/adminelectric','adminelectric');
Route::view('/adminhealth','adminhealth');
Route::view('/admincloth','admincloth');
Route::post('/login',[UserController::class,'login']);
Route::post('/admin',[ProductController::class,'admin']);
Route::post('/abc',[ProductController::class,'adminelec']);
Route::post('/add',[ProductController::class,'adminhealth']);
Route::post('/addd',[ProductController::class,'admincloth']);
Route::post('/register',[UserController::class,'register']);
Route::get('/list',[ProductController::class,'list']);
Route::get('/delete/{id}',[ProductController::class,'delete']);
Route::get('/',[ProductController::class,'index']);
Route::get('/elec',[ProductController::class,'electric']);
Route::get('/cloth',[ProductController::class,'cloth']);
Route::get('/health',[ProductController::class,'health']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('clothdetail/{id}',[ProductController::class,'clothdetail']);
Route::get('electricdetail/{id}',[ProductController::class,'electricdetail']);
Route::get('healthdetail/{id}',[ProductController::class,'healthdetail']);
Route::get("search",[ProductController::class,'search']);
Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);





