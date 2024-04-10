<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Jean";

    $arr = [10,20,30,40,50];

    $nomes = ["Jean", "Maria", "João", "Saulo"];

    return view('welcome', ['nome' => $nome, 'arr'=> $arr, 'nomes'=> $nomes]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

Route::get('/produto/{id}', function ($id) {
    return view('product', ['id' => $id]);
});
