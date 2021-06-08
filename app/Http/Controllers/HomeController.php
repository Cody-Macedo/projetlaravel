<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home(){
        $livres = Livre::all();
        return view("accueil.home", ["livres" => $livres]);
    }
}
