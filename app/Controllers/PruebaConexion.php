<?php

namespace App\Controllers;

class PruebaConexion extends BaseController
{
    public function index()
    {
        try {
            $db = \Config\Database::connect();
            $query = $db->query('SELECT * FROM contratos');
            $data['contratos'] = $query->getResult();

            echo "Conexión exitosa!";
        } catch (\Exception $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
