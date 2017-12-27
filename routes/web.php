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

Route::get('{provider}/auth', [
    'uses' => 'SocialsController@auth',
    'as' => 'social.auth'
]);


Route::get('/{provider}/redirect', [
    'uses' => 'SocialsController@callback',
    'as' => 'social.callback'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('watch-discussion/watch/{user_id}/{discussion_id}', [
        'uses' => 'WatchDiscussionController@watch',
        'as' => 'discussion.watch'
    ]);

    Route::get('watch-discussion/unwatch/{user_id}/{discussion_id}', [
        'uses' => 'WatchDiscussionController@unwatch',
        'as' => 'discussion.unwatch'
    ]);

    Route::get('discussion/show/{slug}', [
        'uses' => 'DiscussionController@show',
        'as' => 'discussion.show'
    ]);

    Route::get('discussion/show/channel/{id}', [
        'uses' => 'DiscussionController@showByChannelId',
        'as' => 'discussion.channel.show'
    ]);

    Route::get('discussion/create', [
        'uses' => 'DiscussionController@create',
        'as' => 'discussion.create'
    ]);

    Route::post('discussion/store', [
        'uses' => 'DiscussionController@store',
        'as' => 'discussion.store'
    ]);

    Route::post('reply/store', [
        'uses' => 'RepliesController@store',
        'as' => 'reply.store'
    ]);

    Route::get('like/store/{user_id}/{reply_id}', [
        'uses' => 'LikesController@store',
        'as' => 'like.store'
    ]);

    Route::get('like/destroy/{user_id}/{reply_id}', [
        'uses' => 'LikesController@destroy',
        'as' => 'like.destroy'
    ]);

    Route::resource('channel', 'ChannelController');

});
