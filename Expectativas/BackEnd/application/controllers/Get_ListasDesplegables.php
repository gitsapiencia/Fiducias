<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';


class Get_ListasDesplegables extends REST_Controller
{
    
    
    
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Get_ListasDesplegables_model');
        
    }

    public function MediaTecnica_get()
    {
        $lista = $this->Get_ListasDesplegables_model->get_MediaTecnica();
        echo json_encode($lista);
    }

    public function RazonNoEstudiar_get()
    {
        $lista = $this->Get_ListasDesplegables_model->get_RazonNoEstudiar();
        echo json_encode($lista);
    }
    
    public function ImagenSapiencia_get()
    {
        $lista = $this->Get_ListasDesplegables_model->get_ImagenSapiencia();
        echo json_encode($lista);
    }

    public function ConoceSapiencia_get()
    {
        $lista = $this->Get_ListasDesplegables_model->get_ConoceSapiencia();
        echo json_encode($lista);
    }
    
   
    public function ModoPagoEstudio_get()
    {
        $modo = $this->Get_ListasDesplegables_model->get_ModoPagoEstudio();
        echo json_encode($modo);
    }
   
    public function RazonInstitucionPrograma_get()
    {
        $razon = $this->Get_ListasDesplegables_model->get_RazonInstitucionPrograma();
        echo json_encode($razon);
    }
   
    public function ModalidadEstudio_get()
    {
        $modalidad = $this->Get_ListasDesplegables_model->get_ModalidadEstudio();
        echo json_encode($modalidad);
    }
    
    public function RazonNoSolicitud_get()
    {
        $razon = $this->Get_ListasDesplegables_model->get_RazonNoSolicitud();
        echo json_encode($razon);
    }

    public function EscalaApoyo_get()
    {
        $escala = $this->Get_ListasDesplegables_model->get_EscalaApoyo();
        echo json_encode($escala);
    }

    public function EscalaImportancia_get()
    {
        $escala = $this->Get_ListasDesplegables_model->get_EscalaImportancia();
        echo json_encode($escala);
    }
    public function TecnologiaNo_get()
    {
        $razon = $this->Get_ListasDesplegables_model->get_TecnologiaNo();
        echo json_encode($razon);
    }

    public function PlanFuturo_get()
    {
        $plan = $this->Get_ListasDesplegables_model->get_PlanFuturo();
        echo json_encode($plan);
    }

    public function PrioridadTecnologia_get()
    {
        $prioridad = $this->Get_ListasDesplegables_model->get_PrioridadTecnologia();
        echo json_encode($prioridad);
    }

    public function PensamientoEstudio_get()
    {
        $pensamiento = $this->Get_ListasDesplegables_model->get_PensamientoEstudio();
        echo json_encode($pensamiento);
    }

    public function SiNo_NoSabe_get()
    {
        $SiNo = $this->Get_ListasDesplegables_model->get_SiNo_NoSabe();
        echo json_encode($SiNo);
    }

    public function SiNo_get()
    {
        $SiNo = $this->Get_ListasDesplegables_model->get_SiNo();
        echo json_encode($SiNo);
    }

    public function index_post()
    {
    $datos = array(
        'tipoBachillerato' => $this->input->post('vtipoBachillerato'),
        'mediaTecnica' => $this->input->post('vmediaTecnica'),
        'colegio' => $this->input->post('vcolegio'),
        'documento' => $this->input->post('vdocumento'),
        'periodo' => $this->input->post('vperiodo'),
        'tipoDocumento' => $this->input->post('vtipoDocumento'),
        'nombre1' => $this->input->post('vnombre1'),
        'nombre2' => $this->input->post('vnombre2'),
        'apellido1' => $this->input->post('vapellido1'),
        'apellido2' => $this->input->post('vapellido2'),
        'genero' => $this->input->post('vgenero'),
        'fechaNacimiento' => $this->input->post('vfechaNacimiento'),
        'nombre_representante' => $this->input->post('vnombre_representante'),
        'numero_representante' => $this->input->post('vnumero_representante'),
        'correo_representante' => $this->input->post('vcorreo_representante'),
        'departamentoResidencia' => $this->input->post('vdepartamentoResidencia'),
        'municipioResidencia' => $this->input->post('vmunicipioResidencia'),
        'comunaResidencia' => $this->input->post('vcomunaResidencia'),
        'barrio' => $this->input->post('vbarrio'),
        'otroBarrio' => $this->input->post('votroBarrio'),
        'dirCampo1' => $this->input->post('vdirCampo1'),
        'dirCampo2' => $this->input->post('vdirCampo2'),
        'dirCampo3' => $this->input->post('vdirCampo3'),
        'dirCampo4' => $this->input->post('vdirCampo4'),
        'dirCampo5' => $this->input->post('vdirCampo5'),
        'dirCampo6' => $this->input->post('vdirCampo6'),
        'dirCampo7' => $this->input->post('vdirCampo7'),
        'dirCampo8' => $this->input->post('vdirCampo8'),
        'dirCampo9' => $this->input->post('vdirCampo9'),
        'muestraDir' => $this->input->post('vmuestraDir'),
        'telefonoFijo' => $this->input->post('vtelefonoFijo'),
        'celular' => $this->input->post('vcelular'),
        'estrato' => $this->input->post('vestrato'),
        'tieneSisben' => $this->input->post('vtieneSisben'),
        'puntajeSisben' => $this->input->post('vpuntajeSisben'),
        'correo' => $this->input->post('vcorreo'),
        'confirmaCorreo' => $this->input->post('vconfirmaCorreo'),
        'conexion_internet2' => $this->input->post('vconexion_internet2'),
        'pc_mesa' => $this->input->post('vpc_mesa'),
        'pc_portatil' => $this->input->post('vpc_portatil'),
        'tablet' => $this->input->post('vtablet'),
        'celular_dispositivo' => $this->input->post('vcelular_dispositivo'),
        'ninguna' => $this->input->post('vninguna'),
        'solicitud_admin2' => $this->input->post('vsolicitud_admin2'),
       
        'nivel_formacion2' => $this->input->post('vnivel_formacion2'),
        'ies_estudio2' => $this->input->post('vies_estudio2'),
        'cual_otroies2' => $this->input->post('vcual_otroies2'),
        'programa_estudio2' => $this->input->post('vprograma_estudio2'),
        'cual_otroprograma2' => $this->input->post('vcual_otroprograma2'),
        'modalidad_programa2' => $this->input->post('vmodalidad_programa2'),
        'razon_insti_programa2' => $this->input->post('vrazon_insti_programa2'),
        'pagar_estudio2' => $this->input->post('vpagar_estudio2'),
        'cual_otro_pagar2' => $this->input->post('vcual_otro_pagar2'),
        'no_solicitud_admision2' => $this->input->post('vno_solicitud_admision2'),
        'otraRazon' => $this->input->post('votraRazon'),
        'escala_califica_familiar2' => $this->input->post('vescala_califica_familiar2'),
        'escala_califica_colegio2' => $this->input->post('vescala_califica_colegio2'),
        'frases_pensamiento2' => $this->input->post('vfrases_pensamiento2'),
        'califica_import_estudio2' => $this->input->post('vcalifica_import_estudio2'),
        'califica_import_trabajo2' => $this->input->post('vcalifica_import_trabajo2'),
        'espera_ano2' => $this->input->post('vespera_ano2'),
        'conoce_sapiencia2' => $this->input->post('vconoce_sapiencia2'),
        'imagen_sapiencia2' => $this->input->post('vimagen_sapiencia2'),
        'beca_sapiencia2' => $this->input->post('vbeca_sapiencia2'),
        'estrategia_sapiencia2' => $this->input->post('vestrategia_sapiencia2'),
        'estado' => 1,
        'fecha_registro' => $this->input->post('vfecha_registro'), 


        'razon_institucion' => $this->input->post('vrazoninstitucion'),
        'razon_programa' => $this->input->post('vrazonprograma'),
        'orientacion_sexual' => $this->input->post('vorientacionsexual'),
        'identidad_genero' => $this->input->post('videntidadgenero'),

        'tiene_hijos' => $this->input->post('vtiene_hijos'),
        'cantidad_hijos' => $this->input->post('vcantidad_hijos'),
        'padremadre_soltero' => $this->input->post('vpadremadre_soltero'),
        'edad_primer_embarazo' => $this->input->post('vedad_primer_embarazo'), 

        'grupo_etnico' => $this->input->post('vgrupo_etnico'),
        'etnia' => $this->input->post('vetnia'),
        'otra_etnia' => $this->input->post('votra_etnia'),
        
        'es_victima_violencia' => $this->input->post('ves_victima_violencia'),
        'hecho_victimizante' => $this->input->post('vhecho_victimizante'),
        'discapacidad' => $this->input->post('vdiscapacidad'),
        'poblacion_especial' => $this->input->post('vpoblacion_especial')
        
        
    );
     
        
         $idu = $this->Get_ListasDesplegables_model->save($datos);
            if (!is_null($idu)) {
                $this->response(array('response' => $idu), 200);
            } else {
                $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
            }
                    
    }







    public function listacolegios_get($doc)
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->get_listacolegios($doc);
         echo json_encode($datos);
         
    }

    public function alumnosok_post()
    {

        
        $datos = array(           
            'colegio' => $this->input->post('colegio')
        );
        
        $datos = $this->Get_ListasDesplegables_model->get_alumnosok($datos);
        if (!is_null($datos)) {
            $this->response(array('response' => $datos), 200);
        } else {
            $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
        }
         
    }


    public function DatosPersonales_get($id,$periodo)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $datos = $this->Get_ListasDesplegables_model->get_DatosPersonales($id,$periodo);
         echo json_encode($datos);
         
    }
    

    ////////////////////////////////////////////////////////////////////////////////////////////////

    //PDF CARTA MATRICULA
    public function cartaMatriculaEPM_get($id,$periodo)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->cartaMatriculaEPM($id,$periodo);
         echo json_encode($lista);
         
    }

   

    public function reportePDFAcademica_get($id,$periodo)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->reportePDFAcademica($id,$periodo);
         echo json_encode($lista);
         
    }

    public function reportePDFIES_get($id,$periodo)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->reportePDFIES($id,$periodo);
         echo json_encode($lista);
         
    }

    public function reportePDFDeudor_get($id,$periodo)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->reportePDFDeudor($id,$periodo);
         echo json_encode($lista);
         
    }
    
    
    //Validacion
    public function revertir_legalizacion_get($id, $periodo)
    {
        $resultado = $this->Get_ListasDesplegables_model->revertir_legalizacion($id, $periodo);
        if (!is_null($resultado)) {

        $this->response(array('response' => 1), 200);
        //echo json_encode($resultado);

        } else {
        $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
        }
    }

    public function EstadoAspirante_get($id, $periodo)
    {
      $lista = $this->Get_ListasDesplegables_model->EstadoAspirante($id, $periodo);
      echo json_encode($lista);
  
    }
   
    public function totales_comunas_get($id, $periodo)
    {
      $lista = $this->Get_ListasDesplegables_model->totales_comunas($id, $periodo);
      echo json_encode($lista);
  
    }


    public function indexK_post()
    {
      $datos = array('user_id' => $this->input->post('user_id'),
          'tipo_convocatoria' => $this->input->post('tipo_convocatoria'),
          'estado_convocatoria' => $this->input->post('estado_convocatoria'),
          'periodo' => $this->input->post('periodo'),
          'usuario_valida' => $this->input->post('valida')
  
      );
  
      $resultado = $this->Get_ListasDesplegables_model->updateF($datos);
      if (!is_null($resultado)) {
        $this->response(array('response' => $resultado), 200);
  
      } else {
        $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
      }
    }
  
    public function datosPrograma_post() 
    {

        $lista = $this->Get_ListasDesplegables_model->datosPrograma($this->input->post('pid'));
        $this->response(array('Resultado' => $lista), 200);
        
    }


    public function valorCantDatA_post() 
    {

        $lista = $this->Get_ListasDesplegables_model->valorCantDat($this->input->post('idusuario'),$this->input->post('periodo'));
        $this->response(array('Resultado' => $lista), 200);
        
    }
    
    public function valorCantDat_get($id,$periodo) 
    {
        $lista = $this->Get_ListasDesplegables_model->valorCantDat($id,$periodo);
        echo json_encode($lista);
        
    }
   
    public function observacionAspirante_get($id,$periodo) 
    {
        $lista = $this->Get_ListasDesplegables_model->observacionAspirante($id,$periodo);
        echo json_encode($lista);
        
    }

    public function causalesRechazo_get()
    {
        $lista = $this->Get_ListasDesplegables_model->causalesRechazo();
        echo json_encode($lista);
    }


    public function ListaDocInscripcionEPM_get() 
    {
        $lista = $this->Get_ListasDesplegables_model->ListaDocInscripcionEPM();
        echo json_encode($lista);
        
    }
    
    public function validaDocInscripcionEPM_get($id,$periodo) 
    {
        $lista = $this->Get_ListasDesplegables_model->validaDocInscripcionEPM($id,$periodo);
        echo json_encode($lista);
        
    }

    public function indexObservacion_post()
    {
        $datos = array('id_usuario' => $this->input->post('user_id'),
                        'periodo' => $this->input->post('periodo'),
                        'observacion' => $this->input->post('observacion'),               
                        'valida_id' => $this->input->post('valida_id'),
                        'fecha' => date("Y-m-d H:i:s")                      
        );

        $ObsValida = $this->Get_ListasDesplegables_model->indexObservacion($datos);
       // echo ($ObsValida);
        $this->response(array('Resultado' => $ObsValida), 200);
    }        
    
    public function indexV_post()
    {
        $datos = array('user_id' => $this->input->post('user_id'),
                       'valida_id' => $this->input->post('valida_id'),
                       'doc_id' => $this->input->post('doc_id'),
                       'estado' => $this->input->post('estado'),
                       'observacion' => $this->input->post('observacion'),
                       'fecha' => date("Y-m-d H:i:s"),
                       'periodo' => $this->input->post('periodo')
        );

            $datosvalida = $this->Get_ListasDesplegables_model->saveV($datos);
            if (!is_null($datosvalida)) {
                //echo json_encode($datosvalida);    
                
    $file = file_get_contents(IP . 'backend_inscripcion_epm/Get_ListasDesplegables/ListaDocInscripcionEPM/');
    $array = json_decode($file);
    
    if (is_null($array)){
        
                    $datosDoc='';    
    }
    else{    
                    $id= $datos['user_id'];
                    $periodo= $datos['periodo'];
                    $validador=$datos['valida_id'];
                    $datosDoc='';
                    foreach ($array as $valor)
                    {

                                       $file1 = file_get_contents(IP.'backend_inscripcion_epm/Get_ListasDesplegables/validaDocInscripcionEPM/'.$id.'/'.$periodo);
                                       $array1 = json_decode($file1);
                                       
                                        if (is_null($array1)){
                                         $doc='';
                                        } 
                                        else{    
                                        $doc='';
                                        $a='';
                                        foreach ($array1 as $valor1){
                                            $a=$valor1->doc_id;
                                            if ($valor->id == 1 && $valor1->doc_id == 1){
                                                
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }  
                                            
                                             if ($valor->id == 2 && $valor1->doc_id == 2){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }        

                                             if ($valor->id == 3 && $valor1->doc_id == 3){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }

                                             if ($valor->id == 4 && $valor1->doc_id == 4){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }        

                                             if ($valor->id == 5 && $valor1->doc_id == 5){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }        
                                            
                                             if ($valor->id == 6 && $valor1->doc_id == 6){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }        

                                             if ($valor->id == 7 && $valor1->doc_id == 7){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }        

                                             if ($valor->id == 8 && $valor1->doc_id == 8){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }
                                             if ($valor->id == 9 && $valor1->doc_id == 9){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 10 && $valor1->doc_id == 10){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 11 && $valor1->doc_id == 11){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 12 && $valor1->doc_id == 12){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 13 && $valor1->doc_id == 13){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 14 && $valor1->doc_id == 14){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 15 && $valor1->doc_id == 15){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 16 && $valor1->doc_id == 16){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 17 && $valor1->doc_id == 17){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 18 && $valor1->doc_id == 18){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 19 && $valor1->doc_id == 19){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 20 && $valor1->doc_id == 20){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 21 && $valor1->doc_id == 21){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 22 && $valor1->doc_id == 22){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 23 && $valor1->doc_id == 23){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 24 && $valor1->doc_id == 24){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 25 && $valor1->doc_id == 25){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 26 && $valor1->doc_id == 26){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }      
                                             if ($valor->id == 27 && $valor1->doc_id == 27){
                                                if ($valor1->estado == 'Rechazado')
                                                {$doc .= '<div style="color: red;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.' (Observación: '.$valor1->observacion.')</small></div>';}
                                                else 
                                                {$doc .= '<div style="color: #74DF00;"><small>'.$valor1->fecha.' - '.$valor1->estado.': '.$valor1->nombre.' '.$valor1->apellido.'</small></div>';}
                                            }     
                                                                                        
                                        } 
                                      }
     
                    $datosDoc .=  '<tr>'
                                .'<td><div align="center">'.$valor->id.'</div></td>'
                                .'<td><div align="justify">'.$valor->nombre.'</div>'.$doc.'</td>'
                                .'<td id="opcionesDoc'.$valor->id.'"><div class="text-center">
                                     <div> <a onclick="aprobar(1,'.$valor->id.','.$id.','.$validador.')" style="cursor:pointer;cursor:hand"><img alt="Verde" src="../../resources/img/verde.png" title="Documento Aprobado" /></a></div>
                                     <div> <a onclick="aprobar(2,'.$valor->id.','.$id.','.$validador.')" style="cursor:pointer;cursor:hand"><img alt="Rojo" src="../../resources/img/rojo.png"" title="Documento Rechazado" /></a></div>
                                     <div id="na'.$valor->id.'"> <a onclick="aprobar(3,'.$valor->id.','.$id.','.$validador.')" style="cursor:pointer;cursor:hand"><img alt="Amarillo" src="../../resources/img/amarillo.png" title="Documento No aplica" /></a></div>
                                     </div>
                                  </td>
                                </tr>';
                    }  
    }  

            echo ($datosDoc);
            
            } else {
                $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
            }
    }
    
    public function findprogramasies_get($id_ies)
    {
        $programas = $this->Get_ListasDesplegables_model->getprogramasies($id_ies);
        echo json_encode($programas);
    }
    
        public function ActividadEconomica_get()
    {
        $actividadEconomica = $this->Get_ListasDesplegables_model->get_ActividadEconomica();
        echo json_encode($actividadEconomica);
    }
    
    public function parentescoDeudor_get()
    {
        $parentescod = $this->Get_ListasDesplegables_model->get_parentescoDeudor();
        echo json_encode($parentescod);
    }
    
        public function Semestre_get()
    {
        $semestre = $this->Get_ListasDesplegables_model->get_Semestre();
        echo json_encode($semestre);
    }
    
     public function RequisitosH_find_get_get($id,$periodo)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->get_RequisitosH($id,$periodo);
         echo json_encode($lista);
         
    }

    public function RequisitosHActual_find_get_get($id,$periodo)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->get_RequisitosHOriginal($id,$periodo);
         echo json_encode($lista);
         
    }
    
    public function PuntajeActual_find_get_get($id,$periodo)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->get_PuntajeOriginal($id,$periodo);
         echo json_encode($lista);
         
    }


    public function Puntaje_find_get_get($id,$periodo)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->get_Puntaje($id,$periodo);
         echo json_encode($lista);
         
    }
    
    public function IES_get()
    {
        $IES = $this->Get_ListasDesplegables_model->get_IES();
        echo json_encode($IES);
    }
    
        public function PromedioAcademico_get()
    {
        $promedioAcademico = $this->Get_ListasDesplegables_model->get_PromedioAcademico();
        echo json_encode($promedioAcademico);
    }
    
    public function FechaPruebasEstado_get()
    {
        $fechape = $this->Get_ListasDesplegables_model->get_FechaPruebasEstado();
        echo json_encode($fechape);
    }
    
    public function CaracteristicaBachiller_get()
    {
        $lista = $this->Get_ListasDesplegables_model->get_CaracteristicaBachiller();
        echo json_encode($lista);
         
    }
    
    public function ProgramaFinanciacion_get()
    {
        $lista = $this->Get_ListasDesplegables_model->get_ProgramaFinanciacion();
        echo json_encode($lista);
         
    }
    public function TipoCredito_get()
    {
        $lista = $this->Get_ListasDesplegables_model->get_TipoCredito();
        echo json_encode($lista);
         
    }
    
    public function ResidenciaComuna_find_get_get($rm)
    {
        if (!$rm) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->get_ResidenciaComuna($rm);
         echo json_encode($lista);
         
    }
    
     public function ListaComuna_find_get_get($rm)
    {
        if (!$rm) {
            $this->response(null, 400);
        }
        $lista = $this->Get_ListasDesplegables_model->get_ListaComuna($rm);
         echo json_encode($lista);
         
    }

    public function IcfesPuntaje_get() 
    {
        $icfesp = $this->Get_ListasDesplegables_model->get_IcfesPuntaje();
        echo json_encode($icfesp);
        
    }
    public function PeriodoIcfes_get() 
    {
        $icfes = $this->Get_ListasDesplegables_model->get_PeriodoIcfes();
        echo json_encode($icfes);
        
    }
    public function TipoTitulo_get() 
    {
        $titulo = $this->Get_ListasDesplegables_model->get_TipoTitulo();
        echo json_encode($titulo);
        
    }
    public function IEM_get() 
    {
        $colegio = $this->Get_ListasDesplegables_model->get_IEM();
        echo json_encode($colegio);
        
    }
    public function FechaBachiller_get() 
    {
        $fechab = $this->Get_ListasDesplegables_model->get_FechaBachiller();
        echo json_encode($fechab);
        
    }
    public function CiudadColegio_get() 
    {
        $ciudadc = $this->Get_ListasDesplegables_model->get_CiudadColegio();
        echo json_encode($ciudadc);
        
    }

    public function TipoTarjetaIdentidad_get() 
    {
        $tipotarjetaidentidad = $this->Get_ListasDesplegables_model->get_TipoTarjetaIdentidad();
        echo json_encode($tipotarjetaidentidad);
        
    }
    
    public function TipoDocumento_get() 
    {
        $tipodocumento = $this->Get_ListasDesplegables_model->get_TipoDocumento();
        echo json_encode($tipodocumento);
        
    }
    public function Departamento_get()
    {
        $Departamento = $this->Get_ListasDesplegables_model->get_Departamento();
        echo json_encode($Departamento);
    }
    
      public function Municipio_find_get_get($id_departamento)
    {
        if (!$id_departamento) {
            $this->response(null, 400);
        }
        $municipios = $this->Get_ListasDesplegables_model->get_Municipio($id_departamento);
         echo json_encode($municipios);
         
    }
    
     public function TiempoResidencia_get()
    {
        $TiempoResidencia= $this->Get_ListasDesplegables_model->get_TiempoResidencia();
        echo json_encode($TiempoResidencia);
    }
    
     public function Comuna_get()
    {
        $comuna= $this->Get_ListasDesplegables_model->get_Comuna();
        echo json_encode($comuna);
    }
    
    public function TipoVia_get()
    {
        $tipovia= $this->Get_ListasDesplegables_model->get_TipoVia();
        echo json_encode($tipovia);
    }
    
    public function DirOrientacion_get()
    {
        $Orientacion = $this->Get_ListasDesplegables_model->get_DirOrientacion();
        echo json_encode($Orientacion);
    }
    
    
   
     public function Sexo_get() 
    {
        $sexo = $this->Get_ListasDesplegables_model->get_Sexo();
        echo json_encode($sexo);
        
    }
    
     public function Estrato_get() 
    {
        $estrato = $this->Get_ListasDesplegables_model->get_Estrato();
        echo json_encode($estrato);
        
    }
    
     public function Sisben_get() 
    {
        $sisben = $this->Get_ListasDesplegables_model->get_Sisben();
        echo json_encode($sisben);
        
    }
    
    
    
    
    
     public function Discapacidad_get()
    {
        $Discapacidad = $this->Get_ListasDesplegables_model->get_Discapacidad();
        echo json_encode($Discapacidad);
    }
    
     public function Victimizante_get()
    {
        $Victimizante = $this->Get_ListasDesplegables_model->get_Victimizante();
        echo json_encode($Victimizante);
    }
    
     public function AfroColombiano_get()
    {
        $Afro = $this->Get_ListasDesplegables_model->get_AfroColombiano();
        echo json_encode($Afro);
    }
    
    
    
    
    
    
    
    
    
   
   
    
    
      public function Indigena_get()
    {
        $Indigena = $this->Get_ListasDesplegables_model->get_Indigena();
        echo json_encode($Indigena);
    }
   
    /////////////////////////////////////////////////////////////////////////
    
    
    
    public function indexIES_post($id = '')
    {
       $datos = array('id_usuario' => $id,
           'institucionES' => $this->input->post('vinstitucionES'),
           'programaAcademico' => $this->input->post('vprogramaAcademico'),
           'semestreAcademicoCursar' => $this->input->post('vsemestreAcademicoCursar'),
           'promedioAcumuladoPrograma' => $this->input->post('vpromedioAcumuladoPrograma'),
           'totalCreditos' => $this->input->post('vtotalCreditos'),
           'modalidadCreditoSolicita' => $this->input->post('vmodalidadCreditoSolicita'),
           'valorMatricula' => $this->input->post('vvalorMatricula'),
           'valormatricula_primersemestre' => $this->input->post('vvalorPrimerSemestre'),
           'semestres_ies' => $this->input->post('vsemestres_ies'),
           'fecha_actualizacion' => $this->input->post('vfecha_actualizacion'),
           'periodo' => $this->input->post('vperiodo_actualizacion'),
        );
        
      
         $idu = $this->Get_ListasDesplegables_model->saveIES($datos);
            if (!is_null($idu)) {
                $this->response(array('response' => $idu), 200);
            } else {
                $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
            }
        
    }
    
    public function indexDeudor_post($id = '')
    {
       $datos = array('id_usuario' => $id,
                   'tipoDocumentoDeudor'  => $this->input->post('vtipoDocumentoDeudor'),
                    'documentoDeudor'  => $this->input->post('vdocumentoDeudor'),
                    'nombre1d'  => $this->input->post('vnombre1d'),
                    'nombre2d'  => $this->input->post('vnombre2d'),
                    'apellido1d'  => $this->input->post('vapellido1d'),
                    'apellido2d'  => $this->input->post('vapellido2d'),
                    'parentescod'  => $this->input->post('vparentescod'),
                    'id_departamento_residencia'  => $this->input->post('vdepartamentod'),
                    'id_municipio_residencia'  => $this->input->post('vmunicipiod'),
                    'dircampo1d'  => $this->input->post('vdircampo1d'),
                    'dircampo2d'  => $this->input->post('vdircampo2d'),
                    'dircampo3d'  => $this->input->post('vdircampo3d'),
                    'dircampo4d'  => $this->input->post('vdircampo4d'),
                    'dircampo5d'  => $this->input->post('vdircampo5d'),
                    'dircampo6d'  => $this->input->post('vdircampo6d'),
                    'dircampo7d'  => $this->input->post('vdircampo7d'),
                    'dircampo8d'  => $this->input->post('vdircampo8d'),
                    'dircampo9d'  => $this->input->post('vdircampo9d'),
                    'direcciond'  => $this->input->post('vmuestraDird'),
                    'telefonoFijoDeudor'  => $this->input->post('vtelefonoFijoDeudor'),
                    'celularDeudor'  => $this->input->post('vcelularDeudor'),
                    'correoDeudor'  => $this->input->post('vcorreoDeudor'),
                    'actividadEconomica'  => $this->input->post('vactividadEconomica'),
                    'empresaDeudor'  => $this->input->post('vempresaDeudor'),
                    'cargoDeudor'  => $this->input->post('vcargoDeudor'),
                    'fechaIngresoDedudor'  => $this->input->post('vfechaIngresoDedudor'),
                    'dircampo1de'  => $this->input->post('vdircampo1de'),
                    'dircampo2de'  => $this->input->post('vdircampo2de'),
                    'dircampo3de'  => $this->input->post('vdircampo3de'),
                    'dircampo4de'  => $this->input->post('vdircampo4de'),
                    'dircampo5de'  => $this->input->post('vdircampo5de'),
                    'dircampo6de'  => $this->input->post('vdircampo6de'),
                    'dircampo7de'  => $this->input->post('vdircampo7de'),
                    'dircampo8de'  => $this->input->post('vdircampo8de'),
                    'dircampo9de'  => $this->input->post('vdircampo9de'),
                    'direccionde'  => $this->input->post('vmuestraDirde'),
                    'telefonoFijoEmpresa'  => $this->input->post('vtelefonoFijoEmpresa'),
                    'salarioDeudor'  => $this->input->post('vsalarioDeudor'),
                    'otrosIngresosDeudor'  => $this->input->post('votrosIngresosDeudor'),
                    'fecha_actualizacion' => $this->input->post('vfecha_actualizacion'),
                    'periodo' => $this->input->post('vperiodo_actualizacion')
        );
        
      
         $idu = $this->Get_ListasDesplegables_model->saveDeudor($datos);
            if (!is_null($idu)) {
                $this->response(array('response' => $idu), 200);
            } else {
                $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
            }
        
    }
    
    public function indexAcademica_post($id = '')
    {
       $datos = array('id_usuario' => $id,
                    'ciudadColegio' =>  $this->input->post('vciudadColegio'),
                    'fechaGradoColegio' =>  $this->input->post('vfechaGradoColegio'),
                    'fecha_icfes' =>  $this->input->post('vfechaPruebasEstado'),
                    'bachillerFecha1' =>  $this->input->post('vinputfecha1'),
                    'colegioFecha1' =>  $this->input->post('vcolegioFecha1'),
                    'departamentoFecha1' =>  $this->input->post('vdepartamentoFecha1'),
                    'municipioFecha1' =>  $this->input->post('vmunicipioFecha1'),
                    'bachillerFecha2' =>  $this->input->post('vinputfecha2'),
                    'colegioFecha2' =>  $this->input->post('vcolegioFecha2'),
                    'gradoFecha2' =>  $this->input->post('vgradoFecha2'),
                    'departamentoFecha2' =>  $this->input->post('vdepartamentoFecha2'),
                    'municipioFecha2' =>  $this->input->post('vmunicipioFecha2'),
                    'bachillerFecha3' =>  $this->input->post('vinputfecha3'),
                    'colegioFecha3' =>  $this->input->post('vcolegioFecha3'),
                    'gradoFecha3' =>  $this->input->post('vgradoFecha3'),
                    'departamentoFecha3' =>  $this->input->post('vdepartamentoFecha3'),
                    'municipioFecha3' =>  $this->input->post('vmunicipioFecha3'),
                    'bachillerFecha4' =>  $this->input->post('vinputfecha4'),
                    'colegioFecha4' =>  $this->input->post('vcolegioFecha4'),
                    'gradoFecha4' =>  $this->input->post('vgradoFecha4'),
                    'departamentoFecha4' =>  $this->input->post('vdepartamentoFecha4'),
                    'municipioFecha4' =>  $this->input->post('vmunicipioFecha4'),
                    'bachillerFecha5' =>  $this->input->post('vinputfecha5'),
                    'colegioFecha5' =>  $this->input->post('vcolegioFecha5'),
                    'gradoFecha5' =>  $this->input->post('vgradoFecha5'),
                    'departamentoFecha5' =>  $this->input->post('vdepartamentoFecha5'),
                    'municipioFecha5' =>  $this->input->post('vmunicipioFecha5'),
                    'tituloBachiller' =>  $this->input->post('vtituloBachiller'),
                    'estudiosProfesionales' =>  $this->input->post('vestudiosProfesionales'),
                    'prefijo_snp' =>  $this->input->post('vprefijosnp'),
                    'snp' =>  $this->input->post('vsnp'),
                    'icfes' =>  $this->input->post('vicfes'),
                    'puntajeIcfes' =>  $this->input->post('vpuntajeIcfes'),
                    'tituloUniversitarioLicenciado' =>  $this->input->post('vtituloUniversitarioLicenciado'),
                    'tituloTecnologo' =>  $this->input->post('vtituloTecnologo'),
                    'tituloTecnico' =>  $this->input->post('vtituloTecnico'),
                    'cicloPropedeutico' =>  $this->input->post('vcicloPropedeutico'),
                    'creditoCondonable' =>  $this->input->post('vcreditoCondonable'),
                    'modalidadCredito' =>  $this->input->post('vmodalidadCredito'),
                    'financiacionSuperior' =>  $this->input->post('vfinanciacionSuperior'),
                    'beneficiarioPregradoMedellin' =>  $this->input->post('vbeneficiarioPregradoMedellin'),
                    'cobroCredito' =>  $this->input->post('vcobroCredito'),
                    'beneficiarioPrograma' =>  $this->input->post('vbeneficiarioPrograma'),
                    'jal' =>  $this->input->post('vjal'),
                    'olimpiadasConocimiento' =>  $this->input->post('volimpiadasConocimiento'),
                    'ganadorGrupoCultural' =>  $this->input->post('vganadorGrupoCultural'),
                    'caracteristicaEscolar' =>  $this->input->post('vcaracteristicaEscolar'),
                    'ganadorCienciaTecnologia' =>  $this->input->post('vganadorCienciaTecnologia'),
                    'inder' =>  $this->input->post('vinder'),
                    'consejeroMunicipal' =>  $this->input->post('vconsejeroMunicipal'),
                    'formacionDocente' =>  $this->input->post('vformacionDocente'),
                    'fecha_actualizacion' =>  $this->input->post('vfecha_actualizacion'),
                    'periodo' => $this->input->post('vperiodo'));
        
      
         $idu = $this->Get_ListasDesplegables_model->saveAcademica($datos);
            if (!is_null($idu)) {
                $this->response(array('response' => $idu), 200);
            } else {
                $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
            }
        
    }
    
    public function indexIngresos_post($id = '')
    {
       $datos = array('id_usuario' => $id,
                   'dependeEconomicamente' => $this->input->post('vdependeEconomicamente'),
                    'estableEconomicamente' => $this->input->post('vestableEconomicamente'),
                    'actualTrabaja' => $this->input->post('vactualTrabaja'),
                    'tipoTrabajo' => $this->input->post('vtipoTrabajo'),
                    'diurno' => $this->input->post('vdiurno'),
                    'nocturno' => $this->input->post('vnocturno'),
                    'fin_semana' => $this->input->post('vfin_semana'),
                    'por_horas' => $this->input->post('vhoras'),
                    'por_dias' => $this->input->post('vdias'),
                    'ingresoMensual' => $this->input->post('vingresoMensual'),
                    'a_pie' => $this->input->post('va_pie'),
                    'bicicleta' => $this->input->post('vbicicleta'),
                    'carro_particular' => $this->input->post('vcarro_particular'),
                    'moto' => $this->input->post('vmoto'),
                    'servicio_publico' => $this->input->post('vservicio_publico'),
                    'taxi' => $this->input->post('vtaxi'),
                    'conocido_familiar' => $this->input->post('vconocido_familiar'),
                    'computador' => $this->input->post('vcomputador'),
                    'internet' => $this->input->post('vinternet'),
                    'tablet' => $this->input->post('vtablet'),
                    'celular' => $this->input->post('vcelular'),
                    'fijo' => $this->input->post('vfijo'),
                    'ninguno' => $this->input->post('vninguno'),
                    'fecha_registro' => $this->input->post('vfecha_registro'),
                    'usuario_actualiza' => $this->input->post('vusuario_actualiza')
        );
        
      
         $idu = $this->Get_ListasDesplegables_model->saveIngresos($datos);
            if (!is_null($idu)) {
                $this->response(array('response' => $idu), 200);
            } else {
                $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
            }
        
    }
    
    public function indexDinamica_post($id = '')
    {
       $datos = array('id_usuario' => $id,
                   'totalHogar' => $this->input->post('vtotalHogar'),
                    'abuelos' => $this->input->post('vabuelos'),
                    'amigos' => $this->input->post('vamigos'),
                    'hermanos' => $this->input->post('vhermanos'),
                    'hijos' => $this->input->post('vhijos'),
                    'madre' => $this->input->post('vmadre'),
                    'padre' => $this->input->post('vpadre'),
                    'sobrinos_primos' => $this->input->post('vsobrinos_primos'),
                    'solo' => $this->input->post('vsolo'),
                    'tios' => $this->input->post('vtios'),
                    'pareja' => $this->input->post('vpareja'),
                    'numeroHijos' => $this->input->post('vnumeroHijos'),
                    'edad_0_2' => $this->input->post('v0_2'),
                    'edad_3_5' => $this->input->post('v3_5'),
                    'edad_6_9' => $this->input->post('v6_9'),
                    'edad_10_mas' => $this->input->post('v10_mas'),
                    'personas_cargo' => $this->input->post('vpersonas_cargo'),
                    'personas_cargo_total' => $this->input->post('vpersonasCargoTotal'),
                    'fecha_registro' => $this->input->post('vfecha_registro'),
                    'usuario_actualiza' => $this->input->post('vusuario_actualiza')
        );
        
      
         $idu = $this->Get_ListasDesplegables_model->saveDinamica($datos);
            if (!is_null($idu)) {
                $this->response(array('response' => $idu), 200);
            } else {
                $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
            }
        
    }
    
    public function indexVocacion_post($id = '')
    {
       $datos = array('id_usuario' => $id,
                   'conozcoPrograma' => $this->input->post('vconozcoPrograma'),
                    'camposDesempeno' => $this->input->post('vcamposDesempeno'),
                    'razonPrograma' => $this->input->post('vrazonPrograma'),
                    'opinionCarrera' => $this->input->post('vopinionCarrera'),
                    'materiaRelacionada' => $this->input->post('vmateriaRelacionada'),
                    'cambioCarrera' => $this->input->post('vcambioCarrera'),
                    'visionFuturo' => $this->input->post('vvisionFuturo'),
                    'fecha_registro' => $this->input->post('vfecha_registro'),
                    'usuario_actualiza' => $this->input->post('vusuario_actualiza')
        );
        
      
         $idu = $this->Get_ListasDesplegables_model->saveVocacion($datos);
            if (!is_null($idu)) {
                $this->response(array('response' => $idu), 200);
            } else {
                $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
            }
        
    }
    
    
    public function Psicosociales_get($id)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $datos = $this->Get_ListasDesplegables_model->get_Psicosociales($id);
         echo json_encode($datos);
         
    }
    
    public function Bienestar_get($id)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $datos = $this->Get_ListasDesplegables_model->get_Bienestar($id);
         echo json_encode($datos);
         
    }
    
    public function Academica_get($id)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $datos = $this->Get_ListasDesplegables_model->get_Academica($id);
         echo json_encode($datos);
         
    }
    
  /*   public function IES_get($id)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $datos = $this->Get_ListasDesplegables_model->get_IES($id);
         echo json_encode($datos);
         
    }
*/    
     public function Deudor_get($id)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $datos = $this->Get_ListasDesplegables_model->get_Deudor($id);
         echo json_encode($datos);
         
    }
    
    public function Ingresos_get($id)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $datos = $this->Get_ListasDesplegables_model->get_Ingresos($id);
         echo json_encode($datos);
         
    }
    
    public function Dinamica_get($id)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $datos = $this->Get_ListasDesplegables_model->get_Dinamica($id);
         echo json_encode($datos);
         
    }
    
    public function Vocacion_get($id)
    {
        if (!$id) {
            $this->response(null, 400);
        }
        $datos = $this->Get_ListasDesplegables_model->get_Vocacion($id);
         echo json_encode($datos);
         
    }
    

    public function formacion_programa_get()
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->formacion_programa();
         echo json_encode($datos);
         
    }

    public function traer_ies_get()
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->traer_ies();
         echo json_encode($datos);
         
    }


    
    public function traer_ies_etdh_get()
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->traer_ies_etdh();
         echo json_encode($datos);
         
    }



    
    public function traer_programas_get()
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->traer_programas();
         echo json_encode($datos);
         
    }
    public function modalidad_programas_get()
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->modalidad_programas();
         echo json_encode($datos);
         
    }

    public function razon_institucion_get()
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->razon_institucion();
         echo json_encode($datos);
         
    }

    public function RazonPrograma_get()
    {
        
        $datos = $this->Get_ListasDesplegables_model->getRazonPrograma();
         echo json_encode($datos);
    }


    public function modo_pago_estudio_get()
    {
        $datos = $this->Get_ListasDesplegables_model->modo_pago_estudio();
         echo json_encode($datos);
         
    }
    public function escala_importancia_get()
    {
        $datos = $this->Get_ListasDesplegables_model->escala_importancia();
         echo json_encode($datos);
    }

    public function frases_get()
    {
        $datos = $this->Get_ListasDesplegables_model->frases();
         echo json_encode($datos);
    }

    
    public function proyeccion_futura_get()
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->proyeccion_futura();
         echo json_encode($datos);
         
    }
    public function dispositivos_get()
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->dispositivos();
         echo json_encode($datos);
         
    }

    public function escala_apoyo2_get()
    {
        
        
        $datos = $this->Get_ListasDesplegables_model->escala_apoyo2();
         echo json_encode($datos);
         
    }


    public function GrupoEtnico_get()
    {
        $datos = $this->Get_ListasDesplegables_model->GrupoEtnico();
         echo json_encode($datos);
    }

    
    public function Etnias_get()
    {
        $datos = $this->Get_ListasDesplegables_model->Etnias();
         echo json_encode($datos);
    }

    public function HechoVictimizante_get()
    {
        $datos = $this->Get_ListasDesplegables_model->HechoVictimizante();
         echo json_encode($datos);
    }

    public function TipoDiscapacidad_get()
    {
        $datos = $this->Get_ListasDesplegables_model->TipoDiscapacidad();
         echo json_encode($datos);
    }

    public function PoblacionEspecial_get()
    {
        $datos = $this->Get_ListasDesplegables_model->PoblacionEspecial();
         echo json_encode($datos);
    }

    
    public function OrientacionSexual_get()
    {
        $datos = $this->Get_ListasDesplegables_model->OrientacionSexual();
         echo json_encode($datos);
    }

    public function IdentidadGenero_get()
    {
        $datos = $this->Get_ListasDesplegables_model->IdentidadGenero();
         echo json_encode($datos);
    }

 



    

}

