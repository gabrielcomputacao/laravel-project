<?php

namespace App\Http\Controllers;

use App\Models\Animal as ModelsAnimal;
use Illuminate\Http\Request;

class Animal extends Controller
{
   
    function index(){

        $animais = ModelsAnimal::all();

        return view('Animal' , [ "animais" =>  $animais ]);

    }

}
