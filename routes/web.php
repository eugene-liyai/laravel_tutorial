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
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', function ($id) {
    // dumpy data
    if ($id == 1) {
        $post = [
            'title' => 'Learn new stuff',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit libero, tincidunt ac lorem ac, condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit'
        ];
    } else {
        $post = [
            'title' => 'Learn more stuff',
            'content' => 'Condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit libero, tincidunt ac lorem ac, '
        ];
    }
    return view('blog.post');
})->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function(){

    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');

    Route::get('edit/{id}', function ($id) {
        if ($id == 1) {
            $post = [
                'title' => 'Edit new stuff',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit libero, tincidunt ac lorem ac, condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit'
            ];
        } else {
            $post = [
                'title' => 'Edit more stuff',
                'content' => 'Condimentum varius augue. Integer accumsan pulvinar risus et congue. Nulla maximus libero nunc, at feugiat massa rutrum quis. Etiam eu euismod eros. Nullam mauris elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit libero, tincidunt ac lorem ac, '
            ];
        }
        return view('admin.edit');
    })->name('admin.edit');

    Route::post('create', function () {
        return 'It works!!';
    })->name('admin.create');

    Route::post('edit', function () {
        return 'It works!!';
    })->name('admin.update');
});
