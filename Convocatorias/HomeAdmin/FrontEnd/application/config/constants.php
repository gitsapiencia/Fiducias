<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
define('IP',  'https://fondos.sapiencia.gov.co/convocatorias/');


define('BURGER_BUTTON_MENU_MOBILE',  '<div id="button-menu-mobile" class="hamburger-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        </div>');

define('MENU_LATERAL',  '<nav id="sidebar">
<div class="sidebar-header">
<img class="offset-md-0" src="https://fondos.sapiencia.gov.co/convocatorias/frontend_homeadmin/resources/img/fondo-blanco-200x200.png"  style="width: 200px;height: 200px;">
    <h3><i></i></h3>
    <strong>SP</strong>
</div>

<ul class="list-unstyled components">
<li style="display: none" id="liAspirante">
    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-edit"></i>
        Aspirantes
    </a>
    <ul class="collapse list-unstyled" id="pageSubmenu">
        <li>
            <a id="subMenuPagare" href="javascript:menuLegalizacion()"><i>Descargar carta</i></a>
        </li>        
        
    </ul>
</li>
<li id="liBeneficiarios">                 
    <a id="menuBeneficiarios" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-edit"></i>
        Beneficiarios
    </a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
        <li style="display: ">
            <a id="subMenuHistorico" href="javascript:menuBuscarhistoria()"><i>Historia del beneficiario </i></a>
        </li>
      
        <li style="display: none">
            <a id="subMenuRenovaciones" href="fc_renovaciones"><i>Renovaciones</i></a>
        </li>
        <li style="display: none">
            <a id="subMenuNotificaciones" href="fc_notificaciones"><i>Notificaciones</i></a>
        </li>
       
        <li style="display: none">
            <a href="fc_normativafondos"><i>Normativa de Fondos</i></a>
        </li>
        <li>
          
        </li>
    </ul>
</li>

<li id="liSS">                 
    <a href="#homeSubmenuSS" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-bars"></i>
        Gestión social y territorial
    </a>
    <ul class="collapse list-unstyled" id="homeSubmenuSS">
        <li style="display: ">
            <a href="javascript:menuActaCompromiso()"><i>Acta de compromiso</i></a>
        </li>

        <li style="display:none ">
            <a href="javascript:menuEntidades()"><i>Entidades</i></a>
        </li>

        <li style="display: ">
            <a href="javascript:menuEventos()"><i>Eventos</i></a>
        </li>
      
        <li style="display: none">
            <a href="javascript:menuSeguimientoEventos()"><i>Seguimiento de eventos</i></a>
        </li>
       
        <li style="display: ">
            <a href="javascript:menuServicioSocialepm()"><i>Control horas EPM</i></a>
        </li>
        <li style="display: ">
            <a href="javascript:menuServicioSocialpp()"><i>Control horas PP</i></a>
        </li>

        <li style="display: ">
            <a href="javascript:menuEntidadesSS()"><i>Entidades Nuevo</i></a>
        </li>

    </ul>
</li>

<li  style="display: none" id="liPQRS">                 
    <a id="menuPQRS" href="#homeSubmenuPQRS" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-id-card"></i>
        PQRSFD
    </a>
    <ul class="collapse list-unstyled" id="homeSubmenuPQRS">
        <li id="liRadicar"  style="display: none">
        <a href="javascript:menuRadicar()"><i>Radicar</i></a>  
        </li>    
        <li id="liRegistroTelefonico">
        <a href="javascript:menuTelefonoPQRS()"><i>Registro telefónico - presencial</i></a>  
        </li>
        <li id="liSolicitudesNuevas" style="display: ">
        <a href="javascript:menuAdminPQRS()"><i>Solicitudes nuevas</i></a>  
        </li>
      
        <li id="liSeguimientoPQR" style="display: ">
            <a href="javascript:menuSeguimientoPQRS()"><i>Seguimiento</i></a>
        </li>
        <li id="liFondos" style="display: ">
            <a href="javascript:menuAdminFondosPQRS()"><i>Fondos</i></a>
        </li>
        <li id="liPermanencia" style="display: ">
        <a href="javascript:menuPermanenciaPQRS()"><i>Permanencia</i></a>
        </li>
        
  
    </ul>
</li>

<li style="display: " id="liSeguimientoProcesos">
    <a href="#homeSubmenuSP" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
    <i class="fas fa-bars"></i>
        Seguimiento Procesos
    </a>
    <ul class="collapse list-unstyled" id="homeSubmenuSP">
        <li>
            <a href="javascript:menuEstadoInscritos()"><i>Estado inscritos</i></a>
        </li>
        <li>
            <a href="javascript:menuEstadoRenovacion()"><i>Estado Renovación</i></a>
        </li>   
    </ul>
</li>


<li>
    <a href="http://sapiencia.gov.co/"><i class="fas fa-sign-out-alt"></i> Salida Segura</a>    
</li>

</ul>
</nav>');

//define('IP',  'http://localhost/frontend_homeadmin/');

