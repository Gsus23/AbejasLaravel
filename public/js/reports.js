import(controller);
$(document).ready(inicializar);

function inicializar(){
     $("#boton_general").click(generarReporteGeneral);
     $("#boton_hora_1").click(generarReporte);
     $("#boton_hora_2").click(generarReporte);
     $("#boton_hora_3").click(generarReporte);
     $("#boton_hora_$").click(generarReporte);
}

function generarReporte(){
    var texto = $("#fecha_ingresada").val();
    alert(texto);
}

function generarReporteGeneral(){
    var texto = $("#fecha_ingresada").val();
    alert(texto);
}
