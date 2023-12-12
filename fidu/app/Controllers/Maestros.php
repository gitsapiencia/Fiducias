<?php

namespace App\Controllers;

use App\Models\ContratoModel;
use App\Models\OperadorModel;
use App\Models\CuentasModel;
use App\Models\FondoModel;

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

        $fdoModel = new FondoModel();
        $data['fondos'] = $fdoModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos
    

        $opModel = new OperadorModel();
        $data['operadores'] = $opModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos
    

        // Cargar la vista del formulario de contratos con los datos correspondientes
        return view('maestros/contratos', $data);
    }



    public function guardarContrato()
    {

        // Antes de la creación de $datosContrato
        print_r($this->request->getPost());

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


    // Asegúrate de tener este use al principio del archivo


// ...

public function listacuentas(): string
{
    $cuentasModel = new CuentasModel();
    $data['cuentas'] = $cuentasModel->obtenerContratos();

    return view('maestros/listacuentas', $data);

    

}

public function cuentas($id = null): string
{
    $cuentasModel = new CuentasModel();
    $data = [];
    if ($id) {
        $data['cuenta'] = $cuentasModel->find($id);
    }

    $contratoModel = new ContratoModel();
    $data['contratos'] = $contratoModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos


    $fdoModel = new FondoModel();
    $data['fondos'] = $fdoModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos


    $opModel = new OperadorModel();
    $data['operadores'] = $opModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos





    return view('maestros/cuentas', $data);
}

public function guardarCuenta()
{
    
    $datosCuenta = [
        'tipo_operador_financiero_id' => $this->request->getPost('tipo_operador_financiero_id'),
        'contrato_id' => $this->request->getPost('contrato_id'),
        'cuenta' => $this->request->getPost('cuenta'),
        // Agrega más campos según sea necesario
    ];



    $cuentasModel = new CuentasModel();

    if ($this->request->getPost('id')) {
        $cuentasModel->update($this->request->getPost('id'), $datosCuenta);
    } else {
        $cuentasModel->insert($datosCuenta);
    }

    return redirect()->to('listacuentas');
}

    













public function listaoperadores(): string
{
     // Generar un error intencional

     $contratoModel = new OperadorModel();
    $data['contratos'] = $contratoModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos

    return view('maestros/listaoperadores', $data);
}


public function operadores($id = null): string
{
    // Lógica para obtener datos según el ID (si existe) y pasarlos a la vista
    $contratoModel = new OperadorModel();
    $data = [];
    if ($id) {
        // Obtener datos del contrato por ID (consulta a la base de datos)
        $data['contrato'] = $contratoModel->find($id);
    }

    // Cargar la vista del formulario de contratos con los datos correspondientes
    return view('maestros/operadores', $data);
}



public function guardarOperador()
{
    // Obtener datos del formulario
    $datosContrato = [
        'nombre' => $this->request->getPost('nombre')
    ];

    // Lógica para validar los datos del formulario
    // ...

    // Instanciar el modelo de contrato
    $contratoModel = new OperadorModel();

    // Si hay un ID, actualiza el contrato; de lo contrario, crea un nuevo contrato
    if ($this->request->getPost('id')) {
        $contratoModel->update($this->request->getPost('id'), $datosContrato);
    } else {
        $contratoModel->insert($datosContrato);
    }

    // Redirigir a la lista de contratos después de guardar o actualizar
    return redirect()->to('listaoperadores');
}








public function listafondos(): string
{
     // Generar un error intencional

     $contratoModel = new FondoModel();
    $data['contratos'] = $contratoModel->obtenerContratos(); // Ajusta este método según tu lógica para obtener contratos

    return view('maestros/listafondos', $data);
}


public function fondos($id = null): string
{
    // Lógica para obtener datos según el ID (si existe) y pasarlos a la vista
    $contratoModel = new FondoModel();
    $data = [];
    if ($id) {
        // Obtener datos del contrato por ID (consulta a la base de datos)
        $data['contrato'] = $contratoModel->find($id);
    }


    





    // Cargar la vista del formulario de contratos con los datos correspondientes
    return view('maestros/fondos', $data);
}



public function guardarFondo()
{
    // Obtener datos del formulario
    $datosContrato = [
        'nombre' => $this->request->getPost('nombre')
    ];

    // Lógica para validar los datos del formulario
    // ...

    // Instanciar el modelo de contrato
    $contratoModel = new FondoModel();

    // Si hay un ID, actualiza el contrato; de lo contrario, crea un nuevo contrato
    if ($this->request->getPost('id')) {
        $contratoModel->update($this->request->getPost('id'), $datosContrato);
    } else {
        $contratoModel->insert($datosContrato);
    }

    // Redirigir a la lista de contratos después de guardar o actualizar
    return redirect()->to('listafondos');
}













}
