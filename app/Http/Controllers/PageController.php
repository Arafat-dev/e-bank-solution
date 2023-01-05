<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //



    public function index(){

        return view('index');
    }

    public function service(){

    }

    public function AdminDashbord(){
        return view('adminDashbord');
    }

    public function dashbord(){

        return view('user.dashbord');
    }


    public function register(){

        return view('inscription');
    }


   public function login(){

    return view('connexion');
   }
}
