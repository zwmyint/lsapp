<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController; // PagesController is controller name 
use App\Http\Controllers\PostsController; // PostsController is controller name 
use App\Http\Controllers\ProjectController; // ProjectController is controller name 

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


Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);


// php artisan route:list
Route::resource('posts', PostsController::class);
Route::resource('projects', ProjectController::class);



//Route::resources([
//    'photos' => PhotoController::class,
//    'posts' => PostController::class,
//]);


/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});
*/

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is user : ' . $id . ', name : ' . $name;
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
