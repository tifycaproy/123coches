<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Noticias;
use App\Comentarios;
use App\Categorias;
use App\Servicios;
use App\Secciones;
use App\Formatos;
use App\SeccionesCampos;
use App\Campos;
use App\TiposCampos;
use App\Solicitantes;
use App\Solicitud;
use App\Preguntas;
use App\Mail\Contacto;
use App\Paises;
use Mail;


class homeController extends Controller{

    public function index(){
        return view('Frontend.index');
    }

    public function noticia(){
        return view('Frontend.noticia');
    }

    public function detalle(){
        return view('Frontend.detalle');
    }

    public function listado(){
        return view('Frontend.listado');
    }

    public function sesion(){
        return view('Frontend.sesion');
    }

    public function coches(){
        return view('Frontend.coches');
    }

    public function registro(){
        return view('Frontend.registro');
    }
}
