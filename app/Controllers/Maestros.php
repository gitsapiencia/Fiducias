<?php

namespace App\Controllers;

use App\Models\ContratoModel;

class Maestros extends BaseController
{

    

    public function index(): string
    {
        return view('maestros/contratos');
    }


    public function listacontratos(): string
    {
         // Generar un error intencional

         $contratoModel = new ContratoModel();
        $data['contratos'] = $contratoModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos

        return view('maestros/listacontratos', $data);
    }


    public function contratos($id = null): string
    {
        // Lógica para obtener datos según el ID (si existe) y pasarlos a la vista
        $contratoModel = new ContratoModel();
        $data = [];
        if ($id) {
            // Obtener datos del contrato por ID (consulta a la base de datos)
            $data['contrato'] = $contratoModel->find($id);
        }

        // Cargar la vista del formulario de contratos con los datos correspondientes
        return view('maestros/contratos', $data);
    }

    // Método para procesar el formulario y guardar o actualizar el contrato
    public function guardarContrato()
    {
        // Lógica para validar y guardar o actualizar el contrato en la base de datos

        // Redirigir a la lista de contratos después de guardar o actualizar
        return redirect()->to('listacontratos');
    }








    public function cuentas(): string
    {
        return view('maestros/cuentas');
    }

}
