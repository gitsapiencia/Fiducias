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
<img class="offset-md-0" src="https://fondos.sapiencia.gov.co/convocatorias/frontend_home/resources/img/logo_fondo-blanco-200x200.png"  style="width: 200px;height: 200px;">
    <h3><i></i></h3>
    <strong>SP</strong>
</div>
<ul class="list-unstyled components">
<li style="display:none " id="liAspirante">
    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-edit"></i>
        Aspirantes
    </a>
    <ul class="collapse list-unstyled" id="pageSubmenu">
        <li>
            <a id="subMenuPagare" href="javascript:menuLegalizacion()"><i>Descargar carta y pagaré</i></a>
        </li>        
        
    </ul>
</li>

<li id="liBeneficiarios">                 
    <a id="menuBeneficiarios" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration:none">
        <i class="fas fa-id-card"></i>
        Beneficiarios
    </a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
        <li style="display: none">
            <a id="subMenuHistorico" href="fc_hbeneficiario2"><i>Historial del Beneficiario </i></a>
        </li>
      
        <li>
            <a id="subMenuRenovaciones" href="javascript:menuRenovacion()"><i>Renovaciones</i></a>
        </li>
        <li style="display: none">
            <a id="subMenuNotificaciones" href="fc_notificaciones"><i>Notificaciones</i></a>
        </li>
       
      <!--  <li>
            <a href="fc_normativafondos"><i>Normativa de Fondos</i></a>
        </li> -->
        <li>
          
        </li>
    </ul>
</li>

<li style="display:none" id="liserviciosocial">
    <a href="javascript:menuServicioSocial()"><i class="fas fa-book" style="text-decoration:none"></i> Mi servicio social</a> 
</li>


<li id="liOfertasBeneficiarios" style="display:none">                 
    <a id="menuOfertasBeneficiarios" href="#homeSubmenuOfertas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-id-card"></i>
        Ofertas Publicadas
    </a>
    <ul class="collapse list-unstyled" id="homeSubmenuOfertas">
        <li style="display: ">
            <a id="subMenuOfertasPublicadas" href="javascript:OfertasPublicadas()"><i>Ofertas Publicadas por las entidades</i></a>
        </li>
      
        <li>
            <a id="subMenuOfertasAceptado" href="javascript:OfertasPublicadasAceptado()"><i>Ofertas en las que fue aceptado</i></a>
        </li>
      
    </ul>
</li>



<li id="liSS" style="display:none">                 
    <a id="menuSS" href="#homeSubSS" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-id-card"></i>
        Servicio Social
    </a>
    <ul class="collapse list-unstyled" id="homeSubSS">
        <li>
            <a href="javascript:menuNuevaSS()">Ofertas publicadas</a>
        </li>
      
        <li>
            <a href="javascript:menuRespuestaSS()">Ofertas en las que fue aceptado</a>
        </li>
       
       
    </ul>
</li>

<li style="display:none" id="liserviciosocialepm">
   <a href="javascript:menuServicioSocialepm()"><i class="fas fa-book"></i> Servicio Social EPM</a>    
</li>
<li id="liPQRS">                 
    <a id="menuPQRS" href="#homeSubmenuPQRS" style="text-decoration:none" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-id-card" style="text-decoration:none"></i>
        PQRSFD
    </a>
    <ul class="collapse list-unstyled" id="homeSubmenuPQRS">
        <li>
            <a href="javascript:menuNuevaPQRS()">Nueva PQRSFD</a>
        </li>
      
        <li>
            <a href="javascript:menuRespuestaPQRS()">Respuestas PQRSFD</a>
        </li>
       
       
    </ul>
</li>
<li style="display: none">
    <a href="javascript:menuNuevaPQRS()"><i class="fas fa-question-circle"></i> PQRSFD</a>    
</li>

<li>
    <a href="http://sapiencia.gov.co/"><i class="fas fa-sign-out-alt"></i> Salida Segura</a>    
</li>

</ul>
</nav>');

//define('IP',  'http://localhost/frontend_home/');

