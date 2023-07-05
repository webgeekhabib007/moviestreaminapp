<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;

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


Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::post('/register', function (Illuminate\Http\Request $request) {
    // Validate the registration data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    // Create a new user record in the database
    $user = new User;
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = bcrypt($validatedData['password']);
    $user->save();

    // Redirect to the dashboard page after successful registration
    return redirect('/dashboard');
})->name('register');








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/movies', function () {
        return view('movies');
    });

    Route::get('/movie/{name}', function ($name) {
        return view('movieshow', ['name' => $name]);
    });

    Route::get('/tvseries', function () {
        return view('tvseries');
    });

    Route::get('/my-account', function () {
        return view('my-account');
    });

    Route::post('/my-account', function () {
        return view('my-account');
    });
});
