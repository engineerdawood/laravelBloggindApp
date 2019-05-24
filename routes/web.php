<?php

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

Auth::routes();

Route::get('/test', function () {
    return App\Profile::find(1)->user;
});



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/category/create', 'CategoriesController@create')->name('category.create');
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::post('/category/store', 'CategoriesController@store')->name('category.store');
    Route::get('/category/edit/{id}' , 'CategoriesController@edit')->name('category.edit');
    Route::get('/category/delete/{id}' , 'CategoriesController@destroy')->name('category.delete');
    Route::post('/category/update/{id}' , 'CategoriesController@update')->name('category.update');


    Route::get  ('/posts',             'PostsController@index')   ->name('posts');
    Route::get  ('/post/create',       'PostsController@create')  ->name('post.create');
    Route::post ('/post/store',        'PostsController@store')   ->name('post.store');
    Route::get  ('/post/delete/{id}',  'PostsController@destroy') ->name('post.delete');
    Route::get  ('/post/trashed/',     'PostsController@trashed') ->name('post.trashed');
    Route::get  ('/post/kill/{id}',    'PostsController@kill')    ->name('post.kill');
    Route::get  ('/post/restore/{id}', 'PostsController@restore') ->name('post.restore');
    Route::get  ('/post/edit/{id}',    'PostsController@edit')    ->name('post.edit');
    Route::post ('/post/update/{id}',  'PostsController@update')  ->name('post.update');


    Route::get  ('/tags',             'TagsController@index')   ->name('tags');
    Route::post ('/tag/update/{id}', 'TagsController@update')  ->name('tag.update');
    Route::get  ('/tag/delete/{id}', 'TagsController@destroy') ->name('tag.delete');
    Route::get  ('/tag/create',       'TagsController@create')  ->name('tag.create');
    Route::post ('/tag/store',        'TagsController@store')   ->name('tag.store');
    Route::get  ('/tag/edit/{id}',   'TagsController@edit')    ->name('tag.edit');

    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/user/create' , 'UsersController@create')->name('user.create');
    Route::post('/user/store' , 'UsersController@store')->name('user.store');
    Route::get('/user/make-user/{id}' , 'UsersController@make_user')->name('user.make.user');
    Route::get('/user/make-admin/{id}', 'UsersController@make_admin')->name('user.make.admin');
    // Route::get('/user/edit', 'UsersController@edit')->name('user.edit');

    Route::get('/profile/show' , 'ProfilesController@show')->name('profile.show');
    Route::get('/profile/edit' , 'ProfilesController@edit')->name('profile.edit');
    Route::post('/profile/update', 'ProfilesController@update')->name('profile.update');

    Route::get('/setting/edit' , 'SettingsController@edit')->name('setting.edit');
    Route::post('/setting/update' , 'SettingsController@update')->name('setting.store');


});


Route::get('/front/home', 'Blog\HomeController@index');

Route::get('/front/category', function () {
    return view('front.category');
});

Route::get('/front/single', function () {
    return view('front.single');
});
