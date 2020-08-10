<?php

use App\Category;
use App\Http\Resources\CategoriesResource;
use App\Post;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\all;

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
Auth::routes(['verify' => true]);
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/{id}/posts', function ($id) {
    $categoryPosts = Post::with(['comments', 'images', 'videos', 'tags', 'author'])->where('categories_id', $id)->paginate();
    $category = Category::find($id);
    return view('category_posts', compact('categoryPosts', 'category'));
});

Route::get('post_show/{id}',function($id){
    $post =  Post::findOrFail($id);
    return view('post', compact('post'));
});
Route::middleware(['auth'])->group(
    function () {

        Route::get('/category', 'CategoryController@index')->name('categories.index');
        Route::get('/category/{id}', 'CategoryController@show');
        Route::post('/category/store', 'CategoryController@store')->name('category.store');

        Route::get('/comment', 'CommentController@index')->name('comments.index');;
        Route::get('/comment/{id}', 'CommentController@show');


        Route::get('/tag', 'TagController@index')->name('tags.index');;
        Route::get('/tag/{id}', 'TagController@show');
        Route::post('/tag/store', 'TagController@store')->name('tag.store');

        Route::get('post-index', 'PostController@index')->name('posts.index');
        Route::post('post-store', 'PostController@store')->name('posts.store');
        Route::get('post/show/{id}', 'PostController@show')->name('post.show');

        Route::get('/users-index', 'UserController@index')->name('users.index');
    }
);
