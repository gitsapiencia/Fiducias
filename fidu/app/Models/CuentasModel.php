<?php

namespace App\Models;

use CodeIgniter\Model;

class CuentasModel extends Model
{
    protected $table = 'cuentas_ahorro_fic'; // Ajusta esto con el nombre real de tu tabla

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'tipo_operador_financiero_id',
        'contrato_id',
        'cuenta'
        // Agrega aquí todos los campos que deseas permitir
    ];

    public function obtenerContratos()
    {
        return $this->findAll(); // Esto es solo un ejemplo, ajusta según tu lógica real
    }

    
}
