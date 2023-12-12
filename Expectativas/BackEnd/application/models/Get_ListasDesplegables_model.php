<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_ListasDesplegables_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_MediaTecnica()
    {
        $query = $this->db->select('*')->from('odes_expectativas_programas_mediatecnica')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    
    public function get_RazonNoEstudiar()
    {
        $query = $this->db->select('*')->from('odes_expectativas_razon_no_estudiar')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_ImagenSapiencia()
    {
      //  $query = $this->db->select('*')->from('odes_seguimiento_imagen_agencia')->get();
      $query = $this->db->query('select * from odes_seguimiento_imagen_agencia where id in (4,5,6,7,8)'); 
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_ConoceSapiencia()
    {
        $query = $this->db->select('*')->from('odes_seguimiento_conoce_agencia')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }
    
    public function get_ModoPagoEstudio()
    {
        $query = $this->db->select('*')->from('odes_expectativas_modo_pago_estudio')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_RazonInstitucionPrograma()
    {
        $query = $this->db->select('*')->from('odes_expectativas_razon_institucion_programa')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }
    
    public function get_ModalidadEstudio()
    {
        $query = $this->db->select('*')->from('odes_expectativas_modalidad_estudio')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_RazonNoSolicitud()
    {
        
        //$query = $this->db->query('select * from odes_expectativas_razon_no_solicitud order by field (id,1,2,3,5,6,7,4,8,9)');
        
        $query = $this->db->select('*')->from('odes_expectativas_razon_no_solicitud')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_EscalaApoyo()
    {
        $query = $this->db->select('*')->from('odes_expectativas_escala_apoyo')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_PensamientoEstudio()
    {
        $query = $this->db->select('*')->from('odes_expectativas_pensamiento_estudio')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_EscalaImportancia()
    {
        $query = $this->db->select('*')->from('odes_expectativas_escala_importancia')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_PrioridadTecnologia()
    {
        $query = $this->db->select('*')->from('odes_expectativas_prioridad_tecnologia')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_TecnologiaNo()
    {
        $query = $this->db->select('*')->from('odes_expectativas_tecnologia_no')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_PlanFuturo()
    {
        $query = $this->db->select('*')->from('odes_expectativas_plan_futuro')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function get_SiNo_NoSabe()
    {
        
        $query = $this->db->select('*')->from('si_no_nose')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }

    public function get_SiNo()
    {
        
        $query = $this->db->select('*')->from('si_no')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    

    public function save($datos)
    {
         $query = $this->db->select('*')->from('odes_expectativas_datos_generales')->where('documento',$datos['documento'])->where('periodo',$datos['periodo'])->get();    
            
            if ($query->num_rows() > 0) {
                $this->db->where('documento',$datos['documento'])->where('periodo',$datos['periodo'])->update('odes_expectativas_datos_generales',$datos);  
                return $datos['documento'];
            }else{
                $this->db->set($datos)->insert('odes_expectativas_datos_generales');
                if ($this->db->affected_rows() === 1) {
                    return $this->db->insert_id();
                }
            }
    }

    


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function totales_comunas($id, $periodo)
    {
  
       
        $query = $this->db->query('call sp_legalizacion_totales_comunas_epm(' . $id . ',' . $periodo . ',100234)');
  
      
      
      
      if ($query->num_rows() > 0) {
        return $query->result_array();
      }
  
      return null;
  
    }
    


    public function reportePDFDatosPersonales($id,$periodo){
    
        $query = $this->db->query('call sp_epm_pdf_informe_datospersonales(' . $id . ',' . $periodo . ')');
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }

    //PDF CARTA MATRICULA
    public function cartaMatriculaEPM($id,$periodo){
    
        $query = $this->db->query('call sp_epm_carta_matricula(' . $id . ',' . $periodo . ')');
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }
    //PDF FORMULARIO
    public function reportePDFAcademica($id,$periodo){
    
        $query = $this->db->query('call sp_epm_pdf_informe_academica(' . $id . ',' . $periodo . ')');
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }

    public function reportePDFIES($id,$periodo){
    
        $query = $this->db->query('call sp_epm_pdf_informe_ies(' . $id . ',' . $periodo . ')');
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }

    public function reportePDFDeudor($id,$periodo){
    
        $query = $this->db->query('call sp_epm_pdf_informe_deudor(' . $id . ',' . $periodo . ')');
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }



     // Validacion documento
     public function EstadoAspirante($id, $periodo){
    
        $query = $this->db->select('*')->from('bitacora_usuario')->where('id_usuario',$id)->where('tipo_convocatoria',10)->where('periodo',$periodo)->get();   
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }

     public function updateF($datos)
     {
        $querymod = $this->db->select('modalidadCreditoSolicita')->from('epm_aspirante_iesyprogramas')->where('id_usuario', $datos['user_id'])->where('periodo', $datos['periodo'])->get();
        $rowm = $querymod->row();
        
   
       $query = $this->db->query('call callg_instar_validar_legalizacion(' . $datos['periodo'] . ',' . $datos['user_id'] . ',1.07,1.07,828116,' . $datos['usuario_valida'] . ',100234,'.$rowm->modalidadCreditoSolicita.',2)');
      
       
       if ($query->num_rows() > 0) {
         return $query->result_array();
       }
   
       return null;
   
   
     }
   
    public function revertir_legalizacion($id, $periodo)
    {
        $this->db->query('call revertir_legalizacion(' . $id . ',' . $periodo . ',100234)');

        return 1;
    }


     public function valorCantDat($id,$periodo){


        $query = $this->db->query('call sp_validaciondoc_completo_pp_epm(' . $id . ',' . $periodo . ')');
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }

    public function datosPrograma($id){


        $query = $this->db->select('*')->from('programas_pregrado')->where('ID_PROGRAMA',$id)->get();  
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }


     public function observacionAspirante($id,$periodo){


        $query =  $this->db->select('obs.observacion,obs.fecha, concat_ws(" ",lo.primerNombre,lo.segundoNombre,lo.primerApellido,lo.segundoApellido) nombre')
        ->from('fondos_inscripcion_epm_validacion_obs obs')
        ->where('obs.id_usuario',$id)
        ->where('obs.periodo',$periodo)
        ->join('login_usuario lo','lo.id_usuario = obs.valida_id','left')
        ->order_by('obs.fecha','desc')
        ->get();
    
        // $query = $this->db->select('observacion')->from('fondos_inscripcion_epm_validacion_obs')->where('id_usuario',$id)->where('periodo',$periodo)->get();   
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }

     public function causalesRechazo(){
    
        $query = $this->db->select('*')->from('causales_rechazo_PP')->get();   
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }

      public function ListaDocInscripcionEPM($id = null)
    {
            
            $query = $this->db->select('*')->from('listado_inscripcionEPM')->get();   
            if ($query->num_rows() > 0) {
                 return $query->result_array();
            }

            return null;
        
    }
    
       public function validaDocInscripcionEPM($id = null,$periodo)
    {
             $query =  $this->db->select('vd.doc_id,vd.user_id,e.nombre as estado,l.primerNombre as nombre,l.primerApellido as apellido,r.descripcion as observacion,vd.fecha')
                                        ->from('fondos_inscripcion_epm_validacion_doc vd')
                                        ->where('vd.user_id',$id)
                                        ->where('vd.periodo',$periodo)
                                        ->join('estado_valida e','e.id = vd.estado','left')
                                        ->join('causales_rechazo_PP r','r.id = vd.observacion','left')
                                        ->join('login_usuario l','l.id_usuario = vd.valida_id','left')
                                        ->order_by('vd.id','desc')
                                        ->get();
             if ($query->num_rows() > 0) {
                 return $query->result_array();
            }

            return null;
        
        
    }

    public function indexObservacion($datos)
    {
        $query = $this->db->select('*')->from('fondos_inscripcion_epm_validacion_obs')->where('id_usuario',$datos['id_usuario']) ->where('periodo', $datos['periodo'])->get();   
        if ($query->num_rows() > 0) {
            $this->db->set('observacion', $datos['observacion']);
            $this->db->set('valida_id', $datos['valida_id']);
            $this->db->set('fecha', $datos['fecha']);
            $this->db->where('id_usuario', $datos['id_usuario']);
            $this->db->where('periodo', $datos['periodo']);
            $this->db->update('fondos_inscripcion_epm_validacion_obs'); 
        }else{
            $this->db->set($datos)->insert('fondos_inscripcion_epm_validacion_obs');
        }

        $querys =  $this->db->select('obs.observacion,obs.fecha, concat_ws(" ",lo.primerNombre,lo.segundoNombre,lo.primerApellido,lo.segundoApellido) nombre')
        ->from('fondos_inscripcion_epm_validacion_obs obs')
        ->where('obs.id_usuario',$datos['id_usuario'])
        ->where('obs.periodo',$datos['periodo'])
        ->join('login_usuario lo','lo.id_usuario = obs.valida_id','left')
        ->order_by('obs.fecha','desc')
        ->get();
    
        // $query = $this->db->select('observacion')->from('fondos_inscripcion_epm_validacion_obs')->where('id_usuario',$id)->where('periodo',$periodo)->get();   
    
        if ($querys->num_rows() > 0) {
          return $querys->result_array();
         
        }


        
    }
    
           public function saveV($datos)
    {
         $this->db->set($datos)->insert('fondos_inscripcion_epm_validacion_doc');
         
         if ($this->db->affected_rows() === 1) {
             $query =  $this->db->select('*')->from('fondos_inscripcion_epm_validacion_doc')
                                             ->where('user_id', $datos['user_id'])
                                             ->where('periodo', $datos['periodo'])
                                             ->get();
             return $query->result_array();
        } 
    }
    
    
    
    // Fin validacion documentos
    
    
        public function get_Semestre()
    {
        $query = $this->db->select('*')->from('semestre')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }
    
     public function get_parentescoDeudor()
    {
        $query = $this->db->select('*')->from('parentesco_deudor')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }
    
        public function get_ActividadEconomica()
    {
        $query = $this->db->select('*')->from('actividad_economica')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function getprogramasies($id_ies)
    {
        if (!is_null($id_ies)) {
            $query = $this->db->select('ID_PROGRAMA,NOMBRE_PROGRAMA,NIVEL_FORMACION')->from('programas_pregrado')->where('ID_IES', $id_ies)->order_by('NOMBRE_PROGRAMA','asc')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return null;
        }

    }

    public function get_RequisitosHOriginal($id,$periodo){
    
        $query = $this->db->select('*')->from('epm_calculo_requisitos')->where('id_usuario', $id)->where('periodo', $periodo)->get();
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }

    public function get_RequisitosH($id,$periodo){
    
        $query = $this->db->query('call sp_requisitos_habilitantes_epm_legaliza(' . $id . ','.$periodo.')');
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }
    
    public function get_PuntajeOriginal($id,$periodo){
    
        $query = $this->db->select('*')->from('epm_calculo_puntaje')->where('id_usuario', $id)->where('periodo', $periodo)->get();
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }
    
    public function get_Puntaje($id,$periodo){
    
        $query = $this->db->query('call sp_calculoPuntajeEPM_legaliza(' . $id . ','.$periodo.')');
    
        if ($query->num_rows() > 0) {
          return $query->result_array();
         
        }
    
        return null;
    }

   public function get_DatosPersonales($id,$periodo){
         if (!is_null($id)) {
            
        // $query = $this->db->select('*')->from('odes_expectativas_datos_generales')->where('documento',$id)->where('periodo',$periodo)->get();    
        $query = $this->db->query('select * from odes_expectativas_datos_generales where documento = ' . $id . ' and periodo = '.$periodo.'');  
        
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
    }
    
    
    
     	public function get_IES()
    {
        $query = $this->db->select('ID_IES,NOMBRE_IES')->from('odes_seguimiento_ies')->order_by('NOMBRE_IES', 'asc')->get();
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }
    
    
        public function get_PromedioAcademico()
    {
        $query = $this->db->select('*')->from('epm_promedioacademico')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }
    
        public function get_FechaPruebasEstado()
    {
        $query = $this->db->select('*')->from('epm_fecha_icfes')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }
    
    public function get_CaracteristicaBachiller()
    {
        $query = $this->db->select('*')->get('epm_caracteristica_bachiller');    
        if ($query->num_rows() > 0) {
             return $query->result_array();
         }

            return null;
    }
   
    public function get_ProgramaFinanciacion()
    {
        $query = $this->db->select('*')->get('epm_programas_financiacion');    
        if ($query->num_rows() > 0) {
             return $query->result_array();
         }

            return null;
    }
    public function get_TipoCredito()
    {
        $query = $this->db->select('*')->get('tipo_credito');    
        if ($query->num_rows() > 0) {
             return $query->result_array();
         }

            return null;
    }
    
     public function get_ResidenciaComuna($id = null)
    {
      
            
       
         $query = $this->db->select('*')->where('id <=',$id)->get('tiempo_residencia');    
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
     
    }
    
      public function get_ListaComuna($id = null)
    {
      
        if($id == 1){
         $query = $this->db->select('*')->where_not_in('id','22')->get('comuna');    
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            
        }else{
            $query = $this->db->select('*')->where('id','22')->get('comuna');    
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }
       
         

            return null;
     
    }
     public function get_IcfesPuntaje()
    {
        $query = $this->db->select('*')->from('epm_icfes_puesto_percentil')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_TipoTitulo($id = null)
    {
        
        $query = $this->db->select('*')->from('tipotitulo')->get();
    
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    public function get_IEM($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('institucion_educativa_media')->where('id', $id)->where_not_in('id', '875')->order_by('NOMBRE_SEDE', 'asc')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('institucion_educativa_media')->order_by('NOMBRE_SEDE', 'asc')->get();
    
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }

    public function get_listacolegios($doc = null)
    {
        
            $query = $this->db->select('*')->from('odes_expectativas_datos_generales')->where('encuestador', $doc)->group_by('colegio')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }

    public function get_alumnosok($datos)
    {
        
            $query = $this->db->select('*')->from('odes_expectativas_datos_generales')->where('colegio', $datos['colegio'])->order_by('estado','desc')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }
     public function get_PeriodoIcfes()
    {
        $query = $this->db->select('*')->from('epm_pruebas_estado_periodo')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
         return null;

     }
     
     public function get_FechaBachiller()
    {
        $query = $this->db->select('*')->from('epm_fecha_grado_bachiller')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
         return null;

     }
     
    public function get_CiudadColegio()
    {
        $query = $this->db->select('*')->from('ciudadcolegio')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

     }

 public function get_TipoTarjetaIdentidad($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('tipo_tarjeta_identidad')->where('id', $id)->get();
            if ($query->num_rows() === 1) {
                return $query->row_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('tipo_tarjeta_identidad')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }

 public function get_TipoDocumento($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('tipo_documento')->where('id', $id)->get();
            if ($query->num_rows() === 1) {
                return $query->row_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('tipo_documento')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
     public function get_Departamento($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('departamento')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('departamento')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
     public function get_Municipio($id = null)
    {
        if (!is_null($id)) {
            
        $query = $this->db->select('municipio.id,municipio.nombre')->join('departamento','departamento.codigo = municipio.codigo_departamento')->where('departamento.id',$id)->get('municipio');    
            //$query = $this->db->select('*')->from('municipio')->where('codigo_departamento', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
        $query = $this->db->select('*')->from('municipio')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        
        
        

    }
    
     public function get_TiempoResidencia($id = null)
    {
        if (!is_null($id)) {
            
        $query = $this->db->select('*')->where('id',$id)->get('tiempo_residencia');    
            //$query = $this->db->select('*')->from('municipio')->where('codigo_departamento', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
        $query = $this->db->select('*')->from('tiempo_residencia')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        
        
        

    }
    
     public function get_Comuna($id_comuna = null)
    {
        if (!is_null($id_comuna)) {
            $query = $this->db->select('*')->from('comuna')->where('codigo', $id_comuna)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('comuna')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
   public function get_TipoVia($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('dir_tipo_via')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('dir_tipo_via')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_DirOrientacion($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('dir_orientacion')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('dir_orientacion')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_Estrato($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('estrato')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('estrato')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
     public function get_Sisben($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('odes_puntaje_sisben')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('odes_puntaje_sisben')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
     public function get_Victimizante($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('hecho_victimizante')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('hecho_victimizante')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
     public function get_AfroColombiano($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('afrocolombiano')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('afrocolombiano')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    
    
    public function get_Sexo()
    {
        
        $query = $this->db->select('*')->from('odes_expectativas_sexo')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    
    public function get_Discapacidad($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('discapacidad')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('discapacidad')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
   
    
    
    
    
     public function get_Indigena($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('becas_renovacion_indigena')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('becas_renovacion_indigena')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    
   
    
    
    
    
    
    
    
    

    public function saveIES($datos)
    {
         $query = $this->db->select('*')->from('epm_aspirante_iesyprogramas')->where('id_usuario',$datos['id_usuario'])->get();    
            
            if ($query->num_rows() > 0) {
                $this->db->where('id_usuario',$datos['id_usuario'])->update('epm_aspirante_iesyprogramas',$datos);  
                return $datos['id_usuario'];
            }else{
                $this->db->set($datos)->insert('epm_aspirante_iesyprogramas');
                if ($this->db->affected_rows() === 1) {
                    return $this->db->insert_id();
                }
                
            }
        
         
    }
    
    public function saveDeudor($datos)
    {
         $query = $this->db->select('*')->from('epm_aspirante_deudorsolidario')->where('id_usuario',$datos['id_usuario'])->get();    
            
            if ($query->num_rows() > 0) {
                $this->db->where('id_usuario',$datos['id_usuario'])->update('epm_aspirante_deudorsolidario',$datos);  
                return $datos['id_usuario'];
            }else{
                $this->db->set($datos)->insert('epm_aspirante_deudorsolidario');
                if ($this->db->affected_rows() === 1) {
                    return $this->db->insert_id();
                }
                
            }
        
         
    }
   
    public function saveAcademica($datos)
    {
        $query = $this->db->select('*')->from('epm_aspirante_academica')->where('id_usuario',$datos['id_usuario'])->get();  
         
        $queryies = $this->db->select('*')->from('epm_aspirante_iesyprogramas')->where('id_usuario',$datos['id_usuario'])->get();  
        $actualizoies = 0;
        if ($queryies->num_rows() > 0) { //El editar info academica, se debe reiniciar modalidad y valor matricula en ies
           
            $rowid = $query->row();
            
            if($rowid->modalidadCredito != $datos['modalidadCredito']){
           
                $this->db->set('modalidadCreditoSolicita', '98')->set('valorMatricula', '0')->where('id_usuario',$datos['id_usuario'])->update('epm_aspirante_iesyprogramas');  
                $actualizoies = 1;
            }
        }
         
            
            if ($query->num_rows() > 0) {
                $this->db->where('id_usuario',$datos['id_usuario'])->update('epm_aspirante_academica',$datos);  
                return $actualizoies;
            }else{
                $this->db->set($datos)->insert('epm_aspirante_academica');
                if ($this->db->affected_rows() === 1) {
                    return $actualizoies;
                }
                
            }
        
         
    }
    
   
    
    public function get_Bienestar($id){
         if (!is_null($id)) {
            
         $query = $this->db->select('*')->from('becas_renovacion_bienestar')->where('id_usuario',$id)->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
    }
    
    public function get_Academica($id){
         if (!is_null($id)) {
            
         $query = $this->db->select('*')->from('epm_aspirante_academica')->where('id_usuario',$id)->where('periodo','2')->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
    }
    
  /*  public function get_IES($id){
         if (!is_null($id)) {
            
         $query = $this->db->select('*')->from('epm_aspirante_iesyprogramas')->where('id_usuario',$id)->where('periodo','2')->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
    }
    */
    public function get_Deudor($id){
         if (!is_null($id)) {
            
         $query = $this->db->select('*')->from('epm_aspirante_deudorsolidario')->where('id_usuario',$id)->where('periodo','2')->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
    }
    
    public function get_Ingresos($id){
         if (!is_null($id)) {
            
         $query = $this->db->select('*')->from('becas_renovacion_ingresos')->where('id_usuario',$id)->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
    }
    
    public function get_Dinamica($id){
         if (!is_null($id)) {
            
         $query = $this->db->select('*')->from('becas_renovacion_dinamicaFamiliar')->where('id_usuario',$id)->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
    }
    
    public function get_Vocacion($id){
         if (!is_null($id)) {
            
         $query = $this->db->select('*')->from('becas_renovacion_vocacion')->where('id_usuario',$id)->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
    }

    public function formacion_programa()
    {
        
            $query = $this->db->select('*')->from('odes_expectativas_formacion_programa')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }
    public function traer_ies()
    {
        
            $query = $this->db->select('*')->from('odes_seguimiento_ies')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }


    public function traer_ies_etdh()
    {
        
            $query = $this->db->select('*')->from('odes_seguimiento_ies_etdh')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }    

    public function traer_programas()
    {
        
            $query = $this->db->select('*')->from('programas_pregrado')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

        
    }

    public function modalidad_programas()
    {
        
            $query = $this->db->select('*')->from('odes_expectativas_modalidad_programa')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }
    public function razon_institucion()
    {
        
            $query = $this->db->query('select * from odes_expectativas_razon_institucion_programa2 where id not in (2);');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }

    public function getRazonPrograma()
    {
            $query = $this->db->select('*')->from('odes_expectativas_razon_programa_academico')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return null;
    }    
    
    public function modo_pago_estudio()
    {
        
            $query = $this->db->select('*')->from('odes_expectativas_modo_pago_estudio2')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
    }

    public function escala_importancia()
    {
        
            $query = $this->db->select('*')->from('odes_expectativas_escala_importancia2')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }
    public function frases()
    {
        
          //  $query = $this->db->select('*')->from('odes_expectativas_frases')->get();
          //$query = $this->db->query('select * from odes_expectativas_frases where id in (1,2,3,4,6) order by field (id,1,4,6,3,2)');

          $query = $this->db->query('select * from odes_expectativas_frases where id not in (4,5) order by field (id,1,3,6,2,7)'); //Jcfs


            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }
    public function proyeccion_futura()
    {
        
            $query = $this->db->select('*')->from('odes_expectativas_plan_futuro')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        

    }

    public function dispositivos()
    {
        
        $query = $this->db->select('*')->from('odes_expectativas_dispositivos')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    public function escala_apoyo2()
    {
        
            $query = $this->db->select('*')->from('odes_expectativas_escala_apoyo2')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;

    }

    public function GrupoEtnico()
    {
        $query = $this->db->query('select * from odes_expectativas_grupo_etnico where id < 5'); //Jcfs
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return null;

    }

    
    public function Etnias()
    {
        $query = $this->db->query('select * from  etnia_caracterizacion  where id <= 17'); //Jcfs
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return null;
    }


    public function HechoVictimizante()
    {
        $query = $this->db->query('select * from  hecho_victimizante_caracterizacion  where id < 10'); //Jcfs
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return null;

    }

    public function TipoDiscapacidad()
    {
        $query = $this->db->query('select * from discapacidad_caracterizacion where id in (9,4,10,1,11,8) order by field(id,9,4,10,1,11,8)'); //Jcfs
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return null;

    }


    public function PoblacionEspecial()
    {
        $query = $this->db->query('select * from talento_especializado_poblacion_especial where id not in (7,8)'); //Jcfs
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return null;
    }


    public function OrientacionSexual()
    {
        $query = $this->db->query('select * from estudiantes_orientacion_sexual where id < 8'); //Jcfs
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return null;
    }

    public function IdentidadGenero()
    {
        $query = $this->db->query('select * from estudiantes_identidad_genero'); //Jcfs
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return null;
    }



    

    









    /////////////////////////////////////////////////////////////////////////////////////////////////




/*
 
   
   public function get_MedioConvocatoria($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('medio_convocatoria')->where('id', $id)->get();
            if ($query->num_rows() === 1) {
                return $query->row_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('medio_convocatoria')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
   
  
    
   
    public function get_AfroColombiano($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('afrocolombiano')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('afrocolombiano')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_Departamento($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('departamento')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('departamento')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_Estrato($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('estrato')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('estrato')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    public function get_Genero($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('genero')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('genero')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    public function get_Hijos($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('cantidad_hijos')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('cantidad_hijos')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
   
    
    public function get_Pais($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('pais')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('pais')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    public function get_Sisben($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('puntaje_sisben')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('puntaje_sisben')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    public function get_Vulnerabilidad($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('vulnerabilidad')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('vulnerabilidad')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_Proyecto($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('proyecto_aplica')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('proyecto_aplica')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_Tecnologia($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('tecnologia')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('tecnologia')->order_by('nombre','asc')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    
    public function get_TipoInstitucion($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('tipo_institucion_educativa')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('tipo_institucion_educativa')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_FechaBachiller($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('fecha_grado_bachiller')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('fecha_grado_bachiller')->where('estado','1')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_FechaIcfes($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('fecha_icfes')->where('id', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('fecha_icfes')->where('estado','1')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_IES($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('institucion_educativa_superior.id,institucion_educativa_superior.nombre')->join('tecnologia','tecnologia.id_ies = institucion_educativa_superior.id')->where('tecnologia.id',$id)->get('institucion_educativa_superior');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('institucion_educativa_superior')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    public function get_IEM($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('institucion_educativa_media')->where('id', $id)->where_not_in('id', '875')->order_by('NOMBRE_SEDE', 'asc')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('institucion_educativa_media')->order_by('NOMBRE_SEDE', 'asc')->get();
    
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
   
    public function get_ProgramaBeneficio($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('programa_beneficio')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('programa_beneficio')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    public function get_ParticipacionCategoria($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('participacion_categoria')->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('participacion_categoria')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    public function get_Barrio($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('barrio.id,barrio.nombre')->join('comuna','comuna.codigo = barrio.codigo_comuna')->where('comuna.id',$id)->get('barrio');    
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('barrio')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }
    
    
    public function get_Municipio($id = null)
    {
        if (!is_null($id)) {
            
        $query = $this->db->select('municipio.id,municipio.nombre')->join('departamento','departamento.codigo = municipio.codigo_departamento')->where('departamento.id',$id)->get('municipio');    
            //$query = $this->db->select('*')->from('municipio')->where('codigo_departamento', $id)->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
        $query = $this->db->select('*')->from('municipio')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        
        
        

    }
    
    
    public function get_IniciaDatosPersonales($id = null)
    {
        if (!is_null($id)) {
            
        $query = $this->db->select('*')->from('login_usuario')->where('id_usuario',$id)->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
        
        
        
        

    }
    
    public function get_InfoAcademica($id = null)
    {
        if (!is_null($id)) {
            
        $query = $this->db->select('*')->from('becas_aspirante_informacionacademica')->where('id_usuario',$id)->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
        
        
        
        

    }
    
    
    public function get_EstadoFormulario($id = null)
    {
        if (!is_null($id)) {
          $query = $this->db->select('bitacora_usuario.estado_convocatoria,becas_estado_proceso.nombre,becas_aspirante_informacionacademica.observacion_rechazado')->join('becas_estado_proceso','becas_estado_proceso.id = bitacora_usuario.estado_convocatoria')->join('becas_aspirante_informacionacademica','becas_aspirante_informacionacademica.id_usuario = bitacora_usuario.id_usuario','left')->where('bitacora_usuario.id_usuario',$id)->where('bitacora_usuario.tipo_convocatoria','1')->where('bitacora_usuario.periodo','1')->get('bitacora_usuario');
     //   $query = $this->db->select('*')->from('bitacora_usuario')->where('id_usuario',$id)->where('tipo_convocatoria','1')->where('periodo','1')->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
        
        
        
        

    }
    
    
    
    public function get_InfoAdjuntos($id = null)
    {
        if (!is_null($id)) {
            
            $query = $this->db->select('becas_documentos_adjuntos.*, concat_ws(" ",login_usuario.primerNombre,login_usuario.segundoNombre,login_usuario.primerApellido,login_usuario.segundoApellido) as nombre_valida')->join('login_usuario','login_usuario.id_usuario = becas_documentos_adjuntos.usuario_valida','left')->where('becas_documentos_adjuntos.id_usuario',$id)->get('becas_documentos_adjuntos');
        // $query = $this->db->select('*')->from('becas_documentos_adjuntos')->where('id_usuario',$id)->get();    
            
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }

            return null;
        }
        
        
        
        
        

    }
    
    */
    
    
}