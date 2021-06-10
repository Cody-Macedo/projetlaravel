<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Livre;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function list()
    {
        $categories = Categorie::all();
        return view("categories.list", ["categories" => $categories]);
    }

    public function add(Request $request)
    {

        if ($request->isMethod("POST")) {
            $request->validate([
                "titre" => "required",
                "mots" => "required"
            ]);
            $titre = $request->input("titre");
            $mots = $request->input("mots");

            $categorie = new Categorie();
            $categorie->titre = $titre;
            $categorie->mots = $mots;
            $categorie->save();

            return redirect("/categories/list")->with('status', 'Livre ajouté!');
        }

        return view("categories.form");
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $category = Categorie::find($id);
        if(empty($category)){
            abort("418");
        }
        if ($request->isMethod("POST")) {
            $request->validate([
                "titre" => "required",
                "mots" => "required"
            ]);
            $titre = $request->input("titre");
            $mots = $request->input("mots");

            $category->titre = $titre;
            $category->mots = $mots;
            $category->save();

            return redirect("/categories/list")->with('status', 'categorie modifié!');
        }

        return view("categories.form", ["category" => $category]);
    }

    public function delete(Request $request)
    {
        $id = $request->route('id');
        $categorie = Categorie::find($id);

        if ($request->isMethod("POST")) {
            $categorie->delete();
            return redirect("/categories/list")->with('status', 'Livre supprimé!');
        }
        return view("categories.confirm", ["categorie" => $categorie]);
    }
}
