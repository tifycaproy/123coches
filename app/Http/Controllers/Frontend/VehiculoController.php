<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
// Modelos
use App\Vehiculo;
use App\Tipo;
use App\Modelo;
use App\Marca;
use App\Transmision;
use App\Combustible;
use App\Paises;
use App\Dano;
use App\Galeria;

class VehiculoController extends Controller
{

	public function detalleVehiculo(Request $request)
    {
    	$galerias=Galeria::where('id_vehiculo', $request->id)->get();

    	$vehiculo = Vehiculo::where('id',$request->id)->get();
    
 		
    	$danos = Dano::where('id_vehiculo',$request->id)->get();


    	 return view('Frontend.detalle', compact('galerias', 'vehiculo', 'danos'));

    }
 
 }