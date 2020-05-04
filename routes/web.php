<?php
use Illuminate\Support\Facades\Auth;
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

 Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'

    ];

    if (! array_key_exists($post, $posts)) {
        abort(404, 'sorry that post was not found');
    }

    return view('post', [
        'post' => $posts[$post],
    ]);

 });

 Route::get('/', function () {
    return view('welcome');
 });


Route::get('/about', function () {
    return view ('about', [
    'articles' => App\Article::latest()->get()

    ]);

    Route::get('/auth/login' , function () {
        return view ('login');
        });


// Route::get('/articles/create' , function() {
//    dd('articles/$create');
//    return view ('create');
  });

Route::get('/contact', function () {
    return view('contact');
    })->name('welcome')->middleware('auth');


Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('message/{mail}',  'MessageController@create.php');
Route::post('message/{mail}', 'MessageController@store.php');

//Route::post('users/{id}', function ($id) {
 //});('/message/mail', 'MessageController@index');

// Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
