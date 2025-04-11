<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Admin;
use App\Http\Controllers\SitemapController;

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
//Español
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/404', [App\Http\Controllers\HomeController::class, 'notfound'])->name('notfound');
// Route::middleware(['restrict.ip'])->group(function () {
    Route::get('/', function () {return view('admin.index');})->name('administrador');
    Route::get('/administrador/support', function () {return view('admin.support');})->name('support');
    Auth::routes();
    Route::get('/administrador', function () {return view('admin.index');})->name('administrador');
    Route::get('/csrf-token', function () {
        return response()->json(['token' => csrf_token()]);
    });
    Route::get('/images/Visa_T_por_coyote.mp4', function () { return view('landing.customerservice');});
    Route::group(['prefix' => 'administrador', 'middleware' => 'auth'], function () {
        Route::get('/api/videoprincipal/{idvideo}', [App\Http\Controllers\Admin\AdminUserController::class, 'internavideo'])->name('internavideo');
        Route::middleware(['checkRole:Admin,Capacitador'])->group(function () {
            Route::get('/usuarios', [App\Http\Controllers\Admin\AdminUserController::class, 'users'])->name('usuarios');
            Route::get('/register', function () { return view('auth.register');})->name('register');
            Route::post('/create', [App\Http\Controllers\Admin\AdminUserController::class, 'create'])->name('new-user');
            Route::delete('/usuarios/{user}', [App\Http\Controllers\Admin\AdminUserController::class, 'eliminar'])->name('eliminar.usuario');
            Route::get('/usuario/{user}/editar', [App\Http\Controllers\Admin\AdminUserController::class, 'editar'])->name('usuario.editar');
            Route::post('/usuario/{usuario}', [App\Http\Controllers\Admin\AdminUserController::class, 'update'])->name('user.actualizar');
        });
        Route::get('/dashboard', [App\Http\Controllers\Admin\AdminUserController::class, 'dashboard'])->name('dashboard');
        Route::get('/dashboard/{url}', [App\Http\Controllers\Admin\AdminUserController::class, 'capacitacion'])->name('capacitacion');
        // Route::get('/interna-video', [App\Http\Controllers\Admin\AdminUserController::class, 'internavideo'])->name('internavideo');
        Route::get('/secure-video', [App\Http\Controllers\Admin\AdminUserController::class, 'streamVideo'])->name('secure.video');
        // Route::get('/secure-video', function () {
        //     return response()->file(public_path('images/Visa_T_por_coyote.mp4'));
        // });
        //Rutas Perfil
        Route::get('/perfil', [App\Http\Controllers\Admin\PerfilController::class, 'index'])->name('perfil');
        Route::get('/perfil/{perfil}/editar', [App\Http\Controllers\Admin\PerfilController::class, 'editar'])->name('perfil.editar');
        Route::put('/perfil/{perfil}', [App\Http\Controllers\Admin\PerfilController::class, 'actualizar'])->name('perfil.actualizar');
    });
// });
Route::get('/denuncia-laboral', function () { return view('denuncialaboral');});
Route::post('/api/upload', [App\Http\Controllers\DenunciaController::class, 'upload']);
Route::post('/denuncia', [App\Http\Controllers\DenunciaController::class, 'create'])->name('denuncia.create');