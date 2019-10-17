import(controller);
$(document).ready(inicializar);

function inicializar(){
     $("#boton_general").click(generarReporteGeneral);
     $("#boton_hora_1").click(generarReporte_1);
     $("#boton_hora_2").click(generarReporte_2);
     $("#boton_hora_3").click(generarReporte_3);
     $("#boton_hora_$").click(generarReporte_4);
}

function generarReporte_1(){
    $hora = '12am - 6am';
}
function generarReporte_2(){
    
}
function generarReporte_3(){
    var texto = $("#fecha_ingresada").val();
    texto
}

function generarReporte_4(){
    var texto = $("#fecha_ingresada").val();
    texto
}

function generarReporteGeneral(){
    var texto = $("#fecha_ingresada").val();
    alert(texto);
}
