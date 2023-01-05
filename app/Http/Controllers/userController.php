<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Compte;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{


    public function store(Request $request){

        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "date_naissance"=>"required",
            "cni"=>"required",
            "adresse"=>"required",
            "telephone"=>"required",
            "email"=>"required",
            "password"=>"required"
        ]);

       $user = User::create([
        "nom"=>$request->nom,
        "prenom"=>$request->prenom,
        "date_naissance"=>$request->date_naissance,
        "numero_CNI"=>$request->cni,
        "adresse"=>$request->adresse,
        "telephone"=>$request->telephone,
        "email"=>$request->email,
        "password"=>$request->password,
        "role"=>1
      ]);

      Compte::create([
        "numero_compte"=>random_int(3450072091,9867555000),
        "RIB"=>random_int(3450072091,9867555000),
        "type"=>"Compte courant",
        "date_ouverture"=>date(now()),
        "solde"=>0,
        "id_user"=>$user->id,
        "id_agence"=>rand(1,7),

      ]);



        return back()->with("success", "Utilisateur inscrit avec succès");
    }



    public function listeUSers(){

        $users= User::paginate(10);

        return view('list_utilisateur', compact('users'));
    }

}
