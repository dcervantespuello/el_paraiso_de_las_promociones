<?php

namespace App\Http\Controllers\Prueba;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function sobreNosotros()
    {
        return view('sobre-nosotros');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
