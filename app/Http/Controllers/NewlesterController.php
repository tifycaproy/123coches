<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Newlester;

class NewlesterController extends Controller
{
    public function create(Request $request){


      $rules = [
            'email' => 'required|email',
             ];


 $messages = [
            
            'email.required' => 'El Email es Requerido',
            'email.email' => 'El formato de email es incorrecto',
            ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails())
        {
           return response()->json(['error'=>$validator->errors()]);
        }
       
            $new= new Newlester;
            $new->mail= $request->email;
            $new->save();
           
      

        return response()->json(['success'=>'¡Registro Exitosamente Gracias por contactarnos.']);
    	

    }
}
