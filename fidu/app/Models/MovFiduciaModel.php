<?php

namespace App\Models;

use CodeIgniter\Model;

class MovFiduciaModel extends Model
{
    protected $table = 'encmovfiducia'; // Ajusta esto con el nombre real de tu tabla

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'contrato_id',
        'cuenta_id',
        'programa_id'
    ];

    // Puedes agregar más métodos según tus necesidades

    public function obtenerEncMov()
    {
        return $this->findAll(); // Esto es solo un ejemplo, ajusta según tu lógica real
    }
}
