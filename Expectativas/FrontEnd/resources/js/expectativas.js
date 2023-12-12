
function buscaralumnosok(nombre) {

    

    $.ajax({
        type: "post",
        url: "http://129.213.174.126/convocatorias/backend_odes_expectativas/Get_ListasDesplegables/alumnosok",
        data: {colegio: nombre},
        dataType: "json",
        success: function (data) {
            var tabla,estado,color = '';
            var i,total,completos = 0;
            for (i = 0; i < data.response.length; i++) {
                total = i+1;
                if(data.response[i].estado == '0'){

                    estado = 'Incompleto';
                    color = 'red';
                }else{

                    estado = 'Completo';
                    completos = completos+1;
                    color = 'green';
                }
              tabla+= "<tr><th scope='row'>"+ total + "</th><th scope='row'>" + data.response[i].documento + "</th><td>"+ data.response[i].nombre1 + " " +data.response[i].nombre2+ " " +data.response[i].apellido1+ " " +data.response[i].apellido2+ "</td><td style ='color:"+color+"'>" + estado + "</td></tr>";
          
            }
            $('#divcompletos').html('<h4>Completos: '+completos+' de '+total+'</h4>');
            $('#tablaAlumnos').html(tabla);
        }
    });

}


function tipoColegioF(event){
    
    document.getElementById('tipocolegio').value = event.selectedOptions[0].getAttribute('data-tipo'); 
}
function traeProgramasIESFuturo(idies) {

   
    //alert(periodo);
    //alert(rango);

    if(idies == '999'){
        $('#divInstitucionFuturoOtro').show(1000);
        $('#divProgramaFuturoOtro').show(1000);
        $('#divProgramaFuturo').hide();
        $('#programa_futuro').val('');
        $('#programa_futuro').prop('required',false);
        $('#programa_futuro_otro').prop('required',true);
        $('#institucion_futuro_otro').prop('required',true);

    }else{


        $('#divInstitucionFuturoOtro').hide();
        $('#divProgramaFuturoOtro').hide();
        $('#institucion_futuro_otro').val('');
        $('#programa_futuro_otro').val('');
        $('#divProgramaFuturo').show(1000);
        $('#programa_futuro').prop('required',true);
        $('#programa_futuro_otro').prop('required',false);
        $('#institucion_futuro_otro').prop('required',false);

            $.ajax({
            type: "GET",
            url: "fc_traeprogramasies",
            data: {vidies: $('#institucion_futuro').val()},
            dataType: "html",
        
            success: function (data) {

                $('#programa_futuro').html(data)
            
            }
        });
    }
}

function traeProgramasIES(idies) {

   
    //alert(periodo);
    //alert(rango);

    $.ajax({
        type: "GET",
        url: "fc_traeprogramasies",
        data: {vidies: $('#institucion_solicitud' + idies).val()},
        dataType: "html",
       
        success: function (data) {

            $('#programa_solicitud' + idies).html(data)
          
        }
    });
}

function tipoBachilleratoSi(opcion){
    alert =(opcion);

    if (opcion == "Media Técnica"){
        $('#mediaTecnica').prop('disabled',false);
        $('#mediaTecnica').prop('required',true);
    }else{

        $('#mediaTecnica').prop('disabled',true);
        $('#mediaTecnica').prop('required',false);
        $('#mediaTecnica').val('');
    }

}

function activaDocumento(opcion){
    $('#documento').prop('disabled',(opcion==""));

    $('#otroTipoDoc').prop('disabled',($('#tipoDocumento').val() != 6));

    if($('#tipoDocumento').val() == 6){
        $('#otroTipoDoc').val('');
    }


    


}

function sisben(n) {

    if(n !== undefined){

        var sisb = n;
    }else{
        var sisb = $('#tieneSisben').val();
    }

    if (sisb == '1') {

        $('#divSisbenSi').show();
        $('#puntajeSisben').prop('required',true);
        
                
    } else if(sisb == '2') {

        $('#divSisbenSi').hide();
        $('#puntajeSisben').prop('required',false);
        $('#puntajeSisben').val('');
     
    }


}

function f_solicitudAdmision(){
    $('#bloque1').hide();
    $('#bloque2').hide();

    if($('#solicitudAdmision').val() != "")
    if($('#solicitudAdmision').val() == 1){
        $('#bloque1').show();
        $('#bloque2').hide();

        $('#nivel_formacion').prop('required',true);
        $('#iegustaria').prop('required',true);
        $('#programagustaria').prop('required',true);
        $('#modalidadprograma').prop('required',true);
        $('#razoninstitucion').prop('required',true);
        $('#razonprograma').prop('required',true);
        $('#pagoestudio').prop('required',true);
        
        $('#RazonNoSolicitudAdmision').prop('required',false);
        $('#RazonNoSolicitudAdmision').val('');
    }else{
        
        $('#bloque2').show();       
        $('#bloque1').hide();
      
        $('#RazonNoSolicitudAdmision').prop('required',true);
        $('#nivel_formacion').prop('required',false);
        $('#nivel_formacion').val('');
        $('#iegustaria').prop('required',false);
        $('#iegustaria').val('');
        $('#programagustaria').prop('required',false);
        $('#programagustaria').val('');
        $('#modalidadprograma').prop('required',false);
        $('#modalidadprograma').val('');
        $('#razoninstitucion').prop('required',false);
        $('#razoninstitucion').val('');
        $('#razonprograma').prop('required',false);
        $('#razonprograma').val('');        
        $('#pagoestudio').prop('required',false);
        $('#pagoestudio').val('');
    }
    
}



function nivelFormacion(nivel){

    //Tecnica Laboral
    if(nivel == '2'){
        $('#iegustaria').hide();
        $('#etdhgustaria').show();
        $('#iegustaria').prop('required',false);
        $('#etdhgustaria').prop('required',true);
        $('#iegustaria').val('');

    }
    else
    {
        $('#iegustaria').show();
        $('#etdhgustaria').hide();
        $('#iegustaria').prop('required',true);
        $('#etdhgustaria').prop('required',false);
        $('#etdhgustaria').val('');
    }
    
}







function presentaSolicitudAdmision(n) {

    var dataValueIE = '';
    var dataValuePROG = '';
    
    var selectedOption = document.querySelector('#ies-list option[value="' + $('#iegustaria').val() + '"]');
    if (selectedOption) {
        dataValueIE = selectedOption.getAttribute("data-value");
    }
    

    if(dataValueIE == '999' || $('#solicitudAdmision').val() > 1){
        //  alert('1');
          $('#programagustaria').prop('disabled',true);
          $('#programagustaria').val('');
          $('#programagustaria').prop('required',false);
          $('#cual1').prop('disabled',false);
          $('#cual2').prop('disabled',false);
      }
      else{
          // alert($('#iegustaria').val());
          $('#programagustaria').prop('disabled',false);
          $('#programagustaria').prop('required',true);
          $('#cual1').prop('disabled',true);    
          $('#cual1').val('');    
      }


      var selectedOption = document.querySelector('#prog-list option[value="' + $('#programagustaria').val() + '"]');
      if (selectedOption) {
        dataValuePROG = selectedOption.getAttribute("data-value");
      }
      
      if(dataValuePROG == '-999' || dataValueIE == '999' || $('#solicitudAdmision').val() > 1){
            $('#cual2').prop('disabled',false);
        }
        else{
            $('#cual2').prop('disabled',true); 
            $('#cual2').val('');    
        }
  





      $('#cual3').prop('disabled', ($('#pagoestudio').val() != '999') );
        
      if($('#pagoestudio').val() != '999')
            $('#cual3').val(''); 


      $('#otraRazon').prop('disabled', ($('#RazonNoSolicitudAdmision').val() != '999') );


    if(n !== undefined){

        var solicitud = n;
    }else{
        var solicitud = $('#solicitudAdmision').val();
    }


    if (solicitud == '1') {

        $('#divSiSolicitudAdmision').show();
        //$('#divNoSolicitudAdmision').hide();
        $('#institucion_solicitud1').prop('required',true);
        $('#programa_solicitud1').prop('required',true);
        $('#modalidad_solicitud1').prop('required',true);
        $('#admitido_solicitud1').prop('required',true);
       // $('#razoninstitucion').prop('required',true);
        
       
                
    } else if(solicitud == '2') {

        $('#divSiSolicitudAdmision').hide();
        //$('#divNoSolicitudAdmision').show();
        $('#institucion_solicitud1').prop('required',false);
        $('#programa_solicitud1').prop('required',false);
        $('#modalidad_solicitud1').prop('required',false);
        $('#admitido_solicitud1').prop('required',false);
      //  $('#razoninstitucion').prop('required',false);
    }


}

function dispositivoschecked(n) {


    var i, j, obj, numero;
    obj = document.getElementById('divTecnologiaNo');
    numero = obj.getElementsByTagName('div').length;
    if ($('#dispositivosCheck' + n).prop('checked')) {
        

        for (i = 1; i <= numero; i++) {
            if(n == 5 && i < 5){
                $('#dispositivosCheck' + i).prop('checked', false);
            }else if(n !== 5) {
                $('#dispositivosCheck5').prop('checked', false);
            }
            $('#dispositivosCheck' + i).prop('required', false);
        }



    } else {

       
        for (i = 1; i <= numero; i++) {

            if (document.getElementById('dispositivosCheck' + i).checked === false) {

               
                    $('#dispositivosCheck' + i).prop('required', true);
               
            } else {

               

                for (j = 1; j <= numero; j++) {

                    $('#modopagoCheck' + j).prop('required', false);
                }

                break;
            }

        }
    }

}










function opciontecnologianochecked(n) {


    var i, j, obj, numero;
    obj = document.getElementById('divTecnologiaNo');
    numero = obj.getElementsByTagName('div').length;
    if ($('#tecnologianoCheck' + n).prop('checked')) {

        for (i = 1; i <= numero; i++) {

            $('#tecnologianoCheck' + i).prop('required', false);
        }
    } else {


        for (i = 1; i <= numero; i++) {

            if (document.getElementById('tecnologianoCheck' + i).checked === false) {

                if ($('#prioridad_tecnologia').val() == 2 || $('#prioridad_tecnologia').val() == 3) {

                    $('#tecnologianoCheck' + i).prop('required', true);
                }
            } else {

                for (j = 1; j <= numero; j++) {

                    $('#tecnologianoCheck' + j).prop('required', false);
                }

                break;
            }

        }
    }

}

function estudiaProximoAno(n){

    if(n == '1'){// Si estudia proxima año
        
        $('#institucion_futuro').prop('required',true);
        $('#programa_futuro').prop('required',true);
        $('#modalidad_futuro').prop('required',true);
        $('#razon_institucion_programa').prop('required',true);
       // $('#nombreBecaModoPago').prop('required',true);
        $('#conoce_pp').prop('required',true);
        $('#conoce_epm').prop('required',true);
        $('#conoce_becas').prop('required',true);
        $('#conoce_sapiencia').prop('required',true);
        $('#imagen_sapiencia').prop('required',true);

         //Plan proximo año
         var i, obj, numero;
         obj = document.getElementById('divModoPago');
         numero = obj.getElementsByTagName('div').length;
         for (i = 1; i <= numero; i++) {
                $('#modopagoCheck' + i).prop('required',true);
         }

        $('#razon_no_estudia').prop('required',false);   
    }else{
        
        $('#institucion_futuro').prop('required',false);
        $('#programa_futuro').prop('required',false);
        $('#modalidad_futuro').prop('required',false);
        $('#razon_institucion_programa').prop('required',false);
        $('#nombreBecaModoPago').prop('required',false);
        $('#conoce_pp').prop('required',false);
        $('#conoce_epm').prop('required',false);
        $('#conoce_becas').prop('required',false);
        $('#conoce_sapiencia').prop('required',false);
        $('#imagen_sapiencia').prop('required',false);

        $('#institucion_futuro').val('');
        $('#programa_futuro').val('');
        $('#modalidad_futuro').val('');
        $('#razon_institucion_programa').val('');
        $('#nombreBecaModoPago').val('');
        $('#conoce_pp').val('');
        $('#conoce_epm').val('');
        $('#conoce_becas').val('');
        $('#conoce_sapiencia').val('');
        $('#imagen_sapiencia').val('');

        //Plan proximo año
        var i, obj, numero;
        obj = document.getElementById('divModoPago');
        numero = obj.getElementsByTagName('div').length;
        for (i = 1; i <= numero; i++) {
            $('#modopagoCheck' + i).prop('checked', false);
            $('#modopagoCheck' + i).prop('required',false);
        }

        $('#razon_no_estudia').prop('required',true);
    }
}

function opcionplanchecked(n) {


    var i, j, obj, numero;
    obj = document.getElementById('divPlan');
    numero = obj.getElementsByTagName('div').length;
    if ($('#planCheck' + n).prop('checked')) { // Cuando se pone chulo a una opcion

        if(n == 1){ // Si la opcion chuleada es estudiar
            $('#estudiaProximoAnoSi').show(1000);
            $('#estudiaProximoAnoNo').hide();
            $('#razon_no_estudia').val('');
            estudiaProximoAno(1);
        }else{
            if (document.getElementById('planCheck1').checked === true) { //Valida si estudiar tiene chulo
                $('#estudiaProximoAnoSi').show(1000);
                $('#estudiaProximoAnoNo').hide();
                $('#razon_no_estudia').val('');
                estudiaProximoAno(1);
            }else{
                $('#estudiaProximoAnoNo').show(1000);
                $('#estudiaProximoAnoSi').hide();
                estudiaProximoAno(0);
            }
        }

        for (i = 1; i <= numero; i++) {

            $('#planCheck' + i).prop('required', false);

        
        }
    } else { // Cuando se quita chulo a una opcion

    if($('#prioridad_tecnologia').val() == '1'){
        if(n == 1){ // Si la opcion es estudiar

            $('#estudiaProximoAnoNo').show(1000);
            $('#estudiaProximoAnoSi').hide();
            estudiaProximoAno(0);
        }else{
            if (document.getElementById('planCheck1').checked === true) { // Valida si estudiar tiene chulo
                $('#estudiaProximoAnoSi').show(1000);
                $('#estudiaProximoAnoNo').hide();
                $('#razon_no_estudia').val('');
                estudiaProximoAno(1);
            }else{
                $('#estudiaProximoAnoNo').show(1000);
                $('#estudiaProximoAnoSi').hide();
                estudiaProximoAno(0);
            }
        }
    }

        for (i = 1; i <= numero; i++) {

            if (document.getElementById('planCheck' + i).checked === false) {

                if ($('#prioridad_tecnologia').val() == 1) {

                    $('#planCheck' + i).prop('required', true);
                  
                }
            } else {

                for (j = 1; j <= numero; j++) {

                    $('#planCheck' + j).prop('required', false);
                    
                }
               
                break;
            }

        }
    }

}

function prioridadTecnologia(){
    
    if($('#prioridad_tecnologia').val() == '1'){

        $('#divRazonTecnologiaNo').hide();    
        var i, obj, numero;
        obj = document.getElementById('divTecnologiaNo');
        numero = obj.getElementsByTagName('div').length;
        for (i = 1; i <= numero; i++) {

            $('#tecnologianoCheck' + i).prop('required', false);
            if ($('#tecnologianoCheck' + i).prop('checked')) {
                $('#tecnologianoCheck' + i).prop('checked', false);
            }


        }    
        

        $('#divRazonTecnologiaSi').show(1000);
        var i, obj, numero;
        obj = document.getElementById('divPlan');
        numero = obj.getElementsByTagName('div').length;
        for (i = 1; i <= numero; i++) {

            $('#planCheck' + i).prop('required', true);

        }




    }else if($('#prioridad_tecnologia').val() == '2' || $('#prioridad_tecnologia').val() == '3'){

        $('#estudiaProximoAnoSi').hide();
        $('#estudiaProximoAnoNo').hide();
        $('#institucion_futuro').prop('required',false);
        $('#programa_futuro').prop('required',false);
        $('#modalidad_futuro').prop('required',false);
        $('#razon_institucion_programa').prop('required',false);
        $('#nombreBecaModoPago').prop('required',false);
        $('#conoce_pp').prop('required',false);
        $('#conoce_epm').prop('required',false);
        $('#conoce_becas').prop('required',false);
        $('#conoce_sapiencia').prop('required',false);
        $('#imagen_sapiencia').prop('required',false);
        $('#razon_no_estudia').prop('required',false);

        $('#institucion_futuro').val('');
        $('#programa_futuro').val('');
        $('#modalidad_futuro').val('');
        $('#razon_institucion_programa').val('');
        $('#nombreBecaModoPago').val('');
        $('#conoce_pp').val('');
        $('#conoce_epm').val('');
        $('#conoce_becas').val('');
        $('#conoce_sapiencia').val('');
        $('#imagen_sapiencia').val('');
        $('#razon_no_estudia').val('');

        //Plan proximo año
        var i, obj, numero;
        obj = document.getElementById('divModoPago');
        numero = obj.getElementsByTagName('div').length;
        for (i = 1; i <= numero; i++) {
            $('#modopagoCheck' + i).prop('checked', false);
            $('#modopagoCheck' + i).prop('required',false);
        }

        $('#divRazonTecnologiaSi').hide();
        var i, obj, numero;
        obj = document.getElementById('divPlan');
        numero = obj.getElementsByTagName('div').length;
        for (i = 1; i <= numero; i++) {

            $('#planCheck' + i).prop('required', false);
            if ($('#planCheck' + i).prop('checked')) {
                $('#planCheck' + i).prop('checked', false);
            }


        } 

        $('#divRazonTecnologiaNo').show(1000);
        
        var i, obj, numero;
        obj = document.getElementById('divTecnologiaNo');
        numero = obj.getElementsByTagName('div').length;
        for (i = 1; i <= numero; i++) {

            $('#tecnologianoCheck' + i).prop('required', true);
        }

           

    }
}


function buscarMunicipioResidencia(departamento, municipio) {

    if (departamento !== undefined) {//Aqui solo entra cuando se recarga la pagina y trae dato de departamento residencia
        var iddepartamento = departamento;
    } else {

        var iddepartamento = $('#departamentoResidencia').val();
    }

    $.ajax({
        type: "get",
        url: "fc_buscarMunicipio",
        data: {departamento: iddepartamento},
        dataType: "html",
        success: function (data) {

            $('#municipioResidencia').html(data);
            if (municipio !== undefined) {
                $('#municipioResidencia').val(municipio);
            }


        }
    });

}

function validarMunicipioResidencia(municipio, comuna) {

    if (municipio !== undefined) {
        var mun = municipio;
    } else {
        var mun = $('#municipioResidencia').val();
    }


    $.ajax({
        type: "get",
        url: "fc_listaComunaResidencia",
        data: {vrm: mun},
        dataType: "html",
        success: function (data) {

            $('#comunaResidencia').html(data);

            if (municipio !== undefined) {
                $('#comunaResidencia').val(comuna);
            }

            
            if (mun !== '1') {

                $('#divBarrioMedellin').hide();
                $('#divOtroBarrio').show(1000);
                $('#otroBarrio').prop('required',true);
                $('#comunaResidencia').val('22');
                $('#barrio').val('');
                $('#barrio').prop('required',false);
                $('#comunaResidencia').prop('disabled',true);

            } else {
                $('#comunaResidencia').prop('disabled',false);
                $('#divBarrioMedellin').show(1000);
                $('#divOtroBarrio').hide();
                $('#otroBarrio').val('');
                $('#otroBarrio').prop('required',false);
                if (comuna !== undefined) {
                    $('#comunaResidencia').val(comuna);
                }else{
                $('#comunaResidencia').val('');
                $('#comunaResidencia').prop('required',true);
                }
                $('#barrio').prop('required',true);

                //$('#comunaResidencia').prop('required', true);
            }
            

        }
    });
}


function buscarBarrio(comuna, barrio) {

    if (comuna !== undefined) {//Aqui solo entra cuando se recarga la pagina y trae dato de comuna y barrio
        var idcomuna = comuna;
    } else {

        var idcomuna = $('#comuna').val();
    }

    $.ajax({
        type: "get",
        url: "fc_traerbarrios",
        data: {vidcomuna: idcomuna},
        dataType: "html",
        success: function (data) {

            $('#barrio').html(data);
            if (barrio !== undefined) {
                $('#barrio').val(barrio);
            }

        }
    });
}

function llenarotrocampo() {

    var dir1 = document.getElementById("dirCampo1");
    var dir1 = dir1.options[dir1.selectedIndex].text;

    var dir4 = document.getElementById("dirCampo4");
    var dir4 = dir4.options[dir4.selectedIndex].text;

    var dir7 = document.getElementById("dirCampo7");
    var dir7 = dir7.options[dir7.selectedIndex].text;

    if ($('#dirCampo1').val() !== '' || $('#dirCampo2').val() !== '' || $('#dirCampo3').val() !== '' || $('#dirCampo4').val() !== '') {
        var numeral = "#";
    } else {
        numeral = "";
    }

    if ($('#dirCampo1').val() == '20') {

        $('#dirCampo2').prop('disabled', true);
        $('#dirCampo3').prop('disabled', true);
        $('#dirCampo4').prop('disabled', true);
        $('#dirCampo5').prop('disabled', true);
        $('#dirCampo6').prop('disabled', true);
        $('#dirCampo7').prop('disabled', true);
        $('#dirCampo8').prop('disabled', true);

        $('#dirCampo2').val('');
        $('#dirCampo3').val('');
        $('#dirCampo4').val('');
        $('#dirCampo5').val('');
        $('#dirCampo6').val('');
        $('#dirCampo7').val('');
        $('#dirCampo8').val('');

        $('#dirCampo2').prop('required', false);
        $('#dirCampo5').prop('required', false);
        $('#dirCampo8').prop('required', false);
        $('#dirCampo9').prop('required', true);

        $('#muestraDir').val("Su dirección es: " + $('#dirCampo9').val());
    } else {

        $('#dirCampo2').prop('disabled', false);
        $('#dirCampo3').prop('disabled', false);
        $('#dirCampo4').prop('disabled', false);
        $('#dirCampo5').prop('disabled', false);
        $('#dirCampo6').prop('disabled', false);
        $('#dirCampo7').prop('disabled', false);
        $('#dirCampo8').prop('disabled', false);

        //$('#dirCampo9').val('');

        $('#dirCampo2').prop('required', true);
        $('#dirCampo5').prop('required', true);
        $('#dirCampo8').prop('required', true);
        $('#dirCampo9').prop('required', false);

        $('#muestraDir').val("Su dirección es: " + dir1 + " " + $('#dirCampo2').val() + " " + $('#dirCampo3').val() + " " + dir4 + " " + numeral + " " + $('#dirCampo5').val() + " " + $('#dirCampo6').val() + " " + dir7 + " " + $('#dirCampo8').val() + " " + $('#dirCampo9').val());
    }
}


function validarEmail() {

if($('#confirmaCorreo').val() !== ''){
    if ($('#correo').val() == $('#confirmaCorreo').val()) {

        $('#divAlertEmail').hide();
    } else {
        $('#divAlertEmail').show();
        $('#confirmaCorreo').val('');
    }
}

}

function validarEmailRepresentante() {

    if($('#confirmaCorreo_representante').val() !== ''){
        if ($('#correo_representante').val() == $('#confirmaCorreo_representante').val()) {
    
            $('#divAlertEmailRepresentante').hide();
        } else {
            $('#divAlertEmailRepresentante').show();
            $('#confirmaCorreo_representante').val('');
        }
    }
    
    }

function actualizarDatosPersonales() {


    
    var i, obj, numero;
    // Elige no estudiar tecnologia
    obj = document.getElementById('divTecnologiaNo');
    numero = obj.getElementsByTagName('div').length;
    for (i = 1; i <= numero; i++) {
        if ($('#dispositivosCheck' + i).prop('checked')) {
            $('#dispositivosCheck' + i).val('1');
        }else{
            $('#dispositivosCheck' + i).val('2');
        }
    }

    


    var f = new Date();
    var fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate() + " " + f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds());


    
    $.ajax({
        url: $('#IP').val() + "backend_odes_expectativas/Get_ListasDesplegables/index",
        type: "post",
        data: {
            vtipoBachillerato: $('#tipoBachillerato').val(),
            vmediaTecnica: $('#mediaTecnica').val(),
            vcolegio: $('#colegio').val(),
            vdocumento: $('#documento').val(),
            vperiodo: $('#periodo').val(),
            vnombre1: $('#nombre1').val().trim().toUpperCase(),
            vnombre2: $('#nombre2').val().trim().toUpperCase(),
            vapellido1: $('#apellido1').val().trim().toUpperCase(),
            vapellido2: $('#apellido2').val().trim().toUpperCase(),
            vtipoDocumento: $('#tipoDocumento').val(),
            vgenero: $('#genero').val(),
            vfechaNacimiento: $('#fechaNacimiento').val(),
            vnombre_representante: $('#nombre_representante').val(),
            vnumero_representante: $('#numero_representante').val(),
            vcorreo_representante: $('#correo_representante').val(),
            vconfirmacorreo_representante: $('#confirmacorreo_representante').val(),
            vdepartamentoResidencia: $('#departamentoResidencia').val(),
            vmunicipioResidencia: $('#municipioResidencia').val(),
            vcomunaResidencia: $('#comunaResidencia').val(),
            vbarrio: $('#barrio').val(),
            votroBarrio: $('#otroBarrio').val(),
            vdirCampo1: $('#dirCampo1').val(),
            vdirCampo2: $('#dirCampo2').val(),
            vdirCampo3: $('#dirCampo3').val(),
            vdirCampo4: $('#dirCampo4').val(),
            vdirCampo5: $('#dirCampo5').val(),
            vdirCampo6: $('#dirCampo6').val(),
            vdirCampo7: $('#dirCampo7').val(),
            vdirCampo8: $('#dirCampo8').val(),
            vdirCampo9: $('#dirCampo9').val(),
            vmuestraDir: $('#muestraDir').val(),
            vtelefonoFijo: $('#telefonoFijo').val(),
            vcelular: $('#celular').val(),
            vestrato: $('#estrato').val(),
            vtieneSisben: $('#tieneSisben').val(),
            vpuntajeSisben: $('#puntajeSisben').val(),
            vcorreo: $('#correo').val(),
            vconfirmaCorreo: $('#confirmaCorreo').val(),
            vconexion_internet2: $('#conexioninternet').val(),
            vpc_mesa: $('#dispositivosCheck1').val(),
            vpc_portatil: $('#dispositivosCheck2').val(),
            vtablet: $('#dispositivosCheck3').val(),
            vcelular_dispositivo: $('#dispositivosCheck4').val(),
            vninguna: $('#dispositivosCheck5').val(),
            vsolicitud_admin2: $('#solicitudAdmision').val(),
          
            vnivel_formacion2: $('#nivel_formacion').val(),
            vies_estudio2: $('#iegustaria').val(),
            vcual_otroies2: $('#cual1').val(),
            vprograma_estudio2: $('#programagustaria').val(),
            vcual_otroprograma2: $('#cual2').val(),
            vmodalidad_programa2: $('#modalidadprograma').val(),
            vrazon_insti_programa2: $('#razoninstitucion').val(),
            vpagar_estudio2: $('#pagoestudio').val(),
            vcual_otro_pagar2: $('#cual3').val(),
            vno_solicitud_admision2: $('#RazonNoSolicitudAdmision').val(),
            votraRazon: $('#otraRazon').val(),
            vescala_califica_familiar2: $('#apoyofamiliar').val(),
            vescala_califica_colegio2: $('#importanciaestudio').val(),
            vfrases_pensamiento2: $('#pensamiento_estudio').val(),
            vcalifica_import_estudio2: $('#estudioproyeccion').val(),
            vcalifica_import_trabajo2: $('#trabajoproyeccion').val(),
            vespera_ano2: $('#espera_ano2').val(),
            vconoce_sapiencia2: $('#conoce_sapiencia').val(),
            vimagen_sapiencia2: $('#imagen_sapiencia').val(),
            vbeca_sapiencia2: $('#beca_sapiencia').val(),
            vestrategia_sapiencia2: $('#estrategia_sapiencia').val(),


            vrazoninstitucion: $('#razoninstitucion').val(),
            vrazonprograma: $('#razonprograma').val(),
    
            vorientacionsexual: $('#orientacionsexual').val(),
            videntidadgenero: $('#identidadgenero').val(),
    
            vtiene_hijos: $('#tienehijos').val(),
            vcantidad_hijos: $('#nrohijos').val(),
            vpadremadre_soltero: $('#padremadresoltero').val(),
            vedad_primer_embarazo: $('#edadprimerembarazo').val(),

            vgrupo_etnico: $('#grupoEtnico').val(),
            vetnia: $('#etnia').val(),
            votra_etnia: $('#otraEtnia').val(),            
    
            

            ves_victima_violencia: $('#victimaViolencia').val(),
            vhecho_victimizante: $('#hechoVictimizante').val(),
            vdiscapacidad: $('#discapacidades').val(),
            vpoblacion_especial: $('#poblacionEsp').val(),
            
            





            
            vfecha_registro: fecha
        },
        dataType: "json",
        success: function (obj) {
            
            finalizar();
        }
        ,error : function(jqXHR, status, error) {
            alert('Disculpe, existió un problema');
        }
        
    });
}

function finalizar(){

    if($('#fechaNacimiento').val() < 18){
        envioCorreoRepresentante();
        swal({
            title: "Agradecemos su participación en este estudio con fines académicos, que permitirá ampliar la comprensión acerca de las dinámicas de la educación postsecundaria en el distrito de Medellín",
            text: "El aviso de privacidad para manejo de datos de menores de edad será enviado al correo suministrado",
            icon: "success",

            dangerMode: true,

            


        })
                .then((willDelete) => {
                    if (willDelete) { //If 1

                        location.href ="http://sapiencia.gov.co/";
                        

                       } else {
                        location.href ="http://sapiencia.gov.co/";
                       }
     });
       // swal("Agradecemos su participación en este estudio con fines académico, que permitirá ampliar la comprensión acerca de las dinámicas de la educación postsecundaria en el municipio de Medellín.", "El aviso de privacidad para manejo de datos de menores de edad será enviado al correo suministrado.", "success");
    }else{

        swal({
            title: "Agradecemos su participación en este estudio con fines académico, que permitirá ampliar la comprensión acerca de las dinámicas de la educación postsecundaria en el municipio de Medellín",
            text: "",
            icon: "success",

            dangerMode: true,

            


        })
                .then((willDelete) => {
                    if (willDelete) { //If 1

                        location.href ="http://sapiencia.gov.co/";
                        

                       } else {
                        location.href ="http://sapiencia.gov.co/";
                       }
     });
        
    }

}

function envioCorreoRepresentante() {

    $.ajax({
        url: "fc_envioCorreoRepresentante",
        type: "post",
        data: {nombre_representante: $('#nombre_representante').val(),
              correo_representante: $('#correo_representante').val(),
              documento: $('#documento').val()   
    },
        dataType: "json",
        success: function () {
            //location.reload();

        }
    });

}

function validar_edad(){

    


        if($('#fechaNacimiento').val() < 10)
            $('#fechaNacimiento').val(0);

        if($('#fechaNacimiento').val() > 99)
            $('#fechaNacimiento').val(0);
        

        if($('#fechaNacimiento').val() < 18){
            $('#divRepresentante').show();
        
            $('#nombre_representante').prop('required',true);
            $('#numero_representante').prop('required',true);
            $('#correo_representante').prop('required',true);
            $('#confirmacioncorreo_representante').prop('required',true); 
            
        }else{

            $('#divRepresentante').hide();
        
            $('#nombre_representante').val('');
            $('#numero_representante').val('');
            $('#correo_representante').val('');
            $('#confirmacorreo_representante').val('');
            $('#nombre_representante').prop('required',false);
            $('#numero_representante').prop('required',false);
            $('#correo_representante').prop('required',false);
            $('#confirmacioncorreo_representante').prop('required',false);
        }
    
}

function conoceSapiencia(){

    if($('#conoce_sapiencia').val() == 1){

        $('#bloque3').show();
        $('#imagen_sapiencia').prop('required',true);
        $('#beca_sapiencia').prop('required',true);
        $('#estrategia_sapiencia').prop('required',true);
    }else{
        $('#bloque3').hide();
        $('#imagen_sapiencia').prop('required',false);
        $('#imagen_sapiencia').val('');
        $('#beca_sapiencia').prop('required',false);
        $('#beca_sapiencia').val('');
        $('#estrategia_sapiencia').prop('required',false);
        $('#estrategia_sapiencia').val('');
    }
}

function valida_estrattegia(){

    if($('#estrategia_sapiencia').val() == 1){

        $('#divEstrategiaSapienciaOtra').show();
        $('#cual4').prop('required',true);
        $()
    }else{

        $('#divEstrategiaSapienciaOtra').hide();
        $('#cual4').prop('required',false);
        $('#cual4').val('');
    }
}

function valFamiliar(){
    
    var tiene = ($('#tienehijos').val() == 1);
    
    $('#nrohijos').prop('disabled',!tiene);
    $('#padremadresoltero').prop('disabled',!tiene);
    $('#edadprimerembarazo').prop('disabled',!tiene);
    
    
    
    if(!tiene){
        $('#nrohijos').val(0);
        $('#padremadresoltero').val(2);
        $('#edadprimerembarazo').val(0);
    }
    else{
        $('#nrohijos').val('');
        $('#padremadresoltero').val('');
        $('#edadprimerembarazo').val('');
    }
}

/*
function valEtnia(){
    
    $('#etnia').prop('disabled',true);
    
    var grupo = $('#grupoEtnico').val();

    if(grupo >= 1 && grupo <= 2){
        $('#etnia').prop('disabled',false);
        $('#etnia').prop('required',true);
    }
    else{
        $('#etnia').prop('required',false);
        $('#etnia').val('');
    }

    var etnia = $('#etnia').val();
    $('#otraEtnia').prop('disabled',(etnia != 17));

    if(etnia != 17)
        $('#otraEtnia').val('');
}
*/

function valVictima(){
    
    var victima = $('#victimaViolencia').val();
    var Requiere = false;
    if(victima == 1){
        
        $('#grupoHechoVictimizante').show();
        Requiere = true;
    }
    else{
        $('#grupoHechoVictimizante').hide();
        Requiere = false;
    }
    
    var  obj = document.getElementById('divhechoVictimizante').getElementsByTagName('div');
    for (let i = 0; i < obj.length; i++) {
        var inputL = obj[i].getElementsByTagName('input');
        for (let j = 0; j < inputL.length; j++) {
            var NameTag = inputL[j].getAttribute('id');
                $('#'+NameTag).prop('required', Requiere);
        }
    }


}




function ValidaCheckMutiple(n, nombre, ninguna) {
    
    var i, obj, numero;
    obj = document.getElementById('div'+nombre).getElementsByTagName('div');

    numero = obj.length;
    var Requiere = true;





    if ($('#'+nombre+'Check' + n).prop('checked')) {
        Requiere = false;
        if(ninguna === n){
            for (let i = 0; i < obj.length; i++) {
                var inputL = obj[i].getElementsByTagName('input');
                var NameNinguna = nombre + 'Check' + ninguna;
                for (let j = 0; j < inputL.length; j++) {
                    var NameTag =  inputL[j].getAttribute('id');
                        if(NameTag !== NameNinguna){
                            $('#'+NameTag).prop('checked', false);
                            Requiere = false;
                        }
                }
            }            
        }
        else{
            for (let i = 0; i < obj.length; i++) {
                var inputL = obj[i].getElementsByTagName('input');
                var NameNinguna = nombre + 'Check' + ninguna;
                for (let j = 0; j < inputL.length; j++) {
                    var NameTag =  inputL[j].getAttribute('id');
                        if(NameTag === NameNinguna){
                            $('#'+NameTag).prop('checked', false);
                            Requiere = false;
                        }
                }
            } 
        }

    } else {
        for (let i = 0; i < obj.length; i++) {
            var inputL = obj[i].getElementsByTagName('input');
            for (let j = 0; j < inputL.length; j++) {
                var NameTag =  inputL[j].getAttribute('id');
                    if($('#'+NameTag).prop('checked')){
                        Requiere = false;
                    }
            }
            
        }
    }
    
	for (let i = 0; i < obj.length; i++) {
        var inputL = obj[i].getElementsByTagName('input');
        for (let j = 0; j < inputL.length; j++) {
            var NameTag = inputL[j].getAttribute('id');
                $('#'+NameTag).prop('required', Requiere);
        }
    }
}









