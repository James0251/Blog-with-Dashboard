<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Авторизация
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('table-list', function () {
        return view('pages.table_list');
    })->name('table');

    Route::get('typography', function () {
        return view('pages.typography');
    })->name('typography');

    Route::get('icons', function () {
        return view('pages.icons');
    })->name('icons');

    Route::get('map', function () {
        return view('pages.map');
    })->name('map');

    Route::get('notifications', function () {
        return view('pages.notifications');
    })->name('notifications');

    Route::get('rtl-support', function () {
        return view('pages.language');
    })->name('language');

    Route::get('upgrade', function () {
        return view('pages.upgrade');
    })->name('upgrade');
});

Route::group(['middleware' => 'role:admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;
});

Route::group(['middleware' => 'role:user'], function() {
    Route::resource('user', 'UserController', ['except' => ['show']])->middleware('auth');;
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

/*
 * Блог: все посты, посты категории, посты тега, страница поста
 */
Route::group([
    'as' => 'blog.', // имя маршрута, например blog.index
    'prefix' => 'blog', // префикс маршрута, например blog/index
], function () {
    // главная страница (все посты)
    Route::get('index', 'BlogController@index')
        ->name('index');
    // категория блога (посты категории)
    Route::get('category/{category:slug}', 'BlogController@category')
        ->name('category');
    // тег блога (посты с этим тегом)
    Route::get('tag/{tag:slug}', 'BlogController@tag')
        ->name('tag');
    // страница поста блога
    Route::get('post/{post:slug}', 'BlogController@post')
        ->name('post');
});

