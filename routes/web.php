<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\adminController;

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



// Route::get('/lay', function () {
//     return view('admin.layout');
// });

route::get('/',[adminController::class,'dashboard']);

route::get('login',[adminController::class,'login']);

route::get('login_post',[adminController::class,'login_post']);

route::get('logout',[adminController::class,'logout']);

// route::group(['middleware'=>'admin_Auth'],function(){
//     route::get('/',[adminController::class,'dashboard']);

// });
   

