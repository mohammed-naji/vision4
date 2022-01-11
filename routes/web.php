<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\Site4Controller;
use App\Http\Controllers\Site5Controller;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

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



Route::get('form2', [FormController::class, 'form2'])->name('form2');
Route::post('form2', [FormController::class, 'form2Submit']);


Route::get('form4', [FormController::class, 'form4'])->name('form4');
Route::post('form4', [FormController::class, 'form4Submit']);

Route::get('form5', [FormController::class, 'form5'])->name('form5');
Route::post('form5', [FormController::class, 'form5Submit']);


Route::get('add-course', function() {

    // add data to courses table

    // sql = INSERT INTO table_name (col_name, ...) VALUES ('col_val',...)

    // DELETE FROM courses WHERE id = 3 or 1 = 1

    // DB::statement('INSERT INTO courses (title, price) VALUES (?, ?)', ['Course Name', 200]);

    // DB::table('courses')->insert([
    //     'title' => 'Another Title',
    //     'price' => 250
    // ]);

    Course::create([
        'title' => 'Third Course',
        'price' => 300
    ]);

    return 'Done';

});






// // بيعرض كل البيانات من قواعد البيانات بناء علي اسم الجدول
// Route::get('courses', [CoursesController::class, 'index'])->name('courses.index');

// // بيعرض صفحة الادخال لعنصر جديد
// Route::get('courses/create', [CoursesController::class, 'create'])->name('courses.create');

// // بياخد البيانات من الفورم وبيضيفها على قواعد البيانات
// Route::post('courses', [CoursesController::class, 'store'])->name('courses.store');

// // عرض تفاصيل عنصر واحد فقط
// Route::get('courses/{course}', [CoursesController::class, 'show'])->name('courses.show');

// // عرض صفحة التعديل لعنصر واحد فقط
// Route::get('courses/{course}/edit', [CoursesController::class, 'edit'])->name('courses.edit');

// // اخذ البيانات الجديدة المتعلقة بالعنصر المراد تعديله
// Route::put('courses/{course}', [CoursesController::class, 'update'])->name('courses.update');

// // حذف عنصر واحد فقط
// Route::delete('courses/{course}', [CoursesController::class, 'destroy'])->name('courses.destroy');

Route::resource('courses', CoursesController::class);
