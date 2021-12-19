<?php

// Route::method('url', action);

// Route::get('url', function() {});
// Route::post('url', function() {});
// Route::put('url', function() {});
// Route::patch('url', function() {});
// Route::delete('url', function() {});

Route::get('/', function() {
    return 'Homepage';
});

Route::get('about-us', function() {
    return 'About page';
});

Route::get('contact', function() {
    return 'Contact Page<br><a href="/about-us">About US</a>';
});