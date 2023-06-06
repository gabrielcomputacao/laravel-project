<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    protected $fillable = [ "patas" , "nome", "especie"  ];

    /* fala para o laravel qual tabela sera inserido esse model */
    protected $table = 'animal' ;

    function agir(){
        echo "baruhlo!!!";
    }


    function getEspecie(){
        return $this->especie;
    }

    function setEspecie($especie){
        $this->especie = $especie;
    }

    use HasFactory;
}
