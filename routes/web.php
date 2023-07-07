<?php

use App\Http\Controllers\BasisPengetahuanController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\pengguna\BiodataController;
use App\Http\Controllers\pengguna\Dashboard;
use App\Http\Controllers\pengguna\DiagnosaController as PenggunaDiagnosaController;
use App\Http\Controllers\pengguna\PenyakitController as PenggunaPenyakitController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Biodata;
use App\Http\Middleware\Diagnosa;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
    Route::resource('dashboard/admin/gejala', GejalaController::class, ['as' => 'admin'])->except('show');
    Route::resource('dashboard/admin/penyakit', PenyakitController::class, ['as' => 'admin']);
    Route::resource('dashboard/admin/bp', BasisPengetahuanController::class, ['as' => 'admin'])->except('show');
    Route::get('dashboard/admin/diagnosa', [DiagnosaController::class, 'index'])->name('admin.diagnosa.index');
});

Route::get('/', [Dashboard::class, 'index'])->name('pengguna.dashboard');
Route::get('biodata', [BiodataController::class, 'index'])->name('pengguna.biodata.index')->middleware(Biodata::class);
Route::post('biodata', [BiodataController::class, 'store'])->name('pengguna.biodata.store');
Route::get('diagnosa', [PenggunaDiagnosaController::class, 'index'])->name('pengguna.diagnosa.index')->middleware(Diagnosa::class);
Route::get('sehat', [PenggunaDiagnosaController::class, 'sehat'])->name('pengguna.diagnosa.sehat')->middleware(Diagnosa::class);
Route::get('diagnosa/reset', [PenggunaDiagnosaController::class, 'reset'])->name('pengguna.diagnosa.reset')->middleware(Diagnosa::class);
Route::post('diagnosa/analisa', [PenggunaDiagnosaController::class, 'analisa'])->name('pengguna.diagnosa.analisa')->middleware(Diagnosa::class);
Route::get('penyakit', [PenggunaPenyakitController::class, 'index'])->name('pengguna.penyakit.index');
Route::get('penyakit/{penyakit:slug}', [PenggunaPenyakitController::class, 'show'])->name('pengguna.penyakit.show');

require __DIR__ . '/auth.php';
