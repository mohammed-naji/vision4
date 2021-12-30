<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\Site4Controller;
use App\Http\Controllers\Site5Controller;

Route::get('test', [TestController::class, 'index']);
// Route::get('test', 'TestController@index');

// Route::method('url', action);

// Route::get('url', function() {});
// Route::post('url', function() {});
// Route::put('url', function() {});
// Route::patch('url', function() {});
// Route::delete('url', function() {});


// Route::get('about', function() {
//     return 'about us';
// });

// Route::get('user/profile', function() {
//     return 'user profile page';
// });


// Route::get('news', function() {
//     return 'News';
// });

// Route::get('news/{id}', function($id) {
//     return 'News ' . $id;
// });
Route::get('news/{id?}', function($id = null) {
    return 'News ' . $id;
})->where('id', '[0-9]+');


Route::get('post/{name}/comments', function($name) {
    return $name . ' Comments';
});


Route::get('user/{name}', function($abc) {
    return 'welcome ' . $abc;
});

// Route::group([
//     'prefix' => 'admin'
// ], function() {

// })

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/about-me', function() {
    return view('about');
})->name('about');

Route::get('contact', function() {
    return view('contact');
})->name('contact');

Route::get('post/{name}/comments/{id}', function() {})->name('posts');

Route::prefix('site2')->name('site2.')->group(function() {
    Route::get('/', [Site2Controller::class, 'home'])->name('home');
    Route::get('/about', [Site2Controller::class, 'about'])->name('about');
    // Route::get('/services', [Site2Controller::class, 'services'])->name('services');
    Route::get('/services/{name?}', [Site2Controller::class, 'single_service'])->name('single_service');
    Route::get('/contact', [Site2Controller::class, 'contact'])->name('contact');
});


Route::prefix('site3')->name('site3.')->group(function() {
    Route::get('/', [Site3Controller::class, 'index'])->name('index');
    Route::get('/about', [Site3Controller::class, 'about'])->name('about');
    Route::get('/services', [Site3Controller::class, 'services'])->name('services');
    Route::get('/contact', [Site3Controller::class, 'contact'])->name('contact');
});

Route::get('site4/home', [Site4Controller::class, 'index']);


Route::prefix('site5')->name('site5.')->group(function() {
    Route::get('/', [Site5Controller::class, 'index'])->name('index');
    Route::get('/about', [Site5Controller::class, 'about'])->name('about');
    Route::get('/post', [Site5Controller::class, 'post'])->name('post');
    Route::get('/contact', [Site5Controller::class, 'contact'])->name('contact');
});


Route::get('form1', [FormController::class, 'form1']);
Route::post('form1-data', [FormController::class, 'form1Submit'])->name('form1Submit');
