const formularioContactos = document.querySelector('#contacto'),
    listadoContactos = document.querySelector('#listado-contacto tbody'),
    inputBuscador = document.querySelector('#buscar');

eventListeners();

function eventListeners(){
    //cuando el formulario de clic en crear o editar se ejecuta
    formularioContactos.addEventListener('submit', leerFormulario);
    
    //Listener para eliminar contactos
    if(listadoContactos){
        listadoContactos.addEventListener('click', eliminarContacto);
    }
    //Buscador
    if(inputBuscador){
    inputBuscador.addEventListener('input', buscarContactos);
    //LLama función contados de contactos
    numeroContactos();
    }
}


function leerFormulario(e){
    e.preventDefault();
    console.log(e);
    console.log('Presionaste..');
    

    //leer datos de los imputs
    const nombre = document.querySelector('#nombre').value,
          apellido = document.querySelector('#apellido').value,
          email = document.querySelector('#email').value,
          
          telefono = document.querySelector('#telefono').value,
          tiket = document.querySelector('#tiket').value,
          pago = document.querySelector('#pago').value,
          accion = document.querySelector('#accion').value;
           
            
            
            const infoContacto = new FormData();
            infoContacto.append('nombre', nombre);
            infoContacto.append('apellido', apellido);
            infoContacto.append('email', email);
            infoContacto.append('telefono', telefono);
            infoContacto.append('tiket', tiket);
            infoContacto.append('pago', pago);
            infoContacto.append('accion', accion);
            console.log(...infoContacto);
           
            if(accion === 'editar'){
                //editar contacto
                const idRegistro = document.querySelector('#id').value;
                      infoContacto.append('id', idRegistro);
                actulizarRegistro(infoContacto);
            }

        
    
    
}

function insertarBD(datos){
    //llamando AJAX

    //crear objeto
    const xhr = new XMLHttpRequest();

    //abrir conexion
    xhr.open('POST', 'includes/modelos/modelo-contactos.php', true);

    //pasar datos
    xhr.onload = function(){
        if(this.status === 200){
            console.log(JSON.parse(xhr.responseText));
            const respuesta = JSON.parse(xhr.responseText);
            console.log('holanosesion');
            //console.log(respuesta);
            //Inserta un nuevo elemento a la tabla
            const nuevoContacto = document.createElement('tr');

            nuevoContacto.innerHTML = `
                <td>${respuesta.datos.nombre}</td>
                <td>${respuesta.datos.apellido}</td>
                <td>${respuesta.datos.email}</td>
                <td>${respuesta.datos.telefono}</td>
                <td>${respuesta.datos.boleto}</td>
                <td>${respuesta.datos.codigo}</td>
                <td>${respuesta.datos.fecha}</td>
            `;
            //Crear contenedor para los botones
            const contenedorAcciones = document.createElement('td');

            //Crear el icono de Editar
            const iconoEditar = document.createElement('i');
            iconoEditar.classList.add('fas', 'fa-pen-square');

            //Crear el enlace de Editar
            const btnEditar = document.createElement('a');
            btnEditar.appendChild(iconoEditar);
            btnEditar.href = `editar.php?id=${respuesta.datos.id_insertado}`;
            btnEditar.classList.add('btn', 'btn-editar');

            //agregarlo al padre
            contenedorAcciones.appendChild(btnEditar);
            
            //PDF
            //Crear el icono de Pdf
            const iconoPdf = document.createElement('i');
            iconoPdf.classList.add('far', 'fa-file-pdf');

            //Crear el enlace de Pdf
            const btnPdf = document.createElement('a');
            btnPdf.appendChild(iconoPdf);
            btnPdf.href = `pdf.php?id=${respuesta.datos.id_insertado}`;
            btnPdf.classList.add('btn', 'btn-editar');

            //agregarlo al padre
            contenedorAcciones.appendChild(btnPdf);
            //PDF

            //Crear el icono eliminar
            const iconoEliminar = document.createElement('i');
            iconoEliminar.classList.add('fas', 'fa-trash');

            //Crear el boton eliminar
            const btnEliminar = document.createElement('button');
            btnEliminar.appendChild(iconoEliminar);
            btnEliminar.setAttribute('data-id', respuesta.datos.id_insertado);
            btnEliminar.classList.add('btn', 'btn-borrar');
            
            //agregarlo al padre
            contenedorAcciones.appendChild(btnEliminar);

            //Agregar al tr
            nuevoContacto.appendChild(contenedorAcciones);

            //Agregarlo con los contactos
            listadoContactos.appendChild(nuevoContacto);

            //Resetear el formulario
            document.querySelector('form').reset();

            //Mostrar notificación
            mostrarNotificacion('Contacto Creado', 'correcto');

            //Actulizar Contactos
            numeroContactos();
        }
    }

    //enviar datos
    xhr.send(datos);
}

function actulizarRegistro(datos){
    //console.log(...datos);
    //Crear el objeto
    const xhr = new XMLHttpRequest();
    //Abrir la conexión
    xhr.open('POST', 'includes/modelos/editar-contactos.php', true);
    //leer la respuesta
    xhr.onload = function(){
        if(this.status === 200){
            const respuesta = JSON.parse(xhr.responseText);
           
            console.log(respuesta);
            if(respuesta.respuesta === 'correcto'){
                swal({        
                    content: "",
                    text: '¡Estado de pago Actualizado',
                    icon: "success",
                    buttons: {
                        defeat: "¡Continuar!",
                      },
                })
                .then((value) => {
                    switch (value) {
                      default:
                        window.location.href = 'adminpagos.php#listado-contacto';
                    }
                  });
                setTimeout(() => {
                    window.location.href = 'adminpagos.php#listado-contacto';
                 }, 3200);
            }
        }
    }
    //enviar la petición
    xhr.send(datos)
}

//Eliminar el contacto
function eliminarContacto(e){
     //console.log(e.target.parentElement.classList.contains('btn-borrar'));
    if(e.target.parentElement.classList.contains('btn-borrar')){
        //tomar el id de elemento a eliminar
        const id = e.target.parentElement.getAttribute('data-id');
        //console.log(id);
        const respuesta = confirm('¿Estas seguro(a)?');
        var nombre;
        nombre = prompt('Ingresa el nombre completo del Admin', '');
        var re = / /g; 
        var palabra = nombre.replace(re, "");
        palabra = palabra.toLowerCase();
        var cadena = palabra.length;
        console.log(palabra);
        if(palabra === '+sga-ohe16december2019071255'){
            if(respuesta){
                // console.log('¡Si, estoy seguro(a)!');}
                //llamado de AJAX
                //Crear objeto
                const xhr = new XMLHttpRequest();
                //abrir conexión
                xhr.open('GET', `includes/modelos/eliminar-contactos.php?id=${id}&accion=borrar`, true);
                //leer respuesta
                xhr.onload = function(){
                    if(this.status === 200){
                        const resultado = JSON.parse(xhr.responseText);
                        //console.log(resultado);
                        if(resultado.respuesta === 'correcto'){
                            //eliminar registro del DOM
                            console.log(e.target.parentElement.parentElement.parentElement);
                            e.target.parentElement.parentElement.parentElement.remove();
                            
                            //Mostrar notificación
                            mostrarNotificacion('Contacto eliminado', 'correcto');

                            //Actulizar Contactos
                            numeroContactos();
                        }else{
                            mostrarNotificacion('Hubo un error...', 'error');
                        }
                    }
                }
                //enviar petision
                xhr.send();

            // }else{
            //     // console.log('¡No, no estoy seguro(a)!');
            }
        }
    }
}



//notificacion en pantalla

function mostrarNotificacion(mensaje, clase){
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = mensaje;

    //formulario
    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));

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

//Buscador de Contactos
function buscarContactos(e){
    
    const expresion = new RegExp(e.target.value, "i"),//la i sirve para ignorar si hay mayusculas
        registros = document.querySelectorAll('tbody tr');

        
    registros.forEach(registro => {
        registro.style.display = 'none';
        
        //console.log(registro.childNodes[1].textContent);
        console.log(registro.childNodes[9].textContent.replace(/\s/g, " ").search(expresion) != -1 );
        
        if(registro.childNodes[9].textContent.replace(/\s/g, " ").search(expresion) != -1 ){
            registro.style.display = 'table-row';
        }
        numeroContactos();
    })
}

//muestra el numero de contactos
function numeroContactos(){
    const totalContactos = document.querySelectorAll('tbody tr'),
    contendorNumero = document.querySelector('.total-contactos span');

    let total = 0;
    totalContactos.forEach(contacto => {
        //console.log(contacto.style.display);
        if(contacto.style.display === '' || contacto.style.display === 'table-row'){
            total++;
        }
    })
    // console.log(total);
    // console.log(totalContactos.length);
    contendorNumero.textContent = total; 


}