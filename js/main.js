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
    console.log(sitioAltura+"-"+barraAltura);
    var suma = sitioAltura ;
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();

        if(scroll > suma){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top':   barraAltura+'px'});
        }else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
        
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
