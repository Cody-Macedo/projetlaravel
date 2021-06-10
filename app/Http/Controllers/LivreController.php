<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function list()
    {
        $livres = Livre::all();
        return view("livres.list", ["livres" => $livres]);
    }

    public function add(Request $request)
    {

        if ($request->isMethod("POST")) {
            $request->validate([
                "titre" => "required",
                "auteur" => "required",
                "category" => "required"
            ]);
            $titre = $request->input("titre");
            $auteur = $request->input("auteur");
            $category = $request->input("category");

            $livre = new Livre();
            $livre->titre = $titre;
            $livre->auteur = $auteur;
            $livre->categories_id = $category;
            $livre->save();

            return redirect("/livres/list")->with('status', 'Livre ajouté!');
        }
        $categories = Categorie::all();
        return view("livres.form", ['categories' => $categories]);
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $livre = Livre::find($id);
        if(empty($livre)){
            abort("418");
        }
        if ($request->isMethod("POST")) {
            $request->validate([
                "titre" => "required",
                "auteur" => "required",
                "category" => "required"
            ]);
            $titre = $request->input("titre");
            $auteur = $request->input("auteur");
            $category = $request->input("category");

            $livre->titre = $titre;
            $livre->auteur = $auteur;
            $livre->categories_id = $category;
            $livre->save();

            return redirect("/livres/list")->with('status', 'Livre modifié!');
        }
        $categories = Categorie::all();
        return view("livres.form", ['categories' => $categories ,"livre" => $livre]);
    }

    public function delete(Request $request)
    {
        $id = $request->route('id');
        $livre = Livre::find($id);

        if ($request->isMethod("POST")) {
            $livre->delete();
            return redirect("/livres/list")->with('status', 'Livre supprimé!');
        }
        return view("livres.confirm", ["livre" => $livre]);
    }


    public function search(Request $request)
    {
        $search = $request->input("search");
        $livres = Livre::where("titre", "like", "%$search%")->orWhere("auteur", "like", "%$search%")->get();
        return view("/livres/list", ["livres" => $livres, "search" => $search]);
    }
}
