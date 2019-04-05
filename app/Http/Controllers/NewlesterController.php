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
            'mail' => 'required|email',
             ];


 		$messages = [
            
            'mail.required' => 'El Email es Requerido',
            'mail.email' => 'El Formato de Email es Incorrecto',
            ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails())
        {
           return response()->json(['error'=>$validator->errors()]);
        }
       
            $new= new Newlester;
            $new->mail= $request->mail;
            $new->save();
           
      

        return response()->json(['success'=>'¡Registro Exitosamente Gracias por contactarnos.']);
    	

    }
}
