<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //



   public function connect(Request $request){
    $credentials = $request->validate([
        'email'=>['required', 'email'],
        'password'=>['required']
    ]);


    if (Auth::attempt($credentials)) {


            if(Auth::user()->role == 1){
                $user = User::findOrFail(Auth::id());

                $this->redirectTo = route('user.dashbord');
                return back()->with("success", "Utilisateur inscrit avec succès");
            }
                $this->redirectTo = route('admin.dashbord');
                return back()->with("success", "Utilisateur inscrit avec succès");

    }


   }
}
