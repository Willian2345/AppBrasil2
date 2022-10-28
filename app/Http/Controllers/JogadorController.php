<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Jogadores;

class JogadorController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarJogador');
    }

 
    public function SalvarBanco(Request $request){

    $dadosJogadores = $request->validate([
    'nome' => 'string|required',
    'datadenascimento' => 'string|required',
    'posicao' => 'string|required',
    'pe' => 'string|required',
    'altura' => 'string|required',
    'peso' => 'string|required'

    ]);

   Jogadores::create($dadosJogadores);

    return Redirect::route('home');
}


}

