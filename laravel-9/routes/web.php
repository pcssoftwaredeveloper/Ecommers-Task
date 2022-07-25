<?php
use App\Http\Controllers\Crud_functionality;
use App\Http\Controllers\Eshoper;

use App\Http\Controllers\admin\Admin;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[Crud_functionality::class,'add_edit_product']);
Route::get('/product_list',[Crud_functionality::class,'product_list']);
Route::post('/register_api',[Crud_functionality::class,'register_api']);
Route::get('/update/{id}',[Crud_functionality::class,'add_edit_product']);
Route::get('/delete/{id}',[Crud_functionality::class,'delete']);