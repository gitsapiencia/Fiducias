<?php

namespace App\Controllers;

class Maestros extends BaseController
{
    public function index(): string
    {
        return view('maestros/contratos');
    }


    public function contratos(): string
    {
        return view('maestros/contratos');
    }

    public function cuentas(): string
    {
        return view('maestros/cuentas');
    }

}
