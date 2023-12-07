<?php

namespace App\Models;

use CodeIgniter\Model;

class ContratoModel extends Model
{
    protected $table = 'contratos'; // Ajusta esto con el nombre real de tu tabla

    public function obtenerContratos()
    {
        return $this->findAll(); // Esto es solo un ejemplo, ajusta según tu lógica real
    }
}

