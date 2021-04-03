const comboHimnario = document.getElementById('cmb-himnario')
const contenidoCancion = document.getElementById('modal-contenido-cancion')
const tablaCanciones = document.getElementById('lista-canciones')
const overlayCargando = document.getElementById('overlay-cargando')
const btnNuevaCancion = document.getElementById('btn-nueva-cancion')
const btnGuardarCancion = document.getElementById('btn-guardar-cancion')
const btnModificarCancion = document.getElementById('btn-modificar-cancion')
const formDatosCancion = document.getElementById('form-datos-cancion')
const alertRespuesta = document.getElementById('alert-form-respuesta')
const btnCerrarForm = document.getElementById('btn-cerrar-modal-form')

const seleccionHimnario = () => {
    const himnario = comboHimnario.options[comboHimnario.selectedIndex].value
    cargarCanciones(himnario)
    if(himnario == 0) {
        btnNuevaCancion.classList.add('d-none')
    } else {
        btnNuevaCancion.classList.remove('d-none')
    }
}

const cargarCanciones = (himnario) => {
    $.ajax({
        data: "him=" + himnario,
        url: '../cancionero/tabla-canciones.php',
        type: 'post',
        beforeSend: function() {
            overlayCargando.classList.remove('d-none')
        },
        success: function(respuesta) {
            $(tablaCanciones).html(respuesta)
            overlayCargando.classList.add('d-none')
        },
        error: function() {
            $(tablaCanciones).html('Vuelva a intentar')
            overlayCargando.classList.add('d-none')
        }
    })
}

comboHimnario.addEventListener('change', seleccionHimnario)

btnNuevaCancion.addEventListener('click', () => {
    document.getElementById('exampleModalLabel2').innerHTML = 'Nueva cancion - ' + comboHimnario.options[comboHimnario.selectedIndex].text
    const himnario = comboHimnario.options[comboHimnario.selectedIndex].value
    $('#txthimnarioform').val(himnario)
    $.ajax({
        data: 'him=' + himnario,
        url: 'ultimaCancion.php',
        type: 'post',
        beforeSend: function() {
            //
        },
        success: function(respuesta) {
            if (respuesta == 'false') {
                //No se encontro
            } else {
                let ultimo = parseInt(respuesta)
                $('#txtnumerocancion').val(ultimo + 1)
                if(himnario === '1') {
                    $('#txtautorcancion').val('Diosman taquinachej')
                }
            }
        },
        error: function() {
            //
        }
    })
})

btnGuardarCancion.addEventListener('click', () => {
    $.ajax({
        data: $(formDatosCancion).serialize(),
        url: 'addCancion.php',
        type: 'post',
        beforeSend: function() {
            overlayCargando.classList.remove('d-none')
        },
        success: function(respuesta) {
            formDatosCancion.classList.add('was-validated')
            alertRespuesta.classList.remove('d-none')
            if(respuesta == 'correcto') {
                btnGuardarCancion.setAttribute('disabled', 'disabled')
                alertRespuesta.classList.replace('alert-danger', 'alert-success')
                alertRespuesta.innerHTML = 'Correctamente guardado'
                const himnario = comboHimnario.options[comboHimnario.selectedIndex].value
                cargarCanciones(himnario)
            } else {
                if(respuesta == 'existe') {
                    alertRespuesta.classList.replace('alert-success', 'alert-danger')
                    alertRespuesta.innerHTML = 'Numero ' + $('#txtnumerocancion').val() + ' está en uso'
                    $('#txtnumerocancion').val('')
                } else {
                    alertRespuesta.classList.replace('alert-success', 'alert-danger')
                    alertRespuesta.innerHTML = 'Complete los campos vacios'
                }
            }
            overlayCargando.classList.add('d-none')
        },
        error: function() {
            alertRespuesta.classList.replace('alert-success', 'alert-danger')
            alertRespuesta.innerHTML = 'Error en la conexion a la base de datos, vuelva a intentar'
            overlayCargando.classList.add('d-none')
        }
    })
})
btnModificarCancion.addEventListener('click', () => {
    $.ajax({
        data: $(formDatosCancion).serialize(),
        url: 'modCancion.php',
        type: 'post',
        beforeSend: function() {
            overlayCargando.classList.remove('d-none')
        },
        success: function(respuesta) {
            formDatosCancion.classList.add('was-validated')
            alertRespuesta.classList.remove('d-none')
            if(respuesta) {
                alertRespuesta.classList.replace('alert-danger', 'alert-success')
                alertRespuesta.innerHTML = 'Correctamente guardado'
                const himnario = comboHimnario.options[comboHimnario.selectedIndex].value
                cargarCanciones(himnario)
            } else {
                alertRespuesta.classList.replace('alert-success', 'alert-danger')
                alertRespuesta.innerHTML = 'Complete los campos vacios'
            }
            overlayCargando.classList.add('d-none')
        },
        error: function() {
            alertRespuesta.classList.replace('alert-success', 'alert-danger')
            alertRespuesta.innerHTML = 'Error en la conexion a la base de datos, vuelva a intentar'
            overlayCargando.classList.add('d-none')
        }
    })
})
btnCerrarForm.addEventListener('click', () => {
    btnGuardarCancion.removeAttribute('disabled')
    formDatosCancion.classList.remove('was-validated')
    alertRespuesta.classList.add('d-none')
    formDatosCancion.reset()
    swBoton(btnGuardarCancion, btnModificarCancion, false)
})



const spinnerBuscando = '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>'

function mostrarCancion(id, him) {
    const secLetra = document.getElementById('modal-mostrar-letra')
    const secTitulo = document.getElementById('staticBackdropLabel')
    $.ajax({
        data: 'id=' + id + '&him=' + him,
        url: '../cancionero/datos-cancion.php',
        type: 'post',
        beforeSend: function() {
            secTitulo.innerHTML = 'Espere...'
            secLetra.innerHTML = spinnerBuscando
        },
        success: function(respuesta) {
            contenidoCancion.innerHTML = respuesta
        },
        error: function() {
            secLetra.innerHTML = "No se pudo obtener los datos requeridos, vuelve a intentar"
        }
    })
}
function cargarDatosCancion(id, him) {
    swBoton(btnGuardarCancion, btnModificarCancion, true)
    document.getElementById('exampleModalLabel2').innerHTML = 'Modificar cancion'
    $('#txthimnarioform').val(him)
    $.ajax({
        data: 'id=' + id + '&him=' + him,
        url: '../cancionero/getdatos-cancion.php',
        type: 'post',
        beforeSend: function() {
            //
        },
        success: function(respuesta) {
            data = JSON.parse(respuesta)
            $('#txtnumerocancion').val(data.idcancion)
            $('#txttitulocancion').val(data.titulo)
            $('#txtautorcancion').val(data.autor)
            $('#txtnotacancion').val(data.nota)
            $('#txtletracancion').val(data.letra)
            $('#txtenlacecancion').val(data.enlace)
        },
        error: function() {
            //
        }
    })
}

function swBoton(btnAdd, btnMod, sw) {
    if(sw) {
        btnMod.classList.remove('d-none')
        btnAdd.classList.add('d-none')
        $('#txtnumerocancion').attr('readonly', 'readonly')
    } else {
        btnMod.classList.add('d-none')
        btnAdd.classList.remove('d-none')
        $('#txtnumerocancion').attr('readonly', false)
    }
}
