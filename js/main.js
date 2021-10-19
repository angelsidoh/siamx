


$(document).ready(function () {



    var imgItems1 = $('.slider1 li').length;
    var imgPos1 = 1;

    for (i = 1; i <= imgItems1; i++) {
        $('.paginacion1').append('<li><span><i class="fa fa-circle"></i></span></li>');
    }


    $('.slider1 li').hide();
    $('.slider1 li:first').show();
    $('.paginacion1 li:first').css({ 'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918' });

    $('.paginacion1 li').click(paginacion1);
    $('.right1 span').click(nextSlider);
    $('.left1 span').click(prevSlider);

    // setInterval(function(){
    // nextSlider();
    // }, 3500);

    function paginacion1() {
        var paginacionPos1 = $(this).index();
        paginacionPos1 = paginacionPos1 + 1;
        console.log(paginacionPos1);

        $('.slider1 li').hide();
        $('.slider1 li:nth-child(' + paginacionPos1 + ')').fadeIn();

        $('.paginacion1 li').css({ 'text-shadow': '0 0 0px #ffffff' });
        $(this).css({ 'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918' });

        imgPos1 = paginacionPos1;
    }
    function nextSlider() {
        if (imgPos1 >= imgItems1) {
            imgPos1 = 1;
        } else {
            imgPos1++;
        }

        console.log(imgPos1);
        $('.slider li').hide();
        $('.slider li:nth-child(' + imgPos1 + ')').fadeIn();

        $('.paginacion li').css({ 'text-shadow': '0 0 0px #ffffff' });
        $('.paginacion li:nth-child(' + imgPos1 + ')').css({ 'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918' });

    }
    function prevSlider() {
        if (imgPos1 <= 1) {
            imgPos1 = imgItems;
        } else {
            imgPos1--;
        }
        console.log(imgPos1);
        $('.slider li').hide();
        $('.slider li:nth-child(' + imgPos1 + ')').fadeIn();

        $('.paginacion li').css({ 'text-shadow': '0 0 0px #ffffff' });
        $('.paginacion li:nth-child(' + imgPos1 + ')').css({ 'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918' });

    }
});
$(document).ready(function () {

    var imgItems = $('.slider li').length;
    var imgPos = 1;

    for (i = 1; i <= imgItems; i++) {
        $('.paginacion').append('<li><span><i class="fa fa-circle"></i></span></li>');
    }


    $('.slider li').hide();
    $('.slider li:first').show();
    $('.paginacion li:first').css({ 'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918' });

    $('.paginacion li').click(paginacion);
    $('.right span').click(nextSlider);
    $('.left span').click(prevSlider);

    // setInterval(function(){
    // nextSlider();
    // }, 3500);

    function paginacion() {
        var paginacionPos = $(this).index();
        paginacionPos = paginacionPos + 1;
        console.log(paginacionPos);

        $('.slider li').hide();
        $('.slider li:nth-child(' + paginacionPos + ')').fadeIn();

        $('.paginacion li').css({ 'text-shadow': '0 0 0px #ffffff' });
        $(this).css({ 'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918' });

        imgPos = paginacionPos;
    }
    function nextSlider() {
        if (imgPos >= imgItems) {
            imgPos = 1;
        } else {
            imgPos++;
        }

        console.log(imgPos);
        $('.slider li').hide();
        $('.slider li:nth-child(' + imgPos + ')').fadeIn();

        $('.paginacion li').css({ 'text-shadow': '0 0 0px #ffffff' });
        $('.paginacion li:nth-child(' + imgPos + ')').css({ 'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918' });

    }
    function prevSlider() {
        if (imgPos <= 1) {
            imgPos = imgItems;
        } else {
            imgPos--;
        }
        console.log(imgPos);
        $('.slider li').hide();
        $('.slider li:nth-child(' + imgPos + ')').fadeIn();

        $('.paginacion li').css({ 'text-shadow': '0 0 0px #ffffff' });
        $('.paginacion li:nth-child(' + imgPos + ')').css({ 'text-shadow': '0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #fe4918, 0 0 30px #fe4918, 0 0 40px #fe4918, 0 0 55px #fe4918, 0 0 75px #fe4918' });

    }
});

(function () {
    "use strict";
    document.addEventListener('DOMContentLoaded', function () {
        var map = document.querySelector('#map');
        if (map) {
            var map = L.map('map').setView([19.395662, -102.057533], 16);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            L.marker([19.395662, -102.057533]).addTo(map)
                .bindPopup('Facultad de Agrobiología <br> "Presidente Juárez" <br>2° Congreso Mexicano del Aguacate<br>  29 a 31 de Octubre 2020.')
                .openPopup();
        }
    });

})();

// Notificaiones Programadas
function mostrarNotificacion(mensaje, clase) {

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

function validarString(dato) {
    iaux = dato.length;
    for (var i = 0; i < iaux; i++) {
        var caracter = dato.charAt(i);

        var acentos = "áéíóúÁÉÍÓÚ<>´";

        for (var a = 0; a < acentos.length; a++) {

            if (caracter == acentos.charAt(a)) {
                // alert("Caracter no permitido:\n" + acentos.charAt(a) + 
                // "\n Por favor corrija el correo o intente con uno diferente");

                swal({

                    content: "",
                    text: 'Hay caracteres en tu correo, no válidos\n' + 'El siguiente caracter: " ' + acentos.charAt(a) + ' " No es válido\n Revisa que tu correo sea correcto \n o intenta con otro',
                    //icon: "success",
                    icon: "error",
                    button: {
                        text: "Continuar",
                        closeModal: true,
                    },
                });



                mostrarNotificacion('áéíóúÁÉÍÓÚ<>', 'Error');
                mostrarNotificacion('Correo no permite estos símbolos:', 'Error');
                $('#correo').css({
                    'color': 'red'
                });
                $('#correo1').css({
                    'color': 'red'
                });
                return;
            } else {
                $('#correo').css({
                    'color': 'var(--ColorDescrip)'
                });
                $('#correo1').css({
                    'color': 'var(--ColorDescrip)'
                });
            }
        }
    }
}
//Validar tipo Correo
function caracteresCorreoValido(mail) {
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    if (caract.test(mail) === false) {
        return false;
    } else {
        return true;
    }
}
//Quitar acentos
function quitarAcentos(cadena) {
    const acentos = {
        'Ñ': 'N',
        'ñ': 'n',
        'á': 'a',
        'é': 'e',
        'í': 'i',
        'ó': 'o',
        'ú': 'u',
        'Á': 'A',
        'É': 'E',
        'Í': 'I',
        'Ó': 'O',
        'Ú': 'U'
    };
    return cadena.split('').map(letra => acentos[letra] || letra).join('').toString();
}

const text = 'Aquí Acción Sesión Ángel';
const texto = quitarAcentos(text);
// upload fotos
// esta instruccion te brienda los datos esenciales de la foto que estoy
// tratatndo de subir por lo que asi funciona en todas las paginas donde
// quiera subir un archivo ;D

function up(el) {
    return document.getElementById(el);
}


// fin upload fotos
// formulario inscripción
const formInscripcion = document.querySelector('#inscripcion');
if ($("#inscripcion").length) {
    eventListeners2();
    function eventListeners2() {
        formInscripcion.addEventListener('submit', leerInscripcion);
    }
}
function leerInscripcion(e) {
    e.preventDefault();


    $(document).ready(function () {

        $("#boton1").change(function () {
            alert
        });
        $(".ejemplo3").change(function () {
            alert($('select[class=ejemplo3]').val());
            $('.valor3').val($(this).val());
        });
    });
    const inscripcion = document.querySelector('#boton11').value;
    const deposito = document.querySelector('#boton33').value;
    const trasnferencia = document.querySelector('#boton22').value;
    const factura = document.querySelector('#boton44').value;
    const rfc = document.querySelector('#rfc').value;
    const cfdi = document.querySelector('#cfdi').value;
    const domiciliof = document.querySelector('#domiciliof').value;
    const accionx = document.querySelector('#btninscripcion').value;



    if (inscripcion === '1') {
        if (factura === '1') {
            console.log(
                "rfc= " + rfc,
                "cfdi=" + cfdi,
                "domicilio= " + domiciliof
            );
            if (rfc === '') {
                $('#correo').css({
                    'background': 'red'
                });
                swal({
                    content: "",
                    text: 'Hay campos vacios en los datos para factura.',
                    icon: "error",
                    button: {
                        text: "Continuar",
                        closeModal: true,
                    },
                });
            } else {
                // cuando requieres llenar todos los datos con factura
                const infoinscrip = new FormData();
                infoinscrip.append('inscripcion', inscripcion);
                infoinscrip.append('deposito', deposito);
                infoinscrip.append('trasnferencia', trasnferencia);
                infoinscrip.append('factura', factura);
                infoinscrip.append('rfc', rfc);
                infoinscrip.append('cfdi', cfdi);
                infoinscrip.append('domiciliof', domiciliof);
                infoinscrip.append('accionx', accionx);
                if (accionx === 'Inscribirme al diplomado') {
                    inscripcionDip(infoinscrip);
                }
            }
        } else {
            const infoinscrip = new FormData();
            infoinscrip.append('inscripcion', inscripcion);
            infoinscrip.append('deposito', deposito);
            infoinscrip.append('trasnferencia', trasnferencia);
            infoinscrip.append('factura', factura);
            infoinscrip.append('accionx', accionx);
            if (accionx === 'Inscribirme al diplomado') {
                inscripcionDip(infoinscrip);
            }
        }
    } else {
        swal({
            content: "",
            text: 'Es necesario que marques la casilla de: ¡Quiero inscribirme al Diplomado!',
            icon: "error",
            button: {
                text: "Continuar",
                closeModal: true,
            },
        });

    }
    console.log(
        "inscripcion= " + inscripcion,
        "deposito= " + deposito,
        "trasferencia= " + trasnferencia,
        "factura= " + factura,
        "accion= " + accionx
    );
}
function inscripcionDip(dato) {
    // llamado de ajax
    // crear objeto

    const xhr = new XMLHttpRequest();
    // abrir conexion
    xhr.open('POST', 'includes/modelos/inscripciondiplomado.php', true);
    // pasar datos
    xhr.onload = function () {
        if (this.status === 200) {
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
            if (respuesta.estado === 'correoexiste') {
                // upload
                var file = up("foto1file").files[0];
                // alert(file.name+" | "+file.size+" | "+file.type);
                var formdata = new FormData();
                formdata.append("foto1file", file);
                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                ajax.open("POST", "includes/modelos/upload4.php");
                ajax.onload = function () {
                    if (this.status === 200) {
                        // console.log(JSON.parse(ajax.responseText));
                        const respuesta = JSON.parse(ajax.responseText);
                        console.log('->->' + respuesta);
                        if (respuesta.estado === 'errorfotonoselect') {
                            swal({
                                content: "",
                                text: '¡Por Favor! Seleccione una foto con las características que se piden en las instrucciones.',
                                icon: "error",
                                button: {
                                    text: "Continuar",
                                    closeModal: true,
                                },
                            });
                        }
                        if (respuesta.estado === 'uploadsuccess') {
                            swal({
                                content: "",
                                text: '¡Tu ficha de inscripción está lista!',
                                icon: "success",
                                buttons: {
                                    defeat: "¡Continuar!",
                                },
                            })
                                .then((value) => {
                                    switch (value) {
                                        default:
                                            window.location.href = 'ficha.php';
                                    }
                                });
                            setTimeout(() => {
                                window.location.href = 'ficha.php';
                            }, 3200);
                        }
                    }
                }
                ajax.send(formdata);
                // 
            }
        }
    }
    // enviar datos
    xhr.send(dato);
}
// 

function progressHandler(event) {
    up("loaded_n_total").innerHTML = "Subiendo Foto " + event.loaded + " bytes of " + event.total;
    var percent = (event.loaded / event.total) * 100;
    up("progressBar").value = Math.round(percent);

}
function completeHandler(event) {
    up("status").innerHTML = event.target.responseText;
    up("progressBar").value = 0;
}
function errorHandler(event) {
    up("status").innerHTML = "Upload Failed";
}
function abortHandler(event) {
    up("status").innerHTML = "Upload Aborted";
}
// 
$('#boton11').val("1");
$('#boton22').val("0");
$('#boton33').val("1");
$('#boton44').val("0");

let URLactual = window.location.href;
var cadena = URLactual;
cadena = cadena.replace(/\//g, " ");
cadena = cadena.replace(/\./g, "-");
cadena = cadena.replace(/\:/g, " ");

// console.log(cadena);
// esta es la palabra a buscar
let termino = "index-php";
// para buscar la palabra hacemos
let posicion = cadena.indexOf(termino);
if (posicion !== -1) {
    console.log("La palabra está en la posición " + posicion);

} else {

}

$(document).on('change', 'input[type="checkbox"]', function (e) {

    if (this.id == "boton1") {
        if (this.checked) $('#boton11').val(this.value);
        else $('#boton11').val("0");
    }
    if (this.id == "botonx1") {
        if (this.checked) $('#boton11').val(this.value);
        else $('#boton11').val("0");
    }
    if (this.id == "boton3") {
        if (this.checked) {
            $('#boton33').val(this.value);
            $('#boton22').val("0");
        } else {
            $('#boton33').val("0");
            $('#boton22').val("1");
        }
    }
    if (this.id == "boton2") {
        if (this.checked) {
            $('#boton22').val(this.value);
            $('#boton33').val("0");
        }
        else {
            $('#boton22').val("0");
            $('#boton33').val("1");
        }
    }
    if (this.id == "boton4") {
        if (this.checked) {
            $('#boton44').val(this.value);

        }
        else {
            $('#boton44').val("0");

        }
    }

});
// Sesiones
const formLoginUser = document.querySelector('#login');
if ($("#login").length) {
    eventListeners();
    function eventListeners() {
        formLoginUser.addEventListener('submit', leerLogin);
    }
}
function leerLogin(e) {
    e.preventDefault();
    const mail = document.querySelector('#correo').value;
    const pass = document.querySelector('#pass').value;

    validarString(mail);
    if (caracteresCorreoValido(mail) === false) {
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
    const accion = document.querySelector('#btnlogin').value;
    const accionrep = quitarAcentos(accion);
    let cadena = mail;
    // esta es la palabra a buscar
    let termino = "@gmail";
    // para buscar la palabra hacemos
    let posicion = cadena.indexOf(termino);
    if (posicion !== -1) {
        //console.log("La palabra está en la posición " + posicion);
        $('#correo').css({
            'background': '#ffffff'
        });
    }
    else {
        $('#correo').css({
            'background': 'yellow'
        });
        swal({
            content: "",
            text: '¡Por favor! Usa una cuenta de Google',
            icon: "error",
            button: {
                text: "Continuar",
                closeModal: true,
            },
        });
    }
    if (mail === '') {
        $('#correo').css({
            'background': 'red'
        });
        swal({
            content: "",
            text: 'Hay campos vacíos.',
            icon: "error",
            button: {
                text: "Continuar",
                closeModal: true,
            },
        });
    }
    if (pass === '') {
        $('#pass').css({
            'background': 'red'
        });
        swal({
            content: "",
            text: 'Hay campos vacíos.',
            icon: "error",
            button: {
                text: "Continuar",
                closeModal: true,
            },
        });
    } else {
        $('#pass').css({ 'background': '#ffffff' });
    }
    if (posicion !== -1) {
        if (mail != '') {
            const ifouser = new FormData();

            ifouser.append('correo', mail);
            ifouser.append('pass', pass);
            ifouser.append('accion', accionrep);
            if (accion === 'Iniciar Sesión') {
                consultaBD(ifouser);
            }
        }
    }

}
function consultaBD(dato) {
    // llamado de ajax
    // crear objeto

    const xhr = new XMLHttpRequest();
    // abrir conexion
    xhr.open('POST', 'includes/modelos/jsonlogin.php', true);
    // pasar datos
    xhr.onload = function () {
        if (this.status === 200) {
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
            if (respuesta.Estado === 'Incorrecto') {
                swal({
                    content: "",
                    text: 'Los datos son incorrectos.¡Por favor Verificalos!',
                    icon: "error",
                    button: {
                        text: "Continuar",
                        closeModal: true,
                    },
                });
            }
            if (respuesta.Estado === 'Correcto') {
                let nombre = respuesta.Usuario;
                let tipo = respuesta.Tipo;

                if (tipo === '0') {

                    swal({
                        content: "",
                        text: '¡Bienvenido ' + nombre + '!',
                        icon: "success",
                        buttons: {
                            defeat: "¡Continuar!",
                        },
                    })
                        .then((value) => {
                            switch (value) {
                                default:
                                    window.location.href = 'bienvenida.php#lugar2';
                            }
                        });
                    setTimeout(() => {
                        window.location.href = 'bienvenida.php#lugar2';
                    }, 3200);
                }
                if (tipo === '99') {
                    swal({
                        content: "",
                        text: '¡Bienvenido Admin ' + nombre + '!',
                        icon: "success",
                        buttons: {
                            defeat: "¡Continuar!",
                        },
                    })
                        .then((value) => {
                            switch (value) {
                                default:
                                    window.location.href = 'admin.php';
                            }
                        });
                    setTimeout(() => {
                        window.location.href = 'admin.php';
                    }, 3200);
                }
                if (tipo === '1') {
                    swal({
                        content: "",
                        text: '¡Bienvenido a Pagos ' + nombre + '!',
                        icon: "success",
                        buttons: {
                            defeat: "¡Continuar!",
                        },
                    })
                        .then((value) => {
                            switch (value) {
                                default:
                                    window.location.href = 'adminpagos.php';
                            }
                        });
                    setTimeout(() => {
                        window.location.href = 'adminpagos.php';
                    }, 3200);
                }
                if (tipo === '2') {
                    swal({
                        content: "",
                        text: '¡Bienvenido a Ponente: ' + nombre + '!',
                        icon: "success",
                        buttons: {
                            defeat: "¡Continuar!",
                        },
                    })
                        .then((value) => {
                            switch (value) {
                                default:
                                    window.location.href = 'ponentes.php';
                            }
                        });
                    setTimeout(() => {
                        window.location.href = 'ponentes.php';
                    }, 3200);
                }
            }
        }
    }
    // enviar datos
    xhr.send(dato);
}

const formRegistroUser = document.querySelector('#registro');
if ($("#registro").length) {
    eventListeners1();

    function eventListeners1() {
        formRegistroUser.addEventListener('submit', leerRegistro);
    }
}

function leerRegistro(e) {
    e.preventDefault();
    const user = document.querySelector('#user').value;
    const apellido = document.querySelector('#apellido').value;
    const number = document.querySelector('#number').value;
    const mail = document.querySelector('#correo').value;
    validarString(mail);
    console.log(user, apellido, number, mail);
    if (caracteresCorreoValido(mail) === false) {
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

    const accion = document.querySelector('#btnform').value;
    const accionrep = quitarAcentos(accion);

    let cadena = mail;
    // esta es la palabra a buscar
    let termino = "@gmail.com";
    // para buscar la palabra hacemos
    let posicion = cadena.indexOf(termino);
    if (posicion !== -1) {
        console.log("La palabra está en la posición " + posicion);
        $('#correo').css({
            'background': '#ffffff'
        });
    }
    else {
        $('#correo').css({
            'background': 'yellow'
        });
        swal({
            content: "",
            text: '¡Por favor! Usa una cuenta de Google',
            icon: "error",
            button: {
                text: "Continuar",
                closeModal: true,
            },
        });
    }
    if (mail === '') {
        $('#correo').css({
            'background': 'red'
        });
        swal({
            content: "",
            text: 'Hay campos vacíos.',
            icon: "error",
            button: {
                text: "Continuar",
                closeModal: true,
            },
        });
    }

    if (user === '') {
        $('#user').css({
            'background': 'red'
        });
        swal({
            content: "",
            text: 'Hay campos vacíos.',
            icon: "error",
            button: {
                text: "Continuar",
                closeModal: true,
            },
        });
    } else {

        $('#user').css({ 'background': '#ffffff' });
    }
    if (number === '') {
        $('#number').css({
            'background': 'red'
        });
        swal({
            content: "",
            text: 'Hay campos vacíos.',
            icon: "error",
            button: {
                text: "Continuar",
                closeModal: true,
            },
        });
    } else {

        $('#number').css({ 'background': '#ffffff' });
    }
    if (apellido === '') {
        $('#apellido').css({
            'background': 'red'
        });
        swal({
            content: "",
            text: 'Hay campos vacíos.',
            icon: "error",
            button: {
                text: "Continuar",
                closeModal: true,
            },
        });
    } else {

        $('#apellido').css({ 'background': '#ffffff' });
    }

    if (posicion !== -1) {
        if (mail != '') {
            const ifouser = new FormData();
            ifouser.append('usuario', user);
            ifouser.append('apellido', apellido);
            ifouser.append('tel', number);
            ifouser.append('correo', mail);
            ifouser.append('accion', accionrep);
            if (accion === 'Crear cuenta SIAM') {
                insertarDB(ifouser);
            }
        }
    }

}
// 
function insertarDB(dato) {
    // llamado de ajax
    // crear objeto

    const xhr = new XMLHttpRequest();
    // abrir conexion
    xhr.open('POST', 'includes/modelos/jsonregistro.php', true);
    // pasar datos
    xhr.onload = function () {
        if (this.status === 200) {
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
            if (respuesta.estado === 'correoexiste') {
                swal({
                    content: "",
                    text: 'El correo que Ingresaste, ¡Ya está en uso! Por favor, Intenta con otro correo.',
                    icon: "error",
                    button: {
                        text: "Continuar",
                        closeModal: true,
                    },
                });
            }
            if (respuesta.estado === 'disponible') {

                swal({
                    content: "",
                    text: '¡Registro Exitoso!',
                    icon: "success",
                    buttons: {
                        defeat: "¡Continuar!",
                    },
                })
                    .then((value) => {
                        switch (value) {
                            default:
                                window.location.href = 'logout.php';
                        }
                    });
                setTimeout(() => {
                    window.location.href = 'logout.php';
                }, 3200);
            }
        }
    }
    // enviar datos
    xhr.send(dato);
}




$(function () {
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
    var header = $('.contenido-header').innerHeight();
    var cuerpo = $('.cuerpo').innerHeight();
    var footer = $('.site-footer').innerHeight();

    // console.log(cuerpo);
    // console.log(header)
    // console.log(sitioAltura + "-" + barraAltura);

    // console.log(window.innerHeight + ">>-<<" + window.innerWidth);
    var muestra = 0;
    var muestrabefore = 0;
    var suma = sitioAltura;
    var scrollbefore = 0;
    var scrollafter = 0;
    scroling();
    function scroling() {
        var scroll = $(window).scrollTop();
        var scrollLeft = $(window).scrollLeft();
        var scrollTop = $(window).scrollTop();
        console.log("Vertical " + scrollTop);
        console.log("Horizontal " + scrollLeft);
        if (scroll - (header + barraAltura) > scrollbefore) {

            scrollbefore = scroll - (header + barraAltura);
            if (scrollbefore < 0) {
                scrollbefore = 0;
            }
        }
        var scrolldesdeheader = scroll - (header + barraAltura);
        if (scrolldesdeheader < 0) {
            scrolldesdeheader = 0;
        }
        scrollafter = scrollbefore - scrolldesdeheader;

        if (scroll > suma) {

            $('.barra').addClass('fixed');
            $('body').css({
                'margin-top': barraAltura + 'px'
            });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({
                'margin-top': '0px'
            });

        }
        if (muestra == 1) {
            if (scroll <= 1700 && scroll >= 900) {
                // console.log(muestra)

                $('.tarjeta_registro').addClass('animacion');
                muestra = 2;
            }

        }
        if (scroll >= 1954 || scroll <= 290) {
            if (muestra == 2) {
                $('.tarjeta_registro').removeClass('animacion');
            }
        }
        if (muestra == 0) {
            if (scroll >= 1954 || scroll <= 290) {
                muestra = muestra + 1;
            }

        }
    }
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var scrollLeft = $(window).scrollLeft();
        var scrollTop = $(window).scrollTop();
        // console.log("Vertical "+scrollTop);
        // console.log("Horizontal "+scrollLeft);
        if (scroll - (header + barraAltura) > scrollbefore) {

            scrollbefore = scroll - (header + barraAltura);
            if (scrollbefore < 0) {
                scrollbefore = 0;
            }
        }
        var scrolldesdeheader = scroll - (header + barraAltura);
        if (scrolldesdeheader < 0) {
            scrolldesdeheader = 0;
        }
        scrollafter = scrollbefore - scrolldesdeheader;

        if (scroll > suma) {

            $('.barra').addClass('fixed');
            $('body').css({
                'margin-top': barraAltura + 'px'
            });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({
                'margin-top': '0px'
            });

        }
        if (muestra == 1) {
            if (scroll <= 1700 && scroll >= 900) {
                // console.log(muestra)

                $('.tarjeta_registro').addClass('animacion');
                muestra = 2;
            }

        }
        if (scroll >= 1954 || scroll <= 290) {
            if (muestra == 2) {
                $('.tarjeta_registro').removeClass('animacion');
            }
        }
        if (muestra == 0) {
            if (scroll >= 1954 || scroll <= 290) {
                muestra = muestra + 1;
            }

        }

    });

    //menu reponsive

    $('.menu-movil').on('click', function () {
        $('.navegacion-principal').slideToggle();

    });

    //programa de conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function () {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();

        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    //animaciones para los numeros

    var resumenLista = jQuery('.resumen-evento');
    if (resumenLista.length > 0) {
        $('.resumen-evento').waypoint(function () {
            $('.resumen-evento li:nth-child(2) p').animateNumber({
                number: 6
            }, 1200);
            $('.resumen-evento li:nth-child(3) p').animateNumber({
                number: 26
            }, 1200);
            $('.resumen-evento li:nth-child(4) p').animateNumber({
                number: 160
            }, 1400);
            $('.resumen-evento li:nth-child(5) p').animateNumber({
                number: 1
            }, 1400);
            $('.resumen-evento li:nth-child(6) p').animateNumber({
                number: 30
            }, 1200);
        }, {
            offset: '90%'
        });
    }



    $('.cuenta-regresiva').countdown('2022/10/23 17:00:00', function (event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    //Colorbox
    // $('.invitado-info').colorbox({
    //     inline: true,
    //     width: "100%"
    // });
});
$('#btonmaps').addClass('btonmaps');
$('#btonmaps').css({
    'display': 'none'
});
$("#mapps").click(function () {

    $('#mapps').removeClass('mapsss');
    $('#btonmaps').removeClass('btonmaps');

    $('#btonmaps').css({
        'display': 'inline'
    });
});
$("#btonmaps").click(function () {
    $('#mapps').addClass('mapsss');
    $('#btonmaps').addClass('btonmaps');
    $('#btonmaps').css({
        'display': 'none'
    });
});
$("#logo_barra").click(function () {
    window.location.href = 'index.php';
});

$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#check").click(function () {
    if ($(this).is(":checked")) {
        $("#btn").hide();
        $("#clc").show();
        $('.barra').addClass('fixed2');
        $('.contenedor_menu').addClass('fixed2');
        $('body').css({
            'overflow': 'hidden'
        });
    } else {
        $("#btn").show();
        $("#clc").hide();
        $('.barra').removeClass('fixed2');
        $('.contenedor_menu').removeClass('fixed2');
        $('body').css({
            'overflow': 'visible'
        });
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
$('input:checkbox').removeAttr('checked');
$('input[type=checkbox]').prop('checked', false);
$("#boton3").prop("checked", true);
$("#boton1").prop("checked", true);
$("#botonx1").prop("checked", true);
$("#botonx2").prop("checked", true);
$("#botonx3").prop("checked", true);

$("#boton2").click(function () {
    if ($(this).is(":checked")) {
        $("#boton3").prop("checked", false);
    } else {
        $("#boton3").prop("checked", true);
    }
});
$("#boton3").click(function () {
    if ($(this).is(":checked")) {
        $("#boton2").prop("checked", false);
    } else {
        $("#boton2").prop("checked", true);
    }
});
$(".menufactura").hide();
$("#boton4").click(function () {
    if ($(this).is(":checked")) {
        $(".menufactura").show();
    } else {
        $(".menufactura").hide();
    }
});

/*-----
Spanizer
- Wraps letters with spans, for css animations
-----*/
(function ($) {
    var s,
        spanizeLetters = {
            settings: {
                letters: $('.js-spanize'),
            },
            init: function () {
                s = this.settings;
                this.bindEvents();
            },
            bindEvents: function () {
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

window.addEventListener("orientationchange", function () {
    console.log("the orientation of the device is now " + screen.orientation.angle);
});

window.addEventListener("orientationchange", function () {
    if (window.orientation == 90 || window.orientation == -90) {
        console.log('landscape mode');
        location.reload();
    } else {
        console.log('portrait mode');
        location.reload();
    }
});



// Haz cosas con los datos de orientación nuevoss
function validaNumericos(event) {
    if (event.charCode >= 48 && event.charCode <= 57) {
        return true;
    }
    return false;
}
// var input=  document.getElementById('number');
// input.addEventListener('input',function(){
//   if (this.value.length > 12) 
//      this.value = this.value.slice(0,12); 
// })

var pathname = window.location.pathname;


if (pathname == '/index.php') {
    var panel = document.getElementById("programa-evento");
    panel = ((panel.clientHeight / 2) - 10) + "px";
    console.log(panel);
    $('.right').css({
        "top": panel

    }
    );
    $('.left').css({
        "top": panel

    }
    );
}

var resultado = "";

// Las imagenes tiene que ser inyectadas con jquery o javascript desde la base de datos
const url = 'reposiciondedatos.php';
const http = new XMLHttpRequest();


http.open("POST", url, false, 'html');
http.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
        resultado = JSON.parse(this.responseText);




    }
}
http.send();
var count_Res = Object.keys(resultado).length;





var logox = "";
var selector = "";
for (let a = 1; a <= 4; a++) {
    selector = ".now-container .logo .contenedor-logo .forma:nth-child(" + a + ") .logoproto";
    if (a == 1) {
        logox = "url(https://sociedadintelectualdelaguacatemexicano.com/img/logo.png"
    }
    if (a == 2) {

        logox = "url(https://sociedadintelectualdelaguacatemexicano.com/img/logo.png"
    }
    if (a == 3) {
        logox = "url(https://sociedadintelectualdelaguacatemexicano.com/img/LOGOFACULT2.png"
    }
    if (a == 4) {
        logox = "url(https://sociedadintelectualdelaguacatemexicano.com/img/LOGOFACULT1.png";
    }

    $(selector).css({
        "background-image": logox,
        "background-size": "contain",
        "background-position": "center",
        "background-repeat": "no-repeat"
    }
    );

}
var contador = 0;
var oper = 0;
var grados = "";
var mostrando = 1;
$('.evento-now').click(function () {

    contador++;

    if (contador >= count_Res) {
        contador = 0;
        document.getElementById("actuador4").style.opacity = 0;
        document.getElementById("actuador4").style.transitionDuration = "0.5s";
        document.getElementById("actuador4").style.transitionTimingFunction = "ease-in-out";
    }

    rotacionespart1(contador);
    rotacionespart2(contador);


});
var idleTime = 0;
var idleInterval = setInterval(timerIncrement, 5000); // 1 minute
document.getElementById('nombre-ponente').innerHTML = resultado["factor" + 0].nombre + " " + resultado["factor" + 0].apellidos;
document.getElementById('titulo-ponente').innerHTML = resultado["factor" + 0].especialidad;
let a = document.createElement("a");
a.setAttribute("href", resultado["factor"+0].foto);
let aTexto = document.createTextNode("Ver");
a.appendChild(aTexto);
document.getElementById('actuador2').appendChild(a);
$('#actuador2 a').addClass('button');

for (let a = 1; a <= 2; a++) {
    selectorponente1 = ".circulo-presentacion .elem:nth-child(" + a + ") .forma-elem";
    if (a == 1) {
        logox = "url(" + resultado["factor" + 0].foto + ")";
    }
    if (a == 2) {
        logox = "url(https://sociedadintelectualdelaguacatemexicano.com/img/Feb02.png"
    }


    // for (let z = 0; z < count_Res; z++) {

    //     console.log(count_Res);
    //     console.log(resultado["factor"+z].nombre, z);
    //     document.getElementById('nombre-ponente').innerHTML = resultado["factor"+z].nombre;
    // }

    // document.getElementById('nombre-ponente').innerHTML = 'Heladio Santacruz Ulibarri';
    $(selectorponente1).css({
        "background-image": logox,
        "background-size": "contain",
        "background-position": "center",
        "background-repeat": "no-repeat"
    }
    );
}
//Zero the idle timer on mouse movement.
$(this).mousemove(function (e) {
    idleTime = 0;

});
$(this).keypress(function (e) {
    idleTime = 0;

});
function timerIncrement() {

    idleTime = idleTime + 1;
    if (idleTime > 1) { // 20 minutes
        if (mostrando == 1) {

            contador++;
            if (contador >= count_Res) {
                contador = 0;
                document.getElementById("actuador4").style.opacity = 0;
                document.getElementById("actuador4").style.transitionDuration = "0.5s";
                document.getElementById("actuador4").style.transitionTimingFunction = "ease-in-out";
            }
            // console.log(contador);

            rotacionespart1(contador);
            rotacionespart2(contador);


        }
    }
}
function rotacionespart1(contador) {
    oper = (90 * contador);
    grados = "rotate(" + oper + "deg)";

    document.getElementById("forma-medl").style.transform = grados;
    document.getElementById("forma-medl").style.transitionDuration = "2.2s";
    document.getElementById("forma-medl").style.transitionTimingFunction = "ease-in-out";

};
function rotacionespart2(contador) {

    oper = (-360 * contador);
    grados = "rotate(" + oper + "deg)";





    document.getElementById("circulo-presentacion").style.transform = grados;
    document.getElementById("circulo-presentacion").style.transitionDuration = "2.2s";
    document.getElementById("circulo-presentacion").style.transitionTimingFunction = "ease-in-out";
    document.getElementById("actuador").style.opacity = 0;
    document.getElementById("actuador").style.transitionDuration = "1.1s";
    document.getElementById("actuador").style.transitionTimingFunction = "ease-in-out";
    document.getElementById("actuador1").style.opacity = 0;
    document.getElementById("actuador1").style.transitionDuration = "1.1s";
    document.getElementById("actuador1").style.transitionTimingFunction = "ease-in-out";
    document.getElementById("actuador2").style.opacity = 0;
    document.getElementById("actuador2").style.transitionDuration = "1.1s";
    document.getElementById("actuador2").style.transitionTimingFunction = "ease-in-out";
    





};
$("#circulo-presentacion").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd',
    function () {
        document.getElementById('nombre-ponente').innerHTML = resultado["factor" + contador].nombre + " " + resultado["factor" + contador].apellidos;
        document.getElementById('titulo-ponente').innerHTML = resultado["factor" + contador].especialidad;
      
a.setAttribute("href", resultado["factor"+contador].foto);

        for (let a = 1; a <= 2; a++) {
            selectorponente1 = ".circulo-presentacion .elem:nth-child(" + a + ") .forma-elem";
            if (a == 1) {
                logox = "url(" + resultado["factor" + contador].foto + ")";
            }
            if (a == 2) {
                logox = "url(https://sociedadintelectualdelaguacatemexicano.com/img/Feb02.png"
            }


            // for (let z = 0; z < count_Res; z++) {

            //     console.log(count_Res);
            //     console.log(resultado["factor"+z].nombre, z);
            //     document.getElementById('nombre-ponente').innerHTML = resultado["factor"+z].nombre;
            // }

            // document.getElementById('nombre-ponente').innerHTML = 'Heladio Santacruz Ulibarri';
            $(selectorponente1).css({
                "background-image": logox,
                "background-size": "contain",
                "background-position": "center",
                "background-repeat": "no-repeat"
            }
            );
        }
        console.log()
        document.getElementById("actuador").style.opacity = 1;
        document.getElementById("actuador").style.transitionDuration = "1.1s";
        document.getElementById("actuador").style.transitionTimingFunction = "ease-in-out";
        document.getElementById("actuador1").style.opacity = 1;
        document.getElementById("actuador1").style.transitionDuration = "1.1s";
        document.getElementById("actuador1").style.transitionTimingFunction = "ease-in-out";
        document.getElementById("actuador2").style.opacity = 1;
        document.getElementById("actuador2").style.transitionDuration = "1.1s";
        document.getElementById("actuador2").style.transitionTimingFunction = "ease-in-out";
        document.getElementById("actuador4").style.opacity = 1;
        document.getElementById("actuador4").style.transitionDuration = "0.5s";
        document.getElementById("actuador4").style.transitionTimingFunction = "ease-out";
    });





var perfilponente = "";
var selectorponente1 = "";



// var resultadosfactores = "";
// function consultaponentes(){
//     $.ajax({
//         url: 'reposiciondedatos.php',
//         type: 'POST',
//         async:false,
//         success: function (vector) {
//             var vectorx = JSON.parse(vector);

//             // console.log(vectorx["factor0"].name);
//             resultadosfactores = vectorx;

//         },
//         error: function () {
//             console.error("No es posible completar la operación");
//         }

//     });
//     return resultadosfactores;
// }
// var resultadoconsulta = consultaponentes();
// console.log(resultadoconsulta);


function unicodeToChar(text) {
    return text.replace(/\\u[\dA-F]{4}/gi,
        function (match) {
            return String.fromCharCode(parseInt(match.replace(/\\u/g, ''), 16));
        });
}
var cuenta = 0;
var idTimer = 0;
var log = "";
empezarContador();
function empezarContador() {
    //Compruebo si está soportada la API de visibilidad
    if (typeof (document.hidden) != undefined) {
        //defino un manejador para el evento visibilitychange
        document.addEventListener("visibilitychange", cambiaVisibilidad, false);
        //Comenzamos a contar
        tick();
    }
    else
        document.getElementById("contador").textContent = "¡¡Este navegador no soporta la API de visibilidad!!";
}

function cambiaVisibilidad() {
    if (document.hidden) {
        clearTimeout(idTimer);
        log += "Se ha OCULTADO a las: " + new Date().toLocaleTimeString() + "<br/>";
        mostrando = 0;
    }
    else {
        log += "Se ha MOSTRADO a las: " + new Date().toLocaleTimeString() + "<br/>";
        mostrando = 1;
        tick();

    }
    console.log(log);
}

function tick() {
    cuenta++;

    if (!document.hidden)
        idTimer = setTimeout(tick, 1000);
}



