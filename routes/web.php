<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Models\service;

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
    $service=service::all();
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'services'=>service::all()->map(function($serv){
            return[
                'id'=>$serv->id,
                'nombre'=>$serv->nombre,
                'descripcion'=>$serv->descripcion,
                'foto'=>asset('storage/'.$serv->foto)
            ];
            })

    ]);
});




Route::get('/dashboard', function () {
    $service=service::all();
    return Inertia::render('Dashboard', ['services'=>service::all()->map(function($serv){
        return[
            'id'=>$serv->id,
            'nombre'=>$serv->nombre,
            'descripcion'=>$serv->descripcion,
            'foto'=>asset('storage/'.$serv->foto)
        ];
        })
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('ShowService/{id}',[ ServiceController::class, 'show'])->name('service.show');
Route::post('/contact', ContactController::class)->name('contact');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/services/{service}', [ServiceController::class,'update'])->name('service.update');



});


Route::middleware('auth','role:admin')->group(function () {

    Route::resource('contracts', ContractController::class);



});


Route::middleware('auth','role:secretaria')->group(function () {

    Route::resource('services', ServiceController::class);
    Route::resource('clients', ClientController::class);



});





require __DIR__.'/auth.php';
