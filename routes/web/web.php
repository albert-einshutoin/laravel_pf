<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts/{post}', 'PostController@show')->name('post');
Route::get('/users/{user}', 'UserController@profile')->name('user');

Route::middleware('auth')->group(function() {

	Route::get('/admin', 'AdminsController@index')->name('admin.index');

	Route::get('/admin/comments', 'CommentsController@index')->name('admin.comments');
	Route::post('/admin/comments', 'CommentsController@store')->name('admin.comments.store');
	Route::delete('/admin/comments/{comment}/destroy', 'CommentsController@destroy')->name('comment.destroy');

#	Route::get('/admin/comment/replies', 'CommentRepliesController@index')->name('');
});;
