<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/profil/personal', [ProfilController::class, "personal"])->middleware('auth');;


?>
