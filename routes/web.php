<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

Route::get('contactUs',[ProductController::class,'contactUs'])->name('contactUs-page');
Route::get('services',[ProductController::class,'services'])->name('services-page');

Route::get('loginP'   , [AuthController::class , 'loginPage'] )->name('loginP');
Route::get('signup'   , [AuthController::class , 'signupPage'] )->name('signup');

Route::POST('register'   , [AuthController::class , 'handleregisterationn'] )->name('signup-form');
Route::get('login'   , [AuthController::class , 'handlelogin'] )->name('login-form');


Route::get('user-reg' , function (){

    $name  = 'test';
    $email  = 'test1@gmail.com';
    $password  = 'test';

    if(User::create([
        'name' => $name,
        'email' => $email  ,
        'password' => Hash::make($password),
        'role' => 0
    ])){
        return "user created";
    }


});



Route::get('admin-reg' , function (Request $request){

    $name  = $request->name;
    $email  = $request->email;
    $password  =  $request->passwprd;

    if(User::create([
        'name' => $name,
        'email' => $email  ,
        'password' => Hash::make($password),
        'role' => 1
    ])){
        return "admin created";
    }


});

Route::get('admin-login' , function (){
    $email  = 'email';
    $password  = 'password';


     Auth::attempt(['email' => $email , 'password' => $password]);


     if(Auth::user()->role == 0){
        return redirect('/');
     } else {
        return  redirect(route('AdminDashboard'))->with('success','Welcome to Admin Panel');
     }




});

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('companies', CompanyController::class);
Route::get('/',[ProductController::class,'index']);
Route::get('product/create',[ProductController::class,'create']);
Route::POST('product/store',[ProductController::class,'store']);
Route::get('product/{id}/detail',[ProductController::class,'productdetail'])->name('productdetail');


Route::get('product/{id}/edit',[ProductController::class,'edit']);
Route::PUT('product/{id}/update',[ProductController::class,'update']);
Route::get('product/{id}/delete',[ProductController::class,'destroy'])->name('delete-product');

Route::get('AdminProduct/{id}/show',[ProductController::class,'show']);
Route::get('AdminProduct/find', [ProductController::class,'find'])->name('find-product');


Route::get('apricot',[ProductController::class,'apricot'])->name('apricot');
Route::get('apple',[ProductController::class,'apple'])->name('apple');
Route::get('cherry',[ProductController::class,'cherry'])->name('cherry');
Route::get('walnut',[ProductController::class,'walnut'])->name('walnut');


Route::get('dashboard',[AuthController::class,'dashboard'])->name('AdminDashboard');
