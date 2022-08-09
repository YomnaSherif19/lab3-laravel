<?php
use App\HTTP\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show')->where('id,[0-9]+');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/{id}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');





Route::get('/posts',[PostsController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostsController::class,'create'])->name('posts.create');
Route::get('/posts/{id}',[PostsController::class,'show'])->name('posts.show');
Route::post('/posts',[PostsController::class,'store'])->name('posts.store');
Route::get('/posts/{id}/edit',[PostsController::class,'edit'])->name('posts.edit');
Route::put('/posts/{id}',[PostsController::class,'update'])->name('posts.update');
Route::delete('/posts/{id}',[PostsController::class,'destroy'])->name('posts.destroy');
Route::get('/posts/restore/{id}',[PostsController::class,'index'])->name('posts.restore');
Route::fallback(
function()
{
return"invalid";
}
);
