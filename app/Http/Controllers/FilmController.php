<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    function list(){
        $nom = "Henry";
        $mesfilms = Film::where("user_id", auth()->user()->id)->get();

        return view("film.list", [
            "nom" => $nom,
            "films" => Film::all(),
            "mesfilms" => $mesfilms
        ]);
    }

    function create(Request $request){

        $film = new Film();

        $film->titre = $request->titre;
        $film->description = $request->description;
        $film->realisateur = $request->realisateur;

        if(auth()->user()){
            $film->user_id = auth()->user()->id;
        }

        $film->save();

        return redirect()->back();

    }
}
