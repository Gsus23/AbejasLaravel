<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ayudas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/help.css" type="text/css">   
        <link rel="stylesheet" href="css/base.css" type="text/css">
    </head>
    <body>
        <header>
            <div class="izq">
                <h3 class="titulo">Bee Lab - Ayudas</h3>
            </div>
            <div class="der">
                @if (Route::has('login'))
                <div class="top-left links">
                    <a href="{{ url('/home') }}" class="boton-header">Inicio</a>
                    <a href="{{ url('/logout') }}"  class="boton-header" onclick="event.preventDefault();
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
                Ayudas

                <script type="text/javascript">
                     Highcharts.chart('container', {
                                    title: {
                                        text: 'Análisis estadístico de actividad'
                                    },
                                    xAxis: {
                                        categories: ['12 am - 6 am', '6 am - 12 pm', '12 pm - 6 pm', '6 pm - 12 am']
                                    },
                                    labels: {
                                        items: [{
                                            html: 'Total actividad',
                                            style: {
                                                left: '70px',
                                                top: '0px',
                                                color: ( // theme
                                                    Highcharts.defaultOptions.title.style &&
                                                    Highcharts.defaultOptions.title.style.color
                                                ) || 'black'
                                            }
                                        }]
                                    },
                                    series: [{
                                        type: 'column',
                                        name: 'Temperatura ambiente',
                                        data: [3, 2, 1, 3]
                                    }, {
                                        type: 'column',
                                        name: 'Humedad',
                                        data: [2, 3, 5, 7]
                                    }, {
                                        type: 'column',
                                        name: 'Temperatura colmena',
                                        data: [4, 3, 3, 9]
                                    }, {
                                        type: 'spline',
                                        name: 'Promedio',
                                        data: [3, 2.67, 3, 6.33],
                                        marker: {
                                            lineWidth: 2,
                                            lineColor: Highcharts.getOptions().colors[3],
                                            fillColor: 'white'
                                        }
                                    }, {
                                        type: 'pie',
                                        name: 'Total',
                                        data: [{
                                            name: 'Temperatura ambiente',
                                            y: 13,
                                            color: Highcharts.getOptions().colors[0] // Jane's color
                                        }, {
                                            name: 'Humedad',
                                            y: 23,
                                            color: Highcharts.getOptions().colors[1] // John's color
                                        }, {
                                            name: 'Temperatura colmena',
                                            y: 19,
                                            color: Highcharts.getOptions().colors[2] // Joe's color
                                        }],
                                        center: [100, 50],
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
    </div>

    <main>
    </main>
        
    </body>
</html>
