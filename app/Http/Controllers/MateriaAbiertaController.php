<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class MateriaAbiertaController extends Controller
{
    public function index()
    {
        //$periodos=Periodo::get();
        return view("materiasa.index");
    }
}