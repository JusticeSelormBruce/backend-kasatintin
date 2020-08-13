<?php

use App\Category;
use App\Contact;
use App\Http\Resources\CategoriesResource;
use App\Post;
use App\Sbscription;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
    $new_post = Post::with(['images', 'videos'])->take(1)->get()->all();
    return view('welcome', compact('new_post'));
});
Auth::routes(['verify' => true]);
// Auth::routes();


Route::get('/category/{id}/posts', function ($id) {
    $categoryPosts = Post::with(['comments', 'images', 'videos', 'tags', 'author'])->where('categories_id', $id)->paginate();
    $category = Category::find($id);
    return view('category_posts', compact('categoryPosts', 'category'));
});

Route::get('post_show/{id}', function ($id) {
    $post =  Post::findOrFail($id);
    return view('post', compact('post'));
});
Route::post('/search', function (Request $request) {
    $post_main =  Post::where('title', 'LIKE', '%' . $request->search . '%')->orWhere('content', 'LIKE', '%' . $request->search . '%');
    $post = $post_main->paginate();
    $post->withPath('next/');
    return view('search', compact('post', 'post_main'));
});
Route::get('/next', function (Request $request) {
    $post_main =    Post::where('title', 'LIKE', '%' . $request->search . '%');
    $post = $post_main->paginate();
    return view('search_next', compact('post', 'post_main'));
});
Route::post('/post_comment', 'CommentController@store')->middleware('auth');
Route::post('/vote', 'PollsController@vote');
Route::post('subscribe', function () {
    $email = request()->validate(
        [
            'email' => "required|string|email"
        ]
    );
    Sbscription::create($email);
    return back()->with('msg', 'Subscription was successful, Thank you!!');
});
Route::post('contact', function (Request $request) {
    Contact::create($request->all());
    return back()->with('msg', 'Message Submited  successfully, Thank you!!');
});
Route::middleware(['auth', 'admin'])->group(
    function () {

        Route::get('/home', 'HomeController@index')->name('home');
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
        Route::get('polls-index', 'PollsController@index')->name('polls');
        Route::post('store-poll', 'PollsController@store');
    }
);
