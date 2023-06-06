<?php

namespace App\Http\Controllers;

use App\Models\Animal as ModelsAnimal;
use Illuminate\Http\Request;

class Animal extends Controller
{
   
    function index(){

        /* faz update dos dados */
       /*  $animal = ModelsAnimal::find(3)->update([
            "nome" => "estela"
        ]); */


        /* faz update dos dados  */
       /*  $gatinho = ModelsAnimal::find(1);
        $gatinho->nome = "milk";
        $gatinho->save(); */

        /* fazer update dos dados
            jeito mais facil de fazer, porque os dados vem do request pasta coloca-los no fill que eles serao
            salvos fazendo update no objeto escolhido
        */
        $input = [
            "nome" => "magic",
            "patas" => 4
        ];

        $animalzin = ModelsAnimal::find(2);
        $animalzin->fill($input);
        $animalzin->save();

        /* deletar um dado 
            OBS: da erro caso nao tenha esse dado no banco para deletar
        */
       /*  $dados = ModelsAnimal::find(4);
        $dados->delete(); */

        $animais = ModelsAnimal::all();
       /*  
       cria dados no banco de dados, as variaveis do model precisam estar dentro do fillable para o laravel
       reconhece-las e assim associar aqui no controller para fazer a insercao

       $inserirAnimais = ModelsAnimal::create([
            "patas" => 2,
            "nome" => "gato",
            "especie" => "snow"
        ]); */

        return view('Animal' , [ "animais" =>  $animais ]);

    }

}
