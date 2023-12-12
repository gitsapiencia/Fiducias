<?php

namespace App\Controllers;

class Informes extends BaseController
{
    public function index(): string
    {
        return view('informes/concilia');
    }

    public function beneficiarios(): string
    {
        return view('informes/beneficiarios');
    }

    public function concilia(): string
    {
        return view('informes/concilia');
    }
}
