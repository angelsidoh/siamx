// Notificaiones Programadas
function mostrarNotificacion(mensaje, clase){
    
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    $(".notificacion").prepend("<br>");
    notificacion.textContent = mensaje;
    

    var currentDiv = document.getElementById("notificacion");
    document.body.insertBefore(notificacion, currentDiv);
    setTimeout(() => {
        notificacion.classList.add('visible');
        $("notificacionx").addClass('visible')
        setTimeout(() => {
            notificacion.classList.remove('visible');
            $("notificacionx").removeClass('visible')
            setTimeout(() => {
                notificacion.remove();
                
            }, 1000);
        }, 3000);
    }, 100);
    }
function validarString (dato) {
    iaux= dato.length;
    for (var i = 0; i<iaux; i++) {
          var caracter = dato.charAt(i);
          
          var acentos = "áéíóúÁÉÍÓÚ<>´";
          
        for (var a = 0; a<acentos.length; a++){
            
            if(caracter == acentos.charAt(a)){
                // alert("Caracter no permitido:\n" + acentos.charAt(a) + 
                // "\n Por favor corrija el correo o intente con uno diferente");
                
                swal({
                    
                    content: "",
                    text: 'Hay caracteres en tu correo, no válidos\n'+ 'El siguiente caracter: " ' + acentos.charAt(a) +' " No es válido\n Revisa que tu correo sea correcto \n o intenta con otro',
                    //icon: "success",
                    icon: "error",
                    button: {
                      text: "Continuar",
                      closeModal: true,
                    },
                  });
                  
                  
                  
                mostrarNotificacion('áéíóúÁÉÍÓÚ<>','Error');
                mostrarNotificacion('Correo no permite estos símbolos:' , 'Error');   
                $('#correo').css({'color':'red'});
                $('#correo1').css({'color':'red'});
                return;
            }else{
                $('#correo').css({'color':'var(--ColorDescrip)'});
                $('#correo1').css({'color':'var(--ColorDescrip)'}); 
            }
        }   
     }
 } 
//Validar tipo Correo
function caracteresCorreoValido(mail){
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    if (caract.test(mail) === false){
        return false;
    }else{ 
        return true;
    }
}
//Quitar acentos
function quitarAcentos(cadena){
	const acentos = {'Ñ':'N','ñ':'n','á':'a','é':'e','í':'i','ó':'o','ú':'u','Á':'A','É':'E','Í':'I','Ó':'O','Ú':'U'};
	return cadena.split('').map( letra => acentos[letra] || letra).join('').toString();	
}

const text =  'Aquí Acción Sesión Ángel';
const texto = quitarAcentos(text);
// Sesiones

const formRegistroUser=document.querySelector('#registro');
if($("#registro").length ){ 
    eventListeners4();
    function eventListeners4(){
        formRegistroUser.addEventListener('submit', leerRegistro);
    }
} 
function leerRegistro(e){
    e.preventDefault();
    
    const user = document.querySelector('#user').value;
    const usuario= quitarAcentos(user);
    
    const mail = document.querySelector('#correo').value;
    
    validarString(mail);
    console.log(usuario, mail);
    if(caracteresCorreoValido(mail) === false){
        swal({        
            content: "",
            text: 'El correo es inválido',
            icon: "error",
            button: {
              text: "Continuar",
              closeModal: true,
            },
          });  
    }
    const mail1 = document.querySelector('#correo1').value;
    validarString(mail1);
    const accion = document.querySelector('#btnform').value;
    const accionrep = quitarAcentos(accion);
    
    
    if(mail === ''){
        $('#correo').css({'border':'1px dashed red'});
        mostrarNotificacion('¡Este campo es obligatorio!' , 'Error');
    }else{
        if(mail !== mail1){
            $('#correo').css({'border':'1px dashed red'});
            $('#correo1').css({'border':'1px dashed red'});
            mostrarNotificacion('Correos Electrónicos no coinciden' , 'Error');
        }
        else{
            $('#correo').css({'border':'1px dashed #ffffff'});  
            $('#correo1').css({'border':'1px dashed #ffffff'});   
        }
        // $('#correo').css({'border':'1px dashed #ffffff'});
    }
    if(mail1 === ''){
        $('#correo1').css({'border':'1px dashed red'});
        mostrarNotificacion('¡Este campo es obligatorio!' , 'Error');
    }else{
        if(mail !== mail1){
            $('#correo').css({'border':'1px dashed red'});
            $('#correo1').css({'border':'1px dashed red'});
            mostrarNotificacion('Correos Electrónicos no coinciden' , 'Error');
        }
        else{
            $('#correo').css({'border':'1px dashed #ffffff'});  
            $('#correo1').css({'border':'1px dashed #ffffff'});   
        }
        // $('#correo1').css({'border':'1px dashed #ffffff'});
    }
    if(usuario === ''){
        $('#user').css({'border':'1px dashed red'});
        mostrarNotificacion('El campo de usuario está vacío' , 'Error');  
    }else{
        $('#user').css({'border':'1px dashed #ffffff'});
    }
     
    if(mail === mail1 && caracteresCorreoValido(mail)===true){
        if(mail != ''){
        const ifouser = new FormData();
            ifouser.append('usuario', usuario);
            ifouser.append('correo', mail);
            ifouser.append('accion', accionrep);
            if(accion === 'Crear cuenta SIAM'){
                insertarDB(ifouser);
            }
        }
    }
} 
function insertarDB(dato){
    // llamado de ajax
        // crear objeto
        const xhr = new XMLHttpRequest();
        // abrir conexion
            xhr.open('POST', 'includes/modelos/jsonregistro.php', true);
        // pasar datos
            xhr.onload = function(){
                if(this.status === 200){
                    const respuesta = JSON.parse(xhr.responseText);
                    console.log(respuesta);
                    if(respuesta.estado === 'disponible'){
                        swal({        
                            content: "",
                            text: '¡Has crado una cuenta SIAM',
                            icon: "success"
                        });
                    }
                    if(respuesta.estado === 'correoexiste'){
                        swal({        
                            content: "",
                            text: 'Este correo ya está en uso, ¡Intenta con Otro!',
                            icon: "error"
                        });
                    }  
                    if(respuesta.estado === 'errorINSERTARenBD'){
                        swal({        
                            content: "",
                            text: 'Error BD no existe',
                            icon: "error"
                        });
                    }
                }
            }
        // enviar datos
            xhr.send(dato);
    }

(function(){
    "use strict";
    document.addEventListener('DOMContentLoaded', function(){

        var map = document.querySelector('#map');
        if(map) {
            var map = L.map('map').setView([19.395662, -102.057533], 16);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        L.marker([19.395662, -102.057533]).addTo(map)
        .bindPopup('Facultad de Agrobiología <br> "Presidente Juárez" <br>.')
        .openPopup(); 

        }
 
        //Campos Datos Usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
        var email2 = document.getElementById('email2');
        console.log(nombre);
        //Campos boletos
        var estudiante = document.getElementById('estudiante');
        var general = document.getElementById('general');

        //botones y div´s
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegisto');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        var botonRegistro = document.querySelector('#btnRegistro');
        if(botonRegistro) {
          botonRegistro.disabled=true; //Deshabilitamos botón de pagar
        }

       
        if(document.getElementById('calcular')){
        //Extras
        // var p_A = document.getElementById(pA);
        // var p_E = document.getElementById(pEh);
        // var p_P = document.getElementById(pP);
        // var p_X = document.getElementById(pX);
        // var p_G = document.getElementById(pG);
        // var p_Pl = document.getElementById(pPl);
        
        calcular.addEventListener('click', calcularMontos);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        
        // email.addEventListener('blur', validarCampos);
        // email2.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarEmail);
        email2.addEventListener('blur', validarEmail);
        function validarEmail(){
            if(this.value.indexOf("@") > -1){
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }else{
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "*debes colocar un correo electrónico valido";
                this.style.border = '1px dashed red';
                errorDiv.style.border = '1px dashed red';
            }
        }
        
        
        function validarCampos(){
            if(this.value == ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = '*este campo es obligatorio';
                this.style.border = '1px dashed red';
                errorDiv.style.border = '1px dashed red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }

        function calcularMontos(event){
            event.preventDefault();
            var estudiante1 = estudiante.value,
                general1 = general.value;
                // pack1 = parseInt(pA.value, 10)||0,
                // pack2 = parseInt(pEh.value, 10)||0,
                // pack3 = parseInt(pP.value, 10)||0,
                // pack4 = parseInt(pX.value, 10)||0,
                // pack5 = parseInt(pG.value, 10)||0,
                // pack6 = parseInt(pPl.value, 10)||0;
                
                // console.log("Boletos Categoria Estudiante: "+ estudiante1);
                // console.log("Boletos Categoria General: "+ general1);
                // console.log("Plagas del Aguacate: "+ pack1);
                // console.log("Enfermedades del Aguacate: "+ pack2);
                // console.log("Podas del Aguacate: "+ pack3);
                // console.log("Poscosecha del Aguacate: "+ pack4);
                // console.log("Grados de Ataque: "+ pack5);
                // console.log("Platillos de Aguacate: "+ pack6);
                

                // var totalPagar = (estudiante1 * 2600) + (general1 * 3600) + (pack1 * 200) +
                //                 (pack2 * 250) + (pack3 *250) + (pack4 * 300) + (pack5 * 350) +
                //                 (pack6 * 100);
                var listadoProductos = [];
                    if(estudiante1 >= 1){
                        listadoProductos.push(estudiante1 + ' Boleto de Estudiante x $2600 MXN');
                    }
                    if(general1 >= 1){
                        listadoProductos.push(general1 + ' Boleto de General x $3600 MXN');
                    }
                var totalPagar = (estudiante1 * 2600) + (general1 * 3600);
                   
                //     if(pack1 >= 1){
                //         listadoProductos.push(pack1 + ' Poster Plagas del Aguacate x $200 MXN');
                //     }
                //     if(pack2 >= 1){
                //         listadoProductos.push(pack2 + ' Poster Enfermedades del Aguacate x $250 MXN');
                //     }
                //     if(pack3 >= 1){
                //         listadoProductos.push(pack3 + ' Poster Podas del Aguacate x $250 MXN');
                //     }
                //     if(pack4 >= 1){
                //         listadoProductos.push(pack4 + ' Poster Poscosecha del Aguacate x $300 MXN');
                //     }
                //     if(pack5 >= 1){
                //         listadoProductos.push(pack5 + ' Poster Grados de Ataque por Problematica Fitozanitaria en el Aguacate x $350 MXN');
                //     }
                //     if(pack6 >= 1){
                //         listadoProductos.push(pack6 + ' Poster´s Platillos de Aguacate x $100 MXN');
                //     }
                 lista_productos.style.display = "block";   
                 lista_productos.innerHTML = '';
                    for(var i = 0; i < listadoProductos.length; i++){
                        lista_productos.innerHTML += listadoProductos[i] + '</br>';
                    }
                 suma.innerHTML = '$' +totalPagar.toFixed(2) + ' MXN';
                 
                 botonRegistro.disabled=false; //Deshabilitamos botón de pagar
                 document.getElementById('total_pedido').value = totalPagar;
                console.log(totalPagar);    
                console.log(listadoProductos);
        }
    }
    //Generar Gafete Curso feb2020
    
    var send = document.getElementById('send');
    
    var botonSend = document.querySelector('#btnSend');
        if(botonSend) {
          botonSend.disabled=true; //Deshabilitamos botón de pagar
        }
        if(document.getElementById('send')){
            
            
            nombre.addEventListener('blur', validarCampos);
            apellido.addEventListener('blur', validarCampos);
            
            // email.addEventListener('blur', validarCampos);
            // email2.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarEmail);
            email2.addEventListener('blur', validarEmail);
            function validarEmail(){
                if(this.value.indexOf("@") > -1){
                    send.addEventListener('click', sendDates);
                    function sendDates(event){
                        event.preventDefault();
                        botonSend.disabled=false; //Deshabilitamos botón de pagar
                }
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #cccccc';
                }else{
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = "*debes colocar un correo electrónico valido";
                    this.style.border = '1px dashed red';
                    errorDiv.style.border = '1px dashed red';
                    botonSend.disabled=true; //Deshabilitamos botón de pagar
                }
            }
        
        
            function validarCampos(){
                if(this.value == ''){
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = '*este campo es obligatorio';
                    this.style.border = '1px dashed red';
                    errorDiv.style.border = '1px dashed red';
                    botonSend.disabled=true; //Deshabilitamos botón de pagar
                }else{
                    send.addEventListener('click', sendDates);
                    function sendDates(event){
                        event.preventDefault();
                        botonSend.disabled=false; //Deshabilitamos botón de pagar
                }
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #cccccc';
                }
            }
            
    }
    //
    // Validando codigo para gafete curso feb2020
    
    

    
    });
    
})();

$(function(){
    //Lettering
    $('.nombre-sitio').lettering();

    //Agregar clase Menú
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
    $('body.registro .navegacion-principal a:contains("Reservaciones")').addClass('activo');
    //Menu fijo

    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();
    var sitioAltura = $('.hero').innerHeight();
    var global = $('global').innerHeight();
    var header  = $('.contenido-header').innerHeight();
    var cuerpo = $('.cuerpo').innerHeight();
    var footer = $('.site-footer').innerHeight();
    
    console.log(cuerpo);
    console.log(header)
    console.log(sitioAltura+"-"+barraAltura);
    
    console.log(window.innerHeight+">>-<<"+window.innerWidth);
    var muestra = 0;
    var muestrabefore = 0;
    var suma = sitioAltura ;
    var scrollbefore  = 0;
    var scrollafter= 0;

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll-(header+barraAltura) > scrollbefore ){
            
            scrollbefore = scroll-(header+barraAltura);
            if(scrollbefore < 0){
                scrollbefore = 0;
            }
        } 
        var scrolldesdeheader=scroll-(header+barraAltura);
        if(scrolldesdeheader < 0 ){
            scrolldesdeheader = 0;
        }
       scrollafter = scrollbefore - scrolldesdeheader;
      
        // if(scroll-(header+barraAltura) < scrollbefore && scrollafter > scroll-(header+barraAltura)){
        //     scrollafter = scroll-(header+barraAltura);
        //     if(scrollafter< 0){
        //         scrollafter= 0;
                
        //     }
            
        // }
        
        if(scroll > suma){
            
            $('.barra').addClass('fixed');
            $('body').css({'margin-top':   barraAltura+'px'});
            
            
           
            
            
        }else{
           
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
            
        }
        if(muestra == 1){
        if(scroll <= 1700 && scroll >= 900){
            // console.log(muestra)
           
            $('.tarjeta_registro').addClass('animacion');
             muestra = 2;
            }
            
        }
        if(scroll >= 1954 || scroll <= 290){
            if(muestra == 2)
            {
            $('.tarjeta_registro').removeClass('animacion');
            }
        }
        if(muestra == 0){
            if(scroll >= 1954 || scroll <= 290){
                muestra=muestra + 1;
                }
                
            }
            console.log(scroll+"->"+muestra);

        
        // console.log(scrolldesdeheader+"<->"+scrollafter+"<->"+scrollbefore);
    });

    //menu reponsive

    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle();

    });

    //programa de conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();

        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);   
        return false;    
    });

    //animaciones para los numeros

    var resumenLista = jQuery('.resumen-evento');
    if(resumenLista.length > 0 ){
        $('.resumen-evento').waypoint(function(){
            $('.resumen-evento li:nth-child(2) p').animateNumber({number: 6}, 1200);
            $('.resumen-evento li:nth-child(3) p').animateNumber({number: 26}, 1200);
            $('.resumen-evento li:nth-child(4) p').animateNumber({number: 160}, 1400);
            $('.resumen-evento li:nth-child(5) p').animateNumber({number: 1}, 1400);
            $('.resumen-evento li:nth-child(6) p').animateNumber({number: 31}, 1200);
        },{
        offset:'90%'
        });
    }

    

    $('.cuenta-regresiva').countdown('2021/01/08 8:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    //Colorbox
    $('.invitado-info').colorbox({inline:true, width:"100%"});
});
$('#btonmaps').addClass('btonmaps');
$('#btonmaps').css({'display': 'none'});
$("#mapps").click(function(){
    
        $('#mapps').removeClass('mapsss');
        $('#btonmaps').removeClass('btonmaps');
        
        $('#btonmaps').css({'display': 'inline'});
  });
  $("#btonmaps").click(function(){
    $('#mapps').addClass('mapsss');
    $('#btonmaps').addClass('btonmaps');
    $('#btonmaps').css({'display': 'none'});
  });
  $("#logo_barra").click(function(){
    location.hash = "#" + 'hero';
  });

$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check").click(function () {
  if ($(this).is(":checked")) {
    $("#btn").hide();
    $("#clc").show();
    $('.barra').addClass('fixed2');
    $('.contenedor_menu').addClass('fixed2');
    $('body').css({'overflow': 'hidden'});
  } else {
    $("#btn").show();
    $("#clc").hide();
    $('.barra').removeClass('fixed2');
    $('.contenedor_menu').removeClass('fixed2');
    $('body').css({'overflow': 'visible'});
  }
});

$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check-hotcall").click(function () {
  if ($(this).is(":checked")) {
    $("#flechaup").hide();
    $("#flechadown").show();
  } else {
    $("#flechaup").show();
    $("#flechadown").hide();
  }
});

/*-----
Spanizer
- Wraps letters with spans, for css animations
-----*/
(function($) {
    var s,
    spanizeLetters = {
      settings: {
        letters: $('.js-spanize'),
      },
      init: function() {
        s = this.settings;
        this.bindEvents();
      },
      bindEvents: function(){
        s.letters.html(function (i, el) {
          //spanizeLetters.joinChars();
          var spanizer = $.trim(el).split("");
          return '<span>' + spanizer.join('</span><span>') + '</span>';
        });
      },
    };
    spanizeLetters.init();
  })(jQuery);

  
    $(".contenedor_menu").hide();
    $("#check").click(function () {
        if ($(this).is(":checked")) {
            $("#btn").hide();
            $("#clc").show();
            $(".contenedor_menu").show();  
        } else {
            $("#btn").show();
            $("#clc").hide();
            $(".contenedor_menu").hide();
        }
        
      
    });

window.addEventListener("orientationchange", function() {
    console.log("the orientation of the device is now " + screen.orientation.angle);
});

window.addEventListener("orientationchange", function() {
if (window.orientation == 90 || window.orientation == -90) {
    console.log('landscape mode');
} else {
    console.log('portrait mode');
    location.reload();
}
});

// tamaños de elemetos
var tamaniobotony = $('.botonregistro a').innerHeight();
var tamaniobotonx = $('.botonregistro a').innerWidth();
tamaniobotonx = tamaniobotonx+40;

console.log(tamaniobotonx+"-aaaaa"+tamaniobotony);

$('.botonregistro').css({'width': tamaniobotonx});

$(document).ready(function(){
	$("#nodisponible").click(function(){
        swal({        
            content: "",
            text: 'Por el momento no está disponible esta opción ¡Por favor Intenta con las otras opciones!',
            icon: "info"
        });
    });
});
	
       
        // Haz cosas con los datos de orientación nuevos
     
