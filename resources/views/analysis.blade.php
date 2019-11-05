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
            <form action="{{url('/Analysis')}}" method="POST" >

            <div class="contenedor-datos">
                <fieldset>
                    <legend class="ayuda-legend">Buscar fecha y graficar</legend>
                    <br>
                    <div id="fechaContenedor" >
                        <label class="fecha" for="fecha">Fecha:</label>
                        <input class="fecha" name="fecha_ingresada" id="fecha_ingresada" type="date">
                        <br><br>
                        <button type="submit" id="boton_general" class="boton-general">Ver gráfica</button>
                        <br>
                    </div>

                </fieldset>
                <br><br>
                <div class="comentario">
                <fieldset>
                    <legend class="ayuda-legend">Agregar comentario</legend>
                    <br>
                        <form>
                            <div class="com-izq">
                                <textarea rows="10" cols="40" disabled="true"></textarea> 
                                <br><br>                   
                            </div>          
                            <div class="com-der">
                                <button id="Agregar" type="submit" class="boton-general ">Agregar</button>
                                <br><br>
                            </div>
                        </form>
                </fieldset>
                
        </div>   
            </div>
           
                <div id="container" class="grafica">
                    <script type="text/javascript">

                                                 

                              
                    </script>            
                </div>
            </form>
        </div>            
    </main>
   
    <footer>
        
    </footer>
        
    </body>
</html>
