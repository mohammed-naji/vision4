<?php

use App\Http\Controllers\TestController;

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