function mostrar() {
    var nombre= document.getElementById('txtnombre').value
    var apellido= document.getElementById('txtapellido').value
    var correo= document.getElementById('txtcorreo').value
    var cancha= document.getElementById('cancha').value
    var horario= document.getElementById('horario').value
    var precio= document.getElementById('precio').value
    alert("La Cotizacion para "+nombre+" "+apellido+" es en la cancha "+cancha+" con horario "+horario+" y tiene un precio de "+precio+" se envia cotizacion al correo "+correo)
    document.getElementById('respuesta').innerHTML="La Cotizacion para "+nombre+" "+apellido+" es en la cancha "+cancha+" con horario "+horario+" y tiene un precio de "+precio+" se envia cotizacion al correo "+correo
    console.log("La Cotizacion para "+nombre+" "+apellido+" es en la cancha "+cancha+" con horario "+horario+" y tiene un precio de "+precio+" se envia cotizacion al correo "+correo)
}
