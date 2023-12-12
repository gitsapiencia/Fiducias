<?php
namespace App\Controllers;

use App\Models\MovFiduciaModel;

use App\Models\ContratoModel;
use App\Models\CuentasModel;
use App\Models\FondoModel;



class Movimientos extends BaseController
{
    // Otros métodos del controlador...

    public function listamovfiducia(): string
    {
        $movFiduciaModel = new MovFiduciaModel();
        $data['movimientos'] = $movFiduciaModel->findAll(); // Ajusta este método según tu lógica para obtener movimientos

        return view('movimientos/listamovfiducia', $data);
    }

    public function movfiducia($id = null): string
    {
        $movFiduciaModel = new MovFiduciaModel();
        $data = [];
        if ($id) {
            $data['movfiducia'] = $movFiduciaModel->find($id);
        }

        $contratoModel = new ContratoModel();
        $data['contratos'] = $contratoModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos
    
    
        $fdoModel = new FondoModel();
        $data['fondos'] = $fdoModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos
    
    
        $opModel = new CuentasModel();
        $data['cuentas'] = $opModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos
    
    




        return view('movimientos/movfiducia', $data);
    }

    public function guardarMovFiducia()
    {
        // Obtener datos del formulario
        $datosMovFiducia = [
            'contrato_id' => $this->request->getPost('contrato'),
            'cuenta_id' => $this->request->getPost('cuenta'),
            'programa_id' => $this->request->getPost('programa')
            // Agrega más campos según sea necesario
        ];

        $movFiduciaModel = new MovFiduciaModel();

        if ($this->request->getPost('id')) {
            $movFiduciaModel->update($this->request->getPost('id'), $datosMovFiducia);
        } else {
            $movFiduciaModel->insert($datosMovFiducia);
        }

        return redirect()->to('listamovfiducia');
    }

    // Otros métodos del controlador...
}
