<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandanController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactUsBladeController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeBladeControllerr;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PengalamanKuliahController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', [PageController::class, 'index']);
    
// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'article']);


// Route::get('/home', [HomeController::class, 'home']);
    
// Route::get('/about', [AboutController::class, 'index']);

// Route::get('/article', [ArticleController::class, 'index']);

// // ------------------------------------------------------------------------------------------------

// Route::get('/', [CompanyController::class, 'index']);

// Route::prefix('product')->group(function () {
//    Route::get('/list',[CompanyController::class, 'product']);
//  });

// Route::get('/news/{param}', [CompanyController::class, 'news']);

//  Route::prefix('program')->group(function () {
//   Route::get('/list', [CompanyController::class, 'program']);
//  });

//  Route::get('/aboutus', [CompanyController::class, 'aboutus']);

//  Route::resource('/index', CompanyController::class);
 // ------------------------------------------------------------------------------------------------

//  Route::get('/homeblade', [HomeBladeControllerr::class, 'index']);

//  Route::prefix('product')->group(function () {
//      Route::get('/listblade',[HomeBladeControllerr::class, 'product']);
//   });

//   Route::get('/newsblade/{param}', [HomeBladeControllerr::class, 'news']);

//   Route::prefix('program')->group(function () {
//      Route::get('/listprogram', [HomeBladeControllerr::class, 'program']);
//     });

//   Route::get('/aboutuscan', [HomeBladeControllerr::class, 'aboutus']);

//   Route::resource('contactus', ContactUsBladeController::class);
// // ==================================================================================================

// Route::get('/', [BerandanController::class, 'index']);
// Route::get('/p2', function(){
//   return view('layout.template');
// });


// ========================================================================================\


Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function () {
 
      
      Route::get('/kendaraan', [KendaraanController::class, 'index']);
      Route::get('/hobi', [HobiController::class, 'index']);
      Route::get('/dashboard', [DashBoardController::class, 'index']);
      Route::get('/profile', [ProfileController::class, 'index']);
      Route::get('/kuliah', [PengalamanKuliahController::class, 'index']);
      Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');
      Route::get('/mahasiswa/nilai/{id}',[MahasiswaController::class,'nilai']);
      Route::resource('articles', ArticleController::class);
      Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [ProfileController::class, 'index']);



