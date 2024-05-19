<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Post;

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

Route::get('/', [ArticleController::class, 'index'])->name('article.list');
Route::get('/create', [ArticleController::class, 'index'])->name('article.create');
Route::get('/articles/{id}',  [ArticleController::class, 'create'])->name('article.show');

Route::get('/test', function(){
    $posts = Post::all();
    foreach($posts as $post){
        return $post->title;
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
