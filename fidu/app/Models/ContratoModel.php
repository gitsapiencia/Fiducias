<?php

namespace App\Models;

use CodeIgniter\Model;

class ContratoModel extends Model
{
    protected $table = 'contratos'; // Ajusta esto con el nombre real de tu tabla

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'numero_contrato',
        'lineas_fondo',
        'operador_financiero',
        'fecha_inicial',
        'fecha_final',
        'recurso_inicial',
        'comision',
        'porcentaje_comision',
        'porcentaje_adicion',
        // Agrega aquí todos los campos que deseas permitir
    ];

    public function obtenerContratos()
    {
        return $this->findAll(); // Esto es solo un ejemplo, ajusta según tu lógica real
    }
}

