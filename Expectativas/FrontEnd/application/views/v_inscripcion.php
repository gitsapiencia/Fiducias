<!doctype html>
<html lang="es">

<head>


    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content="text/html;" charset="iso-8859-1" http-equiv="Content-Type" />

    <title><?php echo $titulo; ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link href="<?php echo base_url() ?>alertjs/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url() ?>resources/css/fieldset.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>resources/css/loader.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <script src="<?php echo base_url() ?>resources/js/cargarpagina.js"></script> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
    <!-- <div class="loader"></div> -->




    <div class="container">

        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #3f4e90">


            <div class="collapse navbar-collapse" id="navbarsExampleDefault">

                <form class="form-inline my-2 my-lg-0">

                </form>
            </div>
        </nav>

        <br><br><br>
        <div class="row" id="imghead">
        <!--<img src="<?php echo base_url() ?>resources/img/banner ODES_Expectativas estudiantes-2.png" style="width: 1150px;height: 160px;">-->
        <img src="<?php echo base_url() ?>resources/img/banner ODES_Mesa de trabajo 3 copia 9.png" style="width: 1150px;height: 160px;">
            
        </div>

        <br>

        <input type="text" class="form-control" id="idusuario" name="idusuario" value="" style="display: none">
        <input type="text" class="form-control" id="IP" name="IP" value="<?php echo IP ?>" style="display: none">
        <input type="text" class="form-control" id="periodo" name="periodo" value="<?php echo $periodo ?>" style="display: none">

        <div class="alert alert-info" role="alert" style="text-align: center">
            <b>
                Expectativas académicas de estudiantes de grado 11
                <br><?php echo $datosdp['colegio'] ?>
            </b>
        </div>

        <div class="card">
            <!--<div class="card-header">
                <ul class="nav nav-tabs card-header-tabs pull-right" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#datosPersonales" role="tab" aria-controls="home" aria-selected="true">Inicio</a>
                    </li>

                </ul>
            </div>-->
            
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="datosPersonales" role="tabpanel" aria-labelledby="home-tab">

                        <form class="was-validated" id="form1">
                            <div id="divNombreDimension_1" class="col-md-12 alert alert-warning" role="alert" style="text-align:center;background-color: #DAA520;color: #FFFFFF;border-color:#DAA520">
                                <b>CARACTERIZACIÓN</b>
                            </div>
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-md-4">
                                        <label for="colegio">Nombre institución educativa</label>
                                        <input type="text" id="colegio" list="colegio-list" class="form-control" placeholder="Buscar Colegio..." 
                                        style="text-transform: uppercase" required>
                                        <datalist id="colegio-list">
                                            <?php echo $colegio ?>
                                        </datalist>
                                </div>


                                <div class="col-md-4">

                                    <label for="tipoBachillerato">Tipo de Bachillerato que cursa actualmente</label>
                                    <select class="form-control" id="tipoBachillerato" name="tipoBachillerato" onchange="tipoBachilleratoSi(this.value)" required="">
                                    <option value="">Seleccionar</option>    
                                    <option value="Media Académica">Media Académica</option>
                                        <option value="Media Técnica">Media Técnica</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="mediaTecnica">¿Cuál modalidad de Media Técnica?</label>
                                    <select class="form-control" id="mediaTecnica" name="mediaTecnica" disabled>
                                        <?php echo $mediatecnica ?>
                                    </select>
                                </div>
                            </div>

                            <hr>
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-auto">


                                    <label for="tipoDocumento">Tipo de documento</label>

                                    <select class="form-control" id="tipoDocumento" name="tipoDocumento" onchange="activaDocumento(this.value)" required="">
                                        <?php echo $tipodoc ?>
                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label for="documento">Número de documento</label>
                                    <input type="text" class="form-control" id="documento" name="documento" maxlength="11" minlength="6" style="width:165px" onKeyPress="return soloNumeros(event)" value="<?php echo $datosdp['documento'] ?> " disabled required>

                                </div>

                                <div class="col-md-6">
                                    <label for="otroTipoDoc">¿Cuál?</label>
                                        <input type="text" class="form-control" name="otroTipoDoc" id="otroTipoDoc" style="width:100%;text-transform: uppercase" onKeyPress="return soloLetras(event);<?php echo $datosdp['nombre1'] ?>" disabled>
                                </div>

                            </div>

                            <hr>
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-md-3">
                                    <label for="nombre1">Primer nombre</label>
                                    <input type="text" class="form-control" name="nombre1" id="nombre1" style="text-transform: uppercase" onKeyPress="return soloLetras(event);evitarEspacio('nombre1')" value="<?php echo $datosdp['nombre1'] ?>" onfocusout="eliminarUnicoEspacio('nombre1')" required="">


                                </div>
                                <div class="col-md-3">
                                    <label for="nombre2">Segundo nombre</label>
                                    <input type="text" class="form-control" name="nombre2" id="nombre2" style="text-transform: uppercase" onKeyPress="return soloLetras(event); evitarEspacio('nombre2')" value="<?php echo $datosdp['nombre2'] ?>" onfocusout="eliminarUnicoEspacio('nombre2')">

                                </div>
                                <div class="col-md-3">
                                    <label for="apellido1">Primer apellido</label>
                                    <input type="text" class="form-control" name="apellido1" id="apellido1" style="text-transform: uppercase" onKeyPress="return soloLetras(event); evitarEspacio('apellido1')" value="<?php echo $datosdp['apellido1'] ?>" onfocusout="eliminarUnicoEspacio('apellido1')" required="">

                                </div>
                                <div class="col-md-3">
                                    <label for="apellido2">Segundo apellido</label>
                                    <input type="text" class="form-control" name="apellido2" id="apellido2" style="text-transform: uppercase" onKeyPress="return soloLetras(event); evitarEspacio('apellido2')" value="<?php echo $datosdp['apellido2'] ?>" onfocusout="eliminarUnicoEspacio('apellido2')">

                                </div>

                            </div>
                            <hr>
                            <br>

                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <label for="fechaNacimiento">Edad </label>
                                    <input type="number" class="form-control" min= "10" max="99" onchange="validar_edad()" name="fechaNacimiento" id="fechaNacimiento" required="" value="">

                                </div>    
                                <div class="col-auto">
                                    <label for="genero">Sexo biológico</label>

                                    <select class="form-control" name="genero" id="genero" required="">
                                        <?php echo $sexo ?>


                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>¿Cuál es su orientación sexual?
                                    </label>
                                    <select class="form-control" id="orientacionsexual" required="">
                                        <?php echo $orientacionSexual ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>
                                        ¿Cuál es su identidad de género?
                                    </label>

                                    <select class="form-control" id="identidadgenero"  required="">
                                        <?php echo $identidadGenero ?>
                                    </select>

                                </div>

                            </div>
                            <br>
                            




                            <div  id="divRepresentante" style="display:none">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <label for="nombre_representante">Nombre del representante legal y/o curador</label>
                                        <input type="text" class="form-control" name="nombre_representante" id="nombre_representante">
                                    </div>
                                    <div class="col-auto">
                                        <label for="numero_representante">Número de contacto de su representante legal y/o curador</label>
                                        <input class="form-control" name="numero_representante" id="numero_representante" minlength="7" maxlength="10" onKeyPress="return soloNumeros(event)" value="<?php echo $datosdp['telefonoFijo'] ?>">

                                    
                                    </div>
                                </div>
                                <br><br>
                                
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <label for="correo_representante">Correo electrónico de su representante legal y/o curador</label>
                                        <input type="text" class="form-control" name="correo_representante" id="correo_representante" onchange="validarEmailRepresentante()">
                                    </div>

                                    <div class="col-auto">
                                        <label for="confirmaCorreo_representante">Confirmar correo electrónico de su representante legal</label>
                                        <input type="email" class="form-control" name="confirmaCorreo_representante" id="confirmaCorreo_representante" onchange="validarEmailRepresentante()">
                                    </div>

                                </div>
                                <div class="form-row align-items-center">
                                <div class="col-md-4">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="divAlertEmailRepresentante" style="display: none">
                                        Los correos no coinciden, por favor revisar!!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <br>

                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="divAlertEmailRepresentante" style="display: none">
                                        El correo electrónico alterno no puede ser igual al correo electrónico principal,
                                        por favor revisar!!
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <hr>

                            <br>

                            <div class="form-row align-items-center">

                                <div class="col-auto" style="display: none;">
                                    <label for="departamentoResidencia">Departamento de residencia</label>
                                    <select  class="form-control" name="departamentoResidencia" id="departamentoResidencia" onchange="buscarMunicipioResidencia()" required="" disabled>

                                        <?php echo ($departamento) ?>
                                    </select>
                                </div>
                                <div class="col-md-4">

                                    <label for="municipioResidencia">Municipio de residencia</label>
                                    <select class="form-control" name="municipioResidencia" id="municipioResidencia" required="" onchange="validarMunicipioResidencia()">


                                    </select>

                                </div>

                                <div class="col-md-4">
                                    <label for="comunaResidencia">Comuna de residencia</label>
                                    <select class="form-control" name="comunaResidencia" id="comunaResidencia" onchange="buscarBarrio(this.value)" required="">

                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="estrato"> Estrato de la vivienda en la que reside</label>
                                    <select class="form-control" name="estrato" id="estrato" required="">
                                        <?php echo $estrato ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="form-row align-items-center">

                                <div class="col-md-4">
                                    <label for="celular">Celular</label>
                                    <input class="form-control" name="celular" id="celular" minlength="7" maxlength="10" onKeyPress="return soloNumeros(event)" value="<?php echo $datosdp['telefonoFijo'] ?>">
                                </div>

                                <div class="col-md-4">
                                    <label for="correo">Correo electrónico</label>
                                    <input type="email" class="form-control" name="correo" id="correo" required="" value="<?php echo $datosdp['correo'] ?>" onchange="validarEmail()">

                                </div>
                                <div class="col-md-4">
                                    <label for="correo">Confirmar correo electrónico</label>
                                    <input type="email" class="form-control" name="confirmaCorreo" id="confirmaCorreo" required="" onchange="validarEmail()" value="<?php echo $datosdp['confirmaCorreo'] ?>">
                                </div>                                

                            </div>
     
                            <div class="form-row align-items-center">
                                <div class="col-md-4">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="divAlertEmail" style="display: none">
                                        Los correos no coinciden, por favor revisar!!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <br>

                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="divAlertEmailAlterno" style="display: none">
                                        El correo electrónico alterno no puede ser igual al correo electrónico principal,
                                        por favor revisar!!
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-md-4">
                                    <label for="conexiointernet">¿En su vivienda posee conexión a internet? </label>
                                    <select class="form-control" name="conexioninternet" id="conexioninternet" required="">
                                        <?php echo $si_no ?>

                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-row align-items-center" id="divRazonTecnologiaNo">
                                <div class="col-auto">
                                    <label>De los siguientes dispositivos ¿cuáles posee en su vivienda?
                                    </label>
                                    <div id="divTecnologiaNo">
                                        <?php echo $dispositivos ?>

                                    </div>
                                </div>

                            </div>
                            <hr>
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-md-4">
                                    <label for="tienehijos">¿Tiene hijos o hijas?</label>
                                    <select class="form-control" name="tienehijos" id="tienehijos" required="" onchange="valFamiliar()">
                                        <?php echo $si_no ?>

                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="nrohijos">¿Cuántos hijos o hijas tiene?</label>
                                    <input type="number" class="form-control" name="nrohijos" id="nrohijos" required="" value="0" min = "0" max="9" disabled>
                                </div>    
                            </div>
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-md-4">
                                    <label for="padremadresoltero">¿Es padre/madre soltera?</label>
                                    <select class="form-control" name="padremadresoltero" id="padremadresoltero" required="">
                                        <?php echo $si_no ?>

                                    </select>
                                </div>
                                <div class="col-auto">
                                    <label for="edadprimerembarazo">¿Cuál fue la edad de su primer embarazo o del embarazo de su pareja?</label>
                                    <input type="number" class="form-control" name="edadprimerembarazo" id="edadprimerembarazo" required="" value="0" min = "10" max="99">
                                </div>    
                            </div>      
                            
                            
                            <hr>
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-md-4">
                                    <label for="grupoEtnico">Grupo étnico</label>
                                    <select class="form-control" name="grupoEtnico" id="grupoEtnico" required="" >
                                        <?php echo $grupoEtnico ?>

                                    </select>
                                </div>
                            </div>      
                            
                            <!--
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-md-6">
                                    <label for="etnia">¿Cuál su etnia?</label>
                                    <select class="form-control" name="etnia" id="etnia" required="" onchange="valEtnia()" disabled>
                                        <?php echo $etnia ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                        <label for="otraEtnia">¿Cuál otro grupo étnico?</label>
                                        <input type="text" class="form-control" name="otraEtnia" id="otraEtnia" style="width:100%;text-transform: uppercase" onKeyPress="return soloLetras(event);<?php echo $datosdp['nombre1'] ?>"  disabled>
                                    </div>     
                            </div>      
                            -->
                            <hr>
                            <br>
                            
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <label for="victimaViolencia">¿Ha sido declarado(a) víctima de la violencia en Colombia?</label>
                                    <select class="form-control" name="victimaViolencia" id="victimaViolencia" onchange="valVictima()" required="">
                                        <?php echo $si_no ?>
                                    </select>
                                    </div>
                            </div>
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-auto" id="grupoHechoVictimizante" style="display:none">
                                    <label for="hechoVictimizante">¿Cuál es el hecho victimizante por el cual ha sido declarado víctima?</label>
                                    <div id="divhechoVictimizante">    
                                        <?php echo $hechoVictimizante ?>
                                    </div>
                                </div>
                            </div>           

                            
                            <hr>
                            <br>
                            
                            <div class="form-row align-items-center">
                                <div class="col-md-6">
                                    <label for="discapacidades">¿Tiene alguna de las siguientes discapacidades certificadas por entidad o profesional competente?</label>
                                    <div id="divdiscapacidades">    
                                        <?php echo $discapacidades ?>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="form-row align-items-center">                                
                                <div class="col-auto">
                                    <label for="poblacionEsp">¿Hace parte de alguna de las siguientes poblaciones?</label>
                                    <div id="divpoblacionEsp">    
                                        <?php echo $poblacionEsp ?>
                                    </div>
                                    
                                </div>
                            </div>           

                            <br>
                            <br>
                            <div class="form-row align-items-baseline">
                                <div id="divNombreDimension_1" class="col-md-12 alert alert-warning" role="alert" style="text-align:center;background-color: #DAA520;color: #FFFFFF;border-color:#DAA520">
                                    <b>EXPECTATIVAS</b>
                                </div>
                                <div class="col-md-12">
                                    <label>
                                            ¿Piensa presentar <b>solicitudes de admisión</b> para seguir estudiando, luego de terminar el bachillerato?
                                    </label>
                                </div>
                                
                                <div class="col-md-4">
                                    <select class="form-control" id="solicitudAdmision" onchange="f_solicitudAdmision()" required="">
                                        <?php echo $sino ?>
                                    </select>
                                </div>
                                <br>
                            </div>
                            <br>
                            <div id="bloque1" style="display: none">
                                <div class="form-row align-items-baseline">
                                    <div class="col-md-4">
                                        <label>
                                            ¿Cuál es el nivel de formación al que aspira?
                                        </label>
                                        <select class="form-control" id="nivel_formacion" name="nivel_formacion" onchange="nivelFormacion(this.value)">
                                            <?php echo $formacionprograma ?>
                                        </select>

                                    </div>
                                </div>

                                <hr/>
                                <div class="form-row align-items-baseline">
                                    <div class="col-md-6">
                                        <label for="iegustaria">¿En cuál IES o institución para el trabajo le gustaría presentarse para estudiar?</label>
                                        <input type="text" id="iegustaria" name="iegustaria" onchange="presentaSolicitudAdmision()" 
                                                            list="ies-list" class="form-control" placeholder="Buscar IE..." 
                                                            style="text-transform: uppercase" required>
                                        <datalist id="ies-list">
                                            <?php echo $traer_ies ?>
                                        </datalist>

                                        <input type="text" id="etdhgustaria" name="etdhgustaria" onchange="presentaSolicitudAdmision()" 
                                                            list="ies-etdh-list" class="form-control" placeholder="Buscar IE ETDH..." 
                                                            style="text-transform: uppercase; display:none" >
                                        <datalist id="ies-etdh-list">
                                            <?php echo $traer_ies_etdh ?>
                                        </datalist>                                        





                                    </div>



                                    <div class="col-md-6">
                                        <label for="cual1">¿Cuál?</label>
                                        <input type="text" class="form-control" name="cual1" id="cual1" style="width:100%;text-transform: uppercase" onKeyPress="return soloLetras(event);<?php echo $datosdp['nombre1'] ?>" disabled>


                                    </div>
                                </div>
                                <br>

                                <div class="form-row align-items-baseline">
                                    <div class="col-md-6">
                                        <label for="colegio">¿Qué programa académico le gustaría estudiar?</label>
                                        <input type="text" id="programagustaria" name="programagustaria" onchange="presentaSolicitudAdmision()" 
                                                            list="prog-list" class="form-control" placeholder="Buscar Programa..." 
                                                            style="text-transform: uppercase" required>
                                        <datalist id="prog-list">
                                            <?php echo $traer_programas ?>
                                        </datalist>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="cual2">¿Cuál?</label>
                                        <input type="text" class="form-control" name="cual2" id="cual2" style="width:100%;text-transform: uppercase" onKeyPress="return soloLetras(event);<?php echo $datosdp['nombre1'] ?>"  disabled>


                                    </div>                                    
                                </div>
                                <hr/>
                                <div class="form-row align-items-baseline">
                                    <div class="col-md-4">
                                        <label>
                                            ¿Cuál es la modalidad del programa que deseas estudiar?
                                        </label>
                                        <select class="form-control" id="modalidadprograma" name="modalidadprograma" onchange="presentaSolicitudAdmision()">
                                            <?php echo $modalidad_programas ?>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row align-items-baseline">
                                <div class="col-md-6">
                                        <label>
                                            ¿Cuál fue la razón principal para haber elegido esa institución?
                                        </label>
                                        <select class="form-control" id="razoninstitucion" name="razoninstitucion" onchange="presentaSolicitudAdmision()">
                                            <?php echo $razon_institucion ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                        ¿Cuál fue la razón principal para haber elegido ese programa académico?
                                        </label>
                                        <select class="form-control" id="razonprograma" name="razonprograma" onchange="presentaSolicitudAdmision()">
                                            <?php echo $razon_programa ?>
                                        </select>
                                    </div>                                    

                                </div>
                                <br>

                                <div class="form-row align-items-baseline">
                                    <div class="col-md-6">
                                        <label>
                                            ¿Cómo piensa pagar el estudio en esa institución educativa?
                                        </label>
                                        <select class="form-control" id="pagoestudio" name="pagoestudio" onchange="presentaSolicitudAdmision()">
                                            <?php echo $modo_pago_estudio ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cual3">¿Cuál?</label>
                                        <input type="text" class="form-control" name="cual3" id="cual3" style="width:100%;text-transform: uppercase" onKeyPress="return soloLetras(event);<?php echo $datosdp['nombre1'] ?>"  disabled>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div id="bloque2" style="display: none">
                                <div class="form-row align-items-baseline" id="divNoSolicitudAdmision">
                                    <div class="col-md-6">
                                        <label>
                                            ¿Cuál es la <b> razón principal para NO presentar </b> solicitudes de admisión?
                                        </label>
                                        <select class="form-control" id="RazonNoSolicitudAdmision" name="RazonNoSolicitudAdmision" onchange="presentaSolicitudAdmision()">
                                            <?php echo $razonno ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="otraRazon">¿Cuál?</label>
                                        <input type="text" class="form-control" name="otraRazon" id="otraRazon" style="width:100%;text-transform: uppercase" onKeyPress="return soloLetras(event);<?php echo $datosdp['nombre1'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="form-row align-items-baseline">
                                <div class="col-md-6">
                                    <label>¿Cómo calificaría usted el apoyo, orientación y preparación para la educación postsecundaria aportada por familiares y/o amigos(as)?
                                    </label>
                                    <select class="form-control" id="apoyofamiliar" required="">
                                        <?php echo $escala_apoyo2 ?>
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <label>
                                            ¿Cómo calificaría usted el apoyo, orientación y preparación para la educación postsecundaria aportada por el colegio?
                                    </label>

                                    <select class="form-control" id="importanciaestudio"  required="">
                                        <?php echo $escala_apoyo2 ?>
                                    </select>

                                </div>


                            </div>

                            <hr>
                            <br>

                            <div class="form-row align-items-baseline">
                                <div class="col-md-6">
                                    <label>
                                        ¿Cuál de las siguientes frases identifica mejor su pensamiento sobre el estudio?

                                    </label>
                                    <select class="form-control" id="pensamiento_estudio" required="">
                                        <?php echo $frases ?>
                                    </select>
                                </div>

                                <hr>
                                <br>

                                <div class="col-md-6">
                                    <label>
                                        ¿Cómo calificaría la importancia de estudiar para su proyecto de vida? 
                                    </label>
                                    <select class="form-control" id="estudioproyeccion" required="">
                                        <?php echo $escala_importancia ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-row align-items-baseline">
                                <div class="col-md-6">
                                    <label>
                                    ¿Cómo calificaría la relevancia de estudiar para su proyección laboral de mediano y largo plazo? 
                                    </label>
                                    <select class="form-control" id="trabajoproyeccion" required="" onchange="prioridadTecnologia()">
                                        <?php echo $escala_importancia ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="form-row align-items-center">
                                <div class="col-md-6">
                                    <label> ¿Qué espera usted hacer el próximo año como actividad principal?

                                    </label>
                                    <select class="form-control" id="espera_ano2" required="">
                                        <?php echo $plan ?>
                                    </select>
                                </div>

                            </div>

                            <br><br>
                            <div class="form-row align-items-baseline">
                                <div id="divNombreDimension_1" class="col-md-12 alert alert-warning" role="alert" style="text-align:center;background-color: #DAA520;color: #FFFFFF;border-color:#DAA520">
                                    <b>PERCEPCIÓN</b>
                                </div>
                                <div class="col-md-6">
                                    <label>
                                        ¿Conoce la Agencia de Educación Postsecundaria de Medellín - SAPIENCIA?
                                    </label>
                                    <select class="form-control" name="conoce_sapiencia" id="conoce_sapiencia" onchange="conoceSapiencia()" required="">
                                        <?php echo $si_no ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <div  id="bloque3" style="display: none">
                            <div class="form-row align-items-baseline">    
                                <div class="col-md-6">
                                    <label>
                                        ¿Qué imagen tiene de la Agencia de Educación Postsecundaria de Medellín - SAPIENCIA?
                                    </label>
                                    <select class="form-control" name="imagen_sapiencia" id="imagen_sapiencia">
                                        <?php echo $imagensapiencia ?>
                                    </select>

                                </div>

                                <div class="col-md-6">
                                    <label>
                                        ¿Conocía usted que, a través de SAPIENCIA existe la posibilidad de obtener una beca o crédito
                                        condonable para continuar sus estudios luego de graduarse de 11°?
                                    </label>
                                    <select class="form-control" name="beca_sapiencia" id="beca_sapiencia">
                                        <?php echo $si_no ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-row align-items-baseline">
                                <div class="col-md-6">
                                    <label>
                                        ¿Conoce alguna de las estrategias de SAPIENCIA, distintas a las becas o créditos condonables,
                                        para fortalecer la Educación en Medellín?
                                    </label>
                                    <select class="form-control" name="estrategia_sapiencia" id="estrategia_sapiencia" onchange="valida_estrattegia()">
                                        <?php echo $si_no ?>
                                    </select>

                                </div>
                                <div class="form-row align-items-center" style="display: none" id="divEstrategiaSapienciaOtra">
                                    <div class="col-auto">
                                        <label for="cual4">¿Otro?,¿Cual?</label>
                                        <input type="text" class="form-control" name="cual4" id="cual4" style="width:223px;text-transform: uppercase" onKeyPress="return soloLetras(event);<?php echo $datosdp['nombre1'] ?>">


                                    </div>
                                </div>



                            </div>
                            </div>
                            <br>


                            <div class="text-center">
                                <button id="guardarAC" class="btn btn-primary" type="submit" style="width: 25%;">Guardar</button>
                            </div>

                        </div>
                    </form>


                </div>

            </div> <!-- tab-content -->
        </div> <!-- car-body -->

    </div>

    <div class="modal fade" id="bienvenidos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¡Hola!</h5>

                </div>
                <div class="modal-body">

                    <div id="global">
                        <div id="mensajes">

                            En observancia de la Ley 1581 de 2012, reglamentada parcialmente por el Decreto 1377 de
                            2013 y en la
                            política de tratamiento de datos adoptado por SAPIENCIA,
                            la importancia de la neutralidad de los medios tecnológicos y de comunicación, e
                            interpretando todos
                            estos de manera sistémica e integral en aras de la protección de los
                            derechos y principios que circundan el Habeas Data y el Tratamiento de Datos Personales,
                            se establecen
                            las siguientes condiciones:
                            <b>1) FINALIDAD DEL TRATAMIENTO DE LOS DATOS PERSONALES PARA PERSONA JURÍDICA Y NATURAL:
                                a) </b>el
                            cumplimiento del lleno de requisitos formales para la suscripción de actas
                            de compromiso y la posterior aplicación de los derechos y obligaciones que surgen entre
                            las partes con
                            ocasión de su suscripción.
                            <b>b)</b> el cumplimiento de la Ley de Transparencia y el Derecho de Acceso a la
                            Información Pública
                            Nacional (Ley 1712 del 2014).
                            <b>c)</b> La presentación de informes a los organismos de control.
                            <b>d)</b> para la entrega de información a entidades cuyo objeto social y/o misional
                            incluya la
                            recolección de datos estadísticos, históricos y científicos.
                            <b>e)</b> por solicitud de autoridad judicial. Manifiesto que me informaron que, si soy
                            menor de edad
                            y/o en caso de recolección de mi información sensible,
                            tengo derecho a contestar o no las preguntas que me formulen y a entregar o no los datos
                            solicitados.
                            Entiendo que son datos sensibles aquellos que afectan la intimidad del titular o cuyo
                            uso indebido pueda
                            generar discriminación
                            (información étnica, racial, su orientación política, convicciones religiosas o
                            filosóficas, la
                            pertenencia a sindicatos, organizaciones sociales, de derechos humanos,
                            así como los relativos a la salud, vida sexual y datos biométricos).Manifiesto que me
                            informaron que los
                            datos sensibles que se recolectarán serán utilizados para las
                            finalidades descritas por la Agencia (Uso, recolección, actualización, transferencia)
                            <b>Nota:</b> Cualquier uso de la información distinto a lo aquí establecido, no es
                            aceptado ni permitido
                            por <b>SAPIENCIA. 2) AVISO DE PRIVACIDAD:</b>
                            Para los efectos de esta cláusula y del aviso de privacidad, se consideran datos
                            sensibles aquellos que
                            puedan revelar aspectos como origen racial o étnico, estado
                            de salud presente y futura, información genética, creencias religiosas, filosóficas y
                            morales,
                            afiliación sindical, opiniones políticas, preferencia sexual y todos aquellos
                            datos que puedan afectar la intimidad del titular o cuyo uso indebido pueda generar su
                            discriminación.
                            Respecto a estos
                            <b>SAPIENCIA</b> se obliga al uso adecuado de los mismos en concordancia con la
                            normativa vigente, la
                            buena fe, el orden público y el presente Aviso.
                            <b>3) MECANISMOS PARA LA PROTECCIÓN DE DATOS PERSONALES: ACCESO, RECTIFICACIÓN,
                                CANCELACIÓN U
                                OPOSICIÓN:</b>
                            la persona natural o jurídica Titular de Datos Personales puede solicitar a
                            <b>SAPIENCIA</b> en
                            cualquier momento, el acceso, la rectificación, la cancelación u oposición respecto
                            a los datos personales que le conciernen, en este sentido, presentará su solicitud
                            radicándola
                            directamente en la Entidad o ingresando a la página web
                            <a href="http://www.sapiencia.gov.co" target="_blank">www.sapiencia.gov.co</a> en la
                            opción de
                            Contáctenos o escribiendo al correo <a href="info@sapiencia.gov.co">info@sapiencia.gov.co</a>
                            o comunicándose al teléfono en Medellín: (+57 4) 444 7947.
                            <br><b>PARÁGRAFO:</b> con la suscripción de este formulario se entiende aceptada la
                            finalidad del
                            tratamiento de datos y que conoce los mecanismos para su protección.
                            <br>
                            <small><b>*La información recolectada será insumo para análisis de corte académico y no será comercializada ni usada para otros fines.</b></small>
                        </div>
                    </div>




                </div>
                <br><br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary " data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>resources/js/expectativas.js?=<?php echo time() ?>"></script>


<!--  <script src="<?php echo base_url() ?>resources/js/camposobligatorios.js"></script>
<script src="<?php echo base_url() ?>resources/js/informacionacademica.js"></script>

<script src="<?php echo base_url() ?>resources/js/hijos.js"></script>
<script src="<?php echo base_url() ?>resources/js/cargardocumento.js"></script>
 <script src="<?php echo base_url() ?>resources/js/validardocumentos.js"></script>

    -->
<script src="<?php echo base_url() ?>alertjs/sweetalert.min.js"></script>

<!-- <script src="<?php echo base_url() ?>resources/js/traerjson.js"></script> -->
<script src="<?php echo base_url() ?>resources/js/jsvalidarletrasnumeros.js"></script>
<script src="<?php echo base_url() ?>resources/jBox-0.3.2/Source/jBox.min.js"></script>
<link href="<?php echo base_url() ?>resources/jBox-0.3.2/Source/jBox.css" rel="stylesheet">


<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        
        $("#form1").on("submit", function(e) {

            e.preventDefault();
            actualizarDatosPersonales();

        });

        $('#colegio').val('<?php echo $datosdp['colegio'] ?>');
        $('#tipocolegio').val('<?php echo $datosdp['tipocolegio'] ?>');

        $('#tipoDocumento').val('<?php echo $datosdp['tipoDocumento'] ?>');
        $('#genero').val('<?php echo $datosdp['genero'] ?>');
        $('#departamentoResidencia').val('<?php echo $datosdp['departamentoResidencia'] ?>');
        $('#comunaResidencia').val('<?php echo $datosdp['comunaResidencia'] ?>');
        $('#otroBarrio').val('<?php echo $datosdp['otroBarrio'] ?>');
        $('#dirCampo1').val('<?php echo $datosdp['dirCampo1'] ?>');
        $('#dirCampo4').val('<?php echo $datosdp['dirCampo4'] ?>');
        $('#dirCampo7').val('<?php echo $datosdp['dirCampo7'] ?>');
        $('#estrato').val('<?php echo $datosdp['estrato'] ?>');
        $('#puntajeSisben').val('<?php echo $datosdp['puntajeSisben'] ?>');
        $('#solicitudAdmision').val('<?php echo $datosdp['solicitudAdmision'] ?>');
        $('#modalidad_solicitud1').val('<?php echo $datosdp['modalidad_solicitud1'] ?>');
        $('#admitido_solicitud1').val('<?php echo $datosdp['admitido_solicitud1'] ?>');
        $('#modalidad_solicitud2').val('<?php echo $datosdp['modalidad_solicitud2'] ?>');
        $('#admitido_solicitud2').val('<?php echo $datosdp['admitido_solicitud2'] ?>');
        $('#modalidad_solicitud3').val('<?php echo $datosdp['modalidad_solicitud3'] ?>');
        $('#admitido_solicitud3').val('<?php echo $datosdp['admitido_solicitud3'] ?>');
        $('#modalidad_solicitud4').val('<?php echo $datosdp['modalidad_solicitud4'] ?>');
        $('#admitido_solicitud4').val('<?php echo $datosdp['admitido_solicitud4'] ?>');
        $('#modalidad_solicitud5').val('<?php echo $datosdp['modalidad_solicitud5'] ?>');
        $('#admitido_solicitud5').val('<?php echo $datosdp['admitido_solicitud5'] ?>');
        $('#RazonNoSolicitudAdmision').val('<?php echo $datosdp['RazonNoSolicitudAdmision'] ?>');
        $('#apoyo_padres').val('<?php echo $datosdp['apoyo_padres'] ?>');
        $('#apoyo_colegio').val('<?php echo $datosdp['apoyo_colegio'] ?>');
        $('#pensamiento_estudio').val('<?php echo $datosdp['pensamiento_estudio'] ?>');
        $('#importancia_estudio').val('<?php echo $datosdp['importancia_estudio'] ?>');
        $('#importancia_trabajo').val('<?php echo $datosdp['importancia_trabajo'] ?>');
        $('#prioridad_tecnologia').val('<?php echo $datosdp['prioridad_tecnologia'] ?>');
        $('#institucion_futuro').val('<?php echo $datosdp['institucion_futuro'] ?>');
        $('#programa_futuro').val('<?php echo $datosdp['programa_futuro'] ?>');
        $('#institucion_futuro_otro').val('<?php echo $datosdp['institucion_futuro_otro'] ?>');
        $('#programa_futuro_otro').val('<?php echo $datosdp['programa_futuro_otro'] ?>');
        $('#modalidad_futuro').val('<?php echo $datosdp['modalidad_futuro'] ?>');
        
        
        
        $('#conoce_pp').val('<?php echo $datosdp['conoce_pp'] ?>');
        $('#conoce_epm').val('<?php echo $datosdp['conoce_epm'] ?>');
        $('#conoce_becas').val('<?php echo $datosdp['conoce_becas'] ?>');
        $('#conoce_sapiencia').val('<?php echo $datosdp['conoce_sapiencia'] ?>');
        $('#imagen_sapiencia').val('<?php echo $datosdp['imagen_sapiencia'] ?>');
        $('#razon_no_estudia').val('<?php echo $datosdp['razon_no_estudia'] ?>');
        $('#tieneSisben').val('<?php echo $datosdp['tieneSisben'] ?>');

        ////////////////////Datos nuevos
        $('#fechaNacimiento').val('<?php echo $datosdp['fechaNacimiento'] ?>');
        $('#tipoBachillerato').val('<?php echo $datosdp['tipoBachillerato'] ?>');
        $('#mediaTecnica').val('<?php echo $datosdp['mediaTecnica'] ?>');
        $('#nombre_representante').val('<?php echo $datosdp['nombre_representante'] ?>');
        $('#numero_representante').val('<?php echo $datosdp['numero_representante'] ?>');
        $('#correo_representante').val('<?php echo $datosdp['correo_representante'] ?>');
        $('#confirmaCorreo_representante').val('<?php echo $datosdp['correo_representante'] ?>');
        $('#conexioninternet').val('<?php echo $datosdp['conexion_internet2'] ?>');
        $('#solicitudAdmision').val('<?php echo $datosdp['solicitud_admin2'] ?>');
        $('#nivel_formacion').val('<?php echo $datosdp['nivel_formacion2'] ?>');
        $('#iegustaria').val('<?php echo $datosdp['ies_estudio2'] ?>');
        $('#cual1').val('<?php echo $datosdp['cual_otroies2'] ?>');
        $('#programagustaria').val('<?php echo $datosdp['programa_estudio2'] ?>');
        $('#cual2').val('<?php echo $datosdp['cual_otroprograma2'] ?>');
        $('#modalidadprograma').val('<?php echo $datosdp['modalidad_programa2'] ?>');
        $('#razoninstitucion').val('<?php echo $datosdp['razon_insti_programa2'] ?>');
        $('#pagoestudio').val('<?php echo $datosdp['pagar_estudio2'] ?>');
        $('#cual3').val('<?php echo $datosdp['cual_otro_pagar2'] ?>');
        $('#RazonNoSolicitudAdmision').val('<?php echo $datosdp['no_solicitud_admision2'] ?>');
        $('#otraRazon').val('<?php echo $datosdp['otraRazon'] ?>');
        $('#apoyofamiliar').val('<?php echo $datosdp['escala_califica_familiar2'] ?>');
        $('#importanciaestudio').val('<?php echo $datosdp['escala_califica_colegio2'] ?>');
        $('#pensamiento_estudio').val('<?php echo $datosdp['frases_pensamiento2'] ?>');
        $('#estudioproyeccion').val('<?php echo $datosdp['califica_import_estudio2'] ?>');
        $('#trabajoproyeccion').val('<?php echo $datosdp['califica_import_trabajo2'] ?>');
        $('#espera_ano2').val('<?php echo $datosdp['espera_ano2'] ?>');
        $('#conoce_sapiencia').val('<?php echo $datosdp['conoce_sapiencia2'] ?>');
        $('#imagen_sapiencia').val('<?php echo $datosdp['imagen_sapiencia2'] ?>');
        $('#beca_sapiencia').val('<?php echo $datosdp['beca_sapiencia2'] ?>');
        $('#estrategia_sapiencia').val('<?php echo $datosdp['estrategia_sapiencia2'] ?>');



        ////Nuevos JCFS
        $('#razoninstitucion').val('<?php echo $datosdp['razon_institucion'] ?>');
        $('#razonprograma').val('<?php echo $datosdp['razon_programa'] ?>');

        $('#orientacionsexual').val('<?php echo $datosdp['orientacion_sexual'] ?>');
        $('#identidadgenero').val('<?php echo $datosdp['identidad_genero'] ?>');


        $('#tienehijos').val('<?php echo $datosdp['tiene_hijos'] ?>');
        $('#nrohijos').val('<?php echo $datosdp['cantidad_hijos'] ?>');
        $('#padremadresoltero').val('<?php echo $datosdp['padremadre_soltero'] ?>');
        $('#edadprimerembarazo').val('<?php echo $datosdp['edad_primer_embarazo'] ?>');

        $('#grupoEtnico').val('<?php echo $datosdp['grupo_etnico'] ?>');
        $('#etnia').val('<?php echo $datosdp['etnia'] ?>');
        $('#otraEtnia').val('<?php echo $datosdp['otra_etnia'] ?>');        

        $('#victimaViolencia').val('<?php echo $datosdp['es_victima_violencia'] ?>');
        $('#hechoVictimizante').val('<?php echo $datosdp['hecho_victimizante'] ?>');
        $('#discapacidades').val('<?php echo $datosdp['discapacidad'] ?>');                
        $('#poblacionEsp').val('<?php echo $datosdp['poblacion_especial'] ?>');
        
        
        



        
        //----


        buscarMunicipioResidencia('<?php echo $datosdp['departamentoResidencia'] ?>', '<?php echo $datosdp['municipioResidencia'] ?>');
        validarMunicipioResidencia('<?php echo $datosdp['municipioResidencia'] ?>', '<?php echo $datosdp['comunaResidencia'] ?>');
        buscarBarrio('<?php echo $datosdp['comunaResidencia'] ?>', '<?php echo $datosdp['barrio'] ?>');
        presentaSolicitudAdmision('<?php echo $datosdp['solicitudAdmision'] ?>');
        sisben('<?php echo $datosdp['tieneSisben'] ?>');




        if ('<?php echo $datosdp['pc_mesa'] ?>' == '1') {
            $('#dispositivosCheck1').prop('checked', true);
        } else {
            $('#dispositivosCheck1').prop('checked', false);
        }

        if ('<?php echo $datosdp['pc_portatil'] ?>' == '1') {
            $('#dispositivosCheck2').prop('checked', true);
        } else {
            $('#dispositivosCheck2').prop('checked', false);
        }

        if ('<?php echo $datosdp['tablet'] ?>' == '1') {
            $('#dispositivosCheck3').prop('checked', true);
        } else {
            $('#dispositivosCheck3').prop('checked', false);
        }

        if ('<?php echo $datosdp['celular_dispositivo'] ?>' == '1') {
            $('#dispositivosCheck4').prop('checked', true);
        } else {
            $('#dispositivosCheck4').prop('checked', false);
        }

        if ('<?php echo $datosdp['ninguna'] ?>' == '1') {
            $('#dispositivosCheck5').prop('checked', true);
        } else {
            $('#dispositivosCheck5').prop('checked', false);
        }


        prioridadTecnologia();
        // opciontecnologianochecked(1);
        // opcionplanchecked(1);


        if ('<?php echo $datosdp['modopagoCheck1'] ?>' == '1') {
            $('#modopagoCheck1').prop('checked', true);
        } else {
            $('#modopagoCheck1').prop('checked', false);
        }

        if ('<?php echo $datosdp['modopagoCheck2'] ?>' == '1') {
            $('#modopagoCheck2').prop('checked', true);
        } else {
            $('#modopagoCheck2').prop('checked', false);
        }

        if ('<?php echo $datosdp['modopagoCheck3'] ?>' == '1') {
            $('#modopagoCheck3').prop('checked', true);
        } else {
            $('#modopagoCheck3').prop('checked', false);
        }

        if ('<?php echo $datosdp['modopagoCheck4'] ?>' == '1') {
            $('#modopagoCheck4').prop('checked', true);
        } else {
            $('#modopagoCheck4').prop('checked', false);
        }

        if ('<?php echo $datosdp['modopagoCheck5'] ?>' == '1') {
            $('#modopagoCheck5').prop('checked', true);
        } else {
            $('#modopagoCheck5').prop('checked', false);
        }

        if ('<?php echo $datosdp['modopagoCheck6'] ?>' == '1') {
            $('#modopagoCheck6').prop('checked', true);
        } else {
            $('#modopagoCheck6').prop('checked', false);
        }

        if ('<?php echo $datosdp['modopagoCheck7'] ?>' == '1') {
            $('#modopagoCheck7').prop('checked', true);
        } else {
            $('#modopagoCheck7').prop('checked', false);
        }

        if ('<?php echo $datosdp['modopagoCheck8'] ?>' == '1') {
            $('#modopagoCheck8').prop('checked', true);
        } else {
            $('#modopagoCheck8').prop('checked', false);
        }

        if ('<?php echo $datosdp['modopagoCheck9'] ?>' == '1') {
            $('#modopagoCheck9').prop('checked', true);
        } else {
            $('#modopagoCheck9').prop('checked', false);
        }

        if ('<?php echo $datosdp['modopagoCheck10'] ?>' == '1') {
            $('#modopagoCheck10').prop('checked', true);
        } else {
            $('#modopagoCheck10').prop('checked', false);
        }



        if ($datosdp['hechoVictimizante1'] == '1') {
            $('#hechoVictimizanteCheck1').prop('checked', true);
        } else {
            $('#hechoVictimizanteCheck1').prop('checked', false);
        }

        if ($datosdp['hechoVictimizante2'] == '1') {
            $('#hechoVictimizanteCheck2').prop('checked', true);
        } else {
            $('#hechoVictimizanteCheck2').prop('checked', false);
        }

        if ($datosdp['hechoVictimizante3'] == '1') {
            $('#hechoVictimizanteCheck3').prop('checked', true);
        } else {
            $('#hechoVictimizanteCheck3').prop('checked', false);
        }

        if ($datosdp['hechoVictimizante4'] == '1') {
            $('#hechoVictimizanteCheck4').prop('checked', true);
        } else {
            $('#hechoVictimizanteCheck4').prop('checked', false);
        }

        if ($datosdp['hechoVictimizante5'] == '1') {
            $('#hechoVictimizanteCheck5').prop('checked', true);
        } else {
            $('#hechoVictimizanteCheck5').prop('checked', false);
        }

        if ($datosdp['hechoVictimizante6'] == '1') {
            $('#hechoVictimizanteCheck6').prop('checked', true);
        } else {
            $('#hechoVictimizanteCheck6').prop('checked', false);
        }

        if ($datosdp['hechoVictimizante7'] == '1') {
            $('#hechoVictimizanteCheck7').prop('checked', true);
        } else {
            $('#hechoVictimizanteCheck7').prop('checked', false);
        }

        if ($datosdp['hechoVictimizante8'] == '1') {
            $('#hechoVictimizanteCheck8').prop('checked', true);
        } else {
            $('#hechoVictimizanteCheck8').prop('checked', false);
        }

        if ($datosdp['hechoVictimizante9'] == '1') {
            $('#hechoVictimizanteCheck9').prop('checked', true);
        } else {
            $('#hechoVictimizanteCheck9').prop('checked', false);
        }


        if ($datosdp['poblacionEsp1'] == '1') {
            $('#poblacionEspCheck1').prop('checked', true);
        } else {
            $('#poblacionEspCheck1').prop('checked', false);
        }

        if ($datosdp['poblacionEsp2'] == '1') {
            $('#poblacionEspCheck2').prop('checked', true);
        } else {
            $('#poblacionEspCheck2').prop('checked', false);
        }

        if ($datosdp['poblacionEsp3'] == '1') {
            $('#poblacionEspCheck3').prop('checked', true);
        } else {
            $('#poblacionEspCheck3').prop('checked', false);
        }

        if ($datosdp['poblacionEsp4'] == '1') {
            $('#poblacionEspCheck4').prop('checked', true);
        } else {
            $('#poblacionEspCheck4').prop('checked', false);
        }

        if ($datosdp['poblacionEsp5'] == '1') {
            $('#poblacionEspCheck5').prop('checked', true);
        } else {
            $('#poblacionEspCheck5').prop('checked', false);
        }

        if ($datosdp['poblacionEsp6'] == '1') {
            $('#poblacionEspCheck6').prop('checked', true);
        } else {
            $('#poblacionEspCheck6').prop('checked', false);
        }


        if ($datosdp['poblacionEsp9'] == '1') {
            $('#poblacionEspCheck9').prop('checked', true);
        } else {
            $('#poblacionEspCheck9').prop('checked', false);
        }



        if ($datosdp['discapacidad1'] == '1') {
            $('#discapacidadCheck1').prop('checked', true);
        } else {
            $('#discapacidadCheck1').prop('checked', false);
        }

        
        if ($datosdp['discapacidad4'] == '1') {
            $('#discapacidadCheck4').prop('checked', true);
        } else {
            $('#discapacidadCheck4').prop('checked', false);
        }

        if ($datosdp['discapacidad8'] == '1') {
            $('#discapacidadCheck8').prop('checked', true);
        } else {
            $('#discapacidadCheck8').prop('checked', false);
        }

        if ($datosdp['discapacidad9'] == '1') {
            $('#discapacidadCheck9').prop('checked', true);
        } else {
            $('#discapacidadCheck9').prop('checked', false);
        }

        if ($datosdp['discapacidad10'] == '1') {
            $('#discapacidadCheck10').prop('checked', true);
        } else {
            $('#discapacidadCheck10').prop('checked', false);
        }

        if ($datosdp['discapacidad11'] == '1') {
            $('#discapacidadCheck11').prop('checked', true);
        } else {
            $('#discapacidadCheck11').prop('checked', false);
        }













      //  traeProgramasIESFuturo('<?php echo $datosdp['institucion_futuro'] ?>');

       
        f_solicitudAdmision();
        conoceSapiencia();

        if('<?php echo $datosdp['tipoDocumento']  ?>' == ''){
            $('#bienvenidos').modal();
        }else{           
            validar_edad();
           $('#form1').find('input, textarea, button, select').prop('disabled', true);
           $('#guardarAC').hide();
           
       }

    });
</script>


</html>