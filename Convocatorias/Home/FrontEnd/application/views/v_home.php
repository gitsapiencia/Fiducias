<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SAPIENCIA</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
  <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->
    <!-- Our Custom CSS -->
   
    <link href="<?php echo base_url() ?>resources/css/style4.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>resources/css/mobilemenu.css" rel="stylesheet" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <input id="IP" style="display:none" value="<?php echo IP ?>" >

    <?php echo BURGER_BUTTON_MENU_MOBILE ?>

    <div class="wrapper">
        <!-- Sidebar  -->

            <?php echo MENU_LATERAL ?>
  

        <!-- Page Content  -->
        <div id="content">
<input id="documento" value="<?php echo $this->session->userdata('documento')?>" style="display: none">
<input id="id_usuarios" value="<?php echo $this->session->userdata('id_usuario')?>" style="display: none">
<input id="periodo" value="<?php echo $this->session->userdata('periodo')?>" style="display: none">
<input id="nombre" value="<?php echo $this->session->userdata('nombre')?>" style="display: none">
<input id="tipoc" value="<?php echo $tipoc ?>" style="display: none">
<input id="rol" value="<?php echo $this->session->userdata('rol') ?>" style="display: none">

            <div class="row offset-md-3">
              <h4>¡Hola! <?php echo $this->session->userdata('nombre') ?> </h4>
            </div>
            <br>

           <div> 
            <?php if($revisado == '0'){echo ('<div class="alert alert-danger" role="alert">
                Tienes notificaciones por revisar <a href="fc_notificaciones" class="alert-link">presiona clcik aqui </a> , para revisarlas.
                </div>');}else{echo ('');} 
            ?>
            </div>

           <div class="alert alert-default" role="alert">
            <p>
            Bienvenido a la Agencia de Educación Postsecundaria de Medellín Sapiencia, para realizar el proceso de renovación del crédito, despliega la opción beneficiarios en el menú lateral e ingresas a la opción "Renovaciones"
             <!-- para desplazarse correctamente a lo largo del aplicativo, proceda observando el instructivo relacionado a continuación: -->
            </p>
            <hr>
            </div>
            <div class="row offset-md-1">
            <img class="offset-md-0" src="<?php echo base_url() ?>resources/img/img_home.png" style="width: 850px;height: 260px;">
            
        </div>
                
    </div>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>resources/js/menu.js?<?php echo time(); ?>" ></script>
    <script src="<?php echo base_url() ?>resources/js/navegacion_menu.js?<?php echo time(); ?>" ></script>
    
    
    <script type="text/javascript">
        $(document).ready(function () {

            if('<?php echo $tipoc ?>' == 20){

                $('#liBeneficiarios').hide();
                $('#liAspirante').show();
            }else{
                $('#liBeneficiarios').show();
                $('#liAspirante').hide();
            }

            if('<?php echo $tipoc ?>' == 4){
                $('#liserviciosocial').show();
                
            }else{
                $('#liserviciosocial').hide();
            }
            if('<?php echo $tipoc ?>' == 19){
                    $('#liserviciosocialepm').show();
            }else{
                    $('#liserviciosocialepm').hide();
            }
            
            
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });


        });




 

            document.addEventListener("DOMContentLoaded", function() {
                const sidebar = document.getElementById("sidebar");
                const hamburger = document.querySelector(".hamburger-menu");

                hamburger.addEventListener("click", function() {
                    sidebar.classList.toggle("showMobile");
                });
            });






    </script>
</body>

</html>