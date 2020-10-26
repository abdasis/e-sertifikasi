<?php

use App\Http\Livewire\Beranda;
use App\Http\Livewire\Kontak;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Service;
use App\Http\Livewire\ValidasiSertifikasi;
use App\Http\Livewire\JenisSertifikasi;
use App\Http\Livewire\Training;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Beranda::class)->name('beranda');
Route::get('profile', Profile::class)->name('profile');
Route::get('training', Training::class)->name('training');
Route::get('validasi', ValidasiSertifikasi::class)->name('validasi');
Route::get('service', Service::class)->name('service');
Route::get('jenis-sertifikasi', JenisSertifikasi::class)->name('jenis-sertifikasi');
Route::get('contact-us', Kontak::class)->name('contact-us');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
