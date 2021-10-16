<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 100;
});

// Route::get('laravel/framework', function () {
//     return 'hallo laravel';
// });

// // Parameter Wajib
// Route::get('/nama-framework/{nama}/{tahun}', function ($nama, $tahun) {
//     return 'Nama Framework yang dimasukan adalah: ' . $nama .
//         '<br>Tahun <b>Rilis</b> : ' . $tahun;
// });


// // Optional Parameter
// Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'Wajib Diisi') {
//     return 'Nama Saya Adalah : ' . $nama;
// });

// // url : hitung luas segitiga
// // optional param : alas, tinggi
// // output : hasil luas segitiga nya :
// // alas = null : 1, tinggi = null : 1
// Route::get('/luas-segitiga/{alas?}/{tinggi?}', function ($alas = 1, $tinggi = 1) {
//     return 'Luas Segitiga : ' . ($alas * $tinggi) * 0.5;
// });

// // Route Group
// Route::get('jurusan/kelas/{namaKelas}', function ($namaKelas) {
//     return $namaKelas;
// });

// Route::group(['prefix'=>'jurusan'], function(){
//     Route::get('/', function () {
//         return 'berhasil';
//     });
//     Route::get('/kelas/{namaKelas}', function ($namaKelas) {
//         return $namaKelas;
//     });
//     Route::get('/wali-kelas/{nama}', function ($nama) {
//         return $nama;
//     });
// });

// Route::get('data-siswa', [DataSiswaController::class, 'datasiswa']);
// Route::get('data-siswi', [DataSiswaController::class, 'datasiswi']);
// Route::get('nama/{nama?}', [DataSiswaController::class, 'nama']);

// Route::resource('user', UserController::class);

// // https://bit.ly/laravel-pertemuan-3


// Route::get('profile', function () {
//     return view('profile.index');
// });

// // Route::get('profile/{nama}', function ($nama) {
// //     return view('profile.detail', ['nama_user' => $nama]);
// // });

// Route::get('album', function () {
//     return view('album');
// });

Route::resource('user', UserController::class);
Route::resource('book', BookController::class);
