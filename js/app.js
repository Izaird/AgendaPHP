const formularioContactos = document.querySelector('#contacto');


eventListeners();

function eventListeners() {
    //Cuando el formulario de crear o editar se ejectuta 

    formularioContactos.addEventListener('submit', leerFormulario)


}


function leerFormulario(e) {
    e.preventDefault();
    //Leer los datos de los inputs
    const 
        nombre = document.querySelector('#nombre').value,
        empresa = document.querySelector('#empresa').value,
        telefono = document.querySelector('#telefono').value,
        accion = document.querySelector('#accion').value;

    if (nombre === '' || empresa === '' || telefono === '') {

        //dosparametros TEXTO y Clase
        mostarNotificacion('Todos los campos son obligatorios', 'error');
        
        
    } else {

        //pasa la validacion, crear llamado a AJAX
        const infoContactos = new FormData();
        infoContactos.append('nombre', nombre);
        infoContactos.append('empresa', empresa);
        infoContactos.append('telefono', telefono);
        infoContactos.append('accion', accion);
        // console.log(...infoContactos);

        if (accion === 'crear') {
            //Crearemos un nuevo contacto
            insertarBD(infoContactos);
        }

        else{
            // editar el contacto
        }
        
    }
}
// Inserta en la base de datos via AJAX
function insertarBD(datos){

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    //Llamado a AJAX
    ///////////////////////////////////////////////////////////////////////////////////////////////////////


    //Crear el objeto 
    const xhr = new XMLHttpRequest();

    //Abrir la conexcion
    xhr.open('POST', 'inc/modelos/modelos_contactos.php', true);

    //Pasar los datos 
    xhr.onload = function(){
        if (this.status === 200) {
           
            //Leemos la respuesta de PHP

            const respuesta = JSON.parse(this.responseText);
            console.log(respuesta);
        }

    }

    //Enviar los datos 
    xhr.send(datos);
}

//Notificacion en pantalla 
function mostarNotificacion(mensaje, clase) {
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = mensaje;


    //formulario

    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));


    //ocultar y mostrar la notificacion

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