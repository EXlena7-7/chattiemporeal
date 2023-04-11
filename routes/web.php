<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ChatController;
// use App\Events\ChatEvent;

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

use App\system\btn;

// Route::get('/', function () {
//     $link = new btn;
    //return Btn::a('about', 'Acerca de ...'); //Facades
    // return view('welcome');
    //return app('btn')->a('about'); //Service Provider
    //return app(App\system\btn::class)->a('about','Acerca de ...'); //Directa
    //return $link->a('about','Acerca de ...');
// });

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/chat', function () {
//event( new ChatEvent)
// return 'Live';
// });

Route::get('/chat' , [ChatController::class, 'chat']);

Route::post('/send' , [ChatController::class, 'send']);

// Route::get('/empleado', function () {
//     return view('empleado.index');
// });


// Router::get('/register', function (){
//     return view('auth.register');
// });
// Route::get('/empleado/create',[EmpleadoController::class,'create']);

Route::resource('empleado',EmpleadoController::class)->middleware('auth');

//['register'=>false, 'reset'=>false]
Auth::routes();

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::prefix(['middleware' => 'auth'], function (){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');

});


