<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Redirections
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/createpost', function () {
    return view('createpost');
})->name('createpost');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/allposts', function () {
    return view('allposts');
})->name('allposts');



Route::get('/', function () {
    $posts=[];
         if(auth()->check()){
        $posts = auth()->user()->posts()->latest()->get();
        //$posts = Post::all();
    }
         return view('home',['posts'=>$posts]);
   
});

Route::get('/allposts', function () {
    $posts=[];
         if(auth()->check()){
       
    $posts = Post::all();
    }
         return view('allposts',['posts'=>$posts]);
   
});



//UserControllers
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

//PostControllers
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'editPost']);
Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);