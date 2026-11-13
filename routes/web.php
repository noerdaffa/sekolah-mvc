<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/siswa', [
    SiswaController::class, 'index'
]);

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {

$artikel = [

[
"judul" => "Belajar Laravel",
"isi" => "Laravel mudah dipelajari"
],

[
"judul" => "Belajar Blade",
"isi" => "Blade membuat tampilan lebih rapi"
]

];

return view('blog', compact('artikel'));

});


Route::get('/contact', function () {
    return view('contact');
});
