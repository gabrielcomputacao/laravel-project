<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function show($id , Request $request){
        dd($request->header());

        return "User Controller  $id"  ;
    }


}
