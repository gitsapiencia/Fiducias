<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Cuestionario extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function fc_expectativas($page = 'v_expectativas', $titulo = 'Expectativas')
    {

        if (!file_exists('application/views/' . $page . '.php')) {

            show_404();
        }

          $documento = $this->input->post('documento');

          //$documento = '';
          //$documento = 1017161370;

        //Traer datos de aspirante registrado datos personales
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/listacolegios/' . $documento);
        $array = json_decode($file);
        $lista = '<option>Seleccionar</option>';
        if (!is_null($array)) {
            foreach ($array as $dato) {
                $lista .= '<option value="' . $dato->colegio . '">' . $dato->colegio . '</option>';
            }
        }


        $this->load->view($page, array('titulo' => $titulo, 'lista' => $lista));
    }


    public function fc_buscar($page = 'v_buscar', $titulo = 'Buscar')
    {

        if (!file_exists('application/views/' . $page . '.php')) {

            show_404();
        }


        $this->load->view($page, array('titulo' => $titulo));
    }

    public function fc_cargarvista($page = 'v_inscripcion', $titulo = 'Expectativa')
    {

        if (!file_exists('application/views/' . $page . '.php')) {

            show_404();
        }

        $periodo = 10;
        $documento = $this->input->get('documento');
        //$documento =1127777777;
        //$documento = null;
       
        //Traer datos de aspirante registrado datos personales

        $datosdp = '';
        $array = null;

        if(!is_null($documento))
        {   
            $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/DatosPersonales/' . $documento . '/' . $periodo);
            $array = json_decode($file);
        }

        if (!is_null($array)) {
            foreach ($array as $dato) {
                $datosdp = array(
                    'tipoBachillerato' => $dato->tipoBachillerato,
                    'mediaTecnica' => $dato->mediaTecnica,
                    'colegio' => $dato->colegio,
                    'tipocolegio' => $dato->tipocolegio,
                    'documento'  => $dato->documento,
                    'periodo'  => $dato->periodo,
                    'tipoDocumento'  => $dato->tipoDocumento,
                    'nombre1'  => $dato->nombre1,
                    'nombre2'  => $dato->nombre2,
                    'apellido1'  => $dato->apellido1,
                    'apellido2'  => $dato->apellido2,
                    'genero'  => $dato->genero,
                    'fechaNacimiento'  => $dato->fechaNacimiento,
                    'departamentoResidencia'  => $dato->departamentoResidencia,
                    'municipioResidencia'  => $dato->municipioResidencia,
                    'comunaResidencia'  => $dato->comunaResidencia,
                    'barrio'  => $dato->barrio,
                    'otroBarrio'  => $dato->otroBarrio,
                    'dirCampo1'  => $dato->dirCampo1,
                    'dirCampo2'  => $dato->dirCampo2,
                    'dirCampo3'  => $dato->dirCampo3,
                    'dirCampo4'  => $dato->dirCampo4,
                    'dirCampo5'  => $dato->dirCampo5,
                    'dirCampo6'  => $dato->dirCampo6,
                    'dirCampo7'  => $dato->dirCampo7,
                    'dirCampo8'  => $dato->dirCampo8,
                    'dirCampo9'  => $dato->dirCampo9,
                    'muestraDir'  => $dato->muestraDir,
                    'telefonoFijo'  => $dato->telefonoFijo,
                    'estrato'  => $dato->estrato,
                    'tieneSisben' => $dato->tieneSisben,
                    'puntajeSisben'  => $dato->puntajeSisben,
                    'correo'  => $dato->correo,
                    'confirmaCorreo'  => $dato->confirmaCorreo,
                    'solicitudAdmision'  => $dato->solicitudAdmision,
                    'institucion_solicitud1'  => $dato->institucion_solicitud1,
                    'programa_solicitud1'  => $dato->programa_solicitud1,
                    'modalidad_solicitud1'  => $dato->modalidad_solicitud1,
                    'admitido_solicitud1'  => $dato->admitido_solicitud1,
                    'institucion_solicitud2'  => $dato->institucion_solicitud2,
                    'programa_solicitud2'  => $dato->programa_solicitud2,
                    'modalidad_solicitud2'  => $dato->modalidad_solicitud2,
                    'admitido_solicitud2'  => $dato->admitido_solicitud2,
                    'institucion_solicitud3'  => $dato->institucion_solicitud3,
                    'programa_solicitud3'  => $dato->programa_solicitud3,
                    'modalidad_solicitud3'  => $dato->modalidad_solicitud3,
                    'admitido_solicitud3'  => $dato->admitido_solicitud3,
                    'institucion_solicitud4'  => $dato->institucion_solicitud4,
                    'programa_solicitud4'  => $dato->programa_solicitud4,
                    'modalidad_solicitud4'  => $dato->modalidad_solicitud4,
                    'admitido_solicitud4'  => $dato->admitido_solicitud4,
                    'institucion_solicitud5'  => $dato->institucion_solicitud5,
                    'programa_solicitud5'  => $dato->programa_solicitud5,
                    'modalidad_solicitud5'  => $dato->modalidad_solicitud5,
                    'admitido_solicitud5'  => $dato->admitido_solicitud5,
                    'RazonNoSolicitudAdmision'  => $dato->RazonNoSolicitudAdmision,
                    'apoyo_padres'  => $dato->apoyo_padres,
                    'apoyo_colegio'  => $dato->apoyo_colegio,
                    'pensamiento_estudio'  => $dato->pensamiento_estudio,
                    'importancia_estudio'  => $dato->importancia_estudio,
                    'importancia_trabajo'  => $dato->importancia_trabajo,
                    'prioridad_tecnologia'  => $dato->prioridad_tecnologia,
                    'tecnologianoCheck1'  => $dato->tecnologianoCheck1,
                    'tecnologianoCheck2'  => $dato->tecnologianoCheck2,
                    'tecnologianoCheck3'  => $dato->tecnologianoCheck3,
                    'tecnologianoCheck4'  => $dato->tecnologianoCheck4,
                    'tecnologianoCheck5'  => $dato->tecnologianoCheck5,
                    'tecnologianoCheck6'  => $dato->tecnologianoCheck6,
                    'tecnologianoCheck7'  => $dato->tecnologianoCheck7,
                    'opcionplanchecked1'  => $dato->opcionplanchecked1,
                    'opcionplanchecked2'  => $dato->opcionplanchecked2,
                    'opcionplanchecked3'  => $dato->opcionplanchecked3,
                    'opcionplanchecked4'  => $dato->opcionplanchecked4,
                    'opcionplanchecked5'  => $dato->opcionplanchecked5,
                    'opcionplanchecked6'  => $dato->opcionplanchecked6,
                    'institucion_futuro'  => $dato->institucion_futuro,
                    'programa_futuro'  => $dato->programa_futuro,
                    'modalidad_futuro'  => $dato->modalidad_futuro,
                    'programa_futuro_otro'  => $dato->programa_futuro_otro,
                    'institucion_futuro_otro'  => $dato->institucion_futuro_otro,
                    'razon_institucion_programa'  => $dato->razon_institucion_programa,
                    'modopagoCheck1'  => $dato->modopagoCheck1,
                    'modopagoCheck2'  => $dato->modopagoCheck2,
                    'modopagoCheck3'  => $dato->modopagoCheck3,
                    'modopagoCheck4'  => $dato->modopagoCheck4,
                    'modopagoCheck5'  => $dato->modopagoCheck5,
                    'modopagoCheck6'  => $dato->modopagoCheck6,
                    'modopagoCheck7'  => $dato->modopagoCheck7,
                    'modopagoCheck8'  => $dato->modopagoCheck8,
                    'modopagoCheck9'  => $dato->modopagoCheck9,
                    'modopagoCheck10'  => $dato->modopagoCheck10,
                    'nombreBecaModoPago'  => $dato->nombreBecaModoPago,
                    'conoce_pp'  => $dato->conoce_pp,
                    'conoce_epm'  => $dato->conoce_epm,
                    'conoce_becas'  => $dato->conoce_becas,
                    'conoce_sapiencia'  => $dato->conoce_sapiencia,
                    'imagen_sapiencia'  => $dato->imagen_sapiencia,
                    'razon_no_estudia'  => $dato->razon_no_estudia,
                    'fecha_registro'  => $dato->fecha_registro,
                    
                    'nombre_representante' => $dato->nombre_representante,
                    'numero_representante' => $dato->numero_representante,
                    'correo_representante' => $dato->correo_representante,
                    'conexion_internet2' => $dato->conexion_internet2,
                    'formacion_programa' => $dato->formacion_programa,
                    'pc_mesa' => $dato->pc_mesa,
                    'pc_portatil' => $dato->pc_portatil,
                    'tablet' => $dato->tablet,
                    'celular_dispositivo' => $dato->celular_dispositivo,
                    'ninguna' => $dato->ninguna,
                    'solicitud_admin2' => $dato->solicitud_admin2,
                    'nivel_formacion2' => $dato->nivel_formacion2,
                    'ies_estudio2' => $dato->ies_estudio2,
                    'cual_otroies2' => $dato->cual_otroies2,
                    'programa_estudio2' => $dato->programa_estudio2,
                    'cual_otroprograma2' => $dato->cual_otroprograma2,
                    'modalidad_programa2' => $dato->modalidad_programa2,
                    'razon_insti_programa2' => $dato->razon_insti_programa2,
                    'pagar_estudio2' => $dato->pagar_estudio2,
                    'cual_otro_pagar2' => $dato->cual_otro_pagar2,
                    'no_solicitud_admision2' => $dato->no_solicitud_admision2,
                    'otraRazon' => $dato->otraRazon,
                    'escala_califica_familiar2' => $dato->escala_califica_familiar2,
                    'escala_califica_colegio2' => $dato->escala_califica_colegio2,
                    'frases_pensamiento2' => $dato->frases_pensamiento2,
                    'califica_import_estudio2' => $dato->califica_import_estudio2,
                    'califica_import_trabajo2' => $dato->califica_import_trabajo2,
                    'espera_ano2' => $dato->espera_ano2,
                    'conoce_sapiencia2' => $dato->conoce_sapiencia2,
                    'imagen_sapiencia2' => $dato->imagen_sapiencia2,
                    'beca_sapiencia2' => $dato->beca_sapiencia2,
                    'estrategia_sapiencia2' => $dato->estrategia_sapiencia2,

                    'razon_institucion' => $dato->razon_institucion,
                    'razon_programa' => $dato->razon_programa, 
                    'orientacion_sexual' => $dato->orientacion_sexual,
                    'identidad_genero' => $dato->identidad_genero, 

                    'tiene_hijos' => $dato->tiene_hijos,
                    'cantidad_hijos' => $dato->cantidad_hijos, 
                    'padremadre_soltero' => $dato->padremadre_soltero,
                    'edad_primer_embarazo' => $dato->edad_primer_embarazo , 

                    'grupo_etnico' => $dato->grupo_etnico,
                    'etnia' => $dato->etnia,
                    'otra_etnia' => $dato->otra_etnia, 

                    'es_victima_violencia' => $dato->es_victima_violencia,
                    'hecho_victimizante' => $dato->hecho_victimizante,
                    'discapacidad' => $dato->discapacidad,
                    'poblacion_especial' => $dato->poblacion_especial, 

                    'hechoVictimizanteCheck1'  => $dato->hechoVictimizante1, 
                    'hechoVictimizanteCheck2'  => $dato->hechoVictimizante2, 
                    'hechoVictimizanteCheck3'  => $dato->hechoVictimizante3, 
                    'hechoVictimizanteCheck4'  => $dato->hechoVictimizante4, 
                    'hechoVictimizanteCheck5'  => $dato->hechoVictimizante5, 
                    'hechoVictimizanteCheck6'  => $dato->hechoVictimizante6, 
                    'hechoVictimizanteCheck7'  => $dato->hechoVictimizante7, 
                    'hechoVictimizanteCheck8'  => $dato->hechoVictimizante8, 
                    'hechoVictimizanteCheck9'  => $dato->hechoVictimizante9, 

                    'poblacionEspCheck1'  => $dato->poblacionEsp1, 
                    'poblacionEspCheck2'  => $dato->poblacionEsp2, 
                    'poblacionEspCheck3'  => $dato->poblacionEsp3, 
                    'poblacionEspCheck4'  => $dato->poblacionEsp4, 
                    'poblacionEspCheck5'  => $dato->poblacionEsp5, 
                    'poblacionEspCheck6'  => $dato->poblacionEsp6, 
                    'poblacionEspCheck9'  => $dato->poblacionEsp9, 

                    'discapacidadCheck1'  => $dato->discapacidad1, 
                    'discapacidadCheck4'  => $dato->discapacidad4, 
                    'discapacidadCheck8'  => $dato->discapacidad8, 
                    'discapacidadCheck9'  => $dato->discapacidad9, 
                    'discapacidadCheck10'  => $dato->discapacidad10, 
                    'discapacidadCheck11'  => $dato->discapacidad11 , 

                    'otroTipoDoc' => $dato->otroTipoDoc  , 
                    
                    
                );
            }
        } else {

            $datosdp = array(
                'tipoBachillerato'=> '',
                'mediaTecnica'=> '',
                'tipocolegio' => '',
                'colegio' => '',
                'documento'  => $this->input->get('documento'),
                'periodo'  => '',
                'tipoDocumento'  => '',
                'nombre1'  => '',
                'nombre2'  => '',
                'apellido1'  => '',
                'apellido2'  => '',
                'genero'  => '',
                'fechaNacimiento'  => '',
                'nombre_representante' => '',
                'numero_representante' => '',
                'correo_representante' => '',
                'departamentoResidencia'  => '1',
                'municipioResidencia'  => '',
                'comunaResidencia'  => '',
                'barrio'  => '',
                'otroBarrio'  => '',
                'dirCampo1'  => '',
                'dirCampo2'  => '',
                'dirCampo3'  => '',
                'dirCampo4'  => '',
                'dirCampo5'  => '',
                'dirCampo6'  => '',
                'dirCampo7'  => '',
                'dirCampo8'  => '',
                'dirCampo9'  => '',
                'muestraDir'  => '',
                'telefonoFijo'  => '',
                'estrato'  => '',
                'tieneSisben' => '',
                'puntajeSisben'  => '',
                'correo'  => '',
                'confirmaCorreo'  => '',
                'solicitudAdmision'  => '',
                'institucion_solicitud1'  => '',
                'programa_solicitud1'  => '',
                'modalidad_solicitud1'  => '',
                'admitido_solicitud1'  => '',
                'institucion_solicitud2'  => '',
                'programa_solicitud2'  => '',
                'modalidad_solicitud2'  => '',
                'admitido_solicitud2'  => '',
                'institucion_solicitud3'  => '',
                'programa_solicitud3'  => '',
                'modalidad_solicitud3'  => '',
                'admitido_solicitud3'  => '',
                'institucion_solicitud4'  => '',
                'programa_solicitud4'  => '',
                'modalidad_solicitud4'  => '',
                'admitido_solicitud4'  => '',
                'institucion_solicitud5'  => '',
                'programa_solicitud5'  => '',
                'modalidad_solicitud5'  => '',
                'admitido_solicitud5'  => '',
                'RazonNoSolicitudAdmision'  => '',
                'apoyo_padres'  => '',
                'apoyo_colegio'  => '',
                'pensamiento_estudio'  => '',
                'importancia_estudio'  => '',
                'importancia_trabajo'  => '',
                'prioridad_tecnologia'  => '',
                'tecnologianoCheck1'  => '',
                'tecnologianoCheck2'  => '',
                'tecnologianoCheck3'  => '',
                'tecnologianoCheck4'  => '',
                'tecnologianoCheck5'  => '',
                'tecnologianoCheck6'  => '',
                'tecnologianoCheck7'  => '',
                'opcionplanchecked1'  => '',
                'opcionplanchecked2'  => '',
                'opcionplanchecked3'  => '',
                'opcionplanchecked4'  => '',
                'opcionplanchecked5'  => '',
                'opcionplanchecked6'  => '',
                'institucion_futuro'  => '',
                'programa_futuro'  => '',
                'modalidad_futuro'  => '',
                'programa_futuro_otro'  => '',
                'institucion_futuro_otro'  => '',
                'razon_institucion'  => '',
                'razon_programa'  => '',
                'modopagoCheck1'  => '',
                'modopagoCheck2'  => '',
                'modopagoCheck3'  => '',
                'modopagoCheck4'  => '',
                'modopagoCheck5'  => '',
                'modopagoCheck6'  => '',
                'modopagoCheck7'  => '',
                'modopagoCheck8'  => '',
                'modopagoCheck9'  => '',
                'modopagoCheck10'  => '',
                'nombreBecaModoPago'  => '',
                'conoce_pp'  => '',
                'conoce_epm'  => '',
                'conoce_becas'  => '',
                'conoce_sapiencia'  => '',
                'imagen_sapiencia'  => '',
                'razon_no_estudia'  => '',
                'fecha_registro'  => '',

                'conexion_internet2' => '',
                'formacion_programa' => '',
                'pc_mesa' => '',
                'pc_portatil' => '',
                'tablet' => '',
                'celular_dispositivo' => '',
                'ninguna' => '',
                'solicitud_admin2' => '',
                'nivel_formacion2' => '',
                'ies_estudio2' => '',
                'cual_otroies2' => '',
                'programa_estudio2' => '',
                'cual_otroprograma2' => '',
                'modalidad_programa2' => '',
                'razon_insti_programa2' => '',
                'pagar_estudio2' => '',
                'cual_otro_pagar2' => '',
                'no_solicitud_admision2' => '',
                'otraRazon' => '',
                'escala_califica_familiar2' => '',
                'escala_califica_colegio2' => '',
                'frases_pensamiento2' => '',
                'califica_import_estudio2' => '',
                'califica_import_trabajo2' => '',
                'espera_ano2' => '',
                'conoce_sapiencia2' => '',
                'imagen_sapiencia2' => '',
                'beca_sapiencia2' => '',
                'estrategia_sapiencia2' => '', 

                'razon_institucion' => '',
                'razon_programa' => '', 
                'razon_institucion' => '',
                'razon_programa' => '', 
                'orientacion_sexual' => '', 
                'identidad_genero' => '', 
                'tiene_hijos' => '', 
                'cantidad_hijos' => '', 
                'padremadre_soltero' => '', 
                'edad_primer_embarazo' => '' , 
                'grupo_etnico' => '',
                'etnia' => '',
                'otra_etnia' => '', 
                'es_victima_violencia' => '',
                'hecho_victimizante' => '',
                'discapacidad' => '',
                'poblacion_especial' => '', 


                'hechoVictimizanteCheck1'  => '', 	
                'hechoVictimizanteCheck2'  => '', 	
                'hechoVictimizanteCheck3'  => '', 	
                'hechoVictimizanteCheck4'  => '', 	
                'hechoVictimizanteCheck5'  => '', 	
                'hechoVictimizanteCheck6'  => '', 	
                'hechoVictimizanteCheck7'  => '', 	
                'hechoVictimizanteCheck8'  => '', 	
                'hechoVictimizanteCheck9'  => '', 	

                'poblacionEspCheck1'  => '', 	 
                'poblacionEspCheck2'  => '', 	 
                'poblacionEspCheck3'  => '', 	 
                'poblacionEspCheck4'  => '', 	 
                'poblacionEspCheck5'  => '', 	 
                'poblacionEspCheck6'  => '', 	 
                'poblacionEspCheck9'  => '', 	 

                'discapacidadCheck1'  => '', 	
                'discapacidadCheck4'  => '', 	
                'discapacidadCheck8'  => '', 	
                'discapacidadCheck9'  => '', 	
                'discapacidadCheck10' => '', 	 
                'discapacidadCheck11' => '', 
                'otroTipoDoc' => '' 
                


            );
        }

        // Trae lista de medias técnicas
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/MediaTecnica/');
        $array = json_decode($file);
        $mediatecnica = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $mediatecnica .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }


        // Trae lista de modalidad estudio
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/ModalidadEstudio/');
        $array = json_decode($file);
        $modalidad = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $modalidad .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de razones de no solicitud a universidades
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/RazonNoSolicitud');
        $array = json_decode($file);
        $razonno = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $razonno .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de razones de escala de apoyo
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/EscalaApoyo');
        $array = json_decode($file);
        $escalaapoyo = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $escalaapoyo .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de escala de importancia
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/EscalaImportancia');
        $array = json_decode($file);
        $escalaimportancia = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $escalaimportancia .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de frases del pensamiento estudio
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/PensamientoEstudio');
        $array = json_decode($file);
        $pensamientoestudio = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $pensamientoestudio .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de SiNo
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/SiNo_NoSabe');
        $array = json_decode($file);
        $sino = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $sino .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de SiNo
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/SiNo');
        $array = json_decode($file);
        $si_no = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $si_no .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        

        // Trae lista de Priorodad tecnologia
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/PrioridadTecnologia');
        $array = json_decode($file);
        $prioridadtecnolofia = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $prioridadtecnolofia .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de razones de no estudiar tecnologia
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/dispositivos');
        $array = json_decode($file);
        $dispositivos = '';

        foreach ($array as $dato) {

            //   $listaLGTBI .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';

            $dispositivos .= '<div class="custom-control custom-checkbox">
               <input required type="checkbox" class="custom-control-input" name="dispositivoschk" value="1" id="dispositivosCheck' . $dato->id . '" onclick="dispositivoschecked(' . $dato->id . ')">
               <label class="custom-control-label" for="dispositivosCheck' . $dato->id . '" style="position: static">' . $dato->nombre . ' </label>
           </div>';
        }


        // Trae lista de razones de no estudiar tecnologia
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/PlanFuturo');
        $array = json_decode($file);
        $plan = '<option value="">Seleccionar</option>';

        foreach ($array as $dato) {

           $plan .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';

          /*  $plan .= '<div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" name="planchk" value="1" id="planCheck' . $dato->id . '" onclick="opcionplanchecked(' . $dato->id . ')">
               <label class="custom-control-label" for="planCheck' . $dato->id . '" style="position: static">' . $dato->nombre . ' </label>
           </div>'; */

        }

        // Trae lista de razon elegir universidad y programa
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/RazonInstitucionPrograma');
        $array = json_decode($file);
        $razoninstiucionprograma = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $razoninstiucionprograma .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de modos de pago de estudio
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/ModoPagoEstudio');
        $array = json_decode($file);
        $modopago = '';

        foreach ($array as $dato) {


            $modopago .= '<div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="modopagochk" value="1" id="modopagoCheck' . $dato->id . '" onclick="opcionmodopagochecked(' . $dato->id . ')">
                <label class="custom-control-label" for="modopagoCheck' . $dato->id . '" style="position: static">' . $dato->nombre . ' </label>
            </div>';
        }

        // Trae lista de conoce sapiencia
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/ConoceSapiencia');
        $array = json_decode($file);
        $conocesapiencia = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $conocesapiencia .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de imagen sapiencia
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/ImagenSapiencia');
        $array = json_decode($file);
        $imagensapiencia = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $imagensapiencia .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de razones de no estudiar
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/RazonNoEstudiar');
        $array = json_decode($file);
        $razonnoestudia = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $razonnoestudia .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de tipo de documentos
        $file = file_get_contents(IP . 'backend_inscripcion_epm/Get_ListasDesplegables/Tipodocumento');
        $array = json_decode($file);
        $tipodoc = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $tipodoc .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de sexo
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/Sexo');
        $array = json_decode($file);
        $sexo = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $sexo .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de Departamento
        $file = file_get_contents(IP . 'backend_inscripcion_epm/Get_ListasDesplegables/Departamento');
        $array = json_decode($file);
        $departamento = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $departamento .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de Estrato
        $file = file_get_contents(IP . 'backend_inscripcion_epm/Get_ListasDesplegables/Estrato');
        $array = json_decode($file);
        $estrato = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {
            $estrato .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }


        // Trae lista de Sisben
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/Sisben');
        $array = json_decode($file);
        $sisben = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            if ($dato->id !== '6') {

                $sisben .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
            }
        }

        // Trae lista de tipos de via para direccion
        $file = file_get_contents(IP . 'backend_formularios_becas/Get_ListasDesplegables/TipoVia');
        $array = json_decode($file);
        $Dirtipovia = '<option value=""></option>';
        foreach ($array as $dato) {

            $Dirtipovia .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de orientacion para direccion
        $file = file_get_contents(IP . 'backend_formularios_becas/Get_ListasDesplegables/DirOrientacion');
        $array = json_decode($file);
        $Dirorientacion = '<option value=""></option>';
        foreach ($array as $dato) {

            $Dirorientacion .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        // Trae lista de orientacion para direccion
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/IES');
        $array = json_decode($file);
        $ies = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $ies .= '<option value="' . $dato->ID_IES . '">' . $dato->NOMBRE_IES . '</option>';
        }

        // Trae lista de colegios
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/IEM');
        $array = json_decode($file);
        $colegio = '';
        foreach ($array as $dato) {

            $colegio .= '<option value="' . $dato->NOMBRE_SEDE . '" data-tipo="' . $dato->TIPO_ESTABLECIMIENTO . '">' . $dato->NOMBRE_SEDE . '</option>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/formacion_programa');
        $array = json_decode($file);
        $formacion_programa = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $formacion_programa .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/traer_ies');
        $array = json_decode($file);
        $traer_ies = '';
        foreach ($array as $dato) {

            $traer_ies .= '<option value="' . $dato->NOMBRE_IES . '" data-value="' . $dato->ID_IES . '">' . $dato->NOMBRE_IES . '</option>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/traer_ies_etdh');
        $array = json_decode($file);
        $traer_ies_etdh = '';
        foreach ($array as $dato) {

            $traer_ies_etdh .= '<option value="' . $dato->nombre . '" data-value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }        

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/traer_programas');
        $array = json_decode($file);
        $traer_programas = '';
        foreach ($array as $dato) {

            $traer_programas .= '<option value="' . $dato->NOMBRE_PROGRAMA . '" data-value="' . $dato->ID_PROGRAMA . '">' . $dato->NOMBRE_PROGRAMA . '</option>';
        }
        $traer_programas .= '<option value="OTRO" data-value="-999">OTRO</option>';

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/modalidad_programas');
        $array = json_decode($file);
        $modalidad_programas = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $modalidad_programas .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/razon_institucion');
        $array = json_decode($file);
        $razon_institucion = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $razon_institucion .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/RazonPrograma');
        $array = json_decode($file);
        $razon_programa = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $razon_programa .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }        

        

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/modo_pago_estudio');
        $array = json_decode($file);
        $modo_pago_estudio = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $modo_pago_estudio .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/escala_importancia');
        $array = json_decode($file);
        $escala_importancia = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $escala_importancia .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/frases');
        $array = json_decode($file);
        $frases = '<option value="">Seleccionar</option>';
           foreach ($array as $dato) {
            
                $frases .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
               
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/proyeccion_futura');
        $array = json_decode($file);
        $proyeccion_futura = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $proyeccion_futura .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/escala_apoyo2');
        $array = json_decode($file);
        $escala_apoyo2 = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $escala_apoyo2 .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }




        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/GrupoEtnico');
        $array = json_decode($file);
        $grupoEtnico = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $grupoEtnico .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }        


        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/Etnias');
        $array = json_decode($file);
        $etnia = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $etnia .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }        

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/HechoVictimizante');
        $array = json_decode($file);
        $hechoVictimizante = '';
        foreach ($array as $dato) {
            $hechoVictimizante .= '<div class="custom-control custom-checkbox">
               <input required type="checkbox" class="custom-control-input" name="hechoVictimizantechk" value="1" id="hechoVictimizanteCheck' . $dato->id . 
               '" onclick="ValidaCheckMutiple(' . $dato->id . ',\'hechoVictimizante\', 0)">
               <label class="custom-control-label" for="hechoVictimizanteCheck' . $dato->id . '" style="position: static">' . $dato->nombre . ' </label>
           </div>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/TipoDiscapacidad');
        $array = json_decode($file);
        $discapacidades = '';
        foreach ($array as $dato) {
            $discapacidades .= '<div class="custom-control custom-checkbox">
               <input required type="checkbox" class="custom-control-input" name="discapacidadeschk" value="1" id="discapacidadesCheck' . $dato->id . 
               '" onclick="ValidaCheckMutiple(' . $dato->id . ',\'discapacidades\', 8)">
               <label class="custom-control-label" for="discapacidadesCheck' . $dato->id . '" style="position: static">' . $dato->nombre . ' </label>
           </div>';
        }  

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/PoblacionEspecial');
        $array = json_decode($file);
        $poblacionEsp = '';
        foreach ($array as $dato) {
            $poblacionEsp .= '<div class="custom-control custom-checkbox">
               <input required type="checkbox" class="custom-control-input" name="poblacionEspchk" value="1" id="poblacionEspCheck' . $dato->id . 
               '" onclick="ValidaCheckMutiple(' . $dato->id . ',\'poblacionEsp\', 9)">
               <label class="custom-control-label" for="poblacionEspCheck' . $dato->id . '" style="position: static">' . $dato->nombre . ' </label>
           </div>';
        }

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/OrientacionSexual');
        $array = json_decode($file);
        $orientacionSexual = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $orientacionSexual .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }        

        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/IdentidadGenero');
        $array = json_decode($file);
        $identidadGenero = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $identidadGenero .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }        





                

        $this->load->view($page, array(
            'titulo' => $titulo, 'modalidad' => $modalidad, 'sino' => $sino, 'si_no' => $si_no,
            'razonno' => $razonno, 'escalaapoyo' => $escalaapoyo, 'pensamientoestudio' => $pensamientoestudio,
            'escalaimportancia' => $escalaimportancia, 'prioridadtecnolofia' => $prioridadtecnolofia,
            'dispositivos' => $dispositivos, 'plan' => $plan, 'razoninstiucionprograma' => $razoninstiucionprograma,
            'modopago' => $modopago, 'conocesapiencia' => $conocesapiencia, 'imagensapiencia' => $imagensapiencia,
            'razonnoestudia' => $razonnoestudia, 'tipodoc' => $tipodoc, 'sexo' => $sexo, 'departamento' => $departamento,
            'estrato' => $estrato, 'sisben' => $sisben, 'Dirtipovia' => $Dirtipovia, 'Dirorientacion' => $Dirorientacion,
            'periodo' => $periodo, 'datosdp' => $datosdp, 'ies' => $ies, 'colegio' => $colegio,
            'formacionprograma' => $formacion_programa, 'traer_ies' => $traer_ies, 'traer_programas' => $traer_programas,
            'modalidad_programas' => $modalidad_programas, 
            'modo_pago_estudio' => $modo_pago_estudio, 'escala_importancia' => $escala_importancia, 'frases' => $frases,
            'proyeccion_futura' => $proyeccion_futura, 'escala_apoyo2' => $escala_apoyo2, 'mediatecnica' => $mediatecnica, 
            'razon_institucion' => $razon_institucion, 'razon_programa' => $razon_programa, 
            'grupoEtnico' => $grupoEtnico, 'etnia' => $etnia, 'hechoVictimizante' => $hechoVictimizante,
            'discapacidades'=>$discapacidades, 'poblacionEsp'=>$poblacionEsp, 
            'orientacionSexual'=> $orientacionSexual, 'identidadGenero'=> $identidadGenero , 
            'traer_ies_etdh' => $traer_ies_etdh
            
        ));
        //FIN LEVANTA LA VISTA
    }

    // Trae lista de rangos por períodos de las pruebas deestado
    public function fc_traeprogramasies()
    {
        $idies = $this->input->get('vidies');
        $file = file_get_contents(IP . 'backend_odes_expectativas/Get_ListasDesplegables/findprogramasies/' . $idies . '');
        $array = json_decode($file);
        $programas = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $programas .= '<option data-tipo="' . $dato->NIVEL_FORMACION . '"  value="' . $dato->ID_PROGRAMA . '">' . $dato->NOMBRE_PROGRAMA . '</option>';
        }


        echo ($programas);
    }


    //Buscar municipio por departamento
    public function fc_buscarMunicipio()
    {
        $departamento = $this->input->get('departamento');
        $file = file_get_contents(IP . 'backend_inscripcion_epm/Get_ListasDesplegables/Municipio_find_get/' . $departamento . '');
        $array = json_decode($file);
        $municipios = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $municipios .= '<option value="' . $dato->id . '">' . ucwords(strtolower($dato->nombre)) . '</option>';
        }

        echo ($municipios);
    }

    // Trae lista de comunas residencia segun municipio donde vive
    public function fc_listaComunaResidencia()
    {
        $rm = $this->input->get('vrm');
        $file = file_get_contents(IP . 'backend_inscripcion_epm/Get_ListasDesplegables/ListaComuna_find_get/' . $rm);
        $array = json_decode($file);

        $lista = '<option value="">Seleccionar</option>';

        foreach ($array as $dato) {


            $lista .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        echo ($lista);
    }

    // Trae lista de barrios por id comuna
    public function fc_traerbarrios()
    {
        $idcomuna = $this->input->get('vidcomuna');
        $file = file_get_contents(IP . 'backend_formularios_becas/Get_ListasDesplegables/Barrio_find_get/' . $idcomuna . '');
        $array = json_decode($file);
        $barrios = '<option value="">Seleccionar</option>';
        foreach ($array as $dato) {

            $barrios .= '<option value="' . $dato->id . '">' . $dato->nombre . '</option>';
        }

        echo ($barrios);
    }

    public function fc_envioCorreoRepresentante()
	{
		

            $mensaje = 'Cordial Saludo;<br><br>
            En la Agencia de Educación Postsecundaria de Medellín- SAPIENCIA con NIT 900.602.106-0, tenemos un interés permanente por comprender las dinámicas asociadas a la educación postsecundaria y de esta manera orientar estratégicamente nuestro quehacer para responder a las necesidades y oportunidades que tiene el municipio en esta materia.
            Anualmente desde el Observatorio de Sapiencia –ODES de Sapiencia se realiza el estudio de expectativas de estudiantes de 11° para la continuidad a la educación postsecundaria, el cual, nos ha permitido identificar tendencias referidas a los intereses y aspiraciones de los jóvenes bachilleres de la ciudad de Medellín en este tema. 
            <br><br>
            En este sentido, en colaboración con las Institución de Educación del municipio hemos realizado 
            el estudio en mención y de acuerdo a las disposiciones legales usted se encuentra registrado como representante 
            de la persona que diligenció esta encuesta. (Formulario disponible <a href="https://fondos.sapiencia.gov.co/convocatorias/frontend_odes_expectativas/index.php/Cuestionario/fc_cargarvista?documento='.$this->input->post('documento').'">aquí</a>) <br><br>
            Recuerde que sus derechos como titular y/o representante son los previstos en la Constitución Política de Colombia y en la Ley 1581 de 2012, por tanto si desea  conocer, consultar, actualizar, rectificar y suprimir la información, solicitar prueba de esta autorización y revocarla (cuando ello sea posible y no se requieran los datos en virtud de las funciones legales de la Agencia de Educación Postsecundaria de Medellín - Sapiencia), podrá hacerlo a través de los canales o medios dispuestos por la Agencia de Educación Postsecundaria de Medellín- SAPIENCIA para la atención al público: <br><br>
            •	Línea de atención telefónica PBX 4447947 <br>
            •	Correo electrónico: info@sapiencia.gov.co <br>
            •	Oficina de atención al ciudadano disponibles de lunes a jueves de 8:00am a 12:30pm y de 1:30pm a 5:15pm y los viernes de 8:00am a 12:30pm y 1:30pm a 4:00pm. [Horario sujeto a cambios debido a la pandemia del Covid-19)
            <br><br>
            Atentamente;
            <br><br>
            Observatorio de Sapiencia- ODES<br>
            observatorio@sapiencia.gov.co
           
            ';
		

		$cmailusuaior = '<img src="' . base_url() . 'resources/img/banner_mail.png" style="width: 400px;height: 100px;">
            <br><br>Hola ' . $this->input->post('nombre_representante') . '<br><br>
            '.$mensaje.'    
            <br><br>
            ¡Haz parte de la comunidad Sapiencia!<br>
            <a href="https://www.instagram.com/sapienciamed/"><img src="' . base_url() . 'resources/img/instagram.jpg" style="width: 40px;height: 40px;"></a>
            <a href="https://www.facebook.com/sapienciamed/"><img src="' . base_url() . 'resources/img/facebook.jpg" style="width: 40px;height: 40px;"></a>
            <a href="https://www.twitter.com/sapienciamed/"><img src="' . base_url() . 'resources/img/twitter.png" style="width: 40px;height: 40px;"></a><br>
            ';
		$cnombre = '1';
		/* foreach ($cmail as $cm)
     {
         $cmailusuaior = 'El usuario: <strong>'.$cm -> nombre.'</strong>, acaba de realizar una solicitud de informacion a sistemas con el id '.$cidamin.' y la siguiente observacion: '.$cm -> textocaso.'.<br><hr><h4>Gestion de la Informacion - SOFTBOX SAS - 6000 Familias vivien Mejor</h4>';
         $cnombre = $cm -> nombre;

     }*/


		if ($cnombre == '') {
			//   echo("<script>alert('PHP: ".$cnombre."');</script>");
		} else {
			//cargamos la libreria email de ci
			$this->load->library("email");

			$configGmail = array(
					'smtp_crypto' => 'tls', 
					'protocol' => 'smtp',
					'smtp_host' => 'smtp.office365.com',
					'smtp_port' => 587,
					'smtp_user' => 'convocatorias1@sapiencia.gov.co',
					'smtp_pass' => 'Agencia.2021',
					'mailtype' => 'html',
					'charset' => 'utf-8',
					'crlf' => "\r\n",
					'newline' => "\r\n"
			);

			//cargamos la configuracion para enviar con gmails
			$this->email->initialize($configGmail);
			//fin nuevo

			$this->email->from('convocatorias1@sapiencia.gov.co', 'Encuesta');
			$this->email->to($this->input->post('correo_representante'));
			// $this->email->to('anamilenatamayo@gmail.com');
			$this->email->subject('[Aviso de privacidad] Encuesta sobre expectativas de estudiantes del grado 11 para la continuidad en la educación postsecundaria.');
			$this->email->message($cmailusuaior);
			$this->email->send();
			//con esto podemos ver el resultado
			var_dump($this->email->print_debugger());

		}


	}
}
