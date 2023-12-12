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

    <link href="<?php echo base_url() ?>resources/css/style4.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>resources/css/mobilmenu.css" rel="stylesheet" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <input id="IP" style="display:none" value="<?php echo IP ?>">

    <?php echo BURGER_BUTTON_MENU_MOBILE ?>

    <div class="wrapper">
        <!-- Sidebar  -->


        <?php echo MENU_LATERAL ?>
        

        <!-- Page Content  -->
        <div id="content">
            <input id="documento" value="<?php echo $this->session->userdata('documento') ?>" style="display: none">
            <input id="id_usuarios" value="<?php echo $this->session->userdata('id_usuario') ?>" style="display: none">
            <input id="periodo" value="<?php echo $this->session->userdata('periodo') ?>" style="display: none">
            <input id="nombre" value="<?php echo $this->session->userdata('nombre') ?>" style="display: none">
            <div class="row offset-md-3">
                <h4>¡Hola! <?php echo $this->session->userdata('nombre') ?> </h4>
            </div>
            <br>

            <div>
                <?php if ($revisado == '0') {
                    echo ('<div class="alert alert-danger" role="alert">
                Tienes notificaciones por revisar <a href="fc_notificaciones" class="alert-link">presiona clcik aqui </a> , para revisarlas.
                </div>');
                } else {
                    echo ('');
                }
                ?>
            </div>

            <div class="alert alert-default" role="alert">
                <p>
                    Bienvenido a la Agencia de Educación Postsecundaria de Medellín SAPIENCIA.
                    <!-- para desplazarse correctamente a lo largo del aplicativo, proceda observando el instructivo relacionado a continuación: -->
                </p>
                <hr>
            </div>
            <div class="row offset-md-1">
                <a href="https://sapiencia.gov.co/encuesta-de-satisfaccion/" target="_blank"><img class="offset-md-2"  src="<?php echo base_url() ?>resources/img/img_home.jpeg" style="width: 450px;height: 100px;"></a>

            </div>

        </div>



    </div>    


        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>resources/js/menu.js?<?php echo time(); ?>"></script>
        <script src="<?php echo base_url() ?>resources/js/navegacion_menu.js?<?php echo time(); ?>"></script>


        <script type="text/javascript">
            $(document).ready(function() {

                // if (<?php echo $this->session->userdata('id_usuario') ?> == 161632 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 161632 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 190460 ||
                  
                //     <?php echo $this->session->userdata('id_usuario') ?> == 31477 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 190457 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 190464 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 190467 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 79646 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 190076 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 23719 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 21830 ||
                //     <?php echo $this->session->userdata('id_usuario') ?> == 141428) {

                //     $('#liRegistroTelefonico').hide();
                //     $('#liSolicitudesNuevas').hide();
                //     $('#liSeguimientoPQR').hide();
                //     $('#liRadicar').show();


                // } else if (<?php echo $this->session->userdata('id_usuario') ?> == 190592) { //katerin Abogada Fondos

                //     $('#liRegistroTelefonico').hide();
                //     $('#liSolicitudesNuevas').hide();

                // } else if (<?php echo $this->session->userdata('id_usuario') ?> == 55458 //Juliana Toro
                // || <?php echo $this->session->userdata('id_usuario') ?> == 15321 // Nayibe Correa
                // || <?php echo $this->session->userdata('id_usuario') ?> == 47462 //Cintya Estarita
                // || <?php echo $this->session->userdata('id_usuario') ?> == 41011 // Liliana Espinosa
                // || <?php echo $this->session->userdata('id_usuario') ?> == 625 // Liseth Arbelaes
                // || <?php echo $this->session->userdata('id_usuario') ?> == 242613 // Liseth Arbelaes
                // || <?php echo $this->session->userdata('id_usuario') ?> == 22
                // || <?php echo $this->session->userdata('id_usuario') ?> == 64
                // || <?php echo $this->session->userdata('id_usuario') ?> == 115
                // || <?php echo $this->session->userdata('id_usuario') ?> == 1139
                // || <?php echo $this->session->userdata('id_usuario') ?> == 21830
                // || <?php echo $this->session->userdata('id_usuario') ?> == 21838
                // || <?php echo $this->session->userdata('id_usuario') ?> == 21840
                // || <?php echo $this->session->userdata('id_usuario') ?> == 22157
                // || <?php echo $this->session->userdata('id_usuario') ?> == 23719
                // || <?php echo $this->session->userdata('id_usuario') ?> == 23871
                // || <?php echo $this->session->userdata('id_usuario') ?> == 24592
                // || <?php echo $this->session->userdata('id_usuario') ?> == 46588
                // || <?php echo $this->session->userdata('id_usuario') ?> == 47356
                // || <?php echo $this->session->userdata('id_usuario') ?> == 47714
                // || <?php echo $this->session->userdata('id_usuario') ?> == 94583
                // || <?php echo $this->session->userdata('id_usuario') ?> == 112194
                // || <?php echo $this->session->userdata('id_usuario') ?> == 133375
                // || <?php echo $this->session->userdata('id_usuario') ?> == 133460
                // || <?php echo $this->session->userdata('id_usuario') ?> == 134116
                // || <?php echo $this->session->userdata('id_usuario') ?> == 134117
                // || <?php echo $this->session->userdata('id_usuario') ?> == 134118
                // || <?php echo $this->session->userdata('id_usuario') ?> == 134122
                // || <?php echo $this->session->userdata('id_usuario') ?> == 134123
                // || <?php echo $this->session->userdata('id_usuario') ?> == 134126
                // || <?php echo $this->session->userdata('id_usuario') ?> == 141428
                // || <?php echo $this->session->userdata('id_usuario') ?> == 152315
                // || <?php echo $this->session->userdata('id_usuario') ?> == 165430
                // || <?php echo $this->session->userdata('id_usuario') ?> == 165720
                // || <?php echo $this->session->userdata('id_usuario') ?> == 165783
                // || <?php echo $this->session->userdata('id_usuario') ?> == 186362
                // || <?php echo $this->session->userdata('id_usuario') ?> == 187011
                // || <?php echo $this->session->userdata('id_usuario') ?> == 190076
                // || <?php echo $this->session->userdata('id_usuario') ?> == 190592
                // || <?php echo $this->session->userdata('id_usuario') ?> == 190663
                // || <?php echo $this->session->userdata('id_usuario') ?> == 192890
                
                // || <?php echo $this->session->userdata('id_usuario') ?> == 231957
                // || <?php echo $this->session->userdata('id_usuario') ?> == 189308) { 

                //     $('#liRadicar').show();
                    
                // }

                if (<?php echo $this->session->userdata('id_usuario') ?> == 190592 || <?php echo $this->session->userdata('id_usuario') ?> == 288967 ) { //katerin Abogada Fondos-Vanessa Gil Abogada

                    $('#liRegistroTelefonico').hide();
                    $('#liSolicitudesNuevas').hide();
                    $('#liSeguimientoPQR').show();

                }else{
                    $('#liSeguimientoPQR').hide();
                }
                $('#liRadicar').show();
                $('#liPQRS').show();
                document.getElementById('liPQRS').style.backgroundColor = '#55226d';


                window.addEventListener('resize', toggleMenus);
                toggleMenus(); // Llamar a la función al cargar la página
            });




            function toggleMenus() {
                    const desktopMenu = document.getElementById('sidebar');
                    const hamburger = document.querySelector(".hamburger-menu");
                    if (window.innerWidth < 768) {
                        sidebar.classList.remove("showMobile");
                        hamburger.style.display = "block";

                    } else {
                        hamburger.style.display = "none";
                        sidebar.classList.add("showMobile");

                    }
                }
                            

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