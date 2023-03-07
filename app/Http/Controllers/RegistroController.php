<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use App\models\User;

class RegistroController extends Controller
{
    //funcion muestra los registros
    public function mostrar(){
        return view('auth.registro');
    }

    //Agrega los registros
    public function registro(RegistroRequest $request){
        $user = User::create($request -> validated());
    }
}
