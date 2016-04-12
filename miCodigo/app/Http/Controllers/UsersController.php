<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Semilla;

class UsersController extends Controller
{
    //
    public function index(){
    	return view ('formularios-datos');
    }

    public function create(){
    	dd('Extito');
    }

    public function prueba(){
        dd('Soy una prueba');
    }

    public function store(Request $request){
    	dd($request->all());
        $semilla = new Semilla($request->all());


    }
}

