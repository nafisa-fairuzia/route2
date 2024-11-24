<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'profil'], function () {
    Route::get('/hobi', function () {
        return "
            <h1>Hobi</h1>
            <ul>
                <li>Menggambar</li>
                <li>Merajut</li>
                <li>Melukis</li>
            </ul>
        ";
    });
    Route::get('/tanggal-lahir', function () {
        return "
            <h1>Tanggal Lahir</h1>
            <p>Saya lahir pada tanggal: 29 Agustus 2007</p>
        ";
    });
    Route::get('/pendidikan', function () {
        return "
            <h1>Pendidikan</h1>
            <ul>
                <li>SMKN 08 JEMBER</li>
                <li>Jurusan Rekayasa Perangkat Lunak</li>
            </ul>
        ";
    });
});

    
