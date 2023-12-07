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



    public function guardarContrato()
    {
        // Obtener datos del formulario
        $datosContrato = [
            'numero_contrato' => $this->request->getPost('numero_contrato'),
            'lineas_fondo' => $this->request->getPost('lineas_fondo'),
            'operador_financiero' => $this->request->getPost('operador_financiero'),
            'fecha_inicial' => $this->request->getPost('fecha_inicial'),
            'fecha_final' => $this->request->getPost('fecha_final'),
            'recurso_inicial' => $this->request->getPost('recurso_inicial'),
            'comision' => $this->request->getPost('comision'),
            'porcentaje_comision' => $this->request->getPost('porcentaje_comision'),
            'porcentaje_adicion' => $this->request->getPost('porcentaje_adicion'),
            // Agrega más campos según sea necesario
        ];
    
        // Lógica para validar los datos del formulario
        // ...
    
        // Instanciar el modelo de contrato
        $contratoModel = new ContratoModel();
    
        // Si hay un ID, actualiza el contrato; de lo contrario, crea un nuevo contrato
        if ($this->request->getPost('id')) {
            $contratoModel->update($this->request->getPost('id'), $datosContrato);
        } else {
            $contratoModel->insert($datosContrato);
        }
    
        // Redirigir a la lista de contratos después de guardar o actualizar
        return redirect()->to('listacontratos');
    }
    





    public function cuentas(): string
    {
        return view('maestros/cuentas');
    }

}
