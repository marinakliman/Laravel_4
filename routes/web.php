<?php

use App\Http\Controllers\FormProcessor;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//hw2
Route::get('/userform', [FormProcessor::class, 'index'])->name('user-form');
Route::post('/store_form', [FormProcessor::class, 'store']);

//hw3
Route::get('/test_database', function () {
    $newUser = 'newUser2';
    $employee = new Employee();
    $employee->first_name = $newUser;
    $employee->save();
    echo "Добавлен пользователь $newUser.";
});

//hw4
Route::get('/', function () {
    $user = [
        'name' => 'Иван',
        'age' => 16,
        'position' => 'женат',
        'address' => 'Москва'
    ];
    return view(
        'home',
        [
            'title' => 'main',
            'style' => "css/style.css",
            'user' => $user
        ]
    );
});

Route::get('/contacts', function () {
    $user = [
        'address' => 'Москва',
        'post_code' => 111111,
        'email' => '',
        'phone' => 71112223344
    ];
    return view(
        'contacts',
        [
            'title' => 'contacts',
            'style' => "css/style.css",
            'user' => $user
        ]
    );
});
