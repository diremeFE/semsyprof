<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function servicios()
    {
        return view('pages.servicios');
    }

    public function ofrecemos()
    {
        return view('pages.ofrecemos');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }

    public function equipos()
    {
        return view('servicios.equipos');
    }

    public function explotacion()
    {
        return view('servicios.explotacion');
    }

    public function renting()
    {
        return view('servicios.renting');
    }

    public function aparatologia()
    {
        return view('servicios.aparatologia');
    }

    public function alquiler()
    {
        return view('servicios.alquiler');
    }

    public function tecnico()
    {
        return view('servicios.tecnico');
    }
}
