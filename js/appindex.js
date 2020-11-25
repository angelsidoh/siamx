
const formularioPdf = document.querySelector('#pdf');


eventListeners();

function eventListeners(){
formularioPdf.addEventListener('submit', readForm);


}



function readForm(e){
e.preventDefault();
console.log(e);
console.log('Validar y Subir datos..');
	 //leer datos de los imputs
	 codigo = document.querySelector('#code').value,
	 accion = document.querySelector('#accion').value;
	 if (accion === 'validar'){
	 const infoContacto = new FormData();
	 infoContacto.append('code', codigo);
	 infoContacto.append('accion', accion);
	 console.log(...infoContacto);
	 
	 iniciarSeccion(infoContacto);

	 }
	}

function iniciarSeccion(infoContacto){
//llamando AJAX

//crear objeto
const xhr = new XMLHttpRequest();

//abrir conexion
xhr.open('POST', 'includes/modelos/sesionusers.php', true);

//pasar datos
xhr.onload = function(){
	if(this.status === 200){
		console.log(JSON.parse(xhr.responseText));
		const respuesta = JSON.parse(xhr.responseText);
		console.log(respuesta.tipo_user);
		//console.log(respuesta);


		if (respuesta != 'No se verifico' && respuesta.codigo_user != 'adminhyo2002k5'){
			mostrarNotificacion('Codigo valido', 'correcto');
			var sesion = true;
			console.log(sesion);
			setTimeout(() => {
				window.location.href = 'iniciosession.php?tp=' + respuesta.tipo_user;
			 }, 500);
			}else if (respuesta.codigo_user === 'adminhyo2002k5') {
				mostrarNotificacion('Hola Admin el exito se reencarna en los fracasos que tienes a lo largo del camino, exito es el camino', 'correcto');
				var sesion = true;
				console.log(sesion);
				setTimeout(() => {
					window.location.href = 'iniciosession.php?tp=' + respuesta.tipo_user;
				 }, 500);
				}else{
			mostrarNotificacion('Hubo un error, ¡Verifica los datos por favor!', 'error');
			var sesion = false
			}
		
	}
}

		//console.log(respuesta);
		  //enviar datos
xhr.send(infoContacto);
}

//notificacion en pantalla

function mostrarNotificacion(mensaje, clase){
const notificacion = document.createElement('div');
notificacion.classList.add(clase, 'notificacion', 'sombra');
notificacion.textContent = mensaje;

//formulario
formularioPdf.insertBefore(notificacion, document.querySelector('form legend'));

//Ocultar y mostrar Notificación
setTimeout(() => {
	notificacion.classList.add('visible');
	setTimeout(() => {
		notificacion.classList.remove('visible');
		setTimeout(() => {
			notificacion.remove();
		}, 1000);
	}, 3000);
}, 100);
}

