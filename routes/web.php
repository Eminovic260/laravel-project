<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/", function () {
    return ('Homepage');
});


route::get('/product', function () {
    return ("Liste des produits");
});


route::get('/product/{id}', function () {
    return ("Fiche du produit {id}");
});


route::get('/cart', function () {
    return ("Panier");
});
