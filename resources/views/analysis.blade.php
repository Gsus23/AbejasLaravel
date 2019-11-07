<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Analysis</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/base.css" type="text/css">
        <link rel="stylesheet" href="css/analisis.css" type="text/css">
         
        <script src="plugins/highcharts/code/highcharts.js"></script>
        <script src="plugins/highcharts/code/modules/series-label.js"></script>
        <script src="plugins/highcharts/code/modules/exporting.js"></script>
        <script src="plugins/highcharts/code/modules/export-data.js"></script>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

                 
    </head>
    <body>
        <header>
            <div class="izq">
                <h3>Bee Lab - Analisis</h3>
            </div>
            <div class="der">
                @if (Route::has('login'))
                <div class="top-left links">
                    <a href="{{ url('/home') }}" class="boton-header">Inicio</a>
                    <a href="{{ url('/logout') }}" class="boton-header" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Salir
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
            <a href="{{ url('/reports') }}">Reportes</a>
            <a href="{{ url('/statistics') }}">Estadisticas</a>
            <a href="{{ url('/estimates') }}">Estimaciones</a>
            <a href="{{ url('/analysis') }}">Analisis</a>
            <a href="{{ url('/help') }}">Ayudas</a>
        </nav>
    </div>

    <div class="top-left">
        <div class="content">
            <div class="title m-b-md">
                Analisis
            </div>
        </div>
    </div>

    <main>
        <div class="contenedor-principal">
            <form action="">

            <div class="contenedor-datos">
                <fieldset >
                    <legend class="ayuda-legend">Datos</legend>
                    <div id="fechaContenedor" >
                        <label class="fecha" for="fecha">Fecha:</label>
                        <input class="fecha" name="fecha_ingresada" id="fecha_ingresada" type="date">
                        <br><br>

                        <button type="submit"id="boton_general" class="boton-general">Ver gráfica</button>
                    </div>
                </fieldset>    
            </div>
            <div class="grafica">
                .
                <div id="container" >
                    <script type="text/javascript">
                            Highcharts.chart('container', {
                                title: {
                                    text: 'Combination chart'
                                },
                                xAxis: {
                                    categories: ['Apples', 'Oranges', 'Pears', 'Bananas', 'Plums']
                                },
                                labels: {
                                    items: [{
                                        html: 'Total fruit consumption',
                                        style: {
                                            left: '50px',
                                            top: '18px',
                                            color: ( // theme
                                                Highcharts.defaultOptions.title.style &&
                                                Highcharts.defaultOptions.title.style.color
                                            ) || 'black'
                                        }
                                    }]
                                },
                                series: [{
                                    type: 'column',
                                    name: 'Jane',
                                    data: [3, 2, 1, 3, 4]
                                }, {
                                    type: 'column',
                                    name: 'John',
                                    data: [2, 3, 5, 7, 6]
                                }, {
                                    type: 'column',
                                    name: 'Joe',
                                    data: [4, 3, 3, 9, 0]
                                }, {
                                    type: 'spline',
                                    name: 'Average',
                                    data: [3, 2.67, 3, 6.33, 3.33],
                                    marker: {
                                        lineWidth: 2,
                                        lineColor: Highcharts.getOptions().colors[3],
                                        fillColor: 'white'
                                    }
                                }, {
                                    type: 'pie',
                                    name: 'Total consumption',
                                    data: [{
                                        name: 'Jane',
                                        y: 13,
                                        color: Highcharts.getOptions().colors[0] // Jane's color
                                    }, {
                                        name: 'John',
                                        y: 23,
                                        color: Highcharts.getOptions().colors[1] // John's color
                                    }, {
                                        name: 'Joe',
                                        y: 19,
                                        color: Highcharts.getOptions().colors[2] // Joe's color
                                    }],
                                    center: [100, 80],
                                    size: 100,
                                    showInLegend: false,
                                    dataLabels: {
                                        enabled: false
                                    }
                                }]
                            });
                    </script>            
                </div>
            </div>
            </form>
        </div>

        <div class="comentario">
            <form>
                <h2 class="text-com">Comentarios</h2>
                <br><br>
                <div class="com-izq">
                    <textarea rows="10" cols="50"></textarea>                     
                </div>          
                <div class="com-der">
                    <button id="Agregar" type="submit" class="boton-real">Agregar comentario</button>
                </div>
            </form>
        </div>
            
    </main>
   
    <footer>
        
    </footer>
        
    </body>
</html>
