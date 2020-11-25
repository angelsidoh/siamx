const formulario = document.getElementById('upload_form')
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	//alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "upload4.php");
	ajax.onload = function(){
		if(this.status === 200){
			console.log(JSON.parse(ajax.responseText));
			const respuesta = JSON.parse(ajax.responseText);
			if (respuesta === '0'){
				// mostrarNotificacion('Fotos BOLETO Subidas correctamente', 'correcto');
			    uploadFile2();
					
			}else if(respuesta === ' '){
				mostrarNotificacion('Hubo un error al subir una de tus fotos', 'error');
				setTimeout(() => {
					window.location.href = 'errorfotos.php';
				 }, 3000);
			}else{
				mostrarNotificacion('Hubo un error al subir una de tus fotos', 'error');
				setTimeout(() => {
					window.location.href = 'errorfotos.php';
				 }, 3000);
			}
	}
}
	
	ajax.send(formdata);
	//uploadFile2()
}
function uploadFile2(){
	var file = _("file2").files[0];
	//alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file2", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler1, false);
	ajax.addEventListener("load", completeHandler1, false);
	ajax.addEventListener("error", errorHandler1, false);
	ajax.addEventListener("abort", abortHandler1, false);
	ajax.open("POST", "upload8.php");
	ajax.onload = function(){
		if(this.status === 200){
			console.log(JSON.parse(ajax.responseText));
			const respuesta = JSON.parse(ajax.responseText);
			if (respuesta === '1'){
				mostrarNotificacion('Fotos Subidas Correctamente', 'correcto');
				setTimeout(() => {
					window.location.href = 'data.php';
				 }, 3000);
					
		}else if(respuesta === ' '){
			mostrarNotificacion('Hubo un error al subir una de tus fotos', 'error');
			setTimeout(() => {
				window.location.href = 'errorfotos.php';
			 }, 3000);
		}else{
			mostrarNotificacion('Hubo un error al subir una de tus fotos', 'error');
			setTimeout(() => {
				window.location.href = 'errorfotos.php';
			 }, 3000);
		}
	}
}
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Subiendo Foto del Boleto "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% Subiendo foto Boleto... ¡Espera hasta que el proceso termine!";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
function progressHandler1(event){
	_("loaded_n_total").innerHTML = "Subiendo Foto "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar1").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% Subiendo tu Foto... ¡Espera hasta que el proceso termine!";
}
function completeHandler1(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar1").value = 0;
}
function errorHandler1(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler1(event){
	_("status").innerHTML = "Upload Aborted";
}

//notificacion en pantalla

function mostrarNotificacion(mensaje, clase){
	const notificacion = document.createElement('div');
	notificacion.classList.add(clase, 'notificacion', 'sombra');
	notificacion.textContent = mensaje;
	
	//formulario
	formulario.insertBefore(notificacion, document.querySelector('seccion div'));
	
	//Ocultar y mostrar Notificación
	setTimeout(() => {
		notificacion.classList.add('visible');
		setTimeout(() => {
			notificacion.classList.remove('visible');
			setTimeout(() => {
				notificacion.remove();
			}, 500);
		}, 3000);
	}, 100);
}