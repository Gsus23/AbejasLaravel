<!DOCTYPE html>
<?php

$host="127.0.0.1";
$username="BeeLab";
$password="abejas12345";
$database="beelab";

$conexion = new mysqli($host, $username, $password, $database);
if ($conexion -> connect_errno) {
    die("Falló la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion->mysqli_connect_error());
}

?>
 <?php
 function funcionConsulta($valueTemp){
                
                $sql="SELECT c.id,c.temperatura,a.id,a.entrada,c.apiario_id,a.apiario_id
                    FROM clima_ambiente c 
                    INNER JOIN actividad a ON a.apiario_id=c.apiario_id
                    WHERE c.temperatura=$valueTemp";    
                $result=mysqli_query($conexion,$sql);
                
                while($consulta1=mysqli_fetch_array($result))
                {    
                    $consulta1[entrada];
                }
                echo $consulta1;
 }
?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stadistics</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/base.css" type="text/css">
        <link rel="stylesheet" href="css/statistics.css" type="text/css">
         
        <script src="plugins/highcharts/code/highcharts.js"></script>
        <script src="plugins/highcharts/code/modules/series-label.js"></script>
        <script src="plugins/highcharts/code/modules/exporting.js"></script>
        <script src="plugins/highcharts/code/modules/export-data.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="izq">
                <h3>Bee Lab - statistics</h3>
            </div>
            <div class="der">
                @if (Route::has('login'))
                <div class="top-left links">
                    <a href="{{ url('/home') }}" class="boton-header">Home</a>
                    <a href="{{ url('/logout') }}" class="boton-header" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
                @endif
            </div>
        
    </header>

    <div class="barra">
        <nav id="nav" class="navegacion-principal contenedor">
            <a href="{{ url('/reports') }}">Reports</a>
            <a href="{{ url('/estimates') }}">Estimate</a>
            <a href="{{ url('/analysis') }}">Analysis</a>
            <a href="{{ url('/help') }}">Help</a>
        </nav>
    </div>

    <div class="top-left">
        <div class="content">
            <div class="title m-b-md">
                Statistics
            </div>
        </div>
    </div>

    <main>
    <div class="recopilacion">
        
        <fieldset class="datos-basicos" >
            <legend>Basic data</legend>
            
            <form id="formulario">
            <label name="temperatura">Temperature</label>
            <br>    
            <input type="text" name="temperatura" id="temperatura" placeholder="Example: 30" required="required">
            <br> <br>
            <label name="humedad">Humidity</label>
            <br>    
            <input type="text" name="humedad" id="humedad" placeholder="Example: 30" required="required">
            <br> <br>
            <label name="temperatura-apiario">Apiary temperature</label>
            <br>    
            <input type="text" name="temperatura_apiario" id="apiario" placeholder="Example: 30" required="required">
            <br> <br>
            <br>    
            <input type="submit" onclick="verOcultar()" value="Ver">
            <br> <br>
            </form>
            
            
            
        </fieldset>
      
        <a href="#" class="boton">Export all</a>
    </div>
    
    

    <div class="estadisticas">

        <div id="container" ></div>

		<script type="text/javascript" id="grafica">

                
                function verOcultar(){
                    
                    //document.getElementById('container').style.visibility='hidden';
                    var form = document.getElementById('formulario');
                    
                                     

                    formulario.addEventListener('submit', function(e){
                        e.preventDefault()
                        var temp = document.getElementById("temperatura").value;
                        var hum = document.getElementById("humedad").value;
                        var tempAp = document.getElementById("apiario").value;



                         if (temp > 0 ) {

                    Highcharts.chart('container', {

                        title: {
                            text: 'Temperature'
                        },

            

                        yAxis: {
                            Categories:[

                            echo funcionConsulta(temp)
                            ]
                        },

                        xAxis: {
                            
                             minPadding: 0.05,
                             maxPadding: 0.05

                        },
                        legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'middle'
                        },

                        plotOptions: {
                            series: {
                                label: {
                                    connectorAllowed: false
                                },
                                pointStart: 0
                            }
                        },

                        series: [{
                            name: 'Temperature',
                            data: [
                            
                              echo funcionConsulta(temp)
                            ]

                        }],

                        responsive: {
                            rules: [{
                                condition: {
                                    maxWidth: 500
                                },
                                chartOptions: {
                                    legend: {
                                        enabled: false
                                    }
                                }
                            }]
                        }
                    }); 
                    } 
                        

                     });            
                }
        
                </script>
            </div> 
        </main>
        <script type="text/javascript"></script>
    </body>
</html>
