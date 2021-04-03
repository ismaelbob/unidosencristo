const comboMes = document.getElementById('cmb-mes')
const tablaEnero = document.getElementById('tabla-enero')
const tablaFebrero = document.getElementById('tabla-febrero')


const cambiarTabla = () => {
    const opcionSeleccionado = comboMes.options[comboMes.selectedIndex].value
    if(opcionSeleccionado == '1') {
        tablaEnero.hidden()
        tablaFebrero.visible()
    }
    if(opcionSeleccionado == 2) {
        
    }
}
comboMes.addEventListener('change', () => cambiarTabla())