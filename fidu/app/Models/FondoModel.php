<?php

namespace App\Models;

use CodeIgniter\Model;

class FondoModel extends Model
{
    protected $table = 'lineas_fondo'; // Ajusta esto con el nombre real de tu tabla

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre'
    ];

    public function obtenerContratos()
    {
        return $this->findAll(); // Esto es solo un ejemplo, ajusta según tu lógica real
    }
}

