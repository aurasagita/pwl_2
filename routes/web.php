<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| 
|
*/
//Route::get('/', function () {
//    echo "Selamat Datang";
//    });
    

//Route::get('/about', function () {
 //   echo "NIM: 2141720102, Nama: Aura Sagita Ashilah";
  //  });    

//Route::get('/articles/{id} ', function ($id) {
  // echo "Halaman Artikel dengan ID:".$id;jjjj

//});

Route::get('/', [PageController::class, 'index']);
    
Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'article']);


Route::get('/home', [HomeController::class, 'home']);
    
Route::get('/about', [AboutController::class, 'index']);

Route::get('/article', [ArticleController::class, 'index']);

// ------------------------------------------------------------------------------------------------

Route::get('/', [CompanyController::class, 'index']);

Route::prefix('product')->group(function () {
   Route::get('/list',[CompanyController::class, 'product']);
 });

Route::get('/news/{param}', [CompanyController::class, 'news']);

 Route::prefix('program')->group(function () {
  Route::get('/list', [CompanyController::class, 'program']);
 });

 Route::get('/aboutus', [CompanyController::class, 'aboutus']);

 Route::resource('/index', CompanyController::class);