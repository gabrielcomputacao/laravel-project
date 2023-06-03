<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    
    public function renderizar(){

        $teste = 'amigo';

        return view( 'pessoa' , [
            'nome' => $teste,
            'sobrenome' => 'henrique'
        ] );

    }


}
