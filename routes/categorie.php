<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/categories/list', [CategorieController::class, "list"]);
Route::match(['post', 'get'], '/categories/form', [CategorieController::class, "add"]);
Route::match(['post', 'get'], '/categories/form/{id}', [CategorieController::class, "update"]);
Route::match(['post', 'get'], '/categories/confirm/{id}', [CategorieController::class, "delete"]);

/*
Route::get('/livres/list', [LivreController::class, "list"]);
Route::match(['post', 'get'], '/livres/form', [LivreController::class, "add"]);
Route::match(['post', 'get'], '/livres/form/{id}', [LivreController::class, "update"]);
Route::match(['post', 'get'], '/livres/confirm/{id}', [LivreController::class, "delete"]);
Route::match(['post', 'get'], '/livres/search', [LivreController::class, "search"]);
*/

?>
