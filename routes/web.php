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
Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

Route::get('/projects', 'ProjectsController@index');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/create', 'ProjectsController@create');

// Route::get('/', function () {
//     $tasks = [
//         'Go to the store',
//         'Go to the market',
//         'Go to work',
//     ];

//     return view(
//         'welcome',
//         ['tasks' => $tasks,
//         'foo' => request('title'),
//         'test' => '<script>alert("Hello");</script>', ]
//     );

//     //First alternative for above code
//     $tasks = [
//         'Go to the store',
//         'Go to the market',
//         'Go to work',
//     ];

//     $foo = 'Foobar';

//     return view('welcome')->withTasks($tasks)->withFoo($foo);

//     //Second alternative for above code

//     return view('welcome')->withTasks([
//         'Go to the store',
//         'Go to the market',
//         'Go to work',
//     ])->withFoo('Foobar');

//     //Third alternative for above code

//     return view('welcome')->with([
//        'foo' => 'Foobar',
//        'tasks' => [
//         'Go to the store',
//         'Go to the market',
//         'Go to work',
//        ],
//     ]);
// });

// Route::get('contact', function () {
//     return view('contact');
// });

// Route::get('about', function () {
//     return view('about');
// });
