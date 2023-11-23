<?php

namespace App\Controllers;

class Movimientos extends BaseController
{
    public function index(): string
    {
        return view('movimientos/movfiducia');
    }

    public function movfiducia(): string
    {
        return view('movimientos/movfiducia');
    }

}
