<?php

use App\Http\Controllers\{
    ProfileController,
    ProjectController,
    ServiceController,
    PostController,
    ContactController,
    SettingController
};
use Illuminate\Support\Facades\Route;
use App\Models\Project;

/*
|--------------------------------------------------------------------------
| ROUTE FRONTEND (PUBLIC)
|--------------------------------------------------------------------------
|
| Menampilkan halaman depan (home) menggunakan template Archi.
| Tidak memerlukan login dan otomatis menampilkan data Project.
|
*/

Route::get('/', function () {
    // Ambil maksimal 6 project terbaru untuk ditampilkan di halaman utama
    $projects = Project::latest()->take(6)->get();

    // Tampilkan view utama frontend (resources/views/frontend/index.blade.php)
    return view('frontend.index', compact('projects'));
})->name('home');



/*
|--------------------------------------------------------------------------
| ROUTE DASHBOARD (BREEZE)
|--------------------------------------------------------------------------
|
| Setelah login, user diarahkan ke dashboard admin.
|
*/

Route::get('/dashboard', function () {
    return redirect('/admin/projects');
})->middleware(['auth', 'verified'])->name('dashboard');



/*
|--------------------------------------------------------------------------
| ROUTE ADMIN (HANYA UNTUK LOGIN)
|--------------------------------------------------------------------------
|
| Semua fitur CRUD admin seperti projects, services, posts, contacts, settings.
|
*/

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('projects', ProjectController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('posts', PostController::class);
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);

    // Settings (manual route agar tidak error parameter)
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');
});



/*
|--------------------------------------------------------------------------
| ROUTE PROFIL BREEZE
|--------------------------------------------------------------------------
|
| Default route dari Breeze untuk edit profil user.
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



/*
|--------------------------------------------------------------------------
| AUTH ROUTES (LOGIN, REGISTER, LOGOUT)
|--------------------------------------------------------------------------
|
| Diambil langsung dari Breeze.
|
*/

require __DIR__.'/auth.php';
