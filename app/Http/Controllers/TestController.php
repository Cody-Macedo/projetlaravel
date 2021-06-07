<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TestController extends Controller
{
    //
    public function index()
    {
        return view("form");
    }

    public function form(Request $request)
    {
        // la fonction dd() permet de faire un dump and die
        //dd($request);

        if ($request->isMethod("POST")) {
            $request->validate([
                "nom" => "required",
                "prenom" => "required"
            ]);
            $prenom = $request->input("prenom");
            $nom = $request->input("nom");
            return view("form.formulaire", ["nom" => $nom, "prenom" => $prenom]);
        }

        return view("form.formulaire");
    }

    public function calcul(Request $request)
    {
        // la fonction dd() permet de faire un dump and die
        //dd($request);

        if ($request->isMethod("POST")) {

            $nb1 = $request->input("nb1");
            $nb2 = $request->input("nb2");
            return view("form.calcul", ["nb1" => $nb1, "nb2" => $nb2]);
        }

        return view("form.calcul");
    }

//    public function locale(Request $request, $locale)
//    {
//        $lang = $request->input("lang");
//        if (! in_array($lang, ['en', 'fr'])) {
//            abort(400);
//        }
//        if ($request->isMethod("POST")) {
//            App::setLocale($lang);
//        }
//    }

}
